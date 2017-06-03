<?php
require "/libs/up.php";
?>
    <br>Данные собаки
      
      <?php

      $id = $_GET['id']; 
      //$GLOBALS ['MYDOG'] = 12;
      //echo $MYDOG;
      
      $owner=ret_owner();
      $var = find_where($id,'hr');;
      print_hr($var);
          
      ?>
      <ul>
<!-- ******************** вывод питомника / имя собаки и картинка пола  *****************-->    
                <h3 align="center"><?php echo find_where($id,'kennel');?> <?php echo find_where($id,'name');?><?php echo ret_pic($id);?></h3>
<!-- ******************** кнопка вязка справа  *****************-->  
                    <form method="POST">
                        <input type="text" name="comment">
                        <!-- Сменить имя: <textarea name="comment"></textarea> -->
                           <input type="submit" value="Сменить имя" name="send">
                    </form>
                     <form method="POST" action = "/matting.php">
                 <div align="right"><input id="button" name="knopka" type="submit" value="Вязка" class = "knopka"></div>
                  <?php $_SESSION['Dog'] = $id; var_dump($_SESSION['Dog']); ?>
                </form>
          
<!-- ******************** вывод доп меню собаки  заводчик / хозяин  *****************-->  
        <li>Заводчик: <?php echo find_where($id,'breeder');?></li>
        <li>Хозяин: <?php echo $owner;?></li>
        
         
      </ul>
<!-- ******************** вывод картинки собаки по id  *****************-->  
      <?php 
     echo 'сейчас ID: ' . $id;
     if (isset ($_POST['send'])){
        insert_name($id,$_POST['comment']);
     }
      $row = R::getRow( 'SELECT * FROM animals WHERE id = :id',
        [':id' => $id]);
      f_get_image($row['hr'],$row['ww'],$row['ff'],$row['bb'] ,$row['tt'],$row['mm']);
      //insert_url($_POST['url'],$id); //вставляет ссылку на картинку в базу
      ?>

       <img src="<?php echo $_POST['url']?>"> 
 <!-- ******************** вывод доп меню собаки  вид \\ Дата рождения \\ окрас    *****************-->       
        <br><div>тип:  <?php echo find_where($id,'hr');?> ||
         дата рождения:  <?php echo find_where($id,'birth');?> ||
        </div>   
        <hr><br>
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
             <summary><?php echo find_where((find_where($id,'mum')),'name');?></summary> 
<!-- картинка мамы--> 
            <?php 
                  $id_m=find_where($id,'mum');
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
                    <?php print_all_d($id_m);  endif; ?>
               </details>
       </details>
    
     </div class="content_mum">
<?php if(!isset($id_d)): ?>
<!-- правая колонка папы-->  
    <div style="float: right; width: 48%;">
<!-- имя папы-->  
      <details>
            <summary><?php echo find_where((find_where($id,'dad')),'name');?></summary> 
<!-- картинка папы-->  
              <?php 
                    $id_d=find_where($id,'dad');
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
                  <?php print_all_d($id_d); endif; ?>
              </details>
        </details>
    


        
    </div>
    </p>
    </main>
    <p>
<?php require '/libs/down.php';