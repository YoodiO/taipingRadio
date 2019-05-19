<!DOCTYPE html>
<html>
<head>
    <title>taipingRadio</title>
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
    <!--header.php-->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <a class="navbar-brand" href="/">广播室</a>
        <ul class="navbar-nav">
            <?php if(!isset($_COOKIE["userName"])){?>
            <li class="nav-item"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#register">注册</button</li>
            <li class="nav-item"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#login">登录</button</li>
            <?php }else{?>
            <li class="nav-item"></li>
            <?php }?>
        </ul>
    </nav>
    <!--注册模态框-->
    <div class="modal fade" id="register">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- 模态框头部 -->
                <div class="modal-header">
                    <h4 class="modal-title">注册</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- 模态框主体 -->
                <form id="registerForm">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>账号:</label>
                            <input type="text" class="form-control" name="userName" placeholder="输入用户名。">
                        </div>
                        <div class="form-group">
                            <label>密码:</label>
                            <input type="password" class="form-control" name="passWord" placeholder="输入密码。">
                        </div>
                        <div class="form-group">
                            <label>确认密码:</label>
                            <input type="password" class="form-control" name="confirmPassword" placeholder="再次输入密码。">
                        </div>
                        <div class="form-group">
                            <label>真实姓名:</label>
                            <input type="text" class="form-control" name="realName" placeholder="输入姓名。">
                        </div>
                        <div class="form-group">
                            <label>班级:</label>
                            <input type="text" class="form-control" name="className" placeholder="输入班级。">
                        </div>
                    </div>
                </form>
                <!-- 模态框底部 -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-toggle="modal" id="registerButton" data-target="#Return" data-dismiss="modal">提交</button>
                </div>

                </div>
                </div>
                </div>

                <!--登录模态框-->
                <div class="modal fade" id="login">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <!-- 模态框头部 -->
                            <div class="modal-header">
                                <h4 class="modal-title">登录</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- 模态框主体 -->
                            <form id="loginForm">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>账号:</label>
                                        <input type="text" class="form-control" name="userName" placeholder="输入用户名。">
                                    </div>
                                    <div class="form-group">
                                        <label>密码:</label>
                                        <input type="password" class="form-control" name="passWord" placeholder="输入密码。">
                                    </div>
                                </div>
                            </form>
                            <!-- 模态框底部 -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-toggle="modal" id="loginButton" data-target="#Return" data-dismiss="modal">提交</button>
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
                            <div class="modal-body" id="returnMsg">
                            </div>

                            <!-- 模态框底部 -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-dismiss="modal">确定</button>
                            </div>

                        </div>
                    </div>
                </div>
                <br/>
                <br/>
                <br/>
                <!-- jQuery (Bootstrap 的 JavaScript 插件需要引入 jQuery) -->
                <script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.js"></script>
                <script src="https://cdn.bootcss.com/popper.js/1.15.0/esm/popper.js"></script>
                <!-- 包括所有已编译的插件 -->
                <script src="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/js/bootstrap.js"></script>
                <script type="text/javascript">
                    $( document ).ready( function () {
                        $( "#registerButton" ).click( function () {
                            $( "#returnMsg" ).html( "数据获取中，请耐心等待。" );
                            var targetUrl = "/account/register.php";
                            var data = $( "#registerForm" ).serialize();
                            htmlobj = $.ajax( {
                                type: 'post',
                                url: targetUrl,
                                cache: false,
                                data: data,
                                dataType: 'html',
                                success: function ( data ) {
                                    $( "#returnMsg" ).html( data );
                                },
                                error: function () {
                                    $( "#returnMsg" ).html( "请求失败" );
                                }
                            } );
                            $( "#returnMsg" ).html( htmlobj.responseText );
                        } );
                        $( "#loginButton" ).click( function () {
                            $( "#returnMsg" ).html( "数据获取中，请耐心等待。" );
                            var targetUrl = "/account/login.php";
                            var data = $( "#loginForm" ).serialize();
                            htmlobj = $.ajax( {
                                type: 'post',
                                url: targetUrl,
                                cache: false,
                                data: data,
                                dataType: 'html',
                                success: function ( data ) {
                                    $( "#returnMsg" ).html( data );
                                },
                                error: function () {
                                    $( "#returnMsg" ).html( "请求失败" );
                                }
                            } );
                            $( "#returnMsg" ).html( htmlobj.responseText );
                        } );
                    } );
                </script>
</body>
</html>