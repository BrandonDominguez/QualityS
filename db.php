<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'qualitys'
) or die(mysqli_erro($mysqli));

?>
