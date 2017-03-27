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

    function GetNews($id){
        $que = 'SELECT * FROM news WHERE `id` ='.$id;
        $arr = SqlQueryDo($que);
        return $arr;
    }
    function GetNewsOrderedId(){
        $que = 'SELECT * FROM `news` ORDER BY `date`';
        $arr = SqlQueryDo($que);
        $idArr = [];
        foreach($arr as $el){
            array_push($idArr,$el['id']);
        }
        return $idArr;
    }

        
?>