<?php
require_once __DIR__.'/bootstrap.php';
// tikriname sesijoje 
if (!isset($_SESSION['login']) || $_SESSION['login'] != 1) {
    header('Location: '.$settings['uri'].'login.php');
    exit;
}
//pradiniai kintamieji
$dir = $settings['dir'];
$file = '';
$type = 'dir';
//GET metodu tikrinimas
// folderio linkas
if(isset($_GET['type']) && $_GET['type'] == 'dir') {
    $dir = $_GET['dir_name'];
    $type = 'dir';
}
// failo linkas
elseif (isset($_GET['type']) && ($_GET['type'] == 'txt' || $_GET['type'] == 'jpg')){
    $dir = $_GET['dir'];
    $type = $_GET['type'];
    $file = $_GET['file_name'];
}
//POST metodu tikrinimas
if (!empty($_POST)) {
    $dir = $_POST['dir'];
    $type = $_POST['type'];
    $file = $_POST['file'];
}
if (isset($_POST['new_file']) && $_POST['new_file_name']) {
    $file = $_POST['new_file_name'];
    file_put_contents($settings['path'].$dir.'/'.$file.'.txt', '');
    $type = 'txt';
}
if (isset($_POST['delete_file']) && $_POST['delete_file_name']) {
    unlink($settings['path'].$dir.'/'.$_POST['delete_file_name']);
    $file = '';
    $type = 'dir';
}
if (isset($_POST['save_txt_file']) && $_POST['editor']) {
    file_put_contents($settings['path'].$dir.'/'.$file.'.'.$type, $_POST['editor']);
}

if (isset($_POST['new_folder']) && $_POST['new_folder_name']) {
    $older = $_POST['new_folder_name'];
    mkdir($settings['path'].$dir.'/'.$older);
}

if(isset($_POST['upload_file'])) {
    require_once $settings['path'].'/uploader.php';
}

?>
<!DOCTYPE html>
<html>
<head>
<title>File Manager</title>
<link rel="stylesheet" href="<?= $settings['uri'] ?>styles.css">
</head>
<body>
<form action="<?= $settings['uri'] ?>" method="post"  enctype="multipart/form-data">
<div class="header">
<fieldset>
  <p>New File:</p>
  <input type="text" name="new_file_name">
  <input class="btn" type="submit" name="new_file" value="New File">
</fieldset>
<fieldset>
  <p>New Folder:</p>
  <input type="text" name="new_folder_name">
  <input class="btn" type="submit" name="new_folder" value="New Folder">
</fieldset>
<fieldset>
    <p>Upload File</p>
    <input type="file" name="upload_file_name">
    <input type="submit" value="Upload File" name="upload_file">
    <span class="upload-msg">
    <?= $upMsg ?? '' ?>
    </span>
</fieldset>
<a class="logout" href="<?= $settings['uri'].'login.php?action=logout'?>">LOGOUT</a>
<input type="hidden" name="dir" value="<?= $dir ?>">
<input type="hidden" name="file" value="<?= $file ?>">
<input type="hidden" name="type" value="<?= $type ?>">
</div>

<div class="content">
    <div class="file-list">
<?php
// UP linkas
if ($dir != $settings['dir']) {
    echo '<a class="dir-entry" href="'.$settings['uri'].'?dir_name='.preg_replace('/\/[^\/]+$/', '', $dir).'&type=dir">UP</a>';
}
// folderiu sarasas
if ($handle = opendir($settings['path'].$dir)) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry == '.' || $entry == '..') {
            continue;
        }
        if (is_dir($settings['path'].$dir.'/'.$entry)) {
            echo '<a class="dir-entry" href="'.$settings['uri'].'?dir_name='.$dir.'/'.$entry.'&type=dir">'.$entry.'</a>';
        }
    }
    closedir($handle);
}
// failu sarasas
if ($handle = opendir($settings['path'].$dir)) {
    while (false !== ($entry = readdir($handle))) {
        if (preg_match('/\.(txt|jpg)/i', $entry, $mas)) {
            $file_name = pathinfo($entry, PATHINFO_FILENAME);
            echo '<a class="file-entry" href="'.$settings['uri'].'?file_name='.$file_name.'&type='.$mas[1].'&dir='.$dir.'">'.$entry.'</a>';
        }
    }
    closedir($handle);
}
?>
</div>
<div class="main-area">
<h2>
<?php if(strtolower($type) == 'jpg' || strtolower($type) == 'txt'): ?>
<fieldset>
<p><?= $file.'.'.$type ?></p>
<input type="hidden" name="delete_file_name" value="<?= $file.'.'.$type ?>">
<input class="btn" type="submit" name="delete_file" value="Delete This File">
</fieldset>
<?php else: ?>
    <h3>No file selected</h3>
<?php endif;
if (strtolower($type) == 'jpg'): ?>
    <img src="<?= $settings['uri'].$dir.'/'.$file.'.'.$type ?>">
<?php elseif(strtolower($type) == 'txt'): ?>
    <textarea name="editor"><?= file_get_contents($settings['path'].$dir.'/'.$file.'.'.$type)?></textarea>
    <input class="btn" type="submit" name="save_txt_file" value="Save">
<?php endif ?>
</div>
</div>
</form>
</body>
<html>


