<!DOCTYPE html>
<html lang="ru">

    <head>
        <meta charset="UTF-8">
    </head>

    <?php 
    require_once "link.php";

    include_once 'header.php';
    ?>


    <form action="" method="POST">
    Отправка заявки<br><br>
    Название заявки: 
    <br> 
    <input name="title">
    <br><br>
    Описание: 
    <br> 
    <textarea name="description"></textarea>
    <br><br>
    Сроки: 
    <br>
    <input type="datetime-local" name="datetime"/>
    <br><br> 
    Приоритет:  
    <br>
    <select name="priority">
        <option value="Низкий">Низкий</option>
        <option value="Средний">Средний</option>
        <option value="Высокий">Высокий</option>
    </select>  
    <br><br>
    <input type="submit"><br><br>
    </form>



    <?php
    if (!empty($_POST['title']) and !empty($_POST['description']) 
        and !empty($_POST['datetime']) and !empty($_POST['priority'])) {
        $title = $_POST['title'];
	    $description = $_POST['description'];
        $client = $_SESSION['user_login'];
        $datetime = $_POST['datetime'];
        $priority = $_POST['priority'];

        $query = "INSERT INTO requests
		    SET title='$title', description='$description', client='$client',
                deadline='$datetime', priority='$priority', executor='none', status='undone', manager='none' ";
        mysqli_query($link, $query);
        echo "запрос отправлен";
    } else {
        echo "Заполните все поля";
    }
    ?>


</html> 