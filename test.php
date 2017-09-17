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
<button> <img alt="" src="/Pic/food_mini.png" style="vertical-align:middle; height:50px;" />еда</button>

<button> <img alt="" src="/Pic/water.png" style="vertical-align:middle; height:50px;" />пить</button>

<button> <img alt="" src="/Pic/badd_mini.png" style="vertical-align:middle; height:50px;
" />добавка</button>
<br>
<button><img alt="" src="/Pic/food_mini.png" style="vertical-align:middle; height:50px;" />еда</button>

<button> <img alt="" src="/Pic/water.png" style="vertical-align:middle; height:50px;" />пить</button>

<button> <img alt="" src="/Pic/badd_mini.png" style="vertical-align:middle; height:50px;
" />добавка</button>
<br>
<button> <img alt="" src="/Pic/food_mini.png" style="vertical-align:middle; height:50px;" />еда</button>

<button> <img alt="" src="/Pic/water.png" style="vertical-align:middle; height:50px;" />пить</button>

<button> <img alt="" src="/Pic/badd_mini.png" style="vertical-align:middle; height:50px;
" />добавка</button>


<?php  





echo '<br>Тестируем! ';

 $vip=ret_url_from_dna('vip03');
          ?><img src="<?php echo $vip;?>"><?php


 require '/libs/down.php';
 ?>