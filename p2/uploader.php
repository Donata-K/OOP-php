<?php
$target_dir = $dir.'/';
$target_file = $target_dir . basename($_FILES['upload_file_name']['name']);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$upMsg = '';
// Check if file already exists
if (file_exists($target_file)) {
    $upMsg .= 'Sorry, file already exists.';
    $uploadOk = 0;
}
// Check file size
if ($_FILES['upload_file_name']['size'] > 500000) {
    $upMsg .= 'Sorry, your file is too large.';
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != 'jpg' && $imageFileType != 'txt') {
    $upMsg .= 'Sorry, only jpg  & txt files are allowed.';
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $upMsg .= 'Sorry, your file was not uploaded.';
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES['upload_file_name']['tmp_name'], $target_file)) {
        $upMsg .= 'The file '. basename( $_FILES['upload_file_name']['name']). ' has been uploaded.';
    } else {
        $upMsg .= 'Sorry, there was an error uploading your file.';
    }
}