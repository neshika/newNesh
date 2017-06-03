<?php
require "db.php";
//require "includes/functions.php";
require "get_image.php";
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

<a class="buttons" href="/office.php" >В офис</a>
<?php

 if (isset($_POST['comment'])) {
//echo 'Поле было заполнено';
echo $a = $_POST['comment'];
echo $_SESSION['id_new'];
insert_name($_SESSION['id_new'],$_POST['comment']);

} else {
echo 'Поле не заполнено';
}
?>
<style type="text/css">
figure {
 width: 150px; /* Ширина области */
 height: 150px; /* Высота области */
 margin: 0; /* Обнуляем отступы */
 border:3px solid grey;
}
figure a { 
 width: 100%; /* Ширина изображений */
 height: 100%; /* Высота изображении */
 object-fit: cover; /* Вписываем фотографию в область */
}
</style>
<figure>
<a>
<?php
	$Hr=f_rand_col('HrHr','Hrhr','hrhr');
  	$W=f_rand_col('WW','Ww','ww');
  	$F=f_rand_col('FF','Ff','ff');
  	$B=f_rand_col('BB','Bb','bb');
  
  	$T=f_rand_col('TT','Tt','tt');
  	$M=f_rand_col('MM','Mm','mm');

      $all= "<br>".$Hr."<br>".$W."<br>".$F."<br>".$B."<br>".$T."<br>".$M;
    //echo $all;
   (f_get_image($Hr,$W,$F,$B,$T,$M));

 	$url=$_POST['url'];
 	
 //	echo '<img src="' . $url . ">";
?>
<img src="<?php echo $url?>" width="100%">
</a>
</figure>

</body>
</html>

