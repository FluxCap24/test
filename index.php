
<?php
    $answer1 = $_POST['answer1'];
    $answer2 = $_POST['answer2'];

    if (isset($_POST['otpravit'])) {
        switch($answer1){
            case('SQR(X)'):
                $succ1 = "Ваш ответ: $answer1 - верный!";
            break;
        default:
                $error1 = "Поля пустые! Либо ваш ответ: $answer1 - неверный!";
        }
    }
    ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Опрос</title>
</head>
<body>
 <h2>Тестирование по информатике <br>5 вопросов</h2> 
<form action="" method="post">
    <br>
    <h3>Вопрос 1: Для возведения в квадрат применяется функция</h3>
    <input type="text" name="answer1" placeholder = "Введите ответ" id="">
    <!--Вывод ответа 1-->
        <br>
        <?php if (isset($answer1)){
            echo $succ1;
        }if(isset($error1)){
            echo $error1;
        }

        ?>
    <br>
    <h3>Вопрос 2: Наиболее наглядной формой описания алгоритма является структурно-стилизованный метод</h3>
    <input type="text" name="answer2" placeholder = "Введите ответ" id="">
    <br>
    <button type="submit">Отправить ответ</button>
</form>
</body>
</html>