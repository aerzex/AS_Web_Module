<!DOCTYPE html>
    <html lang="ru">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="src/styles/main.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
            <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&display=swap" rel="stylesheet">

            <title>Алексеенко A.P.</title>
        </head>
        <body>
            <div class="navbar">
                <div class="navbar-logo">
                  <img src="src/images/logo.png" alt="Logo">
                </div>
                <div class="navbar-links">
                  <a class="pixelify-sans" href="index.html">Главная</a>
                  <a class="pixelify-sans" href="index.html">Главная</a>
                  <a class="pixelify-sans" href="index.html">Главная</a>
                  <a class="pixelify-sans" href="index.html" class="active">Главная</a>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="pixelify-sans">Немного о себе</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <h2 class="pixelify-sans">Алексеенко Алексей, студент второго курса на направлении "Компьютерная безопасность" в 
                            Дальневосточном федеральном университете. Мне нравится сфера информационной 
                            безопасности и программирования. Я очень целеустремлённый и ответственный человек, поэтому я верю, 
                            что за время моего обучения я узнаю много о своей будущей профессии и выпущусь отличным специалистом.</h2>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="image"></div>
                        </div>
                        <div class = "row"><p class="text-image pixelify-sans">Мой кумир</p>
                              </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container">
                <div class = "row">
                    <div class="button col-12">
                        <button id="mabatton">Нажми</button>
                        <p id="demo"></p>
                    </div>
                </div>
            </div>
            <script type="text/javascript" src="src/js/button.js"></script>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="pixelify-sans">Привет, <?php echo $_COOKIE['User']; ?></h1>
                    </div>
                </div>
                <div class="row">
                </div>
    </html>

    <?php
    require_once('bd.php');

    $link = mysqli_connect('db', 'root', '123456', 'bd_name');

    ?>