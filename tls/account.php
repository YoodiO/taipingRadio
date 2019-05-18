<?php
include( 'conn.php' );
class account {
    static
    function reg( $userName, $passWord, $realName, $className, $confirmPassword ) {
        if ( $conn->query( "INSERT INTO users(userName,passWord,realName,className) VALUES($userName,$passWord,$realName,$className)" ) ) {
            return ( true );
        } else {
            return ( false );
        }
    }

    static
    function login( $userName, $passWord ) {
        if ( $userName == "" | $passWord == "" | $realName == "" | $className == "" | $confirmPassword == "" ) {
            die( "内容不完整，请重新填写！" );
        }
        if ( !preg_match( "^[a-zA-Z][a-zA-Z0-9_]{4,15}$", $userName ) ) {
            die( "帐号是不合法，规则：字母开头，允许5-16字节，允许字母数字下划线" );
        }
        if ( !preg_match( "^[a-zA-Z]\w{5,17}$", $passWord ) ) {
            die( "密码不合法，规则：以字母开头，长度在6~18字节之间，只能包含字母、数字和下划线" );
        }
        if ( $res = $conn->query( "SELECT * FROM users WHERE userName=$userName AND password=$passWord" ) ) {
            $row = $res->fetch_assoc;
            setcookie( 'userName', $username, time() + 3600, "/", true );
            setcookie( 'realName', $row[ 'realName' ], time() + 3600, "/", true );
            setcookie( 'className', $row[ 'className' ], time() + 3600, "/", true );
            return ( true );
        } else {
            return ( false );
        }
    }
}
?>