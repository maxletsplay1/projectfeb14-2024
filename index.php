<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>14 февраля</title>
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
</head>
<style>
    .first,
    .second,
    .third,
    .fourth,
    .fifth,
    .sixth {
        display: flex;
        flex-direction: column;
        justify-items: center;
        align-items: center;
        text-align: center;
    }

    #submit {
        margin-top: 10px;
    }

    .hidden {
        display: none;
    }

    .btngroup {
        display: flex;
        flex-direction: row;
    }

    .input-hidden {
        position: absolute;
        left: -9999px;
        z-index: -9999;
    }

    input[type=radio]:checked+label>img {
        border: 3px solid #db5762;
        margin: 3px !important;
    }

    .grid {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center
    }

    .lg {
        min-width: 100px;
        min-height: 74px;
        font-size: 1.5em;
    }

    .xl {
        min-width: 140px;
        min-height: 100px;
        font-size: 1.7em;
    }

    #no,
    #no2,
    #no3 {
        max-width: 90px !important;
        max-height: 70px !important;
    }
</style>

<body>
    <?
    $date = date("d.m.Y");
    $date2 = date("14.02.2024");
    if ($date <= $date2) {
    ?>
        <form action="/db/add.php" method="POST">
            <div class="first">
                <h1>Введи свое имя, солнышко!</h1>
                <div class="btngroup">
                    <input type="text" required class="button-74" name="name" id="nameinput">
                    <button class=" button-74" id="nextButton" type="button">
                        <h2>Далее</h2>
                    </button>
                </div>
            </div>
            <div class="second hidden">
                <h1>Будешь моей валентинкой?</h1>
                <div class="btngroup">
                    <button class="button-74" type="button" id="SecondnextButton">
                        <h2>ДА!!!!</h2>
                    </button>
                    <button class="button-74" type="button" id="no">
                        <h2>Нет...</h2>
                    </button>
                    <button class="button-74  hidden" type="button" id="no2">
                        <h2>Нет...</h2>
                    </button>
                    <a href="/no" class="button-74  hidden" id="no3">
                        <h2>Нет...</h2>
                    </a>
                </div>
                <img src="kotik.gif" id="kot" alt="">
            </div>
            <div class="third hidden">
                <h1>Супер! Тогда чем мы будем заниматься?</h1>
                <div class="grid">
                    <div>
                        <input type="radio" checked name="exercise" class="input-hidden" id="walk" value="Прогуляться" />
                        <label for="walk">
                            <img src="/ex/walking.jpg" alt="" srcset="" id="pics">
                        </label>
                    </div>
                    <div>
                        <input type="radio" name="exercise" class="input-hidden" id="film" value="Посмотреть фильмы" />
                        <label for="film">
                            <img src="/ex/film.jpg" alt="" srcset="" id="pics">
                        </label>
                    </div>
                    <div>
                        <input type="radio" name="exercise" class="input-hidden" id="gaming" value="Поиграть" />
                        <label for="gaming">
                            <img src="/ex/gaming.jpg" alt="" srcset="" id="pics">
                        </label>
                    </div>
                    <div>
                        <input type="radio" name="exercise" class="input-hidden" id="sex" value="Тебя" />
                        <label for="sex">
                            <img src="/ex/sex.jpg" alt="" srcset="" id="pics">
                        </label>
                    </div>
                </div>
                <button class="button-74" id="ThirdnextButton" type="button">
                    <h2>Далее</h2>
                </button>
            </div>
            <div class="fourth hidden">
                <h1>Это хорошо, но надо же перекусить, верно?</h1>
                <div class="grid">
                    <div>
                        <input type="radio" checked name="food" class="input-hidden" id="pizza" value="Пиццу" />
                        <label for="pizza">
                            <img src="/food/pizza.jpg" alt="" srcset="" id="pics">
                        </label>
                    </div>
                    <div>
                        <input type="radio" name="food" class="input-hidden" id="burger" value="Бургеры" />
                        <label for="burger">
                            <img src="/food/burger.jpg" alt="" srcset="" id="pics">
                        </label>
                    </div>
                    <div>
                        <input type="radio" name="food" class="input-hidden" id="rolls" value="Роллы" />
                        <label for="rolls">
                            <img src="/food/rolls.jpg" alt="" srcset="" id="pics">
                        </label>
                    </div>
                    <div>
                        <input type="radio" name="food" class="input-hidden" id="Pasta" value="Пасту" />
                        <label for="Pasta">
                            <img src="/food/pasta.jpg" alt="" srcset="" id="pics">
                        </label>
                    </div>
                </div>
                <button class="button-74" id="FourthnextButton" type="button">
                    <h2>Далее</h2>
                </button>
            </div>
            <div class="fifth hidden">
                <h1>Как пожелаешь, а из этого что ты предпочтешь?)</h1>
                <div class="grid">
                    <div>
                        <input type="radio" checked name="drinks" class="input-hidden" id="cacao" value="Какао" />
                        <label for="cacao">
                            <img src="/drinks/cacao.jpg" alt="" srcset="" id="pics">
                        </label>
                    </div>
                    <div>
                        <input type="radio" name="drinks" class="input-hidden" id="tea" value="Чай" />
                        <label for="tea">
                            <img src="/drinks/tea.jpg" alt="" srcset="" id="pics">
                        </label>
                    </div>
                    <div>
                        <input type="radio" name="drinks" class="input-hidden" id="wine" value="Вино" />
                        <label for="wine">
                            <img src="/drinks/wine.jpg" alt="" srcset="" id="pics">
                        </label>
                    </div>
                    <div>
                        <input type="radio" name="drinks" class="input-hidden" id="Cola" value="Колу" />
                        <label for="Cola">
                            <img src="/drinks/cola.jpg" alt="" srcset="" id="pics">
                        </label>
                    </div>
                </div>
                <button class="button-74" id="FifthnextButton" type="button">
                    <h2>Далее</h2>
                </button>
            </div>
            <div class="sixth hidden">
                <h1>Последний вопрос-когда реализуем это?</h1>
                <input type="date" required name="date" min="2024-02-14" class="button-74">
                <button type="submit" id="submit" class="button-74">
                    <h2>Сохранить</h2>
                </button>
            </div>
        </form>
        <script>
            document.getElementById('nextButton').addEventListener('click', function() {
                document.querySelector('.first').classList.add('hidden');
                document.querySelector('.second').classList.remove('hidden');
            });
            document.getElementById('SecondnextButton').addEventListener('click', function() {
                document.querySelector('.second').classList.add('hidden');
                document.querySelector('.third').classList.remove('hidden');
            });
            document.getElementById('ThirdnextButton').addEventListener('click', function() {
                document.querySelector('.third').classList.add('hidden');
                document.querySelector('.fourth').classList.remove('hidden');
            });
            document.getElementById('FourthnextButton').addEventListener('click', function() {
                document.querySelector('.fourth').classList.add('hidden');
                document.querySelector('.fifth').classList.remove('hidden');
            });
            document.getElementById('FifthnextButton').addEventListener('click', function() {
                document.querySelector('.fifth').classList.add('hidden');
                document.querySelector('.sixth').classList.remove('hidden');
            });
            document.getElementById('no').addEventListener('click', function() {
                document.querySelector('#no').classList.add('hidden');
                document.querySelector('#no2').classList.remove('hidden');
                document.querySelector('#SecondnextButton').classList.add('lg');
            });
            document.getElementById('no2').addEventListener('click', function() {
                document.querySelector('#no2').classList.add('hidden');
                document.querySelector('#no3').classList.remove('hidden');
                document.querySelector('#SecondnextButton').classList.remove('lg');
                document.querySelector('#SecondnextButton').classList.add('xl');
            });
            document.addEventListener("DOMContentLoaded", function() {
                updateButtonState();
            });


            function updateButtonState() {
                var inputValue = document.getElementById('nameinput').value;
                if (inputValue === '') {
                    document.getElementById('nextButton').setAttribute("disabled", "");
                } else {
                    document.getElementById('nextButton').removeAttribute("disabled");
                }
            }

            document.getElementById('nameinput').addEventListener('input', function() {
                updateButtonState();
            });
        </script>
    <?
    } else {
        require "itog.php";
    }
    ?>
</body>

</html>