<?php
    require 'model/model.php';
    function BuildNews(){
        $numOfNews = GetNewsOrderedId();
        foreach($numOfNews as $id){
            GetNews($id);
        }
    }
    function getPreview($pathToText){
        $content = file_get_contents($pathToText);
        $content = iconv('windows-1251', 'utf-8', $content);
        
        $countOfSym = intval((iconv_strlen($content) / 3));
        $arr = [];
        for($i = 0; $i < $countOfSym; $i++){
            array_push($arr,$content[$i]);   
        }
        return $arr;
    }
    function writePreview($pathToText){
        $arr =  getPreview($pathToText);
        $preview = implode($arr);
        $preview = mb_substr($preview,0,-2);
        $preview = $preview . '...';
        return $preview;
    }
?>