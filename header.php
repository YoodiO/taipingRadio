<?php
header( "Content-Type: text/html;charset=utf-8" );
session_start();
?>
<!--header.php-->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <a class="navbar-brand" href="/">广播室</a>
    <ul class="navbar-nav">
        <?php if(isset($_SESSION["userName"])){?>
        <li class="nav-item">
            <div class="dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    <?php echo($_SESSION["userName"]);?>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">个人中心(设计中)</a>
                    <a class="dropdown-item" href="#" id="loginOut" data-toggle="modal" data-target="#Return">退出登录</a>
                </div>
            </div>
        </li>
        <?php }else{?>
        <li class="nav-item"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#register">注册</button></li>
            <li class="nav-item"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#login">登录</button></li>
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
                        <label>用户名:</label>
                        <input type="text" class="form-control" name="userName" placeholder="用户名以字母开头长度为5-16，允许字母数字下划线。">
                    </div>
                    <div class="form-group">
                        <label>密码:</label>
                        <input type="password" class="form-control" name="passWord" placeholder="密码以字母开头，长度在6~18字节之间，只能包含字母、数字和下划线。">
                    </div>
                    <div class="form-group">
                        <label>确认密码:</label>
                        <input type="password" class="form-control" name="confirmPassword" placeholder="再次输入密码。">
                    </div>
                    <div class="form-group">
                        <label>真实姓名:</label>
                        <input type="text" class="form-control" name="realName" placeholder="姓名必须为中文。">
                    </div>
                    <div class="form-group">
                        <label>班级:</label>
                        <input type="text" class="form-control" name="className" placeholder="输入班级。">
                    </div>
                </div>
                <div class="alert alert-success">
                    <strong>提示!</strong> 密码使用了两种Hash算法加密。
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
                                    <label>用户名:</label>
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
                            <button type="button" class="btn btn-success" data-dismiss="modal" id="returnSuccess">确定</button>
                        </div>

                    </div>
                </div>
            </div>
            <br/>
            <br/>
            <!--header.php-->