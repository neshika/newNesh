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
  
<?php  




echo '<br>Тестируем! ';

$dog_id=0;
$sex='сука';


$price=pricing($sex, $dog_id);

//if(bdika_balance($owner,$price)) 
  //buying($owner,10000);




 



               require '/libs/down.php';
 ?>