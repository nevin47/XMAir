<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/10
 * Time: 10:21
 */
include_once("xlsxwriter.class.php");

class exportxlsx
{
    var $db_data = array(
        array("编号", "姓名", "性别", "生日", "毕业院校", "期望工作地", "是否报销路费", "是否报销体检费")
    );

    function exportxlsx()
    {
        $this->get_data_from_db();
        $this->export_table();
    }

    function get_data_from_db()
    {
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname = "XMAir";

        $conn = new mysqli($server, $username, $password, $dbname);
        if ($conn->connect_errno) {
            die("Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error);
        }
        $conn->query("SET NAMES utf8");

        $sql = "SELECT * FROM `info_table`";

        $res = $conn->query($sql);

        while($row = $res->fetch_row())
        {
            if($row[6] == 1)
            {
                $row[6] = "是";
            }
            else
            {
                $row[6] = "否";
            }
            if($row[7] == 1)
            {
                $row[7] = "是";
            }
            else
            {
                $row[7] = "否";
            }
            array_push($this->db_data, $row);
        }
        //print_r($this->db_data);
    }

    function export_table()
    {
        ini_set('display_errors', 0);
        ini_set('log_errors', 1);
        error_reporting(E_ALL & ~E_NOTICE);

        $filename = "export.xlsx";
        header('Content-disposition: attachment; filename="'.XLSXWriter::sanitize_filename($filename).'"');
        header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        header('Content-Transfer-Encoding: binary');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');

        $rows = $this->db_data;

        $writer = new XLSXWriter();
        $writer->setAuthor('Some Author');
        foreach($rows as $row)
            $writer->writeSheetRow('Sheet1', $row);
        //$writer->writeToString();
        $writer->writeToStdOut();
    }
}

$xlsxobj = new exportxlsx();



