<?php
/*
* ffmpeg.php
* A barebones ffmpeg based webm implementation for vichan.
*/
function get_webm_info($filename, $format) {
  global $board, $config;
  $filename = escapeshellarg($filename);
  $ffprobe = $config['webm']['ffprobe_path'];
  $ffprobe_out = array();
  $webminfo = array();
  exec("$ffprobe -v quiet -print_format json -show_format -show_streams $filename", $ffprobe_out);
  $ffprobe_out = json_decode(implode("\n", $ffprobe_out), 1);
  if (empty($ffprobe_out)) {
    $webminfo['error'] = array('code' => 1, 'msg' => $config['error']['genwebmerror']);
    return $webminfo;
  }
  $video_stream = find_video_stream($ffprobe_out);
  $webminfo['error'] = is_valid_webm($ffprobe_out, $video_stream, $format);
  if(empty($webminfo['error'])) {
    $webminfo['width'] = $video_stream['width'];
    $webminfo['height'] = $video_stream['height'];
    $webminfo['duration'] = $ffprobe_out['format']['duration'];
    $webminfo['format'] = $format;
    $webminfo['video_codec'] = isset($video_stream['codec_name']) ? $video_stream['codec_name'] : null;
  }
  return $webminfo;
}
function find_video_stream($ffprobe_out) {
  foreach ($ffprobe_out['streams'] as $stream) {
    if ($stream['codec_type'] === 'video')
      return $stream;
  }
}
function is_valid_webm($ffprobe_out, $video_stream, $format) {
  global $board, $config;
  if (!in_array($format, explode(",", $ffprobe_out['format']['format_name'])))
    return array('code' => 2, 'msg' => $config['error']['invalidwebm']);
  if ((count($ffprobe_out['streams']) > 1) && (!$config['webm']['allow_audio']))
    return array('code' => 3, 'msg' => $config['error']['webmhasaudio']);
  if (empty($video_stream) || empty($video_stream['width']) || (empty($video_stream['height'])))
    return array('code' => 2, 'msg' => $config['error']['invalidwebm']);
  if ($ffprobe_out['format']['duration'] > $config['webm']['max_length'])
    return array('code' => 4, 'msg' => sprintf($config['error']['webmtoolong'], $config['webm']['max_length']));
}
function make_webm_thumbnail($filename, $thumbnail, $width, $height, $webm_info) {
  global $board, $config;
  $filename = escapeshellarg($filename);
  $thumbnailfc = escapeshellarg($thumbnail); // Should be safe by default but you
                                           // can never be too safe.
  $width = escapeshellarg($width);
  $height = escapeshellarg($height);
  $format = escapeshellarg($webm_info['format']);
  $video_codec = escapeshellarg($webm_info['video_codec']); // Same as above.
  $time = floor($webm_info['duration'] / 2);
  $ffmpeg = $config['webm']['ffmpeg_path'];
  $ret = 0;
  $ffmpeg_out = array();
  exec("$ffmpeg -strict -2 -ss $time -f $format -c:v $video_codec -i $filename -v quiet -an -vframes 1 -f mjpeg -vf scale=$width:$height $thumbnailfc 2>&1", $ffmpeg_out, $ret);
  // Work around for https://trac.ffmpeg.org/ticket/4362
  if (filesize($thumbnail) === 0) {
    // try again with first frame
    exec("$ffmpeg -y -strict -2 -ss 0 -f $format -c:v $video_codec -i $filename -v quiet -an -vframes 1 -f mjpeg -vf scale=$width:$height $thumbnailfc 2>&1", $ffmpeg_out, $ret);
    clearstatcache();
    // failed if no thumbnail size even if ret code 0, ffmpeg is buggy
    if (filesize($thumbnail) === 0) {
      $ret = 1;
    }
  }
  return $ret;
}
