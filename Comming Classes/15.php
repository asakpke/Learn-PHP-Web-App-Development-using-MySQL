<?php
session_start();
$_SESSION['user_id'] = 0;
$msg = 'You are logged out successfully.';
header('Location: 11.html?msg='.$msg);
exit;
