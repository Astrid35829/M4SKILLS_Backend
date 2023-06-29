<?php
session_start();
$page=3;

$_SESSION['page'] = $page;

header('Location: page_2.php');
exit();

