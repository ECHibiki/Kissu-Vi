<?php

/*
 *  Copyright (c) 2010-2013 Tinyboard Development Group
 */

defined('TINYBOARD') or exit;

class Image {
	public $src, $format, $image, $size;
	public function __construct($src, $format = false, $size = false) {
		global $config;
		
		$this->src = $src;
		$this->format = $format;

		if ($config['thumb_method'] == 'imagick') {
			$classname = 'ImageImagick';
		} elseif (in_array($config['thumb_method'], array('convert', 'convert+gifsicle', 'gm', 'gm+gifsicle'))) {
			$classname = 'ImageConvert';
		} else {
			$classname = 'Image' . strtoupper($this->format);
			if (!class_exists($classname)) {
				error(_('Unsupported file format: ') . $this->format);
			}
		}
		
		$this->image = new $classname($this, $size);

		if (!$this->image->valid()) {
			$this->delete();
			error($config['error']['invalidimg']);
		}
		
		$this->size = (object)array('width' => $this->image->_width(), 'height' => $this->image->_height());
		if ($this->size->width < 1 || $this->size->height < 1) {
			$this->delete();
			error($config['error']['invalidimg']);
		}
	}
	
	public function resize($extension, $max_width, $max_height) {
		global $config;

		if ($config['thumb_method'] == 'imagick') {
			$classname = 'ImageImagick';
		} elseif ($config['thumb_method'] == 'convert') {
			$classname = 'ImageConvert';
		} elseif ($config['thumb_method'] == 'convert+gifsicle') {
			$classname = 'ImageConvert';
			$gifsicle = true;
		} elseif ($config['thumb_method'] == 'gm') {
			$classname = 'ImageConvert';
			$gm = true;
		} elseif ($config['thumb_method'] == 'gm+gifsicle') {
			$classname = 'ImageConvert';
			$gm = true;
			$gifsicle = true;
		} else {
			$classname = 'Image' . strtoupper($extension);
			if (!class_exists($classname)) {
				error(_('Unsupported file format: ') . $extension);
			}
		}
		
		$thumb = new $classname(false);
		$thumb->src = $this->src;
		$thumb->format = $this->format;
		$thumb->original_width = $this->size->width;
		$thumb->original_height = $this->size->height;
		
		$x_ratio = $max_width / $this->size->width;
		$y_ratio = $max_height / $this->size->height;
		
		if (($this->size->width <= $max_width) && ($this->size->height <= $max_height)) {
			$width = $this->size->width;
			$height = $this->size->height;
		} elseif (($x_ratio * $this->size->height) < $max_height) {
			$height = ceil($x_ratio * $this->size->height);
			$width = $max_width;
		} else {
			$width = ceil($y_ratio * $this->size->width);
			$height = $max_height;
		}
		
		$thumb->_resize($this->image->image, $width, $height);
				
		return $thumb;
	}
	
	public function to($dst) {
		$this->image->to($dst);
	}
	
	public function delete() {
		file_unlink($this->src);
	}
	public function destroy() {
		$this->image->_destroy();
	}
}

class ImageGD {
	public function GD_create() {
		$this->image = imagecreatetruecolor($this->width, $this->height);
	}
	public function GD_copyresampled() {
		imagecopyresampled($this->image, $this->original, 0, 0, 0, 0, $this->width, $this->height, $this->original_width, $this->original_height);
	}
	public function GD_resize() {
		$this->GD_create();
		$this->GD_copyresampled();
	}
}

class ImageBase extends ImageGD {
	public $image, $src, $original, $original_width, $original_height, $width, $height;		
	public function valid() {
		return (bool)$this->image;
	}
	
	public function __construct($img, $size = false) {
		if (method_exists($this, 'init'))
			$this->init();
		
		if ($size && $size[0] > 0 && $size[1] > 0) {
			$this->width = $size[0];
			$this->height = $size[1];
		}
		
		if ($img !== false) {
			$this->src = $img->src;
			$this->from();
		}
	}
	
	public function _width() {
		if (method_exists($this, 'width'))
			return $this->width();
		// use default GD functions
		return imagesx($this->image);
	}
	public function _height() {
		if (method_exists($this, 'height'))
			return $this->height();
		// use default GD functions
		return imagesy($this->image);
	}
	public function _destroy() {
		if (method_exists($this, 'destroy'))
			return $this->destroy();
		// use default GD functions
		return imagedestroy($this->image);
	}
	public function _resize($original, $width, $height) {
		$this->original = &$original;
		$this->width = $width;
		$this->height = $height;
		
		if (method_exists($this, 'resize'))
			$this->resize();
		else
			// use default GD functions
			$this->GD_resize();
	}
}

class ImageImagick extends ImageBase {
	public function init() {
		$this->image = new Imagick();
		$this->image->setBackgroundColor(new ImagickPixel('transparent'));
	}
	public function from() {
		try {
			$this->image->readImage($this->src);
		} catch(ImagickException $e) {
			// invalid image
			$this->image = false;
		}
	}
	public function to($src) {
		global $config;
		if ($config['strip_exif']) {
			$this->image->stripImage();
		}
		if (preg_match('/\.gif$/i', $src))
			$this->image->writeImages($src, true);
		else
			$this->image->writeImage($src);
	}
	public function width() {
		return $this->image->getImageWidth();
	}
	public function height() {
		return $this->image->getImageHeight();
	}
	public function destroy() {
		return $this->image->destroy();
	}
	public function resize() {
		global $config;
		
		if ($this->format == 'gif' && ($config['thumb_ext'] == 'gif' || $config['thumb_ext'] == '')) {
			$this->image = new Imagick();
			$this->image->setFormat('gif');
			
			$keep_frames = array();
			for ($i = 0; $i < $this->original->getNumberImages(); $i += floor($this->original->getNumberImages() / $config['thumb_keep_animation_frames']))
				$keep_frames[] = $i;
			
			$i = 0;
			$delay = 0;
			foreach ($this->original as $frame) {
				$delay += $frame->getImageDelay();
				
				if (in_array($i, $keep_frames)) {
					// $frame->scaleImage($this->width, $this->height, false);
					$frame->sampleImage($this->width, $this->height);
					$frame->setImagePage($this->width, $this->height, 0, 0);
					$frame->setImageDelay($delay);
					$delay = 0;
					
					$this->image->addImage($frame->getImage());
				}
				$i++;
			}		
		} else {
			$this->image = clone $this->original;
			$this->image->scaleImage($this->width, $this->height, false);
		}
	}
}


class ImageConvert extends ImageBase {
	public $width, $height, $temp, $gm = false, $gifsicle = false;
	
	public function init() {
		global $config;
		
		if ($config['thumb_method'] == 'gm' || $config['thumb_method'] == 'gm+gifsicle')
			$this->gm = true;
		if ($config['thumb_method'] == 'convert+gifsicle' || $config['thumb_method'] == 'gm+gifsicle')
			$this->gifsicle = true;
		
		$this->temp = false;
	}
	public function get_size($src, $try_gd_first = true) {
		if ($try_gd_first) {
			if ($size = @getimagesize($src))
				return $size;
		}
		$size = shell_exec_error(($this->gm ? 'gm ' : '') . 'identify -format "%w %h" ' . escapeshellarg($src . '[0]'));
		if (preg_match('/^(\d+) (\d+)$/', $size, $m))
			return array($m[1], $m[2]);
		return false;
	}
	public function from() {
		if ($this->width > 0 && $this->height > 0) {
			$this->image = true;
			return;
		}
		$size = $this->get_size($this->src, false);
		if ($size) {
			$this->width = $size[0];
			$this->height = $size[1];
			
			$this->image = true;
		} else {
			// mark as invalid
			$this->image = false;
		}
	}
	public function to($src) {
		global $config;
		
		if (!$this->temp) {
			if ($config['strip_exif']) {
				if($error = shell_exec_error(($this->gm ? 'gm ' : '') . 'convert ' .
						escapeshellarg($this->src) . ' -auto-orient -strip ' . escapeshellarg($src))) {
					$this->destroy();
					error(_('Failed to redraw image!'), null, $error);
				}
			} else {
				if($error = shell_exec_error(($this->gm ? 'gm ' : '') . 'convert ' .
						escapeshellarg($this->src) . ' -auto-orient ' . escapeshellarg($src))) {
					$this->destroy();
					error(_('Failed to redraw image!'), null, $error);
				}
			}
		} else {
			rename($this->temp, $src);
			chmod($src, 0664);
		}
	}
	public function width() {
		return $this->width;
	}
	public function height() {
		return $this->height;
	}
	public function destroy() {
		@unlink($this->temp);
		$this->temp = false;
	}
	public function resize() {
		global $config;
		
		if ($this->temp) {
			// remove old
			$this->destroy();
		}
		
		$this->temp = tempnam($config['tmp'], 'convert');
				
		$config['thumb_keep_animation_frames'] = (int)$config['thumb_keep_animation_frames'];
		
		if ($this->format == 'gif' && ($config['thumb_ext'] == 'gif' || $config['thumb_ext'] == '') && $config['thumb_keep_animation_frames'] > 1) {
			if ($this->gifsicle) {
				if (($error = shell_exec("gifsicle -w --unoptimize -O2 --resize {$this->width}x{$this->height} < " .
						escapeshellarg($this->src . '') . " \"#0-{$config['thumb_keep_animation_frames']}\" -o " .
						escapeshellarg($this->temp))) || !file_exists($this->temp)) {
					$this->destroy();
					error(_('Failed to resize image!A'), null, $error);
				}
			} else {
				if ($config['convert_manual_orient'] && ($this->format == 'jpg' || $this->format == 'jpeg'))
					$convert_args = str_replace('-auto-orient', ImageConvert::jpeg_exif_orientation($this->src), $config['convert_args']);
				elseif ($config['convert_manual_orient'])
					$convert_args = str_replace('-auto-orient', '', $config['convert_args']);
				else
					$convert_args = &$config['convert_args'];

				if (($error = shell_exec_error(($this->gm ? 'gm ' : '') . 'convert ' .
					sprintf($convert_args,
						$this->width,
						$this->height,
						escapeshellarg($this->src),
						$this->width,
						$this->height,
						escapeshellarg($this->temp)))) || !file_exists($this->temp)) {
					$this->destroy();
					error(_('Failed to resize image!B'), null, $error);
				}
				if ($size = $this->get_size($this->temp)) {
					$this->width = $size[0];
					$this->height = $size[1];
				}
			}
		} else {
			if ($config['convert_manual_orient'] && ($this->format == 'jpg' || $this->format == 'jpeg'))
				$convert_args = str_replace('-auto-orient', ImageConvert::jpeg_exif_orientation($this->src), $config['convert_args']);
			elseif ($config['convert_manual_orient'])
				$convert_args = str_replace('-auto-orient', '', $config['convert_args']);
			else
				$convert_args = &$config['convert_args'];

			if (($error = shell_exec_error(($this->gm ? 'gm ' : '') . 'convert ' .
				sprintf($convert_args,
					$this->width,
					$this->height,
					escapeshellarg($this->src . '[0]'),
					$this->width,
					$this->height,
					escapeshellarg($this->temp)))) || !file_exists($this->temp)) {
					
					//known benign errors(aka warnings)
					$benign_errors = ["cHRM chunk does not match sRGB", "extra compressed data"];
					$escape = false;
					foreach($benign_errors as $b_error){
						if(preg_match("/$b_error/", $error)){
							$escape = true;
						}	
					}
					if(!$escape){
						if (strpos($error, "known incorrect sRGB profile") === false &&
												strpos($error, "iCCP: Not recognizing known sRGB profile that has been edited") === false) {
							$this->destroy();
							error(_('Failed to resize image!C')." "._('Details: ').nl2br(htmlspecialchars($error)), null, array('convert_error' => $error));
						}
						if (!file_exists($this->temp)) {
							$this->destroy();
							error(_('Failed to resize image!D'), null, $error);
						}
					}
			}
			if ($size = $this->get_size($this->temp)) {
				$this->width = $size[0];
				$this->height = $size[1];
			}
		}
	}
	
	// For when -auto-orient doesn't exist (older versions)
	static public function jpeg_exif_orientation($src, $exif = false) {
		if (!$exif) {
			$exif = @exif_read_data($src);
			if (!isset($exif['Orientation']))
				return false;
		}
		switch($exif['Orientation']) {
			case 1:
				// Normal
				return false;
			case 2:
				// 888888
				//     88
				//   8888
				//     88
				//     88
			
				return '-flop';
			case 3:
			
				//     88
				//     88
				//   8888
				//     88
				// 888888
			
				return '-flip -flop';
			case 4:
				// 88
				// 88
				// 8888
				// 88
				// 888888
			
				return '-flip';
			case 5:
				// 8888888888
				// 88  88
				// 88
			
				return '-rotate 90 -flop';
			case 6:
				// 88
				// 88  88
				// 8888888888
			
				return '-rotate 90';
			case 7:
				//         88
				//     88  88
				// 8888888888
			
				return '-rotate "-90" -flop';
			case 8:
				// 8888888888
				//     88  88
				//         88
			
				return '-rotate "-90"';
		}
	}
}

class ImagePNG extends ImageBase {
	public function from() {
		$this->image = @imagecreatefrompng($this->src);
	}
	public function to($src) {
		global $config;
		imagepng($this->image, $src);
	}
	public function resize() {
		$this->GD_create();
		imagecolortransparent($this->image, imagecolorallocatealpha($this->image, 0, 0, 0, 0));
		imagesavealpha($this->image, true);
		imagealphablending($this->image, false);
		$this->GD_copyresampled();
	}
}

class ImageGIF extends ImageBase {
	public function from() {
		$this->image = @imagecreatefromgif($this->src);
	}
	public function to($src) {
		imagegif ($this->image, $src);
	}
	public function resize() {
		$this->GD_create();
		imagecolortransparent($this->image, imagecolorallocatealpha($this->image, 0, 0, 0, 0));
		imagesavealpha($this->image, true);
		$this->GD_copyresampled();
	}
}

class ImageJPG extends ImageBase {
	public function from() {
		$this->image = @imagecreatefromjpeg($this->src);
	}
	public function to($src) {
		imagejpeg($this->image, $src);
	}
}
class ImageJPEG extends ImageJPG {
}

class ImageBMP extends ImageBase {
	public function from() {
		$this->image = @imagecreatefrombmp($this->src);
	}
	public function to($src) {
		imagebmp($this->image, $src);
	}
}

class Post_ImageProcessing{
	static public function proccess($post){
		global $config,$board;
		
		if ($post['has_file']) {
		foreach ($post['files'] as $key => &$file) {
		if ($file['is_an_image']) {
			if ($config['ie_mime_type_detection'] !== false) {
				// Check IE MIME type detection XSS exploit
				$buffer = file_get_contents($file['tmp_name'], null, null, null, 255);
				if (preg_match($config['ie_mime_type_detection'], $buffer)) {
					undoImage($post);
					error($config['error']['mime_exploit']);
				}
			}
			
			require_once 'inc/image.php';
			
			// find dimensions of an image using GD
			if (!$size = @getimagesize($file['tmp_name'])) {
				error($config['error']['invalidimg']);
			}
			if (!in_array($size[2], array(IMAGETYPE_PNG, IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_BMP))) {
				error($config['error']['invalidimg']);
			}
			if ($size[0] > $config['max_width'] || $size[1] > $config['max_height']) {
				error($config['error']['maxsize']);
			}
			
			
			if ($config['convert_auto_orient'] && ($file['extension'] == 'jpg' || $file['extension'] == 'jpeg')) {
				// The following code corrects the image orientation.
				// Currently only works with the 'convert' option selected but it could easily be expanded to work with the rest if you can be bothered.
				if (!($config['redraw_image'] || (($config['strip_exif'] && !$config['use_exiftool']) && ($file['extension'] == 'jpg' || $file['extension'] == 'jpeg')))) {
					if (in_array($config['thumb_method'], array('convert', 'convert+gifsicle', 'gm', 'gm+gifsicle'))) {
						$exif = @exif_read_data($file['tmp_name']);
						$gm = in_array($config['thumb_method'], array('gm', 'gm+gifsicle'));
						if (isset($exif['Orientation']) && $exif['Orientation'] != 1) {
							if ($config['convert_manual_orient']) {
								$error = shell_exec_error(($gm ? 'gm ' : '') . 'convert ' .
									escapeshellarg($file['tmp_name']) . ' ' .
									ImageConvert::jpeg_exif_orientation(false, $exif) . ' ' .
									($config['strip_exif'] ? '+profile "*"' :
										($config['use_exiftool'] ? '' : '+profile "*"')
									) . ' ' .
									escapeshellarg($file['tmp_name']));
								if ($config['use_exiftool'] && !$config['strip_exif']) {
									if ($exiftool_error = shell_exec_error(
										'exiftool -overwrite_original -q -q -orientation=1 -n ' .
											escapeshellarg($file['tmp_name'])))
										error(_('exiftool failed!'), null, $exiftool_error);
								} else {
									// TODO: Find another way to remove the Orientation tag from the EXIF profile
									// without needing `exiftool`.
								}
							} else {
								$error = shell_exec_error(($gm ? 'gm ' : '') . 'convert ' .
										escapeshellarg($file['tmp_name']) . ' -auto-orient ' . escapeshellarg($upload));
							}
							if ($error)
								error(_('Could not auto-orient image!'), null, $error);
							$size = @getimagesize($file['tmp_name']);
							if ($config['strip_exif'])
								$file['exif_stripped'] = true;
						}
					}
				}
			}
			
			// create image object
			$image = new Image($file['tmp_name'], $file['extension'], $size);
			if ($image->size->width > $config['max_width'] || $image->size->height > $config['max_height']) {
				$image->delete();
				error($config['error']['maxsize']);
			}
			
			$file['width'] = $image->size->width;
			$file['height'] = $image->size->height;
			
			if ($config['spoiler_images'] && isset($_POST['spoiler'])) {
				$file['thumb'] = 'spoiler';
				
				$size = @getimagesize($config['spoiler_image']);
				$file['thumbwidth'] = $size[0];
				$file['thumbheight'] = $size[1];
			} elseif ($config['minimum_copy_resize'] &&
				$image->size->width <= $config['thumb_width'] &&
				$image->size->height <= $config['thumb_height'] &&
				$file['extension'] == ($config['thumb_ext'] ? $config['thumb_ext'] : $file['extension'])) {
			
				// Copy, because there's nothing to resize
				copy($file['tmp_name'], $file['thumb']);
			
				$file['thumbwidth'] = $image->size->width;
				$file['thumbheight'] = $image->size->height;
			} else {
				$thumb = $image->resize(
					$config['thumb_ext'] ? $config['thumb_ext'] : $file['extension'],
					$post['op'] ? $config['thumb_op_width'] : $config['thumb_width'],
					$post['op'] ? $config['thumb_op_height'] : $config['thumb_height']
				);
				
				$thumb->to($file['thumb']);
			
				$file['thumbwidth'] = $thumb->width;
				$file['thumbheight'] = $thumb->height;
			
				$thumb->_destroy();
			}
			
			if ($config['redraw_image'] || (!@$file['exif_stripped'] && $config['strip_exif'] && ($file['extension'] == 'jpg' || $file['extension'] == 'jpeg'))) {
				if (!$config['redraw_image'] && $config['use_exiftool']) {
					if($error = shell_exec_error('exiftool -overwrite_original -ignoreMinorErrors -q -q -all= ' .
						escapeshellarg($file['tmp_name'])))
						error(_('Could not strip EXIF metadata!'), null, $error);
				} else {
					$image->to($file['file']);
					$dont_copy_file = true;
				}
			}
			$image->destroy();
		} else {
			// not an image
			//copy($config['file_thumb'], $post['thumb']);
			$file['thumb'] = 'file';

			$size = @getimagesize(sprintf($config['file_thumb'],
				isset($config['file_icons'][$file['extension']]) ?
					$config['file_icons'][$file['extension']] : $config['file_icons']['default']));
			$file['thumbwidth'] = $size[0];
			$file['thumbheight'] = $size[1];
		}

		if ($config['tesseract_ocr'] && $file['thumb'] != 'file') { // Let's OCR it!
			$fname = $file['tmp_name'];

			if ($file['height'] > 500 || $file['width'] > 500) {
				$fname = $file['thumb'];
			}

			if ($fname == 'spoiler') { // We don't have that much CPU time, do we?
			}
			else {
				$tmpname = "tmp/tesseract/".rand(0,10000000);

				// Preprocess command is an ImageMagick b/w quantization
				$error = shell_exec_error(sprintf($config['tesseract_preprocess_command'], escapeshellarg($fname)) . " | " .
                                                          'tesseract stdin '.escapeshellarg($tmpname).' '.$config['tesseract_params']);
				$tmpname .= ".txt";

				$value = @file_get_contents($tmpname);
				@unlink($tmpname);

				if ($value && trim($value)) {
					// This one has an effect, that the body is appended to a post body. So you can write a correct
					// spamfilter.
					$post['body_nomarkup'] .= "<tinyboard ocr image $key>".htmlspecialchars($value)."</tinyboard>";
				}
			}
		}
		
		if (!isset($dont_copy_file) || !$dont_copy_file) {	
			if (isset($file['file_tmp'])) {
				if (!@rename($file['tmp_name'], $file['file']))
					error($config['error']['nomove']);
				chmod($file['file'], 0644);
			} elseif (!@move_uploaded_file($file['tmp_name'], $file['file']))
				error($config['error']['nomove']);
			}
		}

		if ($config['image_reject_repost']) {
			if ($p = getPostByHash($post['filehash'])) {
				undoImage($post);
				error(sprintf($config['error']['fileexists'], 
					($post['mod'] ? $config['root'] . $config['file_mod'] . '?/' : $config['root']) .
					($board['dir'] . $config['dir']['res'] .
						($p['thread'] ?
							$p['thread'] . '.html#' . $p['id']
						:
							$p['id'] . '.html'
						))
				));
			}
		} else if (!$post['op'] && $config['image_reject_repost_in_thread']) {
			if ($p = getPostByHashInThread($post['filehash'], $post['thread'])) {
				undoImage($post);
				error(sprintf($config['error']['fileexistsinthread'], 
					($post['mod'] ? $config['root'] . $config['file_mod'] . '?/' : $config['root']) .
					($board['dir'] . $config['dir']['res'] .
						($p['thread'] ?
							$p['thread'] . '.html#' . $p['id']
						:
							$p['id'] . '.html'
						))
				));
			}
		}	
		}
	}
}

if (PHP_MAJOR_VERSION <= 7 && PHP_MINOR_VERSION < 2) {
	include 'inc/image/bmp.php';
}
