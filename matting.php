<?php
require "/libs/up.php";


function bdika_pol($id_dog){  //проверяем пол выбранной собаки, чтобы вывести противоположных партнеров
  $owner = find_where('animals',$id_dog,'owner'); 
 
          if ('сука' === find_where('animals',$id_dog,'sex')){

              $array [] = get_where('animals', 'кобель', $owner);
            }else{
            
              $array [] = get_where('animals', 'сука', $owner);
            }
        return $array;
}

$id_dog= $_SESSION['Dog'];// выгружаем из памяти id собаки 


/***************************   рисуем собаку и ее характеристики*********************/
?>
<div style="background: white; text-align: center; height: 350px; width: 350px; margin-left: 180px;">
    <img src="<?php echo print_pic($id_dog)?>">
    <details><summary> <?php echo "Выбранная собака: " . find_where('animals',$id_dog,'name');?>
    </summary> <?php print_all_d($id_dog);?></details>
</div>
<div style="background: yellow;">
<?php /********************проверяем пол выбранной собаки, чтобы вывести противоположных партнеров******************/
    
      $array = bdika_pol($id_dog);?>
      <h3 align="center"><?php echo 'Партнеры: ';?></h3><?php
   /***************************вывожу на экран возможных парнтеров в зависимости от пола*************************/ 
   foreach($array as $item) {
              foreach ($item as $key => $value) {
                  
                echo "<hr><br>";
/**********************выводим на экран имя собаки как ссылку*********************************/
               ?>
                <form method="post" action="breedding.php">
                <?php $_SESSION['para']=$id_dog;?>
                <?php echo '<a href="/name.php?id=' . $key . '">' . "$value";?></a>
                <div style="background: black; height: 150px; width: 150px;">
                    <div style="display:none;" class="radio_buttons">
                          <input type="radio" NAME="ONONA" VALUE="<?=$key?>" class="knopka" checked />
                          <label for="radio4">Вяжем</label>
                
                    </div>
                    <img src="<?php echo print_pic($key)?>" width="100%" >
                </div>
                <input type="submit" class="knopka" value="Вяжем">
                </form> 
                <?php

             
              }   
        } ?>
</div> <?php
  
//функция вызывающая футер сайта
require "/libs/down.php";