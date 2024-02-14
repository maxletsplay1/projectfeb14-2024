<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Очередной отказ...</title>
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
</head>
<style>
    .first {
        display: flex;
        flex-direction: column;
        justify-items: center;
        align-items: center;
        z-index: 10;
    }

    #heart {
        position: absolute;
        left: 0;
        right: 0;
        margin: 0 auto;
        z-index: 5;
        max-width: 95vw;
        max-height: 95vh;
    }

    html,
    body {
        background-color: white !important;
    }

    h1 {
        color: black !important;
    }

    #myText {
        display: none;
    }

    .hidden {
        display: none;
    }
</style>

<body>
    <img src="heart.png" id="heart" alt="" srcset="">
    <div class="first">
        <h1>Ну и пожалуйста!</h1>
        <h1>Снизу ссылка, отправь ее</h1>
        <p id="myText"><? $link = "http://$_SERVER[HTTP_HOST]";
                        echo $link ?>/otkaz</p>
        <button class="button-74" id="final" onclick="copyContent()">
            <h2 class="tyk">Копировать</h2>
            <h2 class="copied hidden">Скопировано</h2>
        </button>
    </div>
    <script>
        const copyContent = () => {
            const textToCopy = document.getElementById('myText').innerText;
            const textArea = document.createElement('textarea');
            textArea.value = textToCopy;
            document.body.appendChild(textArea);
            textArea.select();
            document.execCommand('copy');
            document.body.removeChild(textArea);
            console.log('Content copied to clipboard');
            document.querySelector('.tyk').classList.add('hidden');
            document.querySelector('.copied').classList.remove('hidden');
        }
    </script>
    <?php
    $cl = "#000000";
    require 'footer.php';
    ?>
</body>

</html>