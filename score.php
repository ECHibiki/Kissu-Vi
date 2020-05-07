<?php
if(isset($_GET['get']))
  echo $_GET['get'];
else if(isset($_POST['submit']))
  echo $_POST['submit'] + 1;
