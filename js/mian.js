$("#registerButton").click(function () {
    $("#returnMsg").html("数据获取中，请耐心等待。");
    var targetUrl = "/account/register.php";
    var data = $("#registerForm").serialize();
    htmlobj = $.ajax({
        type: 'post',
        url: targetUrl,
        cache: false,
        data: data,
        dataType: 'html',
        success: function (data) {
            $("#returnMsg").html(data);
        },
        error: function () {
            $("#returnMsg").html("请求失败");
        }
    });
    $("#returnMsg").html(htmlobj.responseText);
});
$("#loginButton").click(function () {
    $("#returnMsg").html("数据获取中，请耐心等待。");
    var targetUrl = "/account/login.php";
    var data = $("#loginForm").serialize();
    htmlobj = $.ajax({
        type: 'post',
        url: targetUrl,
        cache: false,
        data: data,
        dataType: 'html',
        success: function (data) {
            $("#returnMsg").html(data);
        },
        error: function () {
            $("#returnMsg").html("请求失败");
        }
    });
    $("#returnMsg").html(htmlobj.responseText);
});
$("#loginOut").click(function () {
    $("#returnMsg").html("数据获取中，请耐心等待。");
    var targetUrl = "/account/loginout.php";
    htmlobj = $.ajax({
        type: 'get',
        url: targetUrl,
        cache: false,
        dataType: 'html',
        success: function (data) {
            $("#returnMsg").html(data);
        },
        error: function () {
            $("#returnMsg").html("请求失败");
        }
    });
});
$("#returnSuccess").click(function(){
    window.location.reload();
})
