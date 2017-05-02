<?php
//公共函数库

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


