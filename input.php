<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/8
 * Time: 20:40
 */
include("./function/data_oper.php");

$server = "localhost";
$username = "root";
$password = "";
$dbname = "XMAir";

$conn = new mysqli($server, $username, $password, $dbname);
if($conn->connect_errno)
{
    die("Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}

if (!empty($_POST)) {
    foreach($_POST as $key=>$val)
    {
        if($val == null)
        {
            $_POST[$key] = "N/A";
        }
    }
    $data_op_obj = new data_oper($_POST);
    $sql = $data_op_obj->generate_sql();
    $ret = $conn->query("SET NAMES utf8");
    $ret = $conn->query($sql);
    if($ret)
    {
        echo "提交成功！";
    }
    else{
        echo "提交失败！";
    }

} else {
    echo "访问非法！";
    header("Location: index.php");
}
