<!DOCTYPE html>
<html lang="ru">

    <head>
        <meta charset="UTF-8">
    </head>


    <form action="" method="POST">
        Авторизация<br><br>
	    Логин:  <input name="login"><br><br>
	    Пароль: <input type="password" name="password"><br><br>
	    <input type="submit"><br><br>
    </form>
    

    <?php
    require_once "link.php";

    if (!empty($_POST['login']) and !empty($_POST['password'])) {
        $login = $_POST['login'];
	
	    $query = "SELECT * FROM users WHERE login='$login'"; // получаем юзера по логину
	    $res = mysqli_query($link, $query);
	    $user = mysqli_fetch_assoc($res);
	
	    if (!empty($user)) {
		    $hash = $user['password']; // хешированный пароль из БД
		
		    // Проверяем соответствие хеша из базы введенному паролю
		    if (password_verify($_POST['password'], $hash)) {
                echo "Авторизация прошла успешно";
                // записываем логин в суперглобальную переменную
                $_SESSION['user_login'] = $user['login'];
                header('Location: index.php');
		    } else {
                echo "Неправильный пароль";
		    }
	    } else {
            echo "Такой пользователь не найден";
	    }
    } else {
        echo "Введите свои данные";
    }
	
    ?>


<br>
<br>
<a href="register.php">Страница регистрации</a>


</html> 