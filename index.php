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
        .add {
            display: block;
            width: 100px;
            height: 40px;
            background-color: aliceblue;
            text-align: center;
        }
        .add a{
            color: blue;
        }
        img {
            width: 500px;
            height: 500px;
        }
    </style>
</head>
<body>
  <span class="add"><a href="addNews.php">Добавить новость</a></span>
   <?php
    $numOfNews = GetNewsOrderedId();
    foreach($numOfNews as $id): 
    $arr = GetNews($id);
    ?>
   
    <div class = 'news'>
        <h3><a href="news.php?id=<?php echo $id ?>"><?php echo $arr['name'] ?></a></h3>
        <span> <?php echo $arr['date']?></span>
        <img src="<?php echo $arr['pathToImg']?>">
        <p>
            <?php echo (writePreview($arr['pathToText']))?>
        </p>
    </div>
    <?php endforeach;?>
</body>
</html>