<?php
$mysql_conf = array(
    'host' => '127.0.0.1',
    'db' => 'taipingradio',
    'user' => 'root',
    'pwd' => 'root',
);
$conn=new MySQLi($mysql_conf['host'],$mysql_conf['user'],$mysql_conf['pwd'],$mysql_conf['db']);
if($conn->connect_errno){
    die("数据库连接错误。\n".$conn->connect_error);
}
?>