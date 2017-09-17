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


<?php  





echo '<br>Тестируем! ';

$sex='сука';
$dog_id=1;
echo '<br>' . pricing($sex, $dog_id);

globals();

 $vip=ret_url_from_dna('vip03');
          ?><img src="<?php echo $vip;?>"><?php


 require '/libs/down.php';
 ?>