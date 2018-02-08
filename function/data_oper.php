<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/8
 * Time: 21:35
 */

class data_oper
{
    var $original_data;
    var $name;
    var $gender;
    var $birthday;
    var $school;
    var $workbase;
    var $payroad;
    var $paytest;

    function data_oper($post_val)
    {
        $this->original_data = $post_val;
    }

    public function generate_data()
    {
        $this->name = $this->original_data['name'];
        $this->gender = $this->original_data['gender'];
        $this->birthday = $this->original_data['birthday'];
        $this->school = $this->original_data['school'];
        $this->workbase = $this->original_data['workbase'];
        $this->payroad = $this->original_data['payforroad'];
        $this->paytest = $this->original_data['payfortest'];
    }

    public function generate_sql()
    {
        $this->generate_data();
        $sql = "INSERT INTO `info_table` (`name`, `gender`, `birthday`, `school`, `payroad`, `paytest`) 
                VALUES('$this->name', '$this->gender', '$this->birthday', '$this->school', '$this->payroad',
                 '$this->paytest')";
        return $sql;
    }
}