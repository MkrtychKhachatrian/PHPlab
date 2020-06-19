<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Form</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@300;500;700&display=swap');
        body {
            font-family: 'Oswald', serif;
        }
        .container {
            position: relative;
            max-width: 400px;
            margin: 50px auto 0;
            background: white;
            border-radius: 30px;
        }
        .form {padding: 40px;}
        .form input,
        .form textarea {
            display: block;
            width: 100%;
            padding: 0 20px;
            margin-bottom: 10px;
            background: #F9EFFB;
            line-height: 40px;
            border-width: 0.5px;
            border-radius: 20px;
            font-size: 20px;
        }
        .form input[type="submit"] {
            margin-top: 30px;
            background-color: #F2404F;
            border: 2px solid #588498;
            border-radius: 20px;
            font-size: 30px;
        }
        .form textarea {resize: none;}
        .form h1 {
            text-align: center;
            margin-top: 0;
            font-weight: 500;
            font-size: 30px;
        }
    </style>
</head>
<body>
<form method="post" action="form1.php" class="container">
    <div class="form">
        <h1>Залишити заявку</h1>
        <input name="name" type="text" placeholder="Ім'я">
        <input name="email" type="email" placeholder="Email">
        <input name="phone" type="text" placeholder="телефон">
        <textarea name="info" placeholder="Коментарі"></textarea>
        <input type="submit" value="Відправити">
    </div>
</form>
</body>
</html>