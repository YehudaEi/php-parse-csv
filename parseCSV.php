<?php

// Created by Yehuda Eisenberg

function parseCsv($filename, $header = true){
    $dataText = file_get_contents($filename);
    $dataArr = explode("\n", $dataText);

    if($header){
        $names = explode(",", $dataArr[0]);
        unset($dataArr[0]);
    }

    $res = array();
    foreach($dataArr as $data){
        $data = explode(",", $data);
        $tmp = array();
        foreach($data as $i => $dat){
            if($header)
                $tmp[trim($names[$i])] = trim($dat);
            else
                $tmp[$i] = trim($dat);
        }
        $res[] = $tmp;
    }

    return $res;
}
