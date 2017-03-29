<?php 
    require_once '/view/view.php';
    $id = $_GET['id'];
    $news = GetNews($id);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sto-news</title>
        <style>
        body{
            background-color: #65b0f0;
        }
        .full_news{
            display: block; 
            background-color: aliceblue;
            margin: auto;
            text-align: center;
            width: 600px;
            margin-bottom: 20px;
        }
        .full_news h3{
            padding: 0;
            margin: 0;
        }
        .full_news img{
            
            padding: 0px;
        }
        .full_news p{
            word-break: break-all;
            font-size: 20px;
            text-align: center;
            
        }
        .full_news span {
            display: block;
            margin: 0;
            padding: 0;
        }
            .back {
                display: block;
                position: absolute;
                right: 50px;
                top: 50px;
                width: 100px;
                height: 25px;
                background-color: #2d2d96;
                text-align: center;
            }
            .back a{
                color: white;
            }
        img {
            width: 500px;
            height: 500px;
        }
    </style>
</head>
<body>
    <div class="full_news">
        <h3><?php echo $news['name'] ?></h3>
        <span> <?php echo $news['date']?></span>
        <img src="<?php echo $news['pathToImg']?>">
        <p>
            <?php echo getNewsText(($news['pathToText']))?>
        </p>
    </div>
    <span class="back"><a href="index.php">На главную</a></span>

</body>
</html>