<?php
require "db.php";
require "includes/functions.php";
 //R::fancyDebug( TRUE );
ini_set('display_errors',1);
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

<h1><?php var_dump($_POST['ONONA']); var_dump($_SESSION['para']);?></h1>


 <?php
 

 $temp=(int)$_SESSION['para'];
 $temp2=(int)$_POST['ONONA'];
 echo $temp . "<br>"; echo $temp2 . "<br>";
  if ('сука' === ret_sex($temp)){
            $id_m = $temp;
            $id_d = $temp2;
                   
      }
  if ('кобель' === ret_sex($temp)){
           $id_m = $temp2;
            $id_d = $temp; 
      } 
 
//echo 'Мама: ' . var_dump($id_m);;

//echo 'Папа: ' . var_dump($id_d);;


// ******************** вывод картинки собаки по id  *****************-->  
     $row_m = R::getRow( 'SELECT * FROM animals WHERE id = :id',
        [':id' => $id_m]);
      echo "<br>Мama:";
   f_get_image($row_m['hr'],$row_m['ww'],$row_m['ff'],$row_m['bb'] ,$row_m['tt'],$row_m['mm']);
      ?><img src="<?php echo $_POST['url']?>"><?php
    print_all_d($id_m);       
      
  // ******************** вывод картинки собаки по id  *****************-->  
     
      $row_d = R::getRow( 'SELECT * FROM animals WHERE id = :id',
        [':id' => $id_d]);
      echo "<br>Папа:";
   f_get_image($row_d['hr'],$row_d['ww'],$row_d['ff'],$row_d['bb'] ,$row_d['tt'],$row_d['mm']);
      ?><img src="<?php echo $_POST['url']?>"><?php
	print_all_d($id_d);
$_SESSION['id_m']=$id_m;
$_SESSION['id_d']=$id_d;

?>
<form method="POST" action="/NewDog.php">
    <input type="submit" name="nazvanie_knopki" value="Вяжем" class="knopka"/>
    </form>
<form method="POST" action="/kennel.php">
    <input type="submit" name="exit" value="Вернуться" class="knopka"/>
</form>
</div>
</body>
</html>



