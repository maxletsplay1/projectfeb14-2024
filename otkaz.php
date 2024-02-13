<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>В жизни бывает всякое</title>
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
</head>
<style>
    .first {
        margin-top: -40px;
        display: flex;
        flex-direction: column;
        justify-items: center;
        align-items: center;
        text-align: center;
    }

    h1 {
        margin-top: 6px !important;
    }

    #kot {
        margin-top: 10px !important;
    }
</style>

<body>
    <div class="first">
        <h1>Тебе отказали... <br> Такое бывает, не печалься!<br> А то из-за твоего грустного личика даже котик плачет...</h1>
        <img src="catcry.gif" id="kot" alt="">
    </div>
    <?php
    $cl = "#db5762";
    require 'footer.php';
    ?>
</body>

</html>