<?php

    function dd($arr){
        echo "<pre>";
            print_r($arr);
        echo "</pre>";
        die;
    }

    //选择排序
    $arr = [3, 5, 9, 1];
    $count = count($arr);
    for($i = 0; $i < $count - 1; $i++){
        $p = $i;
        for($j = $i + 1; $j < $count; $j++){
            if($arr[$p] > $arr[$j]){
                $p = $j;
            }
        }
        if($p != $i){
            $tmp = $arr[$p];
            $arr[$p] = $arr[$i];
            $arr[$i] = $tmp;
        }
    }

    //快速排序
    function quick_sort($arr)
    {
        $base_num = current($arr);
        $count = count($arr);
        $right = $left = [];
        for ($i = 0; $i < $count; $i++) {
            if ($arr[$i] > $base_num) {
                $right[] = $arr[$i];
            } else {
                $left[] = $arr[$i];
            }
        }
        $right = quick_sort($right);
        $left = quick_sort($left);
        $arr = array_merge($left, [$base_num], $right);
        return $arr;
    }
    $arr = quick_sort($arr);
    dd($arr);