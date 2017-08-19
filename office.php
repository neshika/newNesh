		<?php
		//подключение файлов
		/*require "/html/header.html";
		require "/html/nav.html";
		require "/html/aside.html";
		*/
		require "/libs/up.php";

		echo 'Добро пожаловать, ' . $_SESSION['logged_user']->login . ' .';
				//date('d.m.Y', time() - 86400);
		echo ' Сегодня: ' . date('d.m.Y');


		$id=get_id($_SESSION['logged_user']->login);
		$l_time=find_where('users', $id,'l_time');
				$now=date('d.m.Y');  //2017-08-03
				$visits=find_where('users',$id,'visits');
			   // echo '<br>' . $visits .$now . $l_time;

				if($now!=$l_time){
				 // echo 'разые';
					$visits=$visits+1;

					insert_data('users',$id,'visits',$visits);
					insert_data('users',$id,'l_time',$now);

				}
				

				?><h3><li>Последние новости</li></h3>
				<?php if (isset($_POST['comment'])) { //если в форме NewDog включена кнопка отправки имени собаки
						//echo 'Поле было заполнено';
					echo 'родился малыш: ';
					echo $a = $_POST['comment'];
					   // echo $_SESSION['id_new'];
					insert_data('animals',$_SESSION['id_new'],'name',$_POST['comment']);
					  //  insert_name($_SESSION['id_new'],$_POST['comment']);

				} ?> 
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


		// $dog_id='2';
		// $Hr=find_where('dna',$dog_id,'hr');   //голая
		// $W=find_where('dna',$dog_id,'ww');
		// $F=find_where('dna',$dog_id,'ff');
		// $B=find_where('dna',$dog_id,'bb');
		// $T=find_where('dna',$dog_id,'tt');
		// $M=find_where('dna',$dog_id,'mm');
		// echo '<br>' . $dog_id  . $Hr . $W . $F . $B . $T . $M;
function ret_id_from_dna($dna){
	$array = R::getAssoc ('SELECT * FROM coat WHERE color =:co', array(':co'=> $dna));
	debug($array);
	$id=array_rand($array);//выбирает рандомное значение из массива
		
	return find_where('coat',$id,'url');
}
//end  function ret_id_from_dna($dna){



function TT_MM_B($B,$T,$M){
	if('b0'==$B){
		if( ('t1'==$T) && ('m1'==$M) ){
			echo ' hr1w0f0b0t1m1 шоко c пятнами и крапом';
			return ret_id_from_dna('hr1w0f0b0t1m1');
		}
		if( ('t0'==$T) && ('m1'==$M) ){
			echo ' hr1w0f0b0t1m1 шоко c пятнами';
			return ret_id_from_dna('hr1w0f0b0t0m1');
		}
		if( ('t1'==$T) && ('m0'==$M) ){
			echo ' hr1w0f0b0t0m0 шоко c крапом';
			return ret_id_from_dna('hr1w0f0b0t1m0');
		}
		if( ('t0'==$T) && ('m0'==$M) ){
			echo ' hr1w0f0b0t0m0 шоко';
			return ret_id_from_dna('hr1w0f0b0t0m0');
		}
	}
	if('b1'==$B){
		if( ('t1'==$T) && ('m1'==$M) ){
			echo ' hr1w0f0b0t1m1 черный c пятнами и крапом';
			return ret_id_from_dna('hr1w0f0b1t1m1');
		}
		if( ('t0'==$T) && ('m1'==$M) ){
			echo ' hr1w0f0b0t1m1 черный c пятнами';
			return ret_id_from_dna('hr1w0f0b1t0m1');
		}
		if( ('t1'==$T) && ('m0'==$M) ){
			echo ' hr1w0f0b0t0m0 черный c крапом';
			return ret_id_from_dna('hr1w0f0b1t1m0');
		}
		if( ('t0'==$T) && ('m0'==$M) ){
			echo ' hr1w0f0b0t0m0 черный';
			return ret_id_from_dna('hr1w0f0b1t0m0');
		}
	}
} //end function TT_MM_B($B,$T,$M)




function TT_MM_B_HR0($B,$T,$M){
	if('b0'==$B){
		if( ('t1'==$T) && ('m1'==$M) ){
				echo ' hr1w0f0b0t1m1 шоко c пятнами и крапом';
				return ret_id_from_dna('hr1w0f0b0t1m1');
		}
		if( ('t0'==$T) && ('m1'==$M) ){
				echo ' hr1w0f0b0t1m1 шоко c пятнами';
				return ret_id_from_dna('hr1w0f0b0t0m1');
		}
		if( ('t1'==$T) && ('m0'==$M) ){
				echo ' hr1w0f0b0t0m0 шоко c крапом';
				return ret_id_from_dna('hr1w0f0b0t1m0');
		}
		if( ('t0'==$T) && ('m0'==$M) ){
				echo ' hr1w0f0b0t0m0 шоко';
				return ret_id_from_dna('hr1w0f0b0t0m0');
		}
	}
	if('b1'==$B){
		 if( ('t1'==$T) && ('m1'==$M) ){
			echo ' hr1w0f0b0t1m1 черный c пятнами и крапом';
			return ret_id_from_dna('hr1w0f0b1t1m1');
		}
		if( ('t0'==$T) && ('m1'==$M) ){
			echo ' hr1w0f0b0t1m1 черный c пятнами';
			return ret_id_from_dna('hr1w0f0b1t0m1');
		}
		if( ('t1'==$T) && ('m0'==$M) ){
			echo ' hr1w0f0b0t0m0 черный c крапом';
			return ret_id_from_dna('hr1w0f0b1t1m0');
		}
		if( ('t0'==$T) && ('m0'==$M) ){
			echo ' hr1w0f0b0t0m0 черный';
			return ret_id_from_dna('hr1w0f0b1t0m0');
		}
	}

}//end function TT_MM_B_HR0($B,$T,$M){




		$Hr='hrhr';   //голая
		$Hr='Hrhr';   //пух
		$W='WW';
		$F='FF';
		$B='bB';
		$T='tt';
		$M='mm';
		
		('hrhr'==$Hr ? $Hr='hr1' : $Hr='hr0');
		('ww'==$W ? $W='w0' : $W='w1');
		('ff'==$F ? $F='f0' : $F='f1');
		('bb'==$B ? $B='b0' : $B='b1');
		('tt'==$T ? $T='t0' : $T='t1');
		('mm'==$M ? $M='m0' : $M='m1');

	if('hr1'==$Hr){
		echo 'голая';
		if('w0'==$W){
			   // echo ' не белая';
			if('f0'==$F){
				  //echo ' не рыжая';
				if('b0'==$B)
					$my_dog=TT_MM_B_HR0($B,$T,$M);

				if('b1'==$B)
					$my_dog=TT_MM_B_HR0($B,$T,$M);

		 	}
			if('f1'==$F){
				if('m1'==$M){
					echo ' hr1w0f1t0m0 рыжая c пятнами';
					$my_dog=ret_id_from_dna('hr1w0f1t0m1');
				}
		  		if('m0'==$M){
					 echo ' hr1w0f1t0m0 рыжая';
				  	$my_dog=ret_id_from_dna('hr1w0f1t0m0');
			  	}
			}

	  	}
  	  	if('w1'==$W){
  	  		if('b0'==$B){
				echo ' hr1w0b0t0m0 белая/шоко';
				$my_dog=ret_id_from_dna('hr1w0b0t0m0');
			}
 			if('b1'==$B){
	 			echo ' hr1w0b1t0m0 белая/черный';
		 		$my_dog=ret_id_from_dna('hr1w0b1t0m0');
		 	}
 		}
 	}


if('hr0'==$Hr){
  echo 'пух';
  
	if('w0'==$W){
			//не белая
		if('f0'==$F){
			  //не рыжая
			if('b0'==$B){
				//шоко
				if('m1'==$M){
					echo 'hr0w0f0b0m1 шоколад с пятнами';
					$my_dog=ret_id_from_dna('hr0w0f0b0m1');
				}
				if('m0'==$M){
					echo 'hr0w0f0b0m0 шоко';
					$my_dog=ret_id_from_dna('hr0w0f0b0m0');
				}
			}
			if('b1'==$B){
				//черный
	  			if('m1'==$M){
					echo 'hr0w0f0b1m1 черный с пятнами';
					$my_dog=ret_id_from_dna('hr0w0f0b1m1');
	  			}
				if('m0'==$M){
					echo 'hr0w0f0b1m0 черныq';
					$my_dog=ret_id_from_dna('hr0w0f0b1m0');
				}

			}
		}

		elseif('f1'==$F){
			if('m1'==$M){
	  			echo 'hr0w0f1m1 рыжий с пятнами';
	  			$my_dog=ret_id_from_dna('hr0w0f1m1');
			}
			if('m0'==$M){
	  			echo 'hr0w0f1m0 рыжий';
	  			$my_dog=ret_id_from_dna('hr0w0f1m0');

			}
		}

	}
	elseif('w1'==$W){
		if('b0'==$B){
  			echo 'hr0w1b0 белая/шоко';
  			$my_dog=ret_id_from_dna('hr0w1b0');
		}
		if('b1'==$B){
   			echo 'hr0w1b1 белая/черный';
   			$my_dog=ret_id_from_dna('hr0w1b1');
		}
	}

}



$dna=$Hr . $W . $F . $B . $T . $M;

echo '<br>$dna ' . $dna;

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

$array = R::getAll( 'SELECT * FROM stats ORDER BY total' );
foreach($array as $item) {
  foreach ($item as $key => $value) {
	 if('dog_id'==$key){
	   $string =R::getCol('SELECT name FROM animals WHERE id = :id',
		[':id' => $value]);
								  $name=$string[0];   //выДает имя

								  

								  $string =R::getCol('SELECT sex FROM animals WHERE id = :id',
								   [':id' => $value]);
								  $sex=$string[0];  //возвращает пол
								}
								if('dog_id'==$key){
								  $id=$value;     //ID собаки
								}
								if('speed'==$key){
								  $sp=$value;     //скорость
								}
								if('agility'==$key){
								  $agl=$value;    //уворот
								}
								if('teach'==$key){
								  $tch=$value;    //обучение
								}
								if('jump'==$key){
								  $jmp=$value;    //прыжки
								}
								if('scent'==$key){
								  $scnt=$value;   //обоняние
								}
								if('find'==$key){
								  $fnd=$value;    //поиск
								}
								if('total'==$key){
								  $ttl=$value;    //итого
								}
								if('mutation'==$key){
								  $mut=$value;    //мутация
								}

						   }  
						  // tabl($name,$sex,$sp,$agl,$tch,$jmp,$scnt,$fnd,$ttl,$mut);  

					   }

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
