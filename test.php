
<?php
require "db.php";
        //подключение файлов
        require "/html/header.html";
        require "/html/nav.html";
        require "/html/aside.html";
        
?><div class="content">

<?php
        require "includes/functions.php";

////////////////////////////  Функции  /////////////////////////////////
function takeData($owner){




}

function Rando(){     //   дает рандомные данные для энергии, здоровья и счастья


 $_SESSION['vitality']=Rand(1,100);
 $_SESSION['hp']=Rand(1,100);
 $_SESSION['joy']=Rand(1,100);

}

function Well($vit,$hp,$joy){  //  проверяет , чтобы числа были в диапазоне 100
    if($vit>100)
        $vit=100;
    if($hp>100)
      $hp=100;
    
    if($joy>100)
      $joy=100;

    $string = [];
    $string[0]=$vit;
    $string[1]=$hp;
    $string[2]=$joy;

    var_dump($string);
    
    return $string;

}

function Deem($buttom){   //  на срабатывание кнопки считает данные 


    $vit=$_SESSION['vitality'];
    $hp=$_SESSION['hp'];
    $joy=$_SESSION['joy'];


  var_dump($vit);
  var_dump($hp);
  var_dump($joy);
  echo '<br>===========   ';

    if('food'== $buttom){    //  если нажали кнопку "еда"  (+ 35 энергия, +1 счастье)
        $vit +=35;
        $joy +=1;
    }
    if('water'== $buttom){    //  если нажали кнопку "вода"  (+ 5 энергия, +1 счастье)
      $vit +=5;
      $joy +=1;
    }
     if('comp'== $buttom){    //  если нажали кнопку "чесать"  (- 3  энергия, +10 счастье)
      $vit -=3;
      $joy +=10;
    }
      if('walk'== $buttom){    //  если нажали кнопку "гулять"  (- 17  энергия, +15 счастье)
      $vit -=17;
      $joy +=15;
    }
     if('sleep'== $buttom){    //  если нажали кнопку "спасть"  (+40  энергия, +1 счастье)
      $vit +=40;
      $joy +=1;
    }
  $string = Well($vit,$hp,$joy);

  $_SESSION['vitality']= $string[0];
  $_SESSION['hp']=$string[1];
  $_SESSION['joy']=$string[2];
}


////////////////////////////////////////////////////////////////////////   








             echo 'Владелец: ' . $GLOBALS['name']=$_SESSION['logged_user']->login;
            // echo 'Собака: ' . $id = $_GET['id'];
             echo ' Собака: ' . $id = 58;








/////////////////////   КНОПКА   РАНДОМНЫЕ Данные  ///////////////////////


if(isset($_POST['rand'])  ){       // если не нажата кнопка Рандомные   даем рандомные числа для витталити, хп и счастья

    Rando();

}

/////////////////////   КНОПКА    ЕДА    ////////////////////////////////


if(!isset($_POST['food'])  ){       // если не нажата кнопка "еда"   даем рандомные числа для витталити, хп и счастья

    //takeData($owner);

}
echo '<br> ===========  food   ';
var_dump($_POST['food']);

if(isset($_POST['food'])  ){      //если нажали кнопку "еда"

  Deem('food');

}
echo '<br> конец===========   '; 
$_POST['food']=NULL;

/////////////////////   КНОПКА    ПИТЬ    ////////////////////////////////

echo '<br> ===========  water   ';
var_dump($_POST['water']);

if(isset($_POST['water'])  ){      //если нажали кнопку "пить"

  Deem('water');

}
echo '<br> конец===========   '; 
$_POST['water']=NULL;

/////////////////////   КНОПКА    ЧЕСАТЬ    ////////////////////////////////

echo '<br> ===========  comp   ';
var_dump($_POST['comp']);

if(isset($_POST['comp'])  ){      //если нажали кнопку "чесать"

  Deem('comp');

}
echo '<br> конец===========   '; 
$_POST['comp']=NULL;

/////////////////////   КНОПКА    ГУЛЯТЬ    ////////////////////////////////

echo '<br> ===========  walk   ';
var_dump($_POST['walk']);

if(isset($_POST['walk'])  ){      //если нажали кнопку "гулять"

  Deem('walk');

}
echo '<br> конец===========   '; 
$_POST['walk']=NULL;

/////////////////////   КНОПКА    СПАТЬ    ////////////////////////////////

echo '<br> ===========  sleep   ';
var_dump($_POST['sleep']);

if(isset($_POST['sleep'])  ){      //если нажали кнопку "спать"

  Deem('sleep');

}
echo '<br> конец===========   '; 
$_POST['sleep']=NULL;

?>
<!--
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
<hr>
  
<a href="" title="есть"> <img src = "<?php echo ret_item(3);// миска?>"></a>
<a href="" title="пить"> <img src = "<?php echo ret_item(4);// вода?>"></a>
<a href="" title="добавка"> <img src = "<?php echo ret_item(5);// добавка?>"></a>


<br>
<hr>
<button> <img alt="" src="/Pic/food_mini.png" style="vertical-align:middle; height:50px;" />кушать</button>

<button> <img alt="" src="/Pic/water.png" style="vertical-align:middle; height:50px;" />пить</button>

<br>


<button><img alt="" src="/Pic/comp.png" style="vertical-align:middle; height:50px;"/> чесать</button>

<button> <img alt="" src="/Pic/walk.png" style="vertical-align:middle; height:50px;" />  гулять</button>

<br>

<button> <img alt="" src="/Pic/zzz.png" style="vertical-align:middle; height:50px;
" />с о н</button>

<button> <img alt="" src="/Pic/up.png" style="vertical-align:middle; height:50px;" />рост</button>

<br>

<button> <img alt="" src="/Pic/badd_mini.png" style="vertical-align:middle; height:50px;
" />добавка</button>
-->
<hr>
<form method="POST" action="/test.php">
    <table width="1170" cellpadding="3" cellspacing="0">
       <colgroup width="390">
      <tr>
          <td><input style="float: left;  margin-left: 30px;" id="button" name="food" type="submit" value="есть" title="Энергия +35%
Счастье +1%" class = "knopka">
              <input style="float: right;  margin-right: 30px;" id="button" name="water" type="submit" value="пить" title="Энергия +5%
Счастье +1%" class = "knopka">
              <br>
              <input style="float: left;  margin-left: 30px;" id="button" name="comp" type="submit" value="чесать" title="Энергия -3%
Счастье +10%" class = "knopka">
              <input style="float: right;  margin-right: 30px;" id="button" name="walk" type="submit" value="гулять" title="Энергия -17%
Счастье +15%" class = "knopka">
              <br>
              <input style="float: left;  margin-left: 30px;" id="button" name="sleep" type="submit" value="спать" title="Энергия +40%
Счастье +1%" class = "knopka">
              <input style="float: right;  margin-right: 30px;" id="button" name="knopka" type="submit" value="растить" class = "knopka">
        </td>

        <td style="border-width: 10px; text-align: center;"><img src="<?php echo ret_url_from_dna('vip04');?>">
       
        </td> 
        <td>
          <input id="button" name="knopka" type="submit" value="добавка" title="Энергия +15%
Счастье +2%" class = "knopka">
          <input id="button" name="knopka" type="submit" value="спа уход" class = "knopka">
          <input id="button" name="knopka" type="submit" value="ветеринар" title="Энергия -10%
Счастье -30%" class = "knopka">
          <input id="button" name="knopka" type="submit" value="тренировки" title="Энергия -65%
Счастье +20%" class = "knopka">
        </td>
      </tr>
    </table>
    <input id="button" name="rand" type="submit" value="рандомное число" class = "knopka">
    <div style="margin-left: 410px""><table>
            <tr><td>Энергия</td><td><div class="meter"><span style="width: <?php echo$_SESSION['vitality'] . '%';?>"></span></div></td><td><?php echo$_SESSION['vitality'];?></td></tr>
            <tr><td>Здоровье</td><td><div class="meter"><span style="width: <?php echo$_SESSION['hp'] . '%';?>"></span></div></td><td><?php echo$_SESSION['hp'];?></td></tr>
            <tr><td>Счастье</td><td> <div class="meter"><span style="width: <?php echo$_SESSION['joy'] . '%';?>"></span></div></td><td><?php echo$_SESSION['joy'];?></td></tr>

          </table>
    </div>

  </colgroup>
  </table>
</form>

<?php  

echo '<br>Тестируем! ';

//$sex='кобель';
//echo wtht($sex,wtht_rand($sex));
 
 require '/libs/down.php';
 ?>
