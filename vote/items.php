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
    <div class="alert alert-warning">
        <strong>提示!</strong> 点击卡片即可进入投票页。绿色卡片表示正在投票，红色卡片表示投票结束。
    </div>
    <?php
    if ( $res = $conn->query( "SELECT * FROM voting_items ORDER BY vote_id" ) ) {
        if ( $res->num_rows > 0 ) {
            while ( $row = $res->fetch_assoc() ) {
                echo <<<EOF
                <a href="content.php?{$row['vote_id']}"
                <div class="card bg-success text-white">
                    <div class="card-body">{$row['title']}</div>
                </div> 
EOF;
            }
        }
    }
    ?>
    <!-- jQuery (Bootstrap 的 JavaScript 插件需要引入 jQuery) -->
    <script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.js"></script>
    <script src="https://cdn.bootcss.com/popper.js/1.15.0/esm/popper.js"></script>
    <!-- 包括所有已编译的插件 -->
    <script src="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/js/bootstrap.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>