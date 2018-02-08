<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>厦门航空公司飞行员招聘信息后台</title>

    <!-- Bootstrap -->
    <link href="../static/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../static/css/bootstrap-theme.css" rel="stylesheet" media="screen">
    <link href="../static/css/signin.css" rel="stylesheet" media="screen">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../static/js/jquery-1.8.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../static/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
    <form action="checkiden.php" method="post" class="form-signin">
        <h2 class="form-signin-heading">招聘信息后台</h2>
        <label for="username" class="sr-only">用户名</label>
        <input type="text" id="username" name="username" class="form-control" placeholder="用户名" required autofocus>
        <label for="password" class="sr-only">密码</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="密码" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
    </form>
</div>
</body>
</html>