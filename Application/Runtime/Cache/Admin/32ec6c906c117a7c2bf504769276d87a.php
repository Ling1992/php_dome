<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="/ling_test/Public/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/ling_test/Public/css/dashboard.css">
    <script type="text/javascript" src="/ling_test/Public/js/jquery-1.10.2.js"></script>
    <link rel="stylesheet" type="text/css" href="/ling_test/Public/css/style.css">
    <script type="text/javascript" src="/ling_test/Public/js/common.js"></script>
</head>
<body>
    <div class="container">
      <form class="form-signin">
        <h2 class="form-signin-heading login">Ling管理系统</h2>
        <label><h4>用户名：</h4></label>
        <input type="text" id="name" name="nameLogin" class="form-control" placeholder="请输入用户名" autofocus>
        <label for="inputPassword"><h4>密码：</h4></label>
        <input type="password" id="inputPassword" name="passwordLogin" class="form-control" placeholder="请输入密码">
        <label><span><h4>验证码：</h4></span></label>
        <input class="form-control vode" placeholder="请输入验证码" name="vcode" type="text" value="">
        <img class="vcodeSrc" src="/ling_test/Compub/Vcode/captcha">
        <button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
      </form>
    </div>
    <script>
    var vcodeUrl = '/ling_test/Compub/Vcode/captcha';
    var loginUrl = "/ling_test/admin/Login/signin";
    var welcomeUrl = "/ling_test/admin/Login/welcome";
    </script>
    <script type="text/javascript" src="/ling_test/Public/js/Admin/Login/index.js"></script>
</body>
</html>