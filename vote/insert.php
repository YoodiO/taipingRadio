<?php
header( "Content-Type: text/html;charset=utf-8" );
include( '../tls/conn.php' );
session_start();
if ( $conn->query( "SELECT * FROM voting_result WHERE username='{$_SESSION['userName']}' AND vote_id='{$_POST['vote_id']}'" )->num_rows == 0 ) {
    if(isset($_POST['vote']['one'])){$one="true";}else{$one="false";}
    if(isset($_POST['vote']['two'])){$two="true";}else{$two="false";}
    if(isset($_POST['vote']['three'])){$three="true";}else{$three="false";}
    if(isset($_POST['vote']['four'])){$four="true";}else{$four="false";}
    if(isset($_POST['vote']['five'])){$five="true";}else{$five="false";}
    if(isset($_POST['vote']['six'])){$six="true";}else{$six="false";}
    if(isset($_POST['vote']['seven'])){$seven="true";}else{$seven="false";}
    if(isset($_POST['vote']['eight'])){$eight="true";}else{$eight="false";}
    if(isset($_POST['vote']['nine'])){$nine="true";}else{$nine="false";}
    if(isset($_POST['vote']['ten'])){$ten="true";}else{$ten="false";}
    if($conn->query("INSERT INTO voting_result(vote_id,userName,one,two,three,four,five,six,seven,eight,nine,ten) VALUES('{$_POST['vote_id']}','{$_SESSION['userName']}','$one','$two','$three','$four','$five','$six','$seven','$eight','$nine','$ten')")){
        echo "投票成功！";
    }else{
        echo "投票失败！".$conn->error;
    }
} else {
    echo "您已经投过票了！";
}
?>