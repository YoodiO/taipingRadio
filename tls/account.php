<?php
include( 'conn.php' );
class account {
    static function reg( $username, $password, $realname, $classname,$confirmpassword ) {
        if ( $conn->query( "INSERT INTO users(username,password,realname,classname) VALUES($username,$password,$realname,$classname)" ) ) {
            return ( true );
        } else {
            return ( false );
        }
    }

    static function login( $username, $password ) {
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