<?php
header( "Content-Type: text/html;charset=utf-8" );
session_start();
$_SESSION = array();
setcookie( "PHPSESSID", "", time() - 1, "/" );
session_destroy();
echo "退出成功！";
?>