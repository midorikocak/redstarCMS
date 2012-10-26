<?php
include_once("header.php");
if(isset($_GET["sayfa"]))
{
    $sayfa = preg_replace('/[^a-zA-Z0-9_\.\-&=]/', '', $_GET["sayfa"]);
    //realpath ile üst dizinlere girişi önleyelim
    $sayfa = realpath("content/".$sayfa.".php");
    //preg_replace ile a-ZA-Z0-9_.-&= karakterleri harici herşeyi yokedelim.
}
else
{
    $sayfa = "content/anasayfa.php";
}
include($sayfa);
include_once("footer.php");
?>