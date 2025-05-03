<?php
session_start();

unset($_SESSION['auth']);
unset($_SESSION['auth_user']);

$_SESSION['alert-type'] = 'alert-success';
$_SESSION['message'] = 'You have been logged out.';

header('Location: index.php');
exit();
