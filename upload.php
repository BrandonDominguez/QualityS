<?php
$target_dir = "files/upload";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getfilesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an pdf - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an pdf.";
    $uploadOk = 0;
  }
}

if($FileType != "pdf" ) {
  echo "Unicamente se aceptan archivos PDF";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Lo siento, no se subio tu documento correctamente";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "Tu documento ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " se a subido al sistema.";
  } else {
    echo "Lo siento, no se subio tu documento correctamente";
  }
}
?>