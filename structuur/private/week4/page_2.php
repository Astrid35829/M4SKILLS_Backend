<?php
session_start();
$page=2;
echo $page;

echo 'Afkomstig van: ' . $_SESSION['page'];
