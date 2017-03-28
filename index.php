<?php
    require_once '/view/view.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sto-News</title>
    <style>
        body{
            background-color: #65b0f0;
        }
        .news{
            background-color: aliceblue;
            margin: auto;
            text-align: center;
            width: 600px;
            margin-bottom: 20px;
        }
        .news h3{
            padding: 0;
            margin: 0;
        }
        .news img{
            
            padding: 0px;
        }
        .news p{
            color: gray;
            
        }
        .news span {
            display: block;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
   <?php
    $numOfNews = GetNewsOrderedId();
    foreach($numOfNews as $id): 
    $arr = GetNews($id);
    ?>
   
    <div class = 'news'>
        <h3><a><?php echo $arr[0]['name'] ?></a></h3>
        <span> <?php echo $arr[0]['date']?></span>
        <img src=<?php echo $arr[0]['pathToImg']?>>
        <p>
            <?php echo (writePreview($arr[0]['pathToText']))?>
        </p>
    </div>
    <?php endforeach;?>
</body>
</html>