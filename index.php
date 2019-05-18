<!DOCTYPE html>
<html>
<head>
    <title>taipingRadio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- 引入 Bootstrap -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- HTML5 Shiv 和 Respond.js 用于让 IE8 支持 HTML5元素和媒体查询 -->
    <!-- 注意： 如果通过 file://  引入 Respond.js 文件，则该文件无法起效果 -->
    <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
</head>

<body>
    <!--header.php-->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <a class="navbar-brand" href="/">广播室</a>
        <ul class="navbar-nav">
            <li class="nav-item"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#register">注册</button>
            </li>
        </ul>
    </nav>
    <!--注册模态框-->
    <form action="account/account/register.php">
        <div class="modal fade" id="register">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- 模态框头部 -->
                    <div class="modal-header">
                        <h4 class="modal-title">注册</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- 模态框主体 -->
                    <div class="modal-body">
                        <div class="form-group">
                            <label>账号:</label>
                            <input type="text" class="form-control" id="userName" placeholder="输入用户名。">
                        </div>
                        <div class="form-group">
                            <label>密码:</label>
                            <input type="text" class="form-control" id="passWord" placeholder="输入密码。">
                        </div>
                        <div class="form-group">
                            <label>确认密码:</label>
                            <input type="text" class="form-control" id="confirmPassword" placeholder="再次输入密码。">
                        </div>
                        <div class="form-group">
                            <label>真实姓名:</label>
                            <input type="text" class="form-control" id="realName" placeholder="输入姓名。">
                        </div>
                        <div class="form-group">
                            <label>班级:</label>
                            <input type="text" class="form-control" id="className" placeholder="输入班级。">
                        </div>
                    </div>

                    <!-- 模态框底部 -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Return" data-dismiss="modal">提交</button>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="modal fade" id="Return">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- 模态框头部 -->
                    <div class="modal-header">
                        <h4 class="modal-title">Return</h4>
                    </div>
                    
                    <!-- 模态框主体 -->
                    <div class="modal-body">
                    </div>
                    
                    <!-- 模态框底部 -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">确定</button>
                    </div>
                    
                </div>
            </div>
        </div>
    </form>
    <!-- jQuery (Bootstrap 的 JavaScript 插件需要引入 jQuery) -->
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- 包括所有已编译的插件 -->
    <script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>