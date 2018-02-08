<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/8
 * Time: 22:43
 */
include("../function/data_oper.php");

$server = "localhost";
$username = "root";
$password = "";
$dbname = "XMAir";

$conn = new mysqli($server, $username, $password, $dbname);
if ($conn->connect_errno) {
    die("Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}

if (!empty($_POST)) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $ret = $conn->query($sql);
    if (!$ret) {
        echo $conn->error;
        header("Location: ./admin/index.php");
    } else {
        if ($ret->num_rows > 0) {
            header("Location: main.php");
        } else {
            header("Location: index.php");
        }
    }

} else {
    echo "访问非法！";
    header("Location: index.php");
}
