<?php
require_once __DIR__.'/bootstrap.php';
if (isset($_GET['action']) && $_GET['action'] == 'logout'){
    session_destroy();
}
// paspaustas mygtukas LOGIN
if(isset($_POST['login'])) {
    if ($_POST['username'] == $settings['name'] && $_POST['password'] == $settings['password']) {
        $_SESSION['login'] = 1;
    }
}
// tikriname sesijoje 
if (isset($_SESSION['login']) && $_SESSION['login'] == 1) {
    header('Location: '.$settings['uri']);
    exit;
}

?>
<!DOCTYPE html>
<html>
<head>
<title>File Manager Login</title>
<link rel="stylesheet" href="<?= $settings['uri'] ?>styles.css">
</head>
<body>
<div style="padding:0 60px 30px 60px;margin:20px;border:1px solid #888;border-radius:10px;display:inline-block;">
<p style="color:red">
<?php 
if (isset($_POST['login']) && (!isset($_SESSION['login']) || $_SESSION['login'] != 1)) {
    echo 'Error!';
}
else {
    echo '&nbsp;'; //užima tuščią vietą jeigu nėra klaidos pranešimo
}
?>
<h3>Files Manager Login</h3>
<form action="" method="post">
<p>Name:<p> <input type="text" name="username">
<p>Pasword:<p> <input type="password" name="password">
<input type="submit" name="login" value="LOGIN" style="background:#fff;border:1px solid #999;padding:10px;display:block;margin-top:20px;">
</form>
<div>
</div>
</div>
</form>
</body>
<html>