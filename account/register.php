<?php
header( "Content-Type: text/html;charset=utf-8" );
include( '../tls/conn.php' );
$userName = $_POST[ "userName" ];
$passWord = $_POST[ "passWord" ];
$confirmPassword = $_POST[ "confirmPassword" ];
$realName = $_POST[ "realName" ];
$className = $_POST[ "className" ];
if ( $userName == "" | $passWord == "" | $realName == "" | $className == "" | $confirmPassword == "" ) {
    die( "内容不完整，请重新填写！" );
}
if ( $passWord != $confirmPassword ) {
    die( "密码、确认密码不匹配！" );
}
if ( !preg_match( "/^[a-zA-Z][a-zA-Z0-9_]{4,15}$/", $userName ) ) {
    die( "用户名以字母开头长度为5-16，允许字母数字下划线。" );
}
if ( !preg_match( "/^[a-zA-Z]\w{5,17}$/", $passWord ) ) {
    die( "密码以字母开头，长度在6~18字节之间，只能包含字母、数字和下划线。" );
}
if ( !preg_match( "/([\x{4e00}-\x{9fa5}])/u", $realName ) ) {
    die( "姓名必须为中文。" );
}
if ( !preg_match( "/([0-9\x{4e00}-\x{9fa5}0-9])/u", $className ) ) {
    die( "班级名不合法，规则：例如17计算机1。" );
}
$passWord = hash( "SHA256", hash( "md5", $passWord ) );
if ( $conn->query( "INSERT INTO users(userName,passWord,realName,className) VALUES('$userName','$passWord','$realName','$className')" ) ) {
    echo "注册成功。";
} else {
    echo "注册失败，可能是该账户已经存在。";
}
$conn->close();
?>