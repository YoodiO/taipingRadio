<?php
header("Content-Type: text/html;charset=utf-8");
include( '../tls/account.php' );
$userName = @$_POST[ "userName" ];
$passWord = @$_POST[ "passWord" ];
$confirmPassword = @$_POST[ "confirmPassword" ];
$realName = @$_POST[ "realName" ];
$className = @$_POST[ "className" ];

account::reg( $userName, $passWord, $realName, $className, $confirmPassword );
?>