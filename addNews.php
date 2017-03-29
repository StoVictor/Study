<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sto-News</title>
    <style>
        body {
            background-color: #65b0f0;
        }
        .newsContent {
            width: 800px;
            height: 400px;
            display: block;
        }
        .title {
            width: 800px;
            display: block;
        }
        form {
            display: block;
            position: absolute;
            left: 250px;
        }
        .bold {
            font-weight: 600;
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
    </style>
</head>
<body>
    <form action="controller.php" method="post" enctype="multipart/form-data">
        <span class="bold">Название новости</span>
        <input type="text" name="title" class="title">
        <span class="bold">Картинка новости</span>
        <input type="file" name="img" class="img">
        <span class="bold">Дата новости</span>
        <input type="date" name="date"><br>
        <span class="bold">Текст новости</span>
        <textarea name="newsContent" class="newsContent"></textarea>
        <input type="submit" value="отправить">
    </form>
    <span class="back"><a href="index.php">На главную</a></span>
</body>
</html>