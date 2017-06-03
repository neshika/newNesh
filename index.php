<?php

require "db.php";
require "includes/functions.php";
/** Проверяет залогинен ли польззователь Если да, дает выбр действий **/

	if ( isset($_SESSION['logged_user']) ){ 
		include_once "html/index_session.html";
	 	echo "Привет, " . $_SESSION['logged_user']->login . '!  Чем займемся?';
	 	if ('admin'==$_SESSION['logged_user']->login){?>
	 		<a class="buttons" href="admin/admin.php" >В админку</a>
	 <?php }else{?>
	 			<a class="buttons" href="/office.php" >В офис</a>
				<a class="buttons" href="/logout.php" >Выйти</a>
	<?php }
	}else{ /** Если пользователь не залогинен создает рандомную собаку по данными поля. **/
		include_once "html/index_NOsession.html";?>

		<div class="image_wrap">
		<img src="/pic/def.png" class="def_pic">
		<br>
		
		<a class="buttons" href='/login.php'>Да</a>
		<a class="buttons" href='/signup.php'>НЕТ</a>
		<?php
		/*<form method="POST" action="/login.php">
			<button type="submit" class="knopka">ДА</button>
		</form>
		<form method="POST" action="/signup.php">
			<button type="submit" class="knopka">НЕТ</button>
		</form>*/
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
 <img src="<?php echo $_POST['url']?>" width="45%"><?php
	}?>
	<!--<div id="my_text">Здесь мы изучаем блоки и CSS</div> -->
	<p class="text_effect">Ваша удача рядом</p>
	</div>