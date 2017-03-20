<?php
    function SqlQueryDo($query){
        mysql_connect('localhost','root','');
        mysql_select_db('News');
        mysql_query($query);
        mysql_close();
    }
?>