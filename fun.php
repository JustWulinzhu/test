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

    $arr = [
        [
            'id' => 3,
            'name' => 'xxx'
        ],
        [
            'id' => 23,
            'name' => 'x',
        ],
        [
            'id' => 13,
            'name' => 'xx'
        ]
    ];

    //多维数组按照某个字段排序
    function array_sort($arr, $field, $sort = 'ASC'){
        $data = [];
        foreach($arr as $k => $v){
            $data[] = $v[$field];
        }
        if($sort === 'ASC'){
            asort($data);
        }else{
            arsort($data);
        }
        $result_arr = [];
        foreach($data as $k => $v) {
            $result_arr[$k] = $arr[$k];
        }
        return $result_arr;
    }