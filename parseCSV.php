<?php

// Created by Yehuda Eisenberg

function parseCsv($filename, $title = true){
    $dataText = file_get_contents($filename);
    $dataArr = explode("\n", $dataText);

    if($title){
        $names = explode(",", $dataArr[0]);
        unset($dataArr[0]);
    }

    $res = array();
    foreach($dataArr as $data){
        $data = explode(",", $data);
        $tmp = array();
        foreach($data as $i => $dat){
            if($title){
                if(isset($tmp[trim($names[$i])])){
                    if(is_string($tmp[trim($names[$i])]))
                        $tmp[trim($names[$i])] = array($tmp[trim($names[$i])], trim($dat));
                    else
                        $tmp[trim($names[$i])][] = trim($dat);
                }
                else
                    $tmp[trim($names[$i])] = trim($dat);
            }
            else
                $tmp[$i] = trim($dat);
        }
        $res[] = $tmp;
    }

    return $res;
}
