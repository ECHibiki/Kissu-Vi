<?php
require_once 'inc/functions.php';
require_once "inc/scoring.php";

if(isset($_GET['id'])){
  $count_obj = Scoring::get($_GET['id'], $_GET['board']);

  if(isset($count_obj['count'])){
    echo $count_obj['count'];
  }
  else {
    echo "err";
  }
}
else if(isset($_POST['id'])){
  Scoring::post($_POST['id'], $_POST['board'], $_SERVER['REMOTE_ADDR']);
  $count_obj = Scoring::get($_POST['id'], $_POST['board']);
  if(isset($count_obj['count'])){
    echo $count_obj['count'];
  }
  else {
    echo "err";
  }
}
?>
