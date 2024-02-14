<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результаты</title>
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
</head>
<style>
    body,
    html {
        background-image: url("bg.jpg") !important;
        background-repeat: repeat !important;
    }

    .first {
        display: flex;
        flex-direction: column;
        justify-items: center;
        align-items: center;
        text-align: center;
        z-index: 10;
    }

    @keyframes inimate__one {
        0% {
            transform: skewY(0.5deg);
        }

        50% {
            transform: skewY(-0.5deg);
        }

        100% {
            transform: skewY(0.5deg);
        }
    }

    @keyframes inimate__two {
        0% {
            transform: scale(-1, -1) skewY(-0.5deg);
        }

        50% {
            transform: scale(-1, -1) skewY(0.5deg);
        }

        100% {
            transform: scale(-1, -1) skewY(-0.5deg);
        }
    }
</style>
<?
require "./db/db.php";
$quaryAll = "SELECT * FROM `finals`";
$all = mysqli_query($db, $quaryAll);
$all = mysqli_fetch_all($all);
$i = 0;
foreach ($all as $item) {
    $i++;
};
?>

<body>
    <div class="first">
        <h1>
            Ивент закончился! <br>
            <? echo $i ?> юзеров получили согласие, <br>
            Дальше-больше! <br>
            Увидимся в 2025 :)
        </h1>
    </div>
    <?php
    $cl = "#db5762";
    require 'footer.php';
    ?>
</body>

</html>