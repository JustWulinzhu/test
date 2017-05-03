<?php

    //$ch = curl_init('baidu.com');
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_ENCODING, 'utf-8');
    curl_setopt($ch, CURLOPT_URL, 'sports.qq.com');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    echo $output;
    curl_close($ch);

//    $ch = curl_init('http://www.phpchina.com/article-40161-1.html');
//    $fp = fopen("curl.txt", "w");
//    curl_setopt($ch, CURLOPT_FILE, $fp);
//    //curl_setopt($ch, CURLOPT_HEADER, 0);
//    curl_exec($ch);
//    curl_close($ch);
//    fclose($fp);