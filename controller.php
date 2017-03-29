<?php
    require 'model/model.php';
    function checkFill(){
        if((!empty($_POST)) && (!empty($_FILES))){
            foreach($_POST as $el){
                if(empty($el)){
                    return false;    
                }
            }
            return true;
        }
        return false;
    }


    function addNews(){
        if(checkFill()){
            addToDB();
            return true;

        }
        return false;
    }
    addNews();
    header('Location: index.php');

    
?>