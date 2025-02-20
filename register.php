<!DOCTYPE html>
<html lang="ru">

    <head>
        <meta charset="UTF-8">
    </head>


    <form action="" method="POST">
        Регистрация<br><br>
	    <input name="login"><br><br>
	    <input type="password" name="password"><br><br>
	    <input type="password" name="confirm"><br><br>
	    <input type="submit"><br><br>
    </form>

    <?php

    require_once "link.php";

	if (!empty($_POST['login']) and !empty($_POST['password']) and !empty($_POST['confirm'])) {
		if ($_POST['password'] == $_POST['confirm']) {
			$login = $_POST['login'];
		    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		
            $query = "SELECT * FROM users WHERE login='$login'";
		    $user = mysqli_fetch_assoc(mysqli_query($link, $query));

            if (empty($user)) {
                $query = "INSERT INTO users
		            SET login='$login', password='$password', status_id='2'";
                mysqli_query($link, $query);
                
                $_SESSION['auth'] = true; // пометка об авторизации
            echo "Регистрация успешна";
                
            } else {
                echo "Ошибка, логин занят";
            }

		} else {
			echo "Ошибка, пароли не совпадают";
		}
	}


    ?>

<br>
<br>
<a href="login.php">Страница авторизации</a>
    


</html> 