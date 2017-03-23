<?php
    
    function SqlQueryDo($query){
        mysql_connect('localhost','root','');
        mysql_select_db('News');
        while ($res = mysql_query($query)){
            $complRes = $res; 
        }
        mysql_close();
        return $res;
    }

    function GetSomethingFromNews($id,$whatNeedBring){
        $que = 'SELECT `'.$whatNeedBring.'` FROM news WHERE `id` ='.$id;
        $res = SqlQueryDo($que);
        $arr = mysql_fetch_assoc($res);
        $something = $arr[$whatNeedBring];
        return $something;
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
        $que = 'SELECT `id` FROM `news`';
        $arr = SqlQueryDo($que);
        $arr = mysql_fetch_assoc($arr);
        return $arr;
    }

?>