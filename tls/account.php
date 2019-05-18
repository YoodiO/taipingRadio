<?php
include( 'conn.php' );
class account {
    static function reg( $userName, $passWord, $realName, $className,$confirmPassword ) {
        if($userName==""|$passWord==""|$realName==""|$className==""|$confirmPassword==""){
            die("内容不完整，请重新填写！");
        }
        if($passWord!=$confirmPassword){
            die("密码、确认密码不匹配！");
        }
        if(!preg_match("^[a-zA-Z][a-zA-Z0-9_]{4,15}$",$userName)){
            die("帐号是不合法，规则：字母开头，允许5-16字节，允许字母数字下划线");
        }
        if(!preg_match("^[a-zA-Z]\w{5,17}$",$passWord)){
            die("密码不合法，规则：以字母开头，长度在6~18字节之间，只能包含字母、数字和下划线");
        }
        if(!preg_match("^[\u4e00-\u9fa5]{0,}$",$realName)){
            die("真实姓名必须为中文！");
        }
        if(!preg_match("^[0-9\u4e00-\u9fa5]+$",$className)){
            die("班级名不合法，规则：例如17计算机1");
        }
        if ( $conn->query( "INSERT INTO users(username,password,realname,classname) VALUES($userName,$passWord,$realName,$className)" ) ) {
            echo ("注册成功！");
            login();
        } else {
            echo ("注册失败！");
        }
    }

    static function login( $username, $password ) {
        if($userName==""|$passWord==""|$realName==""|$className==""|$confirmPassword==""){
            die("内容不完整，请重新填写！");
        }
        if(!preg_match("^[a-zA-Z][a-zA-Z0-9_]{4,15}$",$userName)){
            die("帐号是不合法，规则：字母开头，允许5-16字节，允许字母数字下划线");
        }
        if(!preg_match("^[a-zA-Z]\w{5,17}$",$passWord)){
            die("密码不合法，规则：以字母开头，长度在6~18字节之间，只能包含字母、数字和下划线");
        }
        if ( $res=$conn->query( "SELECT * FROM users WHERE username=$username AND password=$password" ) ) {
            $row=$res->fetch_assoc;
            setcookie( 'username', $username, time() + 3600, "/", true );
            setcookie( 'realname', $row['realname'], time() + 3600, "/", true );
            setcookie( 'classname', $row['classname'], time() + 3600, "/", true );
            return ( true );
        } else {
            return( false );
        }
    }
}
?>