<?php
require "db.php";
require "includes/functions.php";
 //R::fancyDebug( TRUE );
ini_set('display_errors',-1);
error_reporting(E_ALL);

?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<title>Cимулятор заводчика</title>
</head>
<body>

<div align="center">
<?php

$id_m=$_SESSION['id_m'];
$id_d=$_SESSION['id_d'];
var_dump($id_m);
var_dump($id_d);
 $id_new=start($id_m,$id_d); // функция для получания статов 
        // ******************** вывод картинки собаки по id  *****************-->  
      echo "<br>Малыш:";
      var_dump($id_new);

      f_get_image($row_new['hr'],$row_new['ww'],$row_new['ff'],$row_new['bb'] ,$row_new['tt'],$row_new['mm']);
      ?><img src="<?php echo $_POST['url']?>"><?php
      insert_url($_POST['url'],$id_new); //вставляет ссылку на картинку в базу


      print_all_d($id_new); 
     $_SESSION['id_new'] = $id_new;

          //insert_name($_SESSION['id_new'],$_POST['comment']);
?>
        
<form method="POST" action="/kennel.php">
    <input type="submit" name="exit" value="Вернуться" class="knopka">
</form>
<form method="POST" action="/office.php">
<p>Имя щенка: 
   <textarea name="comment"></textarea></p>
  <p><input type="submit" value="Отправить" name="send" class="knopka">
  
</form>
</div>
</body>
</html>




