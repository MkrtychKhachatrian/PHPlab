<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@300;500;700&display=swap');
        body {
            background: #F9EFFB;
        }
        .block {
            text-align: center;
            font-size: 35px;
            font-family: 'Muli Regular Roman', sans-serif;
        }
    </style>
</head>
<body>
<div class="block">
    <?php
    $_POST["name"] = strip_tags($_POST["name"]);
    $_POST["phone"] = strip_tags($_POST["phone"]);
    $_POST["email"] = strip_tags($_POST["email"]);
    if (!empty($_POST["name"]) && !empty($_POST["phone"]) && !empty($_POST["email"])) {
        echo "Дякуємо за вашу заявку!<br>";
    }
    else {
        echo "Не всі дані введено, будь ласка, спробуйте ще раз!<br>";
    }
    ?>
    <a href="landing.html"><br>На головну</a>
</div>
</body>
</html>
