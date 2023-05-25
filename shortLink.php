<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$userLink = $_POST['link'];
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$newLink = '';

$dbLink = ORM::for_table('links')->where('link', "$userLink")->find_one(); //ссылка в базе

//проверка на существование
if ($dbLink == 0 && !empty($userLink)) {
    $shortLinkDb = substr(str_shuffle($permitted_chars), 0, 8);
    $newLink .= 'https://shortlink/goLink.php/?shortLink=' . $shortLinkDb ;
    $newLinkDb = ORM::for_table('links')->create();
    $newLinkDb->link = "$userLink";
    $newLinkDb->shortLink = "$shortLinkDb";
    $newLinkDb->save();

    header("Location: /?newLink=" . $newLink . "&link=" . $userLink);
} else {
    header("Location: /?newLink=" . 'https://shortlink/goLink.php/?shortLink=' .$dbLink['shortLink'] . "&link=" . $userLink );
}
