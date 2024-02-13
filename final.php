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
    <p id="myText">http://projectfeb14.atwebpages.com/sog?link=<? echo $finallink ?></p>
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
    <style>
        .footer {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: absolute;
            right: 0;
            left: 0;
            bottom: 0;
            z-index: 10;
            text-shadow: -2px 3px 12px rgba(0, 0, 0, 0.36);
        }

        svg {
            height: 20px;
            width: 20px;
            -webkit-filter: drop-shadow(-2px 3px 12px rgba(0, 0, 0, 0.36));
            filter: drop-shadow(-2px 3px 12px rgba(0, 0, 0, 0.36));
        }

        .group {
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 10px;

        }

        .footext {
            margin-bottom: -20px;

        }

        a {
            text-decoration: none;
        }

        #txt {
            color: white;
        }
    </style>
    <div class="footer">
        <h2 class="footext" id="txt">Сайт создан прикола ради за ночь</h2>
        <div class="group">
            <a href="https://github.com/maxletsplay1" class="group">
                <h2 id="txt">Git автора</h2>
                <svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" width="13" height="13" class="bi bi-github" viewBox="0 0 16 16">
                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8" />
                </svg>
            </a>
        </div>
    </div>
</body>

</html>