<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
/*
    $person1 = $db->query('select * from links')->fetchAll(PDO::FETCH_ASSOC);
    foreach ($person1 as $item) {
            echo $item['link'];
        }*/
?>
    <div style="max-width: 1400px; display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh;">
        <form style="margin: 0 auto; width: 350px;" action="shortLink.php" method="post">
            <input style="padding: 20px" type="text" name="link" placeholder="Введите ссылку">
            <input style="padding: 20px" type="submit" value="Получить">
        </form>

        <div style="border: black 1px solid; margin-top: 20px; padding: 5px">
            <a href="<?= $_GET['link'] ?>"><?php echo $_GET['newLink'];?></a>
        </div>

    </div>
</body>
</html>