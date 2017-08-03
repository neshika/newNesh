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
<?php

$id_m=$_SESSION['id_m'];
$id_d=$_SESSION['id_d'];

 $id_new=start($id_m,$id_d); // функция для получания параметров собаки 
        // ******************** вывод картинки собаки по id  *****************-->  
      echo "<br>Малыш:";
      var_dump($id_new);

       $row_new = R::getRow( 'SELECT * FROM animals WHERE id = :id',
       [':id' => $id_new]);

      f_get_image($row_new['hr'],$row_new['ww'],$row_new['ff'],$row_new['bb'] ,$row_new['tt'],$row_new['mm']);
      ?><img src="<?php echo $_POST['url'];?>"><?php
      insert_url($_POST['url'],$id_new); //вставляет ссылку на картинку в базу


      print_all_d($id_new); 
     
     /***************функция по получению стат в зависимости от отца и матери************/
     new_stats($id_m,$id_d,$id_new);

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
<p>Родители: </p>
<div id="left_breed"><?php detalis($id_m);?> </div>
<div id="right_breed"><?php detalis($id_d);?></div>
</body>
</html>




