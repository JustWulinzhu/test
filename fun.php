<?php
//公共函数库

    function dd($arr = []){
        if(empty($arr)) die;
        echo "<pre>";
            print_r($arr);
        echo "</pre>";
        die;
    }

    function pp($arr = []){
        if(empty($arr)) die;
        echo "<pre>";
            var_dump($arr);
        echo "</pre>";
        die;
    }

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

    //$arr = ['中国', '美国', '日本', '韩国', '德国', '中国', '美国', '中国', '日本'];
    //计算每个值出现的次数
    function array_keys_count($arr){
        $array_unique = array_unique($arr);
        $data = [];
        foreach($array_unique as $value){
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

    //判断数组中是否有重复值
    function is_array_repeat($arr){
        for($i = 0; $i < count($arr); $i++){
            for($j = $i + 1; $j < count($arr); $j++){
                if($arr[$i] == $arr[$j]){
                    return true;
                }
            }
        }
        return false;
    }

    //折半查找
    function binary_search($arr, $value){
        $low = 0;
        $high = count($arr);
        while($low <= $high){
            $mid = intval(($low + $high) / 2);
            if($value == $arr[$mid]) return $mid;
            if($arr[$mid] > $value) $high = $mid - 1;
            if($arr[$mid] < $value) $low = $mid + 1;
        }
    }

    //冒泡排序
    function mao_pao($arr){

    }
