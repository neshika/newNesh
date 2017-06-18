<?php

require "db.php";
require "includes/functions.php";
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<title>Молодые родители</title>
</head>
<body>
<h1 align="center">Выбирите собак для племенного разведения...</h1>
<div style="background: white; text-align: center; height: 350px; width: 350px; float:left; margin-left: 180px;">
	<?php 
	//echo "<br>" . f_bdika_sex();	//дает рандомный пол
/** Содаем рандомную собаку и выводим на экран **/	
  	$Hr=f_rand_col('HrHr','Hrhr','hrhr');
  	$W=f_rand_col('WW','Ww','ww');
  	$F=f_rand_col('FF','Ff','ff');
  	$B=f_rand_col('BB','Bb','bb');
  
  	$T=f_rand_col('TT','Tt','tt');
  	$M=f_rand_col('MM','Mm','mm');

      $all= "<br>".$Hr."<br>".$W."<br>".$F."<br>".$B."<br>".$T."<br>".$M;
    //echo $all;
 	f_get_image($Hr,$W,$F,$B,$T,$M);
 	?>
 <img src="<?php echo $_POST['url']?>">
</div>
<div style="background: blue; text-align: center; height: 350px; width: 350px; float: right; margin-right: 180px; ">
	<?php 
	//echo "<br>" . f_bdika_sex();	//дает рандомный пол
/** Содаем рандомную собаку и выводим на экран **/	
  	$Hr=f_rand_col('HrHr','Hrhr','hrhr');
  	$W=f_rand_col('WW','Ww','ww');
  	$F=f_rand_col('FF','Ff','ff');
  	$B=f_rand_col('BB','Bb','bb');
  
  	$T=f_rand_col('TT','Tt','tt');
  	$M=f_rand_col('MM','Mm','mm');

      $all= "<br>".$Hr."<br>".$W."<br>".$F."<br>".$B."<br>".$T."<br>".$M;
    //echo $all;
 	f_get_image($Hr,$W,$F,$B,$T,$M);
 	?>
 <img src="<?php echo $_POST['url']?>">
</div> 
<form action="rand_dog.php" method="POST">
<button type="submit" class="knopka" name="rand">Еще варианты</button>
</form>
<form action="signup.php" method="POST">
<button type="submit" class="knopka" name="rand">Отлично</button>
</form>
</body>
</html>
