<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$shortLink = $_GET['shortLink'];

$dbLink = ORM::for_table('links')->where('shortLink', "$shortLink")->find_one();
header("Location: " . $dbLink['link']);