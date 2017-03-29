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
 function SqlQueryDoForNews($query){
        mysql_connect('localhost','root','');
        mysql_select_db('News');
        $res = mysql_query($query);
        $arr = 0;
        while($curEl = mysql_fetch_assoc($res)){
             $arr = $curEl;
        }
        mysql_close();
        return $arr;
    }


    function GetNews($id){
        $que = 'SELECT * FROM news WHERE `id` ='.$id;
        $arr = SqlQueryDoForNews($que);
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
    function createFiles(){
        $str = $_POST['newsContent'];
        $str = iconv('utf-8','windows-1251',$str);
        file_put_contents('news/texts/'.$_POST['title'].'.txt',$str);
        $res = move_uploaded_file($_FILES['img']['tmp_name'], 'news/img/'.$_FILES['img']['name']);
        return $res;
    }
    function addToDB(){
        mysql_connect('localhost','root','');
        mysql_select_db('News');
        
        $pathToImg = 'news/img/'.$_FILES['img']['name'];
        $pathToText = 'news/texts/'.$_POST['title'].'.txt';
        $title = $_POST['title'];
        $date = $_POST['date'];
        
        $que = "INSERT INTO `news`(`name`, `pathToImg`, `pathToText`, `date`) VALUES ('$title','$pathToImg','$pathToText','$date')";
        createFiles();
        $result = mysql_query($que) or die( mysql_error());
        return $result;
    }


        
?>