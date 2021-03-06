<!doctype html>
<?php
date_default_timezone_set( "Asia/Shanghai" );
include( '../tls/conn.php' );
$vote_id = $_GET[ 'vote_id' ];
if ( $res = $conn->query( "SELECT * FROM voting_items WHERE vote_id='$vote_id'" ) ) {
    $row = $res->fetch_assoc();
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- 引入 Bootstrap -->
    <link href="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 Shiv 和 Respond.js 用于让 IE8 支持 HTML5元素和媒体查询 -->
    <!-- 注意： 如果通过 file://  引入 Respond.js 文件，则该文件无法起效果 -->
    <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
    <title><?php echo $row['title']."-taipingRaido";?></title>
</head>

<body>
    <?php include('../header.php')?>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <?php
            if ( $row[ 'overTime' ] > date( 'Y-m-d' ) ) {
                if ( isset( $_SESSION[ 'userName' ] ) ) {
                    if ( $conn->query( "SELECT * FROM voting_result WHERE userName='{$_SESSION['userName']}' AND vote_id='$vote_id'" )->num_rows == 0 ) {
                        include( 'voteForm.php' );
                    } else {
                        include( 'voteResult.php' );
                    }
                } else {
                    ?>
            <div class="alert alert-danger">
                <strong>警告!</strong> 您还没有登录。
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#register">注册</button>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#login">登录</button>
            </div>
            <?php }
            }else{?>
            <div class="alert alert-danger">
                <strong>警告!</strong> 投票已结束。
            </div>
            <?php include('voteResult.php');?>
            <?php }?>
        </div>
    </div>
    <!-- jQuery (Bootstrap 的 JavaScript 插件需要引入 jQuery) -->
    <script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.js"></script>
    <script src="https://cdn.bootcss.com/popper.js/1.15.0/esm/popper.js"></script>
    <!-- 包括所有已编译的插件 -->
    <script src="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/js/bootstrap.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>
<?php $conn->close();?>