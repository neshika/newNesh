<?php
require "db.php";
        //подключение файлов
        require "/html/header.html";
        require "/html/nav.html";
        require "/html/aside.html";
        
?><div class="content">

<?php
        require "includes/functions.php";


             echo 'Владелец: ' . $owner=$_SESSION['logged_user']->login;

if(!isset($_POST['food'])  ){   
             $_SESSION['vitality']=Rand(1,100);
             $_SESSION['hp']=Rand(1,100);
             $_SESSION['joy']=Rand(1,100);
}

if( isset($_POST['food']) ){        //если кнопка нажата
$vitality = $_SESSION['vitality'];
$hp=$_SESSION['hp'];
$joy=$_SESSION['joy'];
//title="Энергия +35% Счастье +1%"
  echo '<br> Энергия' . $vitality;
  echo '<br> Счастье' . $joy;
  $vitality=$vitality+35;
  $joy=$joy+1;
  echo '<br> Энергия' . $vitality;
  echo '<br> Счастье' . $joy;

  
if($vitality>100)
  $vitality=100;
if($hp>100)
  $ph=100;
if($joy>100)
  $joy=100;

$_SESSION['vitality']= $vitality;
$_SESSION['hp']=$hp;
$_SESSION['joy']=$joy;

$_POST['food']=NULL;

}


?>

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

<hr>
<form method="POST" action="/test.php">
    <table width="1170" cellpadding="3" cellspacing="0">
       <colgroup width="390">
      <tr>
          <td><input style="float: left;  margin-left: 30px;" id="button" name="food" type="submit" value="есть" title="Энергия +35%
Счастье +1%" class = "knopka">
              <input style="float: right;  margin-right: 30px;" id="button" name="knopka" type="submit" value="пить" title="Энергия +5%
Счастье +1%" class = "knopka">
              <br>
              <input style="float: left;  margin-left: 30px;" id="button" name="knopka" type="submit" value="чесать" title="Энергия -3%
Счастье +10%" class = "knopka">
              <input style="float: right;  margin-right: 30px;" id="button" name="knopka" type="submit" value="гулять" title="Энергия -17%
Счастье +15%" class = "knopka">
              <br>
              <input style="float: left;  margin-left: 30px;" id="button" name="knopka" type="submit" value="спать" title="Энергия +40%
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

 require '/libs/down.php';
 ?>