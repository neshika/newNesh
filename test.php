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
  
  <img src = "<?php echo print_item($item_id);?> ">

<?php  



echo '<br>Тестируем! ';

$dog_id=33;
$sex='сука';



// echo $price=pricing($sex, $dog_id);
// put_money($owner,$price);



//if(bdika_balance($owner,$price)) 
  //buying($owner,$price);




 



               require '/libs/down.php';
 ?>