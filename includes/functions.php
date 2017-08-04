<?php
function test(){
	echo 'подключен файл functions.php';
}
/*Функция возвращает залогиненого пользователя из куки*/
function ret_owner(){
	return $_SESSION['logged_user']->login;
}
function debug($arr){
    echo '<pre>' . print_r($arr, true). '</pre>';
}
/*Функция создает электронную подпись 6 цыфр и записывает ее а поле sign в таблице users*/
function rand_sign($id){
	 $row = R::getRow( 'SELECT * FROM users WHERE id = :id',
       [':id' => $id]);
	
	while ($row['sign'] == $value=Rand(100000,999999))
	 {
	 	//echo 'одинаковые';  	
      }
      R::exec( 'UPDATE users SET sign=:sign WHERE id = :id ', array(':sign'=> $value, ':id' => $id));
      $row = R::getRow( 'SELECT * FROM users WHERE id = :id',
       [':id' => $id]);
      echo 'цифровая подпись: ' . $row['sign'];
}
/*Функция распечатывает все опции собак из таблицы*/
function print_all(){

	 $array = R::getAll( 'SELECT * FROM animals' );
       foreach($array as $item) {
              foreach ($item as $key => $value) {
                 echo " | " . "$value";
                }    
              echo "<br><br>";
            }
}
/**************************** функция печатает на экран статы и ГП*************************/
function detalis($id){

          echo '<br>Статы: ' . find_where('animals',$id,'name');
          echo '<br>Скорость:_____ ' . find_where('stats',$id,'speed');
          echo '<br>Уворот:_______ ' . find_where('stats',$id,'agility');
          echo '<br>Обучение:_____ ' . find_where('stats',$id,'teach');
          echo '<br>Прыжки:______ ' . find_where('stats',$id,'jump');
          echo '<br>Обоняние:_____ ' . find_where('stats',$id,'scent');
          echo '<br>Поиск:________ ' . find_where('stats',$id,'find');
          echo '<br>Итого:________ ' . find_where('stats',$id,'total');
          echo '<br>ГП: ' . find_where('animals',$id,'sex');;
          echo '<br>hr:_____ ' . find_where('animals',$id,'hr');
          echo '<br>aa:_____ ' . find_where('animals',$id,'aa');
          echo '<br>bb:_____ ' . find_where('animals',$id,'bb');
          echo '<br>tt:______ ' . find_where('animals',$id,'tt');
          echo '<br>mm:____ ' . find_where('animals',$id,'mm');
          echo '<br>ww:____ ' . find_where('animals',$id,'ww');
          echo '<br>ff:______ ' . find_where('animals',$id,'ff');


}
/**************************** функция печатает на экран дерево(родственников)*************************/
function f_tree($id){
         // echo '<br>Семья: ';
          echo '<hr>';
          echo '<br>мама: ' . find_where('animals',$id,'mum');
          echo '<br>дед: ' . find_where('animals',$id,'g0dad');
          echo '<br>бабка: ' . find_where('animals',$id,'g0mum');
          echo '<br>прадед(по деду): ' . find_where('animals',$id,'gg0dad1');
          echo '<br>прабабка(по деду): ' . find_where('animals',$id,'gg0mum2');
          echo '<br>прадед(по бабке): ' . find_where('animals',$id,'gg0dad3');
          echo '<br>прабабка(по бабке): ' . find_where('animals',$id,'gg0mum4');
          echo '<hr>';

          echo 'папа: ' . find_where('animals',$id,'dad');
           echo '<br>дед: ' . find_where('animals',$id,'g1dad');
          echo '<br>бабка: ' . find_where('animals',$id,'g1mum');
          echo '<br>прадед(по деду): ' . find_where('animals',$id,'gg1dad1');
          echo '<br>прабабка(по деду): ' . find_where('animals',$id,'gg1mum2');
          echo '<br>прадед(по бабке): ' . find_where('animals',$id,'gg1dad3');
          echo '<br>прабабка(по бабке): ' . find_where('animals',$id,'gg1mum4');
}
/***************получает сумму денег по имени владельца************/
function print_money($owner){
   $id=get_id($owner);
         $coins = get_count('1', $id);
         $coins=number_format ($coins , $decimals = 0 ,$dec_point = "." , $thousands_sep = " " ); //number_format — Форматирует число с разделением групп
         return $coins;
}

/***************увеличивает сумму денег  на 50 000 ************/
function put_money($owner){
  $id=get_id($owner);
  $coins = get_count('1', $id);
  $coins = $coins + 1;

 R::exec( 'UPDATE owner_items SET count= :coins WHERE owner_id = :id AND item_id = :item', array(':coins' => $coins,':item'=> '1', ':id' => $id));
   

}
// /*Функция вносит изменения имени собаки по ее Id*/
// function insert_name($id,$name){
// 	 R::exec( 'UPDATE animals SET name=:name WHERE id = :id ', array(':name'=> $name, ':id' => $id));
// 	//$bean = R::load($id, $name);
// 	//$id = R::store($bean); // int
// }
/*Функция вносит данные с таблицу статы*/
function insert_new_stats($id_new,$speed_new,$agility_new,$teach_new, $jump_new,$scent_new,$find_new,$total_new,$mutation){
   $stats = R::dispense( 'stats' );
    $stats->dog_id = $id_new;
    $stats->speed = $speed_new;
    $stats->agility = $agility_new;
    $stats->teach = $teach_new;
    $stats->jump = $jump_new;
    $stats->scent = $scent_new;
    $stats->find= $find_new;
    $stats->total = $total_new;
    $stats->mutation = $mutation;

    $id = R::store( $stats );
}

/*Функция вносит изменения имени собаки по ее Id*/
function insert_data($tabl,$id,$cell,$value){  //$tabl - название таблицы \\ $id-ай ди выбранного\\ $cell-названия столба\\ $value- значение
    if ('animals'===$tabl){
        switch ($cell) {
                               /*данные по папе*/
                               case 'gg1mum4':
                                 return R::exec( 'UPDATE animals SET url=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                 break;
                               case 'gg1dad3':
                                 return R::exec( 'UPDATE animals SET url=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                 break;
                               case 'gg1mum2':
                                 return R::exec( 'UPDATE animals SET url=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                 break;
                               case 'gg1dad1':
                                 return R::exec( 'UPDATE animals SET url=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                 break;
                               case 'g1mum':
                                 return R::exec( 'UPDATE animals SET url=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                 break;
                               case 'g1dad':
                                 return R::exec( 'UPDATE animals SET url=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                 break;
                               case 'gg0mum4':
                                 return R::exec( 'UPDATE animals SET url=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                 break;
                               case 'gg0dad3':
                                 return R::exec( 'UPDATE animals SET url=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                 break;
                               case 'gg0mum2':
                                 return R::exec( 'UPDATE animals SET url=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                 break;
                               case 'gg0dad1':
                                 return R::exec( 'UPDATE animals SET url=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                 break;
                              /*данные по маме*/
                               case 'g0mum':
                                 return R::exec( 'UPDATE animals SET url=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                 break;
                               case 'g0dad':
                                 return R::exec( 'UPDATE animals SET url=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                 break;
                              /*данные по собаке*/
                               case 'url':
                                 return R::exec( 'UPDATE animals SET url=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                 break;
                               case 'litter':
                                 return R::exec( 'UPDATE animals SET litter=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                 break;
                               case 'puppy':
                                 return R::exec( 'UPDATE animals SET puppy=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                 break;
                               case 'status':
                                 return R::exec( 'UPDATE animals SET status=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                 break;
                               case 'ff':
                                 return R::exec( 'UPDATE animals SET ff=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                 break;
                               case 'ww':
                                 return R::exec( 'UPDATE animals SET ww=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                 break;
                               case 'mm':
                                 return R::exec( 'UPDATE animals SET mm=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                 break;
                               case 'tt':
                                 return R::exec( 'UPDATE animals SET tt=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                 break;
                               case 'bb':
                                 return R::exec( 'UPDATE animals SET bb=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                 break;
                               case 'aa':
                                 return R::exec( 'UPDATE animals SET aa=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                 break;
                               case 'hr':
                                 return R::exec( 'UPDATE animals SET hr=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                 break;
                               case 'dad':
                                   return R::exec( 'UPDATE animals SET dad=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                 break;
                               case 'mum':
                                   return R::exec( 'UPDATE animals SET mum=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                 break;
                               case 'now':
                                 return R::exec( 'UPDATE animals SET now=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                 break;
                               case 'birth':
                                 return R::exec( 'UPDATE animals SET birth=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                 break;
                               case 'kennel':
                                 return R::exec( 'UPDATE animals SET kennel=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                 break;
                               case 'owner':
                                 return R::exec( 'UPDATE animals SET owner=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                 break;
                               case 'breeder':
                                 return R::exec( 'UPDATE animals SET breeder=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                 break;
                               case 'race':
                                 return R::exec( 'UPDATE animals SET race=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                 break;
                               case 'sex':
                                 return R::exec( 'UPDATE animals SET sex=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                 break;
                               case 'name':
                                 return R::exec( 'UPDATE animals SET name=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                 break;
                               case 'id':
                                 return R::exec( 'UPDATE animals SET id=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                 break;
        }
	}//tabl animals
	if('users'===$tabl){
   
                    switch ($cell) {
                              case 'visits':
                                 return R::exec( 'UPDATE users SET visits=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                  break;
                            case 'l_time':
                                 return R::exec( 'UPDATE users SET l_time=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                  break;
                             case 'email':
                                    return R::exec( 'UPDATE users SET enail=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                    break;
                            case 'login':
                                    return R::exec( 'UPDATE users SET login=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                     break;
                          case 'id':
                                    return R::exec( 'UPDATE users SET id=:value WHERE id = :id ', array(':value'=> $value, ':id' => $id));
                                    break;
        }
	}//tabl USERS
  if('stats'===$tabl){
              
                   switch ($cell) {
                          case 'mutation':
                                    return R::exec( 'UPDATE stats SET total=:value WHERE dog_id = :id ', array(':value'=> $value, ':id' => $id));
                                     break;
                          case 'total':
                                    return R::exec( 'UPDATE stats SET total=:value WHERE dog_id = :id ', array(':value'=> $value, ':id' => $id));
                                     break;
                          case 'find':
                                    return R::exec( 'UPDATE stats SET find=:value WHERE dog_id = :id ', array(':value'=> $value, ':id' => $id));
                                    break;
                        case 'scent':
                                    return R::exec( 'UPDATE stats SET scent=:value WHERE dog_id = :id ', array(':value'=> $value, ':id' => $id));
                                     break;
                          case 'jump':
                                    return R::exec( 'UPDATE stats SET jump=:value WHERE dog_id = :id ', array(':value'=> $value, ':id' => $id));
                                     break;
                          case 'teach':
                                    return R::exec( 'UPDATE stats SET teach=:value WHERE dog_id = :id ', array(':value'=> $value, ':id' => $id));
                                    break;
                         case 'agility':
                                    return R::exec( 'UPDATE stats SET agility=:value WHERE dog_id = :id ', array(':value'=> $value, ':id' => $id));
                                     break;
                          case 'speed':
                                    return R::exec( 'UPDATE stats SET speed=:value WHERE dog_id = :id ', array(':value'=> $value, ':id' => $id));

                                     break;
                          case 'dog_id':
                                    return R::exec( 'UPDATE stats SET id=:value WHERE dog_id = :id ', array(':value'=> $value, ':id' => $id));
                                    break;
        }
  }//tabl stats


  $bean = R::load($id, $name);
	$id = R::store($bean); // int
}
/*                                             *************************   голая/пух                     */
/*Функция возвращает тип собаки hrhr / HrHr / Hrhr*/
function ret_hr($id){
	 $string =R::getCol('SELECT hr FROM animals WHERE id = :id',
        [':id' => $id]);

	 return $string[0];
}
/*Функция пишет тип собаки по русски в зависимоти от Генетического типа*/
function print_hr($var){
	if ($var=='Hrhr') return 'голая';
	else return 'пуховая';
}
/*Функция считает голая или пух в зависимоти от родителей*/
function gol_pooh($on,$ona){
	//Hrhr - голый
	//hrhr - пух
	
	$temp='hrhr';
	if('hrhr'==$on){			//он пух
		if('hrhr'==$ona) return $ona;	//она пух= малыш пух
		else {							//она голая
			$num=Rand(1,2);
			if(1==$num) return $ona;	//шанс 50% на 50%
			else return $on;
		}
	}
	if('Hrhr'==$on){			//он голый
		if('Hrhr'==$ona){	//она Голая
			$num=Rand(1,3);
			//ECHO $num;
			//echo $ona;
			if(1==$num || 2==$num){
			 return $ona; //шанс 75% голый 25% пух
			}
			if(3==$num){
			 return $temp; // 25% пух
			}
			
		}
		else {							//она пух
			$num=Rand(1,2);
			if(1==$num) return $ona;		//шанс 50% на 50%
			else return $on;
		}
	}

}
/*                                             *************************    данные по параметру                 */
 /*Функция возвращает данные противоположного пола при вязке*/
function get_where($tabl, $param, $owner){

   	return R::getAssoc ('SELECT id,name FROM animals WHERE sex =:pol and breeder=:own', array(':pol'=> $param, ':own' => $owner));

}
 /*Функция возвращает количество итемов у нанного владельца*/
function get_count($item, $owner){

    $string=R::getcol('SELECT count FROM owner_items WHERE owner_id =:id and item_id=:item', array(':id'=> $owner, ':item' => $item));
    return $string[0];

}
function get_id($login){

    $string =R::getCol('SELECT id FROM users WHERE login = :log',
        [':log' => $login]);

   return $string[0];

}
/*                                             *************************    данные по ID                 */

 /*Функция возвращает данные по собаке по ее ID*/
function print_all_d($id){
	
  $array =  R::getAll( 'SELECT * FROM animals WHERE id = :id',
        [':id' => $id]); 
	foreach($array as $item) {
              foreach ($item as $key => $value) {
                 echo " | " . " $value";
                }    
              echo "<br><br>";
            }
}
function print_stats_d($id){
  
  $array =  R::getAll( 'SELECT * FROM stats WHERE dog_id = :id',
        [':id' => $id]); 
  foreach($array as $item) {
              foreach ($item as $key => $value) {
                 echo " | " . "$value";
                }    
              echo "<br><br>";
            }
}

//  /*Функция возвращает имя владельца по собаке по ее ID*/
// function ret_breeder($id){
// 	$string =  R::getCol( 'SELECT breeder FROM animals WHERE id = :id',
//         [':id' => $id]); 
		
// 	      return $string [0];
                
// }
/*Функция возвращает пол собаки по ее ID*/
// function ret_sex($id){
// 	$string =  R::getCol( 'SELECT sex FROM animals WHERE id = :id',
//         [':id' => $id]); 
		
// 	      return $string [0];
                
// }
// /*Функция возвращает имя собаки по ее ID*/
// function ret_name($id){
// 	If (0!=$id){
// 	$string =  R::getCol( 'SELECT name FROM animals WHERE id = :id',
//         [':id' => $id]); 
// 		return $string[0];
// 	}
// 	else return 'не извесно';
                
// }
// /*Функция возвращает название питомника собаки по ее ID*/
// function ret_ken($id){
// 	$string =  R::getCol( 'SELECT kennel FROM animals WHERE id = :id',
//         [':id' => $id]); 
		
// 	      return $string [0];
                
// }
// /*Функция возвращает дата создания питомника собаки по ее ID*/
// function ret_birth($id){
// 	$string =  R::getCol( 'SELECT birth FROM animals WHERE id = :id',
//         [':id' => $id]); 
			
// 	      return $string [0];
                
// }
// /*Функция возвращает маму собаки по ее ID*/
// function ret_mum($id){
// 	$string =  R::getCol( 'SELECT mum FROM animals WHERE id = :id',
//         [':id' => $id]); 
// 			if(0==$string [0]) return 0;
// 			else  return (int)$string [0];
                
// }
// /*Функция возвращает папу собаки по ее ID*/
// function ret_dad($id){
// 	$string =  R::getCol( 'SELECT dad FROM animals WHERE id = :id',
//         [':id' => $id]); 
			
// 	      if(0==$string [0]) return 0;
// 			else  return (int)$string [0];
                
// }
/*Функция возвращает название картинки в зависимости от пола собаки по ее ID*/
function ret_pic($id){
	if('сука'==find_where('animals',$id,'sex'))
		return '<img src = "/pic/female_mini.png">';
	else
		return '<img src = "/pic/male_mini.png">';
	
                
}

/*                                             *************************    1 страница рандомная собака  */
function f_rand_col($param, $param2, $param3){
	$num=Rand(1,3);
	if ( $num == 1)
		$col = $param;
	if ($num == 2)
		$col = $param2;
	else
		$col = $param3;
	return $col;
	
}
/*                                             *************************    1 страница рандомная пол собаки  */
function f_bdika_sex(){
	if(Rand(1,2)==1)
		$sex='кобель';
	else
		$sex='сука';
	return $sex;

}
?>
<!-------------------<img src="<?php echo $_POST['url']?>" width="100%"> -----$_POST['url']= $anwer;---------->

 
 <?php
 function print_pic($id){
 	return find_where('animals',$id,'url');
 }
 /*Функция вносит путь до картинки собаки*/
function insert_url($url,$id){
	R::exec( 'UPDATE animals SET url=:name WHERE id = :id ', array(':name'=> $url, ':id' => $id));

}
 /*Функция рисует путь до картинки для пухов собак*/
 function ret_need($array2, $need){

 		if (strrpos($array2 , $need)){

 			$anwer="pic/" . $need . "/" . $array2 . ".png";
 			return $anwer;
 		}
 		
 		
 }
  /*Функция вносит в переменную $_POST['url'] путь до картинки*/
 function ret_img($array){ //hr_white
 		//$array='hr_shoko';
			$need='';
			$anwer="pic/" . $array . ".png";
 		
 		if (strrpos($array , 'r_')){
 			$anwer="pic/hrhr/" . $array . ".png";
 		 		
 		}elseif(strrpos($array , $need)){
 			$anwer="pic/" . $array . ".png";

 		}else{
 			$need='MM';
 			
 		//echo "<br>need  " . $need;
 			if (strrpos($array , $need)) $anwer=ret_need($array, $need);
 			$need='TT';
 			
 		//echo "<br>need  " . $need;
 			if (strrpos($array , $need)) $anwer=ret_need($array, $need);
 			$need='TM';
 			
 		//echo "<br>need  " . $need;
 			if (strrpos($array , $need)) $anwer=ret_need($array, $need);
 		}
 		
 		
 		$_POST['url']= $anwer;
 		//var_dump($_POST['url']);
}





 
// $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
 //$GLOBALS["$hr_black"]

//пуховые виды ====================================================
	//черный пух
	$hr_black='<img src="pic/hrhr/hr_black.png">';
	$hr_blackMM='<img src="pic/hrhr/hr_blackMM.png">';

	//рыжий пух
	$hr_orange='<img src="pic/hrhr/hr_orange.png">';
	$hr_orangeMM='<img src="pic/hrhr/hr_orangeMM.png">';

	//шоко пух
	$hr_shoko='<img src="pic/hrhr/hr_shoko.png">';
	$hr_shokoMM='<img src="pic/hrhr/hr_shokoMM.png">';

	//белый пух
	$hr_white='<img src="pic/hrhr/hr_white.png">';
	$hr_white_sh='<img src="pic/hrhr/hr_white_sh.png">';




//echo 'проверка пятен и крапа';
	//голые виды ====================================================
//orange
	$orangeMM='<img src="pic/MM/OrangeMM.png"';
	$orange='<img src="pic/Orange.png">';

	//black
	$black='<img src="pic/black.png">';
	$blackTTMM='<img src="pic/TTMM/blackTTMM.png">';
	$blackMM='<img src="pic/MM/blackMM.png">';
	$blackTT='<img src="pic/TT/blackTT.png">';

	//shoko

	$shoko='<img src="pic/shoko.png">';
	$shokoTTMM='<img src="pic/TTMM/shokoTTMM.png">';
	$shokoMM='<img src="pic/MM/shokoMM.png">';
	$shokoTT='<img src="pic/TT/shokoTT.png">';

	//white
	$witeTTMM='<img src="pic/TTMM/whiteTTMM.png">';
	$white='<img src="pic/white.png">';

/*	//orange
	$orangeMM='<img src="pic/orange/OrangeMM.png"';
	$orange='<img src="pic/orange/Orange.png">';

	//black
	$black='<img src="pic/black/black.png">';
	$blackTTMM='<img src="pic/white/blackTTMM.png">';
	$blackMM='<img src="pic/white/blackMM.png">';
	$blackTT='<img src="pic/white/blackTT.png">';

	//shoko

	$shoko='<img src="pic/shoko/shoko.png">';
	$shokoTTMM='<img src="pic/white/shokoTTMM.png">';
	$shokoMM='<img src="pic/white/shokoMM.png">';
	$shokoTT='<img src="pic/white/shokoTT.png">';

	//white
	$witeTTMM='<img src="pic/white/whiteTTMM.png">';
	$white='<img src="pic/white/white.png">';


*/


/////////////////////////////////////////////////1.пуховки hrhr///////////////////////////////////////////


//1.3 пуховки шоко (шоко/шоко с пятнами)
function hr_shoko_ttmm($M){
	if ($M!='mm')	//если пятна
		ret_img('hr_shokoMM');
	else           //без пятен
		ret_img('hr_shoko');
}
//1.3 пуховки черный (черный/черный с пятнами)
function hr_black_ttmm($M){
	if ($M!='mm')	//если пятна
		ret_img('hr_blackMM');
	else           //без пятен
		ret_img('hr_black');
}

function hr_shoko_black($B, $M){
	if ($B=='bb')	//шоко
		hr_shoko_ttmm($M);
	else  //черный
		hr_black_ttmm($M);
}
//1.2 пуховки рыжий (рыжий/рыжий с пятнами)
function hr_orange_ttmm($M){
	if ($M!='mm')	//если пятна
		ret_img('hr_orangeMM');
	else           //без пятен
		ret_img('hr_orange');
}

function orange($F,$B,$M){
	if ($F!='ff')
		hr_orange_ttmm($M);
	else 
		hr_shoko_black($B, $M);


}

//1.1 пуховки белый (шоко/черный)
function hr_white_ttmm($B){	
	if ($B=='bb')	//шоко
		ret_img('hr_white_sh');
	else 			//черный
		ret_img('hr_white');
}


/////////////////////////////////////////////////2.голые Hrhr///////////////////////////////////////////

//1.1 голый белый (шоко/черный)
function white_ttmm($B,$T,$M){	
	if(($T=="tt") && ($M=="mm")){
			ret_img('white');
		}
		elseif (($T=="tt") && ($M!="mm")){
			if($B == "bb")
				ret_img('shokoMM');
			if(($B == "BB") || ($B == "Bb"))
				ret_img('blackMM');
		}
		elseif (($T!="tt") && ($M=="mm")){
			if($B == "bb") 
				ret_img('shokoTT');
			if(($B == "BB") || ($B == "Bb"))
				ret_img('blackTT');
		}
		else{
			if($B == "bb") 
				ret_img('shokoTM');
			if(($B == "BB") || ($B == "Bb"))
				ret_img('blackTM');
		}
}
//1.2 пуховки рыжий (рыжий/рыжий с пятнами)
function orange_ttmm($M){
	if ($M!='mm')	//если пятна
		ret_img('orangeMM');
	else           //без пятен
		ret_img('orange');
}
//1.3 пуховки шоко (шоко/шоко с пятнами)
function shoko_ttmm(){
	ret_img('shoko');
}
//1.3 пуховки черный (черный/черный с пятнами)
function black_ttmm(){
	ret_img('black');
}


//проверка голой=======================================================
function f_gol($W,$F,$B,$T,$M){
	if ($W=='ww'){	// если не белый цвет
		if ($F=='ff'){	//если не рыжий
			if ($B=='bb'){	//шоко
				shoko_ttmm();
			}
			if (($B == 'Bb') || ($B == 'BB')){ //черный
				black_ttmm();
			}
		}
					
		else{
			orange_ttmm($M);
		}
	}
				
	else{
		//белая
		white_ttmm($B,$T,$M);
	}
}


//проверка пуха===============================================================
function f_pooh($W,$F,$B,$T,$M){
		
	if($W=='ww')
		orange($F,$B,$M);
	
	else
		hr_white_ttmm($B);

}

// проверка голая или пух===========================================
function f_get_image($Hr,$W,$F,$B,$T,$M){
	//echo 'f_get_image($Hr,$W,$F,$B,$T,$M);';
	
		if ($Hr=="hrhr") // если пух
			f_pooh($W,$F,$B,$T,$M);
		else 
			f_gol($W,$F,$B,$T,$M);
			
}

///////////////////////////////////////////////////////////////////////////////////////////
?>

<?php
function breedding($on,$ona,$temp, $temp2,$temp3){
//$on="TT";
//$ona="Tt";
//$temp="TT";
//$temp2="tt";
//$temp3="Tt";
$num=0;

	//echo "<br>код самца: $on <br>";
	//echo "код самки: $ona <br>";

	if ($on==$temp && $ona==$temp){	//AA
		//	echo 'Оба родителя ';
			$num=$on;
			return $num;
			die();
	}
	if($on==$temp2 && $ona==$temp2){	//аа
	//	echo 'Оба родителя ';
		$num=$ona;
		return $num;
		die();
	}
	if($on==$temp3 && $ona==$temp3){	//AaАа
		$num=rand(1,100);
	//	echo $num;
		if($num>1 && $num<50){
			$num=$on;
			return $num;
			die();
		}
		else{							//AA
			$num=rand(1,2);
		//	echo $num;
			if($num%2){
				$num=$temp;
				return $num;
				die();
			}
			else{						//aa
				$num=$temp2;
				return $num;
				die();
			}
		}
	}
	if($on==$temp3 && $ona==$temp2){	//Aa aa
		$num=rand(1,100);
	//	echo $num;
		if($num>=1 && $num<=50){
			$num=$on;
			return $num;
			die();
		}
		else{						//aa
				$num=$ona;
				return $num;
				die();
			}
	}
	if($on==$temp2 && $ona==$temp3){	//aa Aa
		$num=rand(1,100);
		//echo $num;
		if($num>1 && $num<50){		//aa
			$num=$ona;
			return $num;
			die();
		}
		else{						//Aa
				$num=$on;
				return $num;
				die();
			}
	}
	if($on==$temp && $ona==$temp3){	//AA Aa
		$num=rand(1,100);
		//echo $num;
		if($num>=1 && $num<=50){		//AA
			$num=$on;
			return $num;
			die();
		}
		else{						//aa
				$num=$ona;
				return $num;
				die();
			}
	}
	if($on==$temp3 && $ona==$temp){	//Aa AA
		$num=rand(1,100);
	//	echo $num;
		if($num>=1 && $num<=50){		//AA
			$num=$ona;
			return $num;
			die();
		}
		else{						//aa
				$num=$on;
				return $num;
				die();
			}
	}
	else{ 
		//echo 'разные';
		$num=$temp3;
		return $num;
		die();
	}
}
//find_where('animals', $key,'hr');
function find_where($tabl,$id,$value){
	if ('animals'===$tabl){
	   $row = R::getRow( 'SELECT * FROM animals WHERE id = :id',
       [':id' => $id]);
      // debug($row);
       
       switch ($value) {
            case 'url':
              return $row[$value];
              break;
            case 'litter':
              return $row[$value];
              break;
            case 'puppy':
              return $row[$value];
              break;
            case 'status':
              return $row[$value];
              break;
            case 'ff':
              return $row[$value];
              break;
            case 'ww':
              return $row[$value];
              break;
            case 'mm':
              return $row[$value];
              break;
            case 'tt':
              return $row[$value];
              break;
            case 'bb':
              return $row[$value];
              break;
            case 'aa':
              return $row[$value];
              break;
            case 'hr':
              return $row[$value];
              break;
            
            case 'gg0dad1':		//прадед по линии мамы
            	return $row[$value];
              	break;
            case 'gg0mum2':		//пробабка по линии мамы
            	return $row[$value];
              	break;
            case 'gg0dad3':		//прадед по линии мамы
            	return $row[$value];
              	break;
            case 'gg0mum4':		//пробабка по линии мамы
            	return $row[$value];
              	break;
            
           
            
            
            case 'gg1dad3':		//прадед по линии отца 
            	return $row[$value];
              	break;
            case 'gg1mum4':		//пробабка по линии отца
            	return $row[$value];
              	break; 	

            case 'gg1mum2':   //бабка по линии отца
              return $row[$value];
                break;
            case 'gg1dad1':   //дед по линии отца 
              return $row[$value];
                break;
            case 'g0mum':   //бабка по линии мамы
              return $row[$value];
                break;
            case 'g0dad':  //дед по линии мамы
              return $row[$value];
                break;
            
            case 'g1mum':    //бабка по линии мамы
              return $row[$value];
                break;
            case 'g1dad':   //дед по линии мамы
              return $row[$value];
                break;
            case 'dad':
            	if ('0'!==$row[$value])
              			return $row[$value];
              	else 
              			return 'нет данных';
              
              break;
            case 'mum':
             	if ('0'!==$row[$value])
              			return $row[$value];
              	else 
              			return 'нет данных';
              
              break;
            case 'now':
              return $row[$value];
              break;
            case 'birth':
              return $row[$value];
              break;
            case 'kennel':
              return $row[$value];
              break;
            case 'owner':
              return $row[$value];
              break;
            case 'breeder':
              return $row[$value];
              break;
            case 'race':
              return $row[$value];
              break;
            case 'sex':
              return $row[$value];
              break;
            case 'name':
              return $row[$value];
              break;
            case 'id':
              return $row[$value];
              break;
        }
     } //$tabl = animals
     if ('owner_items'===$tabl){
     $row = R::getRow( 'SELECT * FROM owner_items WHERE owner_id = :id',
       [':id' => $id]);
          switch ($value) {

            case 'item_id':
              return $row[$value];
              break;
            case 'count':
              return $row[$value];
              break;
          }
     }//$tabl = owner_items
     if ('stats'===$tabl){
     $row = R::getRow( 'SELECT * FROM stats WHERE dog_id = :id',
       [':id' => $id]);
          switch ($value) {

            case 'dog_id':
              return $row[$value];
              break;
            case 'speed':
              return $row[$value];
              break;
            case 'agility':
              return $row[$value];
              break;
            case 'teach':
              return $row[$value];
              break;
            case 'jump':
              return $row[$value];
              break;
            case 'scent':
              return $row[$value];
              break;
            case 'find':
              return $row[$value];
              break;
            case 'total':
              return $row[$value];
              break;
            case 'mutation':
              return $row[$value];
              break;
          }
     }//$tabl = stats

if ('users'===$tabl){
     $row = R::getRow( 'SELECT * FROM users WHERE id = :id',
       [':id' => $id]);
          switch ($value) {

            case 'login':
              return $row[$value];
              break;
            case 'email':
              return $row[$value];
              break;
            case 'kennel':
              return $row[$value];
              break;
            case 'f_time':
              return $row[$value];
              break;
            case 'l_time':
              return $row[$value];
              break;
            case 'online':
              return $row[$value];
              break;
            case 'sing':
              return $row[$value];
              break;
            case 'visits':
              return $row[$value];
              break;
          }
     }//$tabl = owner_items

}
/*                                   *************************    данные Для бридинга готовой собаки**********  */
function Start($id_m,$id_d){
////////////////////////////////////////////////////////////////TT
//        данные из поля      TT  мамы
$dogs_m =  R::getAssoc('SELECT *  FROM animals WHERE id = :id',
        [':id' => $id_m]);  
foreach ($dogs_m as $dog) {
	//echo $dog['name'];
	//echo $dog['tt'];
	$TT_m=$dog['tt'];
	$AA_m=$dog['aa'];
	$BB_m=$dog['bb'];
	$MM_m=$dog['mm'];
	$WW_m=$dog['ww'];
	$FF_m=$dog['ff'];
	$hr_ona=$dog['hr'];
	$race_m=$dog['race'];
	$breeder_m=$dog['breeder'];
	$owner_m=$dog['owner'];
	$kennel_m=$dog['kennel'];
	$puppy=$dog['puppy'];
	$litter=$dog['litter'];
	$litter += 1;
	$puppy += 1;
	/*величить кол-во вязок у мамы*/
	insert_data('animals',$id_m,'puppy',$puppy);
	insert_data('animals',$id_m,'litter',$litter);
//echo '<br>предки мамы: ';
	
  $G0dad=$dog['dad'];   //отец матери для щенка дед
  $G0mum=$dog['mum'];    //мать матери для женка бабка
	$GG0dad1=$dog['g1dad'];
	$GG0mum2=$dog['g1mum'];
	$GG0dad3=$dog['g0dad'];	//прадед
	$GG0mum4=$dog['g0mum'];	//прабабка


	
}
//        данные из поля      TT  папы
$dogs_d =  R::getAssoc('SELECT *  FROM animals WHERE id = :id',
        [':id' => $id_d]);  
foreach ($dogs_d as $dog) {
	//echo $dog['name'];
	//echo $dog['tt'];
	$TT_d=$dog['tt'];
	$AA_d=$dog['aa'];
	$BB_d=$dog['bb'];
	$MM_d=$dog['mm'];
	$WW_d=$dog['ww'];
	$FF_d=$dog['ff'];
	$hr_on=$dog['hr'];
	$puppy=$dog['puppy'];
	$litter=$dog['litter'];
	$litter += 1;
	$puppy += 1;
	/*величить кол-во вязок у папы*/
	insert_data('animals',$id_d,'puppy',$puppy);
	insert_data('animals',$id_d,'litter',$litter);
//echo '<br>предки папы: ';
	$G1dad=$dog['dad'];
	$G1mum=$dog['mum'];
	$GG1dad1=$dog['g1dad'];
	$GG1mum2=$dog['g1mum'];
	$GG1dad3=$dog['g0dad'];
	$GG1mum4=$dog['g0mum'];
	
}

//echo '<br>даем окрас!';
$tt_new = breedding($TT_d,$TT_m,'TT','tt','Tt');
//echo "<br> tt_new: " . $tt_new;
$aa_new = breedding($AA_d,$AA_m,'AA','aa','Aa');
//echo "<br> aa_new: " . $aa_new;
$bb_new = breedding($BB_d,$BB_m,'BB','bb','Bb');
//echo "<br> bb_new: " . $bb_new;
$mm_new = breedding($MM_d,$MM_m,'MM','mm','Mm');
//echo "<br> mm_new: " . $mm_new;
$ww_new = breedding($WW_d,$WW_m,'WW','ww','Ww');
//echo "<br> ww_new: " . $ww_new;
$ff_new = breedding($FF_d,$FF_m,'FF','ff','Ff');
//echo "<br> ff_new: " . $ff_new;


//echo '<br> рандомный пол!';
$pol=f_bdika_sex();
//echo '=================';
//var_dump($hr_on);
//var_dump($hr_ona);


//echo '=================';
$hr_new=gol_pooh($hr_on,$hr_ona);
//echo '=================';
$birth=date("d.m.Y");

//////////////////////////////////////////////////////////// обновление данных во всей таблице по столбцу

//Создаем объект (bean) работающий с таблицей dogs

//выставляем значение полей, тип поля будет автоматически модифицирован в зависимости от значения
$dogs=R::dispense( 'animals' );
//$dogs->name='';
$dogs->race=$race_m;
$dogs->breeder=$breeder_m;
$dogs->owner=$owner_m;
$dogs->kennel=$kennel_m;
$dogs->birth=$birth;
$dogs->now='0';

$dogs->aa=$aa_new;
$dogs->bb=$bb_new;
$dogs->ww=$ww_new;
$dogs->tt=$tt_new;
$dogs->mm=$mm_new;
$dogs->ff=$ff_new;

$dogs->id='';
$dogs->mum=$id_m;
$dogs->dad=$id_d;

//echo '<br> $G1dad: ' . $G1dad;
//echo '<br> $G1mum: ' . $G1mum;
//echo '<br> $G0dad: ' . $G0dad;
//echo '<br> $G0mum: ' . $G0mum;




/*по линии отца */
$dogs->g1dad=$G1dad;
$dogs->g1mum=$G1mum;
$dogs->gg1dad1=$GG1dad1;
$dogs->gg1mum2=$GG1mum2;
$dogs->gg1dad3=$GG1dad3;
$dogs->gg1mum4=$GG1mum4;
/*по линии матери*/

$dogs->g0dad=$G0dad;
$dogs->g0mum=$G0mum;
$dogs->gg0dad1=$GG0dad1;
$dogs->gg0mum2=$GG0mum2;
$dogs->gg0dad3=$GG0dad3;
$dogs->gg0mum4=$GG0mum4;




$dogs->sex=$pol;
$dogs->hr=$hr_new;

$dogs->status='1';




//Сохраняем, первичный ключ id создается автоматически
$id = R::store( $dogs );
return $id;

}


/********************************************************Изменение стат****************************/


/**********************  Рандомный подсчет стат в зависимости от мутаций и родителей***************/
function get_stats($id_m, $id_d, $value, $mutation, $plus){


       //echo '$id_m ' . $id_m . '/ $id_d ' . $id_d . '/ $value ' . $value . '/ $mutation' . $mutation . '/ $plus ' . $plus;


        $temp=((find_where('stats',$id_m,$value)+find_where('stats',$id_d,$value))/2);
        if(1==$plus)
          $temp=$temp+($temp*$mutation/100);
        if(0==$plus)
          $temp=$temp-($temp*$mutation/100);
       //echo '<br>===' . $temp . '===<br>';
        $temp = number_format ($temp , $decimals = 2 ,$dec_point = "." , $thousands_sep = " " );

        return $temp;
}


/**********************  Проверка шанса мутаций в зависимости от родства партнеров****************/
function check_mutation($id_m,$id_mum,$id_g1mum,$id_g0mum,$id_gg1mum2,$id_gg0mum2,$id_gg1mum4,$id_gg0mum4,
                        $id_d,$id_dad,$id_g1dad,$id_g0dad,$id_gg1dad1,$id_gg0dad1,$id_gg1dad3,$id_gg0dad3){

        // $id_dad=2;
         //$id_gg1dad1=2;
           $num=Rand(1,100);
          
          echo '<br>num' . $num;
      //    echo '<br> проверка на родство: ';
          $temp=1;
          if($id_d==$id_dad){
           echo '<br>партнер - отец';

            if($num>0 && $num<75){
              $temp=0;
              return 0;//echo '<br>mutation -  !';
            }



                        
          }
          elseif(($id_d==$id_g1dad) || ($id_d==$id_g0dad)){
              echo '<br>партнер - дед';

           // echo 'num ' . $num=Rand(25,50);
            if($num>50 && $num<100){
              $temp=0;
              return 0;//echo '<br>mutation2 -  !';
            }
           
          }
          elseif(($id_d==$id_gg1dad1) || ($id_d==$id_gg0dad1) || ($id_d==$id_gg1dad3)|| ($id_d==$id_gg0dad3)){ 
            echo '<br>партнер - прадед';

            if($num>0 && $num<=25){
              $temp=0;
              return 0; //echo '<br>mutation3 -  !';
            }
            
          }
           
          //самку
          if($id_m==$id_mum){
            echo '<br>партнерша - мать';

             if($num>0 && $num<75){
              $temp=0;
              return 0;//echo '<br>mutation0 -  !';
            }
          }
          
          elseif(($id_m==$id_g1mum) || ($id_m==$id_g0mum)){
           echo '<br>партнерша - бабка';

             if($num>50 && $num<100){
              $temp=0;
              return 0; //echo '<br>mutation0-2 -  !';
            }
            
          }
          elseif(($id_m==$id_gg1mum2) || ($id_m==$id_gg0mum2) || ($id_m==$id_gg1mum4)|| ($id_m==$id_gg0mum4)){ 
            echo '<br>партнерша - пробабка';

             if($num>0 && $num<=25){
              $temp=0;
              //echo '<br>mutation0 - 3 -  !';
            return 0;
               }

          }
          if(1==$temp)
            return 1;


         
}

/**********************  Выписка предков по линии матери и отца***********************/

function ancestry ($id_m,$id_d){
/*******************   данные предков самки мужского пола */
  //echo '<br>проверка мамы<br>';
       $id_dad=find_where('animals', $id_m,'dad');
      $id_g1dad=find_where('animals', $id_m,'g1dad');
       $id_g0dad=find_where('animals', $id_m,'g0dad');
       $id_gg1dad1=find_where('animals', $id_m,'gg1dad1');
       $id_gg0dad1=find_where('animals', $id_m,'gg0dad1');
      $id_gg1dad3=find_where('animals', $id_m,'gg1dad3');
      $id_gg0dad3=find_where('animals', $id_m,'gg0dad3');
        //echo 'отец=' . $id_dad . ' / дед по папе=' . $id_g1dad. ' / дед по маме=' . $id_g0dad. ' / прадед по деду(отец)=' . $id_gg1dad1. ' / прадед по бабке(отец)=' . $id_gg1dad3. ' / прадед по деду(мать)=' . $id_gg0dad1. ' / прадед по бабке(мать)=' . $id_gg0dad3;
   
/*******************   данные предков кобеля женского пола */


     //   echo '<br>=====================<br>проверка папы<br>';
        $id_mum=find_where('animals', $id_d,'mum');
        $id_g1mum=find_where('animals', $id_d,'g1mum');
        $id_g0mum=find_where('animals', $id_d,'g0mum');
        $id_gg1mum2=find_where('animals', $id_d,'gg1mum2');
        $id_gg0mum2=find_where('animals', $id_d,'gg0mum2');
        $id_gg1mum4=find_where('animals', $id_d,'gg1mum4');
        $id_gg0mum4=find_where('animals', $id_d,'gg0mum4');
      //  echo 'мать=' . $id_mum . ' / бабка по папе=' . $id_g1mum. ' / бабка по маме=' . $id_g0mum. ' / пробабка по деду(отец)=' . $id_gg1mum2. ' / пробабка по бабке(отец)=' . $id_gg0mum2. ' / пробабка по деду(мать)=' . $
      $plus=check_mutation($id_m,$id_mum,$id_g1mum,$id_g0mum,$id_gg1mum2,$id_gg0mum2,$id_gg1mum4,$id_gg0mum4,
                        $id_d,$id_dad,$id_g1dad,$id_g0dad,$id_gg1dad1,$id_gg0dad1,$id_gg1dad3,$id_gg0dad3);
     
      return $plus;
}  


/**********************  получение статов и поля МУТАЦИЯ кобеля и суки***********************/
function print_stats($id_m,$id_d,$mutation)
{
      

      echo '<br> mutat ' . $mutation;
            
      echo '<br> / sp /';
      echo ' / agl / ';
      echo '/ tch / ';
      echo '/ jmp / ';
      echo '/ nuh / ';
      echo '/ fnd / ';
      echo '/ ttl / ';
      echo '/ данные';
      
      echo ' <br>/' . find_where('stats',$id_m,'speed');
      echo ' --- ' . find_where('stats',$id_m,'agility');
      echo '  --- ' . find_where('stats',$id_m,'teach');
      echo '  --- ' .find_where('stats',$id_m,'jump');
      echo '  --- ' .find_where('stats',$id_m,'scent');
      echo '  --- ' .find_where('stats',$id_m,'find');
      echo '  ---/ ' .find_where('stats',$id_m,'total') . ' мать ' . $id_m;
      
      echo '<br>/' . find_where('stats',$id_d,'speed');
      echo ' --- ' . find_where('stats',$id_d,'agility');
      echo ' --- ' . find_where('stats',$id_d,'teach');
      echo ' --- ' .find_where('stats',$id_d,'jump');
      echo ' --- ' .find_where('stats',$id_d,'scent');
      echo ' --- ' .find_where('stats',$id_d,'find');
      echo ' ---/ ' .find_where('stats',$id_d,'total') . ' отец ' . $id_d;
   
}

/******************************** внесение новых стат по ID мамы иID папы и даем ID новой собаки ******************************************/
function new_stats($id_m,$id_d,$id_new){


       // $id_m=17;
      //  $id_d=15;
       // $id_new=20;
        $mutation=Rand(1,100)/100;
        $plus='1';
        
        $plus=ancestry ($id_m,$id_d);
       /*
        if(1==$plus){
          echo 'При вязки близкородственных партнеров возможны ухудшения качеств и получение мутаций! Будьте осторожнее!';
        }
        
     */   
        $speed_new= get_stats($id_m, $id_d, 'speed', $mutation, $plus);
       // print_stats($id_m,$id_d,$mutation);
       
        $agility_new= get_stats($id_m, $id_d, 'agility', $mutation, $plus);
        $teach_new= get_stats($id_m, $id_d, 'teach', $mutation, $plus);
        $jump_new= get_stats($id_m, $id_d, 'jump', $mutation, $plus);
        $scent_new= get_stats($id_m, $id_d, 'scent', $mutation, $plus);
        $find_new= get_stats($id_m, $id_d, 'find', $mutation, $plus);
        $total_new= get_stats($id_m, $id_d, 'total', $mutation, $plus);
     
     /*   echo '<br>' . $speed_new;
        echo '/' .  $agility_new;
        echo '/' .  $teach_new;
        echo '/' . $jump_new;
        echo '/' .  $scent_new;
        echo '/' .   $find_new;
        echo '/' . $total_new;
    */
       /* insert_data('stats',$id_new,'speed',$speed_new);
        insert_data('stats',$id_new,'agility',$agility_new);
        insert_data('stats',$id_new,'teach',$teach_new);
        insert_data('stats',$id_new,'jump',$jump_new);
        insert_data('stats',$id_new,'scent',$scent_new);
        insert_data('stats',$id_new,'find',$find_new);
        insert_data('stats',$id_new,'total',$total_new);
        insert_data('stats',$id_new,'mutation',$mutation);
        */



       insert_new_stats($id_new,$speed_new,$agility_new,$teach_new, $jump_new,$scent_new,$find_new,$total_new,$mutation);



}

/******************************************конец функций по изменению стат******************************/
