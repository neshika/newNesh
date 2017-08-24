<?php
       require "/libs/up.php";
?>
<h1 align="center">Доска объявлений</h1>
<h3 align="center">Актуальное предложение</h3>
<?php


       $Hr=f_rand_col('HrHr','Hrhr','hrhr');
       $W=f_rand_col('WW','Ww','ww');
       $F=f_rand_col('FF','Ff','ff');
       $B=f_rand_col('BB','Bb','bb');
  
       $T=f_rand_col('TT','Tt','tt');
       $M=f_rand_col('MM','Mm','mm');
       $A=f_rand_col('AA','AA','aa');

      $all= "<br>".$Hr."<br>".$W."<br>".$F."<br>".$B."<br>".$T."<br>".$M;
   // echo $all;
   
//возвращает url собаки, чтобы нарисовать картинку
      $url=bdika_color ($Hr,$W,$F,$B,$T,$M);

// морем картинки из базы
      $url_id=ret_id_from_url($url);
   //   echo 'id ' . $url_id;

     // echo "<br>" . f_bdika_sex();      //дает рандомный пол
      $sex=f_bdika_sex();
      $spd=Rand(89,100);
      $agl=Rand(89,100);
      $tch=Rand(89,100);
      $jmp=Rand(89,100);
      $nuh=Rand(89,100);
      $fnd=Rand(89,100);
      $ttl=Rand(89,100);

      $owner=ret_owner();
     
     echo $count = R::count( 'animals', 'owner = :owner && status = 1',
              [':owner' => $owner]);
     $dog_id=$count+1;
          
      ?>
<div>

       <div align="left">
        <img src = "<?php echo $url; ?>" width="300" >
        <table width="100" cellpadding="2" cellspacing="0" border="1" >
              <colgroup width="150">
              <colgroup span="9" align="center" width="10">
              <col span="5">
              <col span="4">
              </colgroup>
              <tr border="1"> 
                     <td>пол</td><td><?php echo $sex; ?></td>
              </tr>
              <tr border="1"> 
                     <td>Скорость</td><td><?php echo $spd; ?></td>
              </tr>
              <tr border="1"> 
                     <td>Уворот</td><td><?php echo $agl; ?></td>
              </tr>
              <tr border="1"> 
                     <td>Обучение</td><td><?php echo $tch; ?></td>
              </tr>
              <tr border="1"> 
                     <td>Прыжки</td><td><?php echo $jmp; ?></td>
              </tr>
              <tr border="1"> 
                     <td>Обоняние</td><td><?php echo $nuh; ?></td>
              </tr>
              <tr border="1"> 
                     <td>Поиск</td><td><?php echo $fnd; ?></td>
              </tr>
              <tr border="1"> 
                     <td>Итого</td><td><?php echo $ttl; ?></td>
              </tr>
              </colgroup></table>

       
      
           
<form action="/buy.php" method="POST">
       <button type="submit" class="knopka" name="buy">Купить</button>
       <?php $_POST["url"]='1'; ?>
</form>
<?php
////////////////////////////////////////////////////////////////////////////////////
      if( isset($_POST['buy']) ){
              echo 'Проверьте покупку в питомнике! ';
              
              
             //insert_new_stats($id_new,$spd,$agl,$tch,$jmp,$nuh,$fnd,$ttl,$mut);
            //insert_new_dna($dog_id,$url_id,$Hr,$W, $F,$B,$M,$T,$A);


       }

////////////////////////////////////////////////////////////////////////////////////
?>
 </div>