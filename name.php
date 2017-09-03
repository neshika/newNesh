<?php
require "/libs/up.php";
      $id = $_GET['id']; 
      //$GLOBALS ['MYDOG'] = 12;
      //echo $MYDOG;
      
      $owner=ret_owner();
     // $var = find_where('dna',$id,'hr');
     
      

/*<h1 style="font-size: 120%; font-family: Verdana, Arial, Helvetica, sans-serif; 
  color: #336">Заголовок</h1>*/
  if ( isset($_POST['newName']) ){ 

    insert_data('animals',$id,'name',$_POST['name1']);
  }
?>

<!-- ******************** вывод питомника / имя собаки и картинка пола  *****************-->    
          <div style="background: white; height: 80px; width: 1170px;"> <h3 align="center"><?php echo '"' . find_where('animals',$id,'kennel') . '" ';?> <?php echo find_where('animals',$id,'name');?><?php echo ret_pic($id);?></h3>
           </div>
          
<!-- ******************** вывод доп меню собаки  заводчик / хозяин  *****************-->  
        <div style="background: yellow; height: 80px; width: 1170px;"> 
          <ul style="background: white; width: 45%; float: left;">
            <li>Заводчик: <?php echo find_where('animals',$id,'breeder');?></li>
            <li>Хозяин: <?php echo $owner;?></li>
            <li>Вязок: <?php echo find_where('animals', $id,'litter');?></li>

          </ul>
<!-- ******************** вывод доп меню собаки  вид \\ Дата рождения \\ окрас    *****************-->       
        <ul style="background: white; width: 40%; float: right;">
          <li>тип:  <?php echo  print_hr(find_where('dna',$id,'hr'));?></li>
          <li>дата рождения:  <?php echo find_where('animals',$id,'birth');?></li>
          <li>Щенков: <?php echo find_where('animals', $id,'puppy');?></li>
       </ul>
      </div>
<!-- ******************** вывод картинки собаки по id  *****************-->
     <div style="background: white; text-align: center; height: 350px; width: 350px; margin-left: 410px;">


<?php 
     
     
     // $row = R::getRow( 'SELECT * FROM animals WHERE id = :id',
      //  [':id' => $id]);
      //f_get_image($row['hr'],$row['ww'],$row['ff'],$row['bb'] ,$row['tt'],$row['mm']);
      //insert_url($_POST['url'],$id); //вставляет ссылку на картинку в базу
?>
       <img src = "<?php echo from_id_to_url($id) ?>"> 
      
      </div>
 <!-- ******************** вывод статы собаки  *****************--> 
  <?php detalis($id);?>
<!-- ******************** вывод Генетического кода собаки  скрытый текст*****************--> 
    <details>
      <summary>Генетический код</summary> 
          <?php print_all_d($id);  ?>
    </details>
<!-- ******************** вывод родителей *****************--> 
<p align="center">Родители:<br>
    
                                  МАМА ========================= ПАПА

<?php if(!isset($id_m)): ?>
<!-- левая колонка мамы-->    
    <div style="float: left; width: 35%;">
<!-- имя мамы--> 
        <details>
             <summary><?php echo find_where('animals',(find_where('animals',$id,'mum')),'name');?></summary> 
<!-- картинка мамы--> 
            <?php 
                  $id_m=find_where('animals',$id,'mum');
                  if ('нет данных'!==$id_m){
                        $row = R::getRow( 'SELECT * FROM animals WHERE id = :id',
                        [':id' => $id_m]);
                        f_get_image($row['hr'],$row['ww'],$row['ff'],$row['bb'] ,$row['tt'],$row['mm']);
                        ?><img src="<?php echo $_POST['url']?>"><?php
                  }else
                    echo 'нет данных о предках'; ?>
        
            <!-- ******************** вывод Генетического кода собаки  скрытый текст*****************--> 
              <details>
                    <summary>Генетический код</summary> 
                    <?php print_all_d($id_m);?>
                    <summary>Статы|spd|agl| tech | jmp |scnt| fnd| Ttl |Mut|</summary> 
                    <?php print_stats_d($id_m);  ?>
               </details>
       </details>
 <?php endif;    ?>
     </div class="content_mum">
<?php if(!isset($id_d)): ?>
<!-- правая колонка папы-->  
    <div style="float: right; width: 48%;">
<!-- имя папы-->  
      <details>
            <summary><?php echo find_where('animals',(find_where('animals',$id,'dad')),'name');?></summary> 
<!-- картинка папы-->  
              <?php 
                    $id_d=find_where('animals',$id,'dad');
                    if ('нет данных'!==$id_d){
                        $row = R::getRow( 'SELECT * FROM animals WHERE id = :id',
                              [':id' => $id_d]);
                        f_get_image($row['hr'],$row['ww'],$row['ff'],$row['bb'] ,$row['tt'],$row['mm']);
                        ?><img src="<?php echo $_POST['url']?>">  <?php
                    }else
                      echo 'нет данных о предках'; ?>


                  <!-- ******************** вывод Генетического кода собаки  скрытый текст*****************--> 
              <details>
                  <summary>Генетический код</summary> 
                    <?php print_all_d($id_d);?>
                    <summary>Статы| spd | agl | tech | jmp | scnt| fnd | Ttl |Mut|</summary> 
                    <?php print_stats_d($id_d); ?> 
              </details>
        </details>
    
    </div>
    </p>
    </main>

<?php endif;
?></div>
    <!-- --------------------------------------  class="right_sidebar"  ----------------------------- -->   

<div class="right_sidebar" >
        <!-- ******************** кнопка вязка справа  *****************--> 

   <form method="POST">
      
      
      <a class="buttons" <?php echo '<a href="/lit&pup.php?id=' . $id . '">'?>Родословная</a>
      <a class="buttons" <?php echo '<a href="/kennel.php">'?>в питомник</a>
      <p>
    <p><strong>Сменить имя:</strong></p>
    <input type="text" name="name1">
    <input id="button" name="newName" type="submit" value="Новое имя" class = "knopka">

                           
    </form>
  <form method="POST" action = "/matting.php">
      <div align="right"><input id="button" name="knopka" type="submit" value="Вязка" class = "knopka">
      </div>
      <?php $_SESSION['Dog'] = $id; var_dump($_SESSION['Dog']); ?>
      
  </form>

</div class="right_sidebar" >

     
