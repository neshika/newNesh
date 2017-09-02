<?php
require "db.php";
		//подключение файлов
		require "/html/header.html";
		require "/html/nav.html";
		require "/html/aside.html";
		

		require "includes/functions.php";

		//var_dump($_POST);

		echo 'Добро пожаловать, ' . $_SESSION['logged_user']->login . ' .';
				//date('d.m.Y', time() - 86400);
		echo ' Сегодня: ' . date('d.m.Y');

		$id=get_id($_SESSION['logged_user']->login);
		$l_time=find_where('users', $id,'l_time');
				$now=date('Y-m-d');  //2017-08-03
				$visits=find_where('users',$id,'visits');
			   echo '<br>' . $visits .$now . $l_time;

				if($now!=$l_time){
				 // echo 'разые';
					$visits=$visits+1;

					insert_data('users',$id,'visits',$visits);
					insert_data('users',$id,'l_time',$now);

				}
				

				?><h3><li>Последние новости</li></h3>
				<?php 
					if (isset($_POST['comment'])) { //если в форме NewDog включена кнопка отправки имени собаки
						//echo 'Поле было заполнено';
					echo 'родился малыш: ';
					echo $a = $_POST['comment'];
					   // echo $_SESSION['id_new'];
					insert_data('animals',$_SESSION['id_new'],'name',$_POST['comment']);
					  //  insert_name($_SESSION['id_new'],$_POST['comment']);

					} 
					if ( find_where('users', $id,'f_time') == $now ) {
						
						echo 'необходимо дать имя новым собакам!';
						//$count = R::count( 'animals', 'owner = :owner && status = 1',[':owner' => $owner]);

						$array[] = R::getAssoc('SELECT id FROM animals WHERE owner = :owner && status = 1' ,[':owner' => $_SESSION['logged_user']->login]);
        				
        				
        				//debug($array);
        				 foreach($array as $item) {
              					foreach ($item as $key => $value) {
              						 echo '<a href="/name.php?id=' . $key . '">';?>

               						<img src="<?php echo from_id_to_url($key);?>" width="5%" float="left"></a><?php

              					}
              			}
						
					}



				?> 
				<h3><li>Важные события: </li></h3>


				<?php

				
				function tabl($name,$sex,$sp,$agl,$tch,$jmp,$scnt,$fnd,$ttl,$mut){
					?>  
					<tr> 
					 <td><?php echo $name;?></td>
					 <td><?php echo $sex;?></td>
					 <td><?php echo $sp;?></td>
					 <td><?php echo $agl;?></td>
					 <td><?php echo $tch;?></td>
					 <td><?php echo $jmp;?></td>
					 <td><?php echo $scnt;?></td>
					 <td><?php echo $fnd;?></td>
					 <td><?php echo $ttl;?></td>
					 <td><?php echo $mut;?></td>
				 </tr>

				 <?php
			 }
			 $owner=$_SESSION['logged_user']->login;



		// if (isset($_POST['Choose'])){
		//   //var_dump($_POST['select']);
		//   if (1==$_POST['select']){
		//     //echo 'сортировка по имени';
		//     $array[] = R::getAssoc('SELECT id,name FROM animals WHERE owner = :owner && status = 1 ORDER BY name' ,
		//         [':owner' => $owner]);
		//     debug($array);
		//   }
		//   if (2==$_POST['select']){
		//     //echo 'сортировка по статам';

		//   $array = R::getAll( 'SELECT * FROM stats ORDER BY total' );
		//        foreach($array as $item) {
		//               foreach ($item as $key => $value) {
		//                       if('dog_id'==$key){
		//                           $string =R::getCol('SELECT name FROM animals WHERE id = :id',
		//                               [':id' => $value]);

		//                           echo $string[0];   //выает имя
		//                       }
		//                       if('total'==$key){
		//                         echo " Итого= " .  $value;
		//                       }
		//                       var_dump($string[0]);
		//                       var_dump($value);
		//                      // tabl($string[0],$value);

		//                 }    
		//               echo "<br><br>";
		//             }
		//     echo 'сортировка по статам';
		//   }
		//   if (3==$_POST['select']){
		//     //echo 'сортировка по полу';
		//     $array[] = R::getAssoc('SELECT id,name FROM animals WHERE owner = :owner && status = 1 ORDER BY sex' ,
		//         [':owner' => $owner]);
		//     debug($array);
		//   }
		//   if (4==$_POST['select']){
		//    // echo 'сортировка по Индексу';
		//      $array[] = R::getAssoc('SELECT id,name FROM animals WHERE owner = :owner && status = 1 ORDER BY id' ,
		//         [':owner' => $owner]);
		//     debug($array);
		//   }
		//   if (0==$_POST['select']){
		//     echo 'без сортировки';
		//   }
		//}
?>

<table width="450" cellpadding="2" cellspacing="0" border="1" >
  <colgroup width="150">
  <colgroup span="9" align="center" width="50">
  <col span="5">
  <col span="4">
</colgroup>
<tr border="1"> 
 <td>Имя</td><td>пол</td><td>Скорость</td><td>Уворот</td>
 <td>Обучение</td><td>Прыжки</td><td>Обоняние</td><td>Поиск</td>
 <td>Итого</td><td>Мутация</td>
</tr>
<?php  

// $array = R::getAll( 'SELECT * FROM stats ORDER BY total' );
// foreach($array as $item) {
//   foreach ($item as $key => $value) {
// 	 if('dog_id'==$key){
// 	   $string =R::getCol('SELECT name FROM animals WHERE id = :id',
// 		[':id' => $value]);
// 								  $name=$string[0];   //выДает имя

								  

// 								  $string =R::getCol('SELECT sex FROM animals WHERE id = :id',
// 								   [':id' => $value]);
// 								  $sex=$string[0];  //возвращает пол
// 								}
// 								if('dog_id'==$key){
// 								  $id=$value;     //ID собаки
// 								}
// 								if('speed'==$key){
// 								  $sp=$value;     //скорость
// 								}
// 								if('agility'==$key){
// 								  $agl=$value;    //уворот
// 								}
// 								if('teach'==$key){
// 								  $tch=$value;    //обучение
// 								}
// 								if('jump'==$key){
// 								  $jmp=$value;    //прыжки
// 								}
// 								if('scent'==$key){
// 								  $scnt=$value;   //обоняние
// 								}
// 								if('find'==$key){
// 								  $fnd=$value;    //поиск
// 								}
// 								if('total'==$key){
// 								  $ttl=$value;    //итого
// 								}
// 								if('mutation'==$key){
// 								  $mut=$value;    //мутация
// 								}

// 						   }  
// 						  // tabl($name,$sex,$sp,$agl,$tch,$jmp,$scnt,$fnd,$ttl,$mut);  

// 					   }

					   ?>
				   </colgroup>
			   </table>

			   <form action="office.php" method="post">
				  <p>Сортировать собак по:
					 <select name="select">

					   <option selected value="0" ></option>
					   <option value="1" >Имени</option>
					   <option value="2" >Статам</option>
					   <option value="3" >полу</option>
					   <option value="4" >ID</option>
				   </select></p>
				   <p><input type="submit" value="Отправить" name="Choose"></p>
			   </form>

			   <img src="<?php echo $my_dog;?>">

			   <?php 

		//echo '$num= ' . $num=Rand(1,25);





		// $dna='hr1w0f0b1t0m0';
		// $array = R::getAssoc ('SELECT id FROM coat WHERE color =:co', array(':co'=> $dna));


		// debug($array);

		// $num=count($array);   //конец 
		// $num=Rand(1,$num);  //ранд число

		// var_dump($array[$num]); //индекс

		// $stats = R::dispense( 'dna' );
		// $stats->dog_id = '1';
		// $stats->url_id = $array[$num];
		// $id = R::store( $stats );



		//var_dump(f_get_image($Hr,$W,$F,$B,$T,$M));

			   ?>

			   <img src="<?php //echo $_POST['url'];?>">

			   <?php
		//'blackMM_01';


			   require '/libs/down.php';
