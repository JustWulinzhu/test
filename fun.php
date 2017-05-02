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

    $arr = ['中国', '美国', '日本', '韩国', '德国', '中国', '美国', '中国', '日本'];
    //计算每个值出现的次数
    function array_keys_count($arr){
        $array_values = array_unique($arr);
        $data = [];
        foreach($array_values as $value){
            $i = 0;
            foreach($arr as $k => $v){
                if($v == $value){
                    $i++;
                    $data[$value] = '出现' . $i . '次';
                }
            }
        }
        return $data;
    }