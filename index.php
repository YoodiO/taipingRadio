<!DOCTYPE html>
<html>
<head>
    <title>taipingRadio</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 引入 Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shiv 和 Respond.js 用于让 IE8 支持 HTML5元素和媒体查询 -->
    <!-- 注意： 如果通过 file://  引入 Respond.js 文件，则该文件无法起效果 -->
    <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
</head>

<body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">广播室</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <?php if(isset($_COOKIE["username"])){?>
                <?php }else{?>
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> 注册</a>
                </li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> 登录</a>
                </li>
                <?php }?>
            </ul>
        </div>
    </nav>
    <div class="panel panel-default">
        <div class="panel-body">
            <h1>开发进度</h1>
            <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                    <span class="sr-only"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery (Bootstrap 的 JavaScript 插件需要引入 jQuery) -->
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <!-- 包括所有已编译的插件 -->
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>