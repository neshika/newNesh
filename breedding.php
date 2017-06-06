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
  if ('сука' === find_where('animals',$temp,'sex')){
            $id_m = $temp;
            $id_d = $temp2;
                   
      }
  if ('кобель' === find_where('animals',$temp,'sex')){
           $id_m = $temp2;
            $id_d = $temp; 
      } 
 
//echo 'Мама: ' . var_dump($id_m);;

//echo 'Папа: ' . var_dump($id_d);;


// ******************** вывод картинки мамы и папы по id  из базы *****************-->  
?>  <img src="<?php echo print_pic($id_m)?>"><br>       
      
  
 <img src="<?php echo print_pic($id_d)?>"><br>      

 <?php  
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



