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
             $vitality=12 . '%';
             $hp=3 . '%';
             $joy=100 . '%';

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

<table width="1170" cellpadding="3" cellspacing="0">
   <colgroup width="390">
  <tr>
      <td><input style="float: left;  margin-left: 30px;" id="button" name="knopka" type="submit" value="есть" class = "knopka">
          <input style="float: right;  margin-right: 30px;" id="button" name="knopka" type="submit" value="пить" class = "knopka">
          <br>
          <input style="float: left;  margin-left: 30px;" id="button" name="knopka" type="submit" value="чесать" class = "knopka">
          <input style="float: right;  margin-right: 30px;" id="button" name="knopka" type="submit" value="гулять" class = "knopka">
          <br>
          <input style="float: left;  margin-left: 30px;" id="button" name="knopka" type="submit" value="спать" class = "knopka">
          <input style="float: right;  margin-right: 30px;" id="button" name="knopka" type="submit" value="растить" class = "knopka">

        
    </td>

    <td style="border-width: 10px; text-align: center;"><img src="<?php echo ret_url_from_dna('vip04');?>">
   
    </td> 
    <td>
      <input id="button" name="knopka" type="submit" value="добавка" class = "knopka">
      <input id="button" name="knopka" type="submit" value="спа уход" class = "knopka">
      <input id="button" name="knopka" type="submit" value="ветеринар" class = "knopka">
      <input id="button" name="knopka" type="submit" value="тренировки" class = "knopka">
    </td>
  </tr>
</table>
<div style="margin-left: 410px""><table>
        <tr><td>Энергия</td><td><div class="meter"><span style="width: <?php echo$vitality;?>"></span></div></td><td><?php echo$vitality;?></td></tr>
        <tr><td>Здоровье</td><td><div class="meter"><span style="width: <?php echo$hp;?>"></span></div></td><td><?php echo$hp;?></td></tr>
        <tr><td>Счастье</td><td> <div class="meter"><span style="width: <?php echo$joy;?>"></span></div></td><td><?php echo$joy;?></td></tr>

      </table>
</div>


<?php  





echo '<br>Тестируем! ';


 require '/libs/down.php';
 ?>