<?php
//PDO TEST

    function dd($arr){
        echo "<pre>";
            print_r($arr);
        echo "</pre>";
        die;
    }

    function pp($arr){
        echo "<pre>";
            var_dump($arr);
        echo "</pre>";
        die;
    }

    //循环遍历查询结果,整理数据
    function pdo_select_result($res){
        $data = [];
        foreach($res as $r){
            $data[] = $r;
        }
        return $data;
    }

    //查询
    $pdo = new PDO('mysql:host=localhost; dbname=wulinzhu', 'root', '');
    $pdo->exec("SET names utf8");

    $sql = "select * from stu";
    $res = $pdo->query($sql, PDO::FETCH_ASSOC);
    $data = pdo_select_result($res);
    //dd($data);

    //插入
//    $sql = "insert into stu values (null, 18, 'wulinzu')";
//    $res = $pdo->exec($sql);
//    if($res) echo '插入成功!';

    //批量插入
    $arr = ['张三', '李思', '王武', '王尼玛', 'xxoo', '啪啪啪'];
    for($i = 1; $i < 500; $i++){
        $age = rand(10, 100);
        $key = rand(0, 5);
        $sql = "insert into stu values (null, $age, " . "'" . $arr[$key]. "')";
        $res = $pdo->exec($sql);
        if($i == 99 && $res){
            echo '执行成功!';
        }
    }

    //编辑
//    $sql = "update stu set name = 'xxoo' where id = 6";
//    $res = $pdo->exec($sql);
//    if($res) {
//        echo '修改成功!';
//    }else{
//        echo '修改失败!';
//    }

    //删除
//    $sql = "delete from stu where id = 5";
//    $res = $pdo->exec($sql);
//    if ($res) {
//        echo '删除成功!';
//    }else{
//        echo '删除失败!';
//    }