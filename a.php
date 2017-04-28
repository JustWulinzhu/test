<?php

//    if(file_exists('x.php')){
//        fopen('x.php', 'r');
//    }else{
//        die('文件不存在!');
//    }

//    set_error_handler("error_system");
//
//    function error_system($error_level, $error_messages){
//        echo "<b>Error : </b> <span style = 'color:red;'> 错误级别 : [$error_level] ;</span> <span style = 'color:blue'>错误信息 : $error_messages </span><br/>";
//        die();
//    }

    trigger_error('错误测试');