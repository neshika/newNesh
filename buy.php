<?php

       require "/libs/up.php";
   
?>
<h1 align="center">Доска объявлений</h1>
<h3 align="center">Актуальное предложение</h3>
<?php

if(!isset($_POST['buy']) ){        //если кнопка не нажата

       $_SESSION['hr']=$Hr=f_rand_col('HrHr','Hrhr','hrhr');
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
      $_SESSION['url'] = $url;
   //   echo 'id ' . $url_id;

     // echo "<br>" . f_bdika_sex();      //дает рандомный пол
/////////////////////////////////////////////////////////////создает temp собаку в stats
       $id=1;
       $dog_id=0; 


      
       $sex=f_bdika_sex();
      $spd=Rand(9,11);
      $agl=Rand(9,11);
      $tch=Rand(9,11);
      $jmp=Rand(9,11);
      $nuh=Rand(9,11);
      $fnd=Rand(9,11);
      $ttl=Rand(9,11);

      $owner=ret_owner();
      // session_start(); 
       $_SESSION['sex'] = $sex;
       $_SESSION['own'] = $owner;



     R::exec( 'UPDATE stats SET dog_id=:dog_id WHERE id = :id ', array(':dog_id'=> $dog_id, ':id' => $id));
     R::exec( 'UPDATE stats SET speed=:speed WHERE id = :id ', array(':speed'=> $spd, ':id' => $id));
     R::exec( 'UPDATE stats SET agility=:agility WHERE id = :id ', array(':agility'=> $agl, ':id' => $id));
     R::exec( 'UPDATE stats SET teach=:teach WHERE id = :id ', array(':teach'=> $tch, ':id' => $id));
     R::exec( 'UPDATE stats SET jump=:jump WHERE id = :id ', array(':jump'=> $jmp, ':id' => $id));
     R::exec( 'UPDATE stats SET scent=:scent WHERE id = :id ', array(':scent'=> $nuh, ':id' => $id));
     R::exec( 'UPDATE stats SET find=:find WHERE id = :id ', array(':find'=> $fnd, ':id' => $id));
     R::exec( 'UPDATE stats SET total=:total WHERE id = :id ', array(':total'=> $ttl, ':id' => $id));





    // echo $count = R::count( 'animals', 'owner = :owner && status = 1',
             // [':owner' => $owner]);
    // $dog_id=$count+1;
/////////////////////////////////////////////////////////////создает temp собаку в таблице DNA
    // $id=1;
   //  $dog_id=0;             
      //insert_new_dna('1',$url_id,$Hr,$W, $F,$B,$M,$T,$A);
     R::exec( 'UPDATE dna SET url_id=:url_id WHERE id = :id ', array(':url_id'=> $url_id, ':id' => $id));
     R::exec( 'UPDATE dna SET hr=:Hr WHERE id = :id ', array(':Hr'=> $Hr, ':id' => $id));
     R::exec( 'UPDATE dna SET dog_id=:dog_id WHERE id = :id ', array(':dog_id'=> $dog_id, ':id' => $id));
     R::exec( 'UPDATE dna SET ww=:ww WHERE id = :id ', array(':ww'=> $W, ':id' => $id));
     R::exec( 'UPDATE dna SET ff=:ff WHERE id = :id ', array(':ff'=> $F, ':id' => $id));
     R::exec( 'UPDATE dna SET bb=:bb WHERE id = :id ', array(':bb'=> $B, ':id' => $id));
     R::exec( 'UPDATE dna SET mm=:mm WHERE id = :id ', array(':mm'=> $M, ':id' => $id));
     R::exec( 'UPDATE dna SET tt=:tt WHERE id = :id ', array(':tt'=> $T, ':id' => $id));
     R::exec( 'UPDATE dna SET aa=:aa WHERE id = :id ', array(':aa'=> $A, ':id' => $id));
/////////////////////////////////////////////////////////////конец создает temp собаку         
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
              </colgroup>
        </table>
      </div>

       
      
          
<form action="/buy.php" method="POST">
       <button type="submit" class="knopka" name="buy">Купить</button>
      
</form>
<?php
} 
////////////////////////////////////////////////////////////////////////////////////
      if( isset($_POST['buy']) ){  //если нажата кнопка ЭкупитьЭ
              echo 'Проверьте покупку в питомнике! <br> Вы купили отличную собаку! <br> ';
             
             //insert_new_stats($id_new,$spd,$agl,$tch,$jmp,$nuh,$fnd,$ttl,$mut);
              // $url_id=find_where('dna','0','url_id');
              //   $url_pic=find_where('coat',$url_id,'url');

              // echo find_where('stats','0','total');

              // echo $_SESSION['sex'] ;
              //echo $_SESSION['hr'];
              ?><img src = "<?php echo $_SESSION['url']; ?>">

              <?php
       }

////////////////////////////////////////////////////////////////////////////////////
?>
 </div>