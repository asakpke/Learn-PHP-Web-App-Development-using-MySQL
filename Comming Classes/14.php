<?php
session_start();

// START - Redirect to login page if user is not logged-in
if (empty($_SESSION['user_id'])) {
	$msg = 'Please login to view this page.';
	header('Location: 11.html?msg='.$msg);
	exit;
}
// ENDED - Redirect to login page if user is not logged-in
