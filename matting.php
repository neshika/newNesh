<?php
require "/libs/up.php";
?>

   <form method="POST" action="/matting.php">
 <?php $id_dog= $_SESSION['Dog']; ?>
 </form>
 		  <?php 
     
// ******************** вывод картинки собаки по id  *****************--> 
      $row = R::getRow( 'SELECT * FROM animals WHERE id = :id',
        [':id' => $id_dog]);
    f_get_image($row['hr'],$row['ww'],$row['ff'],$row['bb'] ,$row['tt'],$row['mm']);
      ?><img src="<?php echo $_POST['url']?>"><?php        
      
      ?>   
    <details><summary> <?php echo "Выбранная собака: " . ret_name($id_dog) . " владелец: " . ret_owner();?></summary> <?php print_all_d($id_dog);?></details>
     <?php
     $owner = ret_owner(); 
     if ('сука' === ret_sex($id_dog)){

              $array [] = get_where('animals', 'кобель', $owner);
            }
            else
              $array [] = get_where('animals', 'сука', $owner);
           //debug($array);
            
   /*вывожу на экран возможных парнтеров в зависимости от пола*/     
   ?> 

   <?php foreach($array as $item) {
              foreach ($item as $key => $value) {
                  
                echo "<br>";
/*выводим на экран имя собаки как ссылку*/
               ?>
                <form method="post" action="breedding.php">
                <?php $_SESSION['para']=$id_dog;?>
                <INPUT TYPE=RADIO NAME="ONONA" VALUE="<?=$key?>"><?php echo '<a href="/name.php?id=' . $key . '">' . "$value";?> </a><BR>
                 <input type="submit" class="knopka" value="Вяжем">
                  </form>
                 
               <?php   
               
                 $row = R::getRow( 'SELECT * FROM animals WHERE id = :id',
                 [':id' => $key]);
                 f_get_image($row['hr'],$row['ww'],$row['ff'],$row['bb'] ,$row['tt'],$row['mm']);
                      ?><img src="<?php echo $_POST['url']?>"><?php
                  ?>
                  <hr>
                
                  <?php
              }   
        }   
       
     if( !isset( $_POST['ONONA'] ) ) echo 'Выбирите партнера';
//функция вызывающая футер сайта
require "/libs/down.php";