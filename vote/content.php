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
    <title>
        <?php echo $row['title']."-taipingRaido";?>
    </title>
</head>

<body>
    <?php include('../header.php')?>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <?php if($row['overTime']>date('Y-m-d')){?>
            <div class="alert alert-danger">
                <strong>警告!</strong> 最多只能选择五个哦~
            </div>
            <div class="card bg-light text-dark">
                <div class="card-body">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="1" name="checkBox[]"><?php echo $row['one'];?>
                          </label>
                    
                    </div>
                </div>
            </div>
            <div class="card bg-light text-dark">
                <div class="card-body">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="2" name="checkBox[]"><?php echo $row['two'];?>
                          </label>
                    
                    </div>
                </div>
            </div>
            <div class="card bg-light text-dark">
                <div class="card-body">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="3" name="checkBox[]"><?php echo $row['three'];?>
                          </label>
                    
                    </div>
                </div>
            </div>
            <div class="card bg-light text-dark">
                <div class="card-body">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="4" name="checkBox[]"><?php echo $row['four'];?>
                          </label>
                    
                    </div>
                </div>
            </div>
            <div class="card bg-light text-dark">
                <div class="card-body">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="5" name="checkBox[]"><?php echo $row['five'];?>
                          </label>
                    
                    </div>
                </div>
            </div>
            <div class="card bg-light text-dark">
                <div class="card-body">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="6" name="checkBox[]"><?php echo $row['six'];?>
                          </label>
                    
                    </div>
                </div>
            </div>
            <div class="card bg-light text-dark">
                <div class="card-body">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="7" name="checkBox[]"><?php echo $row['seven'];?>
                          </label>
                    
                    </div>
                </div>
            </div>
            <div class="card bg-light text-dark">
                <div class="card-body">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="8" name="checkBox[]"><?php echo $row['eight'];?>
                          </label>
                    
                    </div>
                </div>
            </div>
            <div class="card bg-light text-dark">
                <div class="card-body">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="9" name="checkBox[]"><?php echo $row['nine'];?>
                          </label>
                    
                    </div>
                </div>
            </div>
            <div class="card bg-light text-dark">
                <div class="card-body">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="10" name="checkBox[]"><?php echo $row['ten'];?>
                          </label>
                    
                    </div>
                </div>
            </div>
            <br/>
            <button type="button" class="btn btn-success btn-block">投票(制作中)</button>
            <button type="button" class="btn btn-primary btn-block" onclick="window.location.href='items.php'">返回</button>
            <?php }else{?>
            <div class="alert alert-danger">
                <strong>警告!</strong> 投票已结束。
            </div>
            <button type="button" class="btn btn-primary btn-block" onclick="window.location.href='items.php'">返回</button>
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