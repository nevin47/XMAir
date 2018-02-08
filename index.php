<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>厦门航空公司飞行员招聘信息填报页</title>

    <!-- Bootstrap -->
    <link href="./static/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="./static/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <link href="./static/css/bootstrap-theme.css" rel="stylesheet" media="screen">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="./static/js/jquery-1.8.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./static/js/bootstrap.js"></script>
    <!--For Date picker-->
    <script src="./static/js/bootstrap-datetimepicker.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#birthday").datetimepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                minView: 2
            });
        });
    </script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="row">
                <h1>厦门航空公司飞行员招聘信息填报页</h1>
            </div>
            <div class="row">
                <form action="./input.php" method="POST" class="form-horizontal">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">姓名</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" id="name" placeholder="姓名">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gender" class="col-sm-2 control-label">性别</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="gender" id="gender">
                                <option value="1">男</option>
                                <option value="2">女</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="birthday" class="col-sm-2 control-label">出生日期</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form_datetime" name="birthday" id="birthday"
                                   placeholder="1994-01-01">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="school" class="col-sm-2 control-label">毕业院校</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="school" id="school" placeholder="毕业院校">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="workbase" class="col-sm-2 control-label">期望工作地</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="workbase" id="workbase" placeholder="厦门">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="payforroad" class="col-sm-2 control-label">是否报销路费</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="payforroad" id="payforroad">
                                <option value="1">是</option>
                                <option value="0">否</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="payfortest" class="col-sm-2 control-label">是否报销体检费</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="payfortest" id="payfortest">
                                <option value="1">是</option>
                                <option value="0">否</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">提交</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
</body>
</html>