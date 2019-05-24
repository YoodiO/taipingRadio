<!DOCTYPE html>
<html>
<head>
    <title>每周一歌投票-taipingRadio</title>
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
</head>

<body>
    <?php include('../header.php')?>
    <?php include('../tls/conn.php')?>
    <?php date_default_timezone_set("Asia/Shanghai");?>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="alert alert-warning">
                <strong>提示!</strong> 点击卡片即可进入投票页。绿色卡片表示正在投票，红色卡片表示投票结束。
            </div>
            <?php
            if ( $res = $conn->query( "SELECT * FROM voting_items ORDER BY vote_id DESC" ) ) {
                if ( $res->num_rows > 0 ) {
                    while ( $row = $res->fetch_assoc() ) {
                        ?>
            <?php if(date("Y-m-d")<$row['overTime']){?>
            <div class="card text-white bg-success" onClick="window.location.href='content.php?vote_id=<?php echo $row['vote_id']?>'">
                <?php }else{?>
                <div class="card text-white bg-danger" onClick="window.location.href='content.php?vote_id=<?php echo $row['vote_id']?>'">
                    <?php }?>
                    <div class="card-body">
                        <h4 class="card-title">
                            <?php echo $row['title']?>
                        </h4>
                        <p class="text-white">截止日期(<?php echo $row['overTime']?>)</p>
                    </div>
                </div>
                <?php }
                }
            }?>
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