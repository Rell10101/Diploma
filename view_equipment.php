<!DOCTYPE html>
<html lang="ru">


    <head>
        <meta charset="UTF-8">
    </head>


    <?php  ?>

    <?php
    require_once "link.php";


    include_once 'header.php';


	$query = "SELECT * FROM equipment";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);



    $result = '';
	
	foreach ($data as $elem) {
		$result .= '<p>';
		
        $result .= 'Номер: ' . $elem['id'] . '<br>'; 
		$result .= 'Название: ' . $elem['title'] . '<br>'; 
		$result .= 'Расположение: ' . $elem['location'] . '<br>';
		
		$result .= '</p>';
        $result .=  "<hr>";
	}
	
	echo $result;
    
    ?>





</html> 