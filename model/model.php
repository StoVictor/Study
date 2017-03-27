<?php
    
    function SqlQueryDo($query){
        mysql_connect('localhost','root','');
        mysql_select_db('News');
        $res = mysql_query($query);
        $arr = [];
        while($curEl = mysql_fetch_assoc($res)){
             array_push($arr, $curEl);
        }
        mysql_close();
        return $arr;
    }
    /* использовать ORDER BY по дате + удалить лишнее функции, пусть одна функция возвращает масив со значаениями, правильно проименоваными;
    
    */
    function GetSomethingFromNews($id,$whatNeedBring){
        $que = 'SELECT `'.$whatNeedBring.'` FROM news WHERE `id` ='.$id;
        $arr = SqlQueryDo($que);
        $result = $arr[0][$whatNeedBring];
        return $result;
    }

    function GetNewsName($id){
        return GetSomethingFromNews($id,'name');       
    }
    function GetNewsPathImg($id){
        return GetSomethingFromNews($id,'pathToImg');
    }
    function GetNewsPathText($id){
        return GetSomethingFromNews($id,'pathToText');    
    }
    function GetNewsDate($id){
        return GetSomethingFromNews($id,'date');    
    }
    
    function GetNewsId(){
        $que = 'SELECT id FROM news';
        $arr = SqlQueryDo($que);
        return $arr;
    }

        
?>