<?php
require "db.php";
        //подключение файлов
        require "/html/header.html";
        require "/html/nav.html";
        require "/html/aside.html";
        
?><div class="content">
<?php
        require "includes/functions.php";


              
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
//   if('dog_id'==$key){
//     $string =R::getCol('SELECT name FROM animals WHERE id = :id',
//      [':id' => $value]);
//                                $name=$string[0];   //выДает имя

                                  

//                                $string =R::getCol('SELECT sex FROM animals WHERE id = :id',
//                                 [':id' => $value]);
//                                $sex=$string[0];  //возвращает пол
//                              }
//                              if('dog_id'==$key){
//                                $id=$value;     //ID собаки
//                              }
//                              if('speed'==$key){
//                                $sp=$value;     //скорость
//                              }
//                              if('agility'==$key){
//                                $agl=$value;    //уворот
//                              }
//                              if('teach'==$key){
//                                $tch=$value;    //обучение
//                              }
//                              if('jump'==$key){
//                                $jmp=$value;    //прыжки
//                              }
//                              if('scent'==$key){
//                                $scnt=$value;   //обоняние
//                              }
//                              if('find'==$key){
//                                $fnd=$value;    //поиск
//                              }
//                              if('total'==$key){
//                                $ttl=$value;    //итого
//                              }
//                              if('mutation'==$key){
//                                $mut=$value;    //мутация
//                              }

//                         }  
//                        // tabl($name,$sex,$sp,$agl,$tch,$jmp,$scnt,$fnd,$ttl,$mut);  

//                     }

    echo  $speed_new=find_where('stats',1,'speed');                  

  ?> 

                   </colgroup>
               </table>

               <form action="test.php" method="post">
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
               require '/libs/down.php';
 ?>