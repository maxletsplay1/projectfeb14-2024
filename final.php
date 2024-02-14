<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Молодец!</title>
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
        text-align: center;
    }

    #myText {
        display: none;
    }

    #flow {
        max-width: 100vw;
        position: absolute;
        top: 0;
        left: 0;
        animation: inimate__one 5s infinite;
    }

    #flow2 {
        transform: scale(-1, -1);
        max-width: 100vw;
        position: absolute;
        bottom: 0;
        right: 0;
        animation: inimate__two 5s infinite;
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

    .button-74 {
        z-index: 100;
    }

    .hidden {
        display: none;
    }
</style>

<body>
    <img src="flower.png" id="flow" alt="" srcset="">
    <img src="flower.png" id="flow2" alt="" srcset="">
    <?
    $link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $link = parse_url($link, PHP_URL_QUERY);
    parse_str($link, $result);
    foreach ($result as $key => $val) {
        $finallink = $val;
    };
    ?>
    <p id="myText"><? $mainlink = "http://$_SERVER[HTTP_HOST]";
                    echo $mainlink ?>/sog?link=<? echo $finallink ?></p>
    <div class="first">
        <h1>Умничка! Тыкни снизу и отправь скопированную ссылку)</h1>
        <button class="button-74" id="final" onclick="copyContent()">
            <h2 class="tyk">ТЫК!</h2>
            <h2 class="copied hidden">Скопировано)</h2>
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
            document.querySelector('.tyk').classList.add('hidden');
            document.querySelector('.copied').classList.remove('hidden');
        }
    </script>
    <?php
    $cl = "#ffffff";
    require 'footer.php';
    ?>
</body>

</html>