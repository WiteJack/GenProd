<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/css.css">
</head>

<body>
    <main>
        <div id="button">Кликни</div>
        <div id="formContainer">
            <div class="left-form">
                <h1>Получите набор файлов для руководителя:</h1>
                <div class="docs">
                    <img src="img/icon/doc.png" alt=""><img src="img/icon/xls.png" alt=""><img src="img/icon/pdf.png" alt=""><img
                        src="img/icon/pdf.png" alt=""><img src="img/icon/pdf.png" alt=""><img src="img/icon/pdf.png" alt=""><img
                        src="img/icon/pdf.png" alt="">
                    </div>
                    <div class="file">
                        <img class="filepng" src="img/file.png" alt="">
                        <img class="bookpng" src="img/book.png" alt="">
                    </div>
            </div>
            <div class="right-form">
                <img id="close" class="closepng" src="img/close.png" alt="">
                <form action="sendmail.php" method="POST" id="formRight">
                    <div class="form"">
                        <h2>Введите Email для получения файлов:</h2>
                        <div><input id="email_input" type="email" name="email" placeholder="E-mail"></div>
                        <h2>Введите телефон для подтверждения доступа:</h2>
                        <div><input id="phone_input" type="phone" name="phone" placeholder="+7 (000) 000-00-00" required></div>
                        <button>
<img id="to_submit" src="img/knopka.png" alt=""></button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <script src="js/js.js"></script>
</body>


</html>