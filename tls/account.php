<?php
include( 'conn.php' );
class account {
    function reg( $username, $password, $realname, $classname ) {
        if ( $conn->query( "INSERT INTO users(username,password,realname,classname) VALUES($username,$password,$realname,$classname)" ) ) {
            return ( true );
        } else {
            return ( false );
        }
    }

    function login( $username, $password ) {
        if ( $conn->query( "SELECT * FROM users WHERE username=$username AND password=$password" ) ) {
            setcookie( 'username', $username, time() + 3600, "/", true );
            return ( true );
        } else {
            return( false );
        }
    }
}
?>