<?php
session_start();
$_SESSION['is_logged_in'] = 0;
$msg = 'You are logged out successfully.';
header('Location: 11.html?msg='.$msg);
exit;
