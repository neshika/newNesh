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

?>
          <div align="left">
        <img src = "<?php echo $url; ?>" width="300" >
        <table width="100" cellpadding="2" cellspacing="0" border="1" >
              <colgroup width="150">
                  <colgroup span="9" align="center" width="10">
                  <col span="5">
                  <col span="4">
              </colgroup>
              <tr border="1"> 
                     <td>имя</td><td><b><?php echo find_where('animals',$id,'name'); ?></b></td>
                     <td>пол</td><td><b><?php echo find_where('animals',$id,'sex'); ?></b></td>
              </tr>
              <tr border="1"> 
                     <td>Скорость</td><td><?php echo find_where('stats',$id,'speed'); ?></td>
                     <td>вид</td><td><?php echo find_where('dna',$id,'hr'); ?></td>
              </tr>
              <tr border="1"> 
                     <td>Уворот</td><td><?php echo find_where('stats',$id,'agility'); ?></td>
                      <td>белый</td><td><?php echo find_where('dna',$id,'ww'); ?></td>
              </tr>
              <tr border="1"> 
                     <td>Обучение</td><td><?php echo find_where('stats',$id,'teach'); ?></td>
                     <td>рыжий</td><td><?php echo find_where('dna',$id,'ff'); ?></td>
              </tr>
              <tr border="1"> 
                     <td>Прыжки</td><td><?php echo find_where('stats',$id,'jump'); ?></td>
                      <td>черный</td><td><?php echo find_where('dna',$id,'bb'); ?></td>
              </tr>
              <tr border="1"> 
                     <td>Обоняние</td><td><?php echo find_where('stats',$id,'scent'); ?></td>
                     <td>пятна</td><td><?php echo find_where('dna',$id,'mm'); ?></td>
              </tr>
              <tr border="1"> 
                     <td>Поиск</td><td><?php echo find_where('stats',$id,'find'); ?></td>
                     <td>крап</td><td><?php echo find_where('dna',$id,'tt'); ?></td>
              </tr>
              <tr border="1"> 
                     <td>Итого</td><td><?php echo find_where('stats',$id,'total'); ?></td>
                     <td>aa</td><td><?php echo find_where('dna',$id,'aa'); ?></td>
                     
              </tr>
              </colgroup>
        </table>
      </div>

<?php

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

/*****************цена подсчета собаки*****************************/

function pricing($sex, $dog_id){  //пол собаки и ее id  / возвращает сумму в цифрах

//echo '<br>' . $dog_id;
//echo '<br>' . $sex;
$cost=0;

$array[]=R::getRow( 'SELECT * FROM dna WHERE dog_id = :dog_id',
       [':dog_id' => $dog_id]);
//debug($array);

  if('кобель'==$sex){
    //echo '<br>male';
    foreach($array as $item) {
          foreach ($item as $id => $value) {  //id индекс, value - значение 

        //  если индекс равен наименованию, напечатать его значение
             if('hr'==$id){    //hrhr-пух  Hrhr-голая
              //echo '<br>1' . $value;
                  if('Hrhr'==$value){
                    //echo ' Голый^ ';
                    $cost=35000;
                    foreach ($item as $id => $value) {  //id индекс, value - значение 

                            if('bb'==$id){  //если шоколадный голый
                              
                                if('bb'==$value){
                                    $cost=55000;
                                }
                            }
                    }

                   
                  }
                   if('hrhr'==$value){
                    //echo ' Пуховый^ ';
                    $cost=10000;
                    foreach ($item as $id => $value) {  //id индекс, value - значение 

                            if('bb'==$id){
                                if('bb'==$value){ //если шоколадный пух
                                    $cost=35000;
                                }
                            }
                    }
                  }

            } //if('hr'==$id)
           
      } //foreach ($item as $id => $value)
    

    }  //foreach($array as $item)
  } //if('кобель'==$sex)




  if('сука'==$sex){
    //echo '<br>famale';
        foreach($array as $item) {
          foreach ($item as $id => $value) {  //id индекс, value - значение 

        //  если индекс равен наименованию, напечатать его значение
             if('hr'==$id){    //hrhr-пух  Hrhr-голая
              //echo '<br>2' . $value;
                  if('Hrhr'==$value){
                   // echo ' Голый^ ';
                    $cost=45000;
                    foreach ($item as $id => $value) {  //id индекс, value - значение 

                            if('bb'==$id){  //если шоколадный голый
                              
                                if('bb'==$value){
                                    $cost=75000;
                                }
                            }
                    }

                   
                  }
                   if('hrhr'==$value){
                    //echo ' Пуховый^ ';
                    $cost=25000;
                    foreach ($item as $id => $value) {  //id индекс, value - значение 

                            if('bb'==$id){
                                if('bb'==$value){ //если шоколадный пух
                                    $cost=40000;
                                }
                            }
                    }
                  }

            } //if('hr'==$id)
           
      } //foreach ($item as $id => $value)
    

    }  //foreach($array as $item)
} //if('сука'==$sex)   
       

return number_format ($cost , $decimals = 0,$dec_point = "." , $thousands_sep = " " ); // формат 10 000        

}

function bdika_balance($owner,$price){  //проверяет хватает ли денег если все ок возвращает TRUE
  //***************************  if(bdika_balance($owner,$price)) ОК  else echo 'не хватает денег'************************

  
  //echo '<br>' . $owner;
  //echo '<br>' . $price;

  //echo '<br>' . get_id($owner);

  //echo '<br>' . get_count('1', get_id($owner));   //выдает количество денег у юзера

  if($price>get_count('1', get_id($owner))){
    return false;
  }
  return true;

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
  $coins = $coins + 50000;

 R::exec( 'UPDATE owner_items SET count= :coins WHERE owner_id = :id AND item_id = :item', array(':coins' => $coins,':item'=> '1', ':id' => $id));
   

}
/*                                             *************************    данные по параметру                 */
 /*Функция возвращает данные противоположного пола при вязке*/
function get_where($tabl, $param, $owner){

    return R::getAssoc ('SELECT id,name FROM animals WHERE sex =:pol and owner=:own and status=1', array(':pol'=> $param, ':own' => $owner));

}
 /*Функция возвращает количество итемов у нанного владельца*/
function get_count($item, $owner_id){

    $string=R::getcol('SELECT count FROM owner_items WHERE owner_id =:id and item_id=:item', array(':id'=> $owner_id, ':item' => $item));
    //var_dump($string);
    if (empty($string)){
      $string[0]='0';
    }
    return $string[0];

}
function get_id($login){

    $string =R::getCol('SELECT id FROM users WHERE login = :log',
        [':log' => $login]);

   return $string[0];

}
/*Функция добавления количества вязок для папы и мамы*/
function add_litters($id_m,$id_d){

  echo $lit_m=find_where('animals',$id_m,'litter');
  echo $lit_d=find_where('animals',$id_d,'litter');
  $lit_m += 1;
  $lit_d += 1;

  insert_data('animals',$id_m,'litter',$lit_m);
  insert_data('animals',$id_d,'litter',$lit_d);
}

/*Функция вносит данные с таблицу статы*/
function insert_new_stats($id_new,$speed_new,$agility_new,$teach_new, $jump_new,$scent_new,$find_new,$total_new,$mutation){
  $total_new=number_format ($total_new , $decimals = 1 ,$dec_point = "." , $thousands_sep = " " );
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

function insert_2_new_dogs($name,$sex,$race,$owner,$kennel,$birth,$url_id){

    $new = R::dispense('animals');
    $new->name = $name;
    $new->sex = $sex;
    $new->race = $race;
    $new->breeder = $owner;
    $new->owner = $owner;
    $new->kennel = $kennel;
    $new->birth = $birth;
    $new->status = '1';
    $new->url = $url_id;

    $id = R::store( $new );
    return $id;

}
/*Функция вносит данные с таблицу Генетический код*/
function insert_new_dna($dog_id,$url_id,$hr,$ww, $ff,$bb,$mm,$tt,$aa){

   $dna = R::dispense( 'dna' );
    $dna->dog_id = $dog_id;
    $dna->url_id = $url_id;
    $dna->hr = $hr;
    $dna->ww = $ww;
    $dna->ff = $ff;
    $dna->bb = $bb;
    $dna->mm= $mm;
    $dna->tt = $tt;
    $dna->aa = $aa;

    $id = R::store( $dna );
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
	if ($var=='Hrhr') return 'пуховая';
	else return 'голая';
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
 	return find_where('animals',$id,'u          rl');
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
    
    $num=Rand(1,5);
   // $num=1;
    $coat=$array . '_0' . $num;
    
    echo $coat;

    $row = R::getRow( 'SELECT * FROM coat WHERE color = :co',
       [':co' => $coat]);

    //var_dump($row['url']);
    $_POST['url']=$row['url'];

	
}




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
		ret_img('hr_white_bl');
}


/////////////////////////////////////////////////2.голые Hrhr///////////////////////////////////////////

//1.1 голый белый (шоко/черный)
function white_ttmm($B,$T,$M){	
	if(($T=="tt") && ($M=="mm")){
      if($B == "bb")
        ret_img('white_sh');
      if(($B == "BB") || ($B == "Bb"))
        ret_img('white_bl');
			
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
        echo 'black_ttmm';
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
    if ('coat'===$tabl){
     $row = R::getRow( 'SELECT * FROM coat WHERE id = :id',
       [':id' => $id]);
          switch ($value) {

            case 'color':
              return $row[$value];
              break;
            case 'url':
              return $row[$value];
              break;
            
          }
     }//$tabl = coat
     if ('dna'===$tabl){
     $row = R::getRow( 'SELECT * FROM dna WHERE dog_id = :id',
       [':id' => $id]);
          switch ($value) {

            case 'url_id':
              return $row[$value];
              break;
            case 'hr':
              return $row[$value];
              break;
            case 'ww':
              return $row[$value];
              break;
            case 'ff':
              return $row[$value];
              break;
            case 'bb':
              return $row[$value];
              break;
            case 'mm':
              return $row[$value];
              break;
            case 'tt':
              return $row[$value];
              break;
            case 'aa':
              return $row[$value];
              break;
            
          }
     }//$tabl = coat
}
/*                                   *************************    данные Для бридинга готовой собаки**********  */
function Start($id_m,$id_d){
////////////////////////////////////////////////////////////////TT
//        данные из поля      TT  мамы
$dogs_m =  R::getAssoc('SELECT *  FROM animals WHERE id = :id',
        [':id' => $id_m]);  
foreach ($dogs_m as $dog) {

	$race_m=$dog['race'];
	$breeder_m=$dog['breeder'];
	$owner_m=$dog['owner'];
	$kennel_m=$dog['kennel'];
	$puppy=$dog['puppy'];
	
	$puppy += 1;
	/*величить кол-во вязок у мамы*/
	insert_data('animals',$id_m,'puppy',$puppy);
	
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

	$puppy=$dog['puppy'];
	
	$puppy += 1;
	/*величить кол-во вязок у папы*/
	insert_data('animals',$id_d,'puppy',$puppy);
	
//echo '<br>предки папы: ';
	$G1dad=$dog['dad'];
	$G1mum=$dog['mum'];
	$GG1dad1=$dog['g1dad'];
	$GG1mum2=$dog['g1mum'];
	$GG1dad3=$dog['g0dad'];
	$GG1mum4=$dog['g0mum'];
	
}


//echo '<br> рандомный пол!';
$pol=f_bdika_sex();

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



$dogs->id='';
$dogs->mum=$id_m;
$dogs->dad=$id_d;


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


$dogs->status='1';




//Сохраняем, первичный ключ id создается автоматически
$id = R::store( $dogs );

$id_temp=$id;
//======================================  Создаем данные из DNA ============================
echo '$id_m ' . $id_m;
$dogs_m =  R::getAssoc('SELECT * FROM dna WHERE dog_id = :id',
        [':id' => $id_m]);

debug($dogs_m);

foreach ($dogs_m as $dog) {

  echo $TT_m=$dog['tt'];
  echo $AA_m=$dog['aa'];
  echo $BB_m=$dog['bb'];
  echo $MM_m=$dog['mm'];
  echo $WW_m=$dog['ww'];
  echo $FF_m=$dog['ff'];
  echo $hr_ona=$dog['hr'];
}
echo '<br>';

echo '$id_d ' . $id_d;
$dogs_d =  R::getAssoc('SELECT *  FROM dna WHERE dog_id = :id',
        [':id' => $id_d]);

debug($dogs_d);

foreach ($dogs_d as $dog) {

  echo $TT_d=$dog['tt'];
  echo $AA_d=$dog['aa'];
  echo $BB_d=$dog['bb'];
  echo $MM_d=$dog['mm'];
  echo $WW_d=$dog['ww'];
  echo $FF_d=$dog['ff'];
  echo $hr_on=$dog['hr'];
}



//echo '=================';
$hr_new=gol_pooh($hr_on,$hr_ona);
//echo '=================';



echo '<br>даем окрас!';
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
// "<br> ff_new: " . $ff_new;


$dogs=R::dispense( 'dna' );

$dogs->dog_id=$id_temp;
$dogs->aa=$aa_new;
$dogs->bb=$bb_new;
$dogs->ww=$ww_new;
$dogs->tt=$tt_new;
$dogs->mm=$mm_new;
$dogs->ff=$ff_new;
$dogs->hr=$hr_new;

$url=bdika_color ($hr_new,$ww_new,$ff_new,$bb_new,$tt_new,$mm_new);


$dogs->url_id=ret_id_from_url($url);

$id = R::store( $dogs );

$id=$id_temp;

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
function ret_str_contact($partner,$dog){
  //echo $partner . ' ' . find_where('animals',$dog,'dad');
  //echo $partner . ' ' . find_where('animals',$dog,'mum');

  if( $partner==find_where('animals',$dog,'dad') ){

      return ' отец!';
  }
  if( $partner==find_where('animals',$dog,'mum') ){

      return ' мать!';
  }
  if( ( $partner==find_where('animals',$dog,'g1dad') ) || ( $partner==find_where('animals',$dog,'g0dad') ) ){

      return ' дед!';
  }
  if( ( $partner==find_where('animals',$dog,'g1mum') ) || ( $partner==find_where('animals',$dog,'g0mum') ) ){

      return ' бабка!';
  }
  if( ( $partner==find_where('animals',$dog,'gg0dad1') ) || ( $partner==find_where('animals',$dog,'gg0dad3') ) || ( $partner==find_where('animals',$dog,'gg1dad1') ) || ( $partner==find_where('animals',$dog,'gg1dad3') )){

      return ' прадед!';
  }
  if( ( $partner==find_where('animals',$dog,'gg0mum2') ) || ( $partner==find_where('animals',$dog,'gg1mum2') ) || ( $partner==find_where('animals',$dog,'gg0mum4') ) || ( $partner==find_where('animals',$dog,'gg1mum4') )){

      return ' пробабка!';
  }
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
     
    
       insert_new_stats($id_new,$speed_new,$agility_new,$teach_new, $jump_new,$scent_new,$find_new,$total_new,$mutation);



}

/******************************************конец функций по изменению стат******************************/




function TT_MM_B_HR1($B,$T,$M){
  if('b0'==$B){
    if( ('t1'==$T) && ('m1'==$M) ){
       echo ' hr1w0f0b0t1m1 шоко c пятнами и крапом';
        return ret_url_from_dna('hr1w0f0b0t1m1');
    }
    if( ('t0'==$T) && ('m1'==$M) ){
      echo ' hr1w0f0b0t1m1 шоко c пятнами';
        return ret_url_from_dna('hr1w0f0b0t0m1');
    }
    if( ('t1'==$T) && ('m0'==$M) ){
      echo ' hr1w0f0b0t1m0 шоко c крапом';
        return ret_url_from_dna('hr1w0f0b0t1m0');
    }
    if( ('t0'==$T) && ('m0'==$M) ){
      echo ' hr1w0f0b0t0m0 шоко';
        return ret_url_from_dna('hr1w0f0b0t0m0');
    }
  }
  if('b1'==$B){
     if( ('t1'==$T) && ('m1'==$M) ){
     echo ' hr1w0f0b0t1m1 черный c пятнами и крапом';
        return ret_url_from_dna('hr1w0f0b1t1m1');
    }
    if( ('t0'==$T) && ('m1'==$M) ){
      echo ' hr1w0f0b0t1m1 черный c пятнами';
      return ret_url_from_dna('hr1w0f0b1t0m1');
    }
    if( ('t1'==$T) && ('m0'==$M) ){
    echo ' hr1w0f0b0t0m0 черный c крапом';
      return ret_url_from_dna('hr1w0f0b1t1m0');
    }
    if( ('t0'==$T) && ('m0'==$M) ){
     echo ' hr1w0f0b0t0m0 черный';
      return ret_url_from_dna('hr1w0f0b1t0m0');
    }
  }

}//end function TT_MM_B_HR0($B,$T,$M){

// функция пишет в строку hr1w0f0b1t0m0
function do_dna($Hr,$W,$F,$B,$T,$M){
   ('hrhr'==$Hr ? $Hr='hr1' : $Hr='hr0');
    ('ww'==$W ? $W='w0' : $W='w1');
    ('ff'==$F ? $F='f0' : $F='f1');
    ('bb'==$B ? $B='b0' : $B='b1');
    ('tt'==$T ? $T='t0' : $T='t1');
    ('mm'==$M ? $M='m0' : $M='m1');

    $dna=$Hr . $W . $F . $B . $T . $M;

       return $dna;
}

function ret_id_from_url($url){

 $string =R::getCol('SELECT id FROM coat WHERE url = :url',
        [':url' => $url]);

   return $string[0];

}
function ret_url_from_dna($dna){ //color = hr0w0f0b1m1 = $dna
  $array = R::getAssoc ('SELECT * FROM coat WHERE color =:co', array(':co'=> $dna));
 //debug($array);
  $id=array_rand($array);//выбирает рандомное значение из массива
    
    return find_where('coat',$id,'url');
}
//end  function ret_id_from_dna($dna){

function from_id_to_url($id){  //получаем ссылку на картинку в зависимости от номер URL(animals')
                $url_id=find_where('animals',$id,'url');
                $url_pic=find_where('coat',$url_id,'url');
                return $url_pic;
}

function  bdika_color($Hr,$W,$F,$B,$T,$M){ //возвращает url /pic/clear/white_sh_03.png
    // $Hr='hrhr';   //голая
    // $Hr='Hrhr';   //пух
    // $W='WW';
    // $F='FF';
    // $B='bB';
    // $T='tt';
    // $M='mm';
    
    ('Hrhr'==$Hr ? $Hr='hr1' : $Hr='hr0');  //hr1 - голая    hr0 - пух
    ('ww'==$W ? $W='w0' : $W='w1');
    ('ff'==$F ? $F='f0' : $F='f1');
    ('bb'==$B ? $B='b0' : $B='b1');
    ('tt'==$T ? $T='t0' : $T='t1');
    ('mm'==$M ? $M='m0' : $M='m1');

  if('hr1'==$Hr){   //голая
   // echo 'голая';
    if('w0'==$W){
         // echo ' не белая';
      if('f0'==$F){
          //echo ' не рыжая';
        if('b0'==$B)    //шоколад
          $my_dog=TT_MM_B_HR1($B,$T,$M);

        if('b1'==$B)    //черная
          $my_dog=TT_MM_B_HR1($B,$T,$M);

      }
      if('f1'==$F){ //рыжая
        if('m1'==$M){ //с пятнами
         echo ' hr1w0f1t0m0 рыжая c пятнами';
          $my_dog=ret_url_from_dna('hr1w0f1t0m1');
        }
          if('m0'==$M){ //без пятен
          echo ' hr1w0f1t0m0 рыжая';
            $my_dog=ret_url_from_dna('hr1w0f1t0m0');
          }
      }

      }
        if('w1'==$W){ //белая
          if('b0'==$B){ //шоко белая
      echo ' hr1w0b0t0m0 белая/шоко';
        $my_dog=ret_url_from_dna('hr1w0b0t0m0');
      }
      if('b1'==$B){ //черно/белая
       echo ' hr1w0b1t0m0 белая/черный';
        $my_dog=ret_url_from_dna('hr1w0b1t0m0');
      }
    }
  }


  if('hr0'==$Hr){   //пух
    // echo 'пух';
  
    if('w0'==$W){
        //не белая
      if('f0'==$F){
          //не рыжая
        if('b0'==$B){
          //шоко
          if('m1'==$M){
           echo 'hr0w0f0b0m1 шоколад с пятнами';
            $my_dog=ret_url_from_dna('hr0w0f0b0m1');
          }
          if('m0'==$M){
           echo 'hr0w0f0b0m0 шоко';
            $my_dog=ret_url_from_dna('hr0w0f0b0m0');
          }
        }
        if('b1'==$B){
          //черный
            if('m1'==$M){
           echo 'hr0w0f0b1m1 черный с пятнами';
            $my_dog=ret_url_from_dna('hr0w0f0b1m1');
            }
          if('m0'==$M){
          echo 'hr0w0f0b1m0 черныq';
            $my_dog=ret_url_from_dna('hr0w0f0b1m0');
          }

        }
      }

      elseif('f1'==$F){
        if('m1'==$M){
            echo 'hr0w0f1m1 рыжий с пятнами';
            $my_dog=ret_url_from_dna('hr0w0f1m1');
        }
        if('m0'==$M){
            echo 'hr0w0f1m0 рыжий';
            $my_dog=ret_url_from_dna('hr0w0f1m0');

        }
      }

    }
    elseif('w1'==$W){
      if('b0'==$B){
         echo 'hr0w1b0 белая/шоко';
          $my_dog=ret_url_from_dna('hr0w1b0');
      }
      if('b1'==$B){
         echo 'hr0w1b1 белая/черный';
          $my_dog=ret_url_from_dna('hr0w1b1');
      }
    }

  }
  //var_dump($my_dog);
  return $my_dog;
} //end function bdika_color