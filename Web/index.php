<?php
$lang=explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE']);
$lang=strtolower(substr(chop($lang[0]), 0, 2));
header("Location: /td2/$lang/home.php");
?>