<?php
//подключение файлов
/*require "/html/header.html";
require "/html/nav.html";
require "/html/aside.html";
*/
require "/libs/up.php";
      
        echo 'Добро пожаловать, ' . $_SESSION['logged_user']->login . ' .';
        echo ' Сегодня: ' . date('d.m.Y', time() - 86400);;
       
      ?><h3><li>Последние новости</li></h3>
        <?php if (isset($_POST['comment'])) { //если в форме NewDog включена кнопка отправки имени собаки
                //echo 'Поле было заполнено';
                echo 'родился малыш: ';
                echo $a = $_POST['comment'];
               // echo $_SESSION['id_new'];
                insert_data('animals',$_SESSION['id_new'],'name',$_POST['comment']);
              //  insert_name($_SESSION['id_new'],$_POST['comment']);
          
                } ?> 
        <h3><li>Важные события: </li></h3>
        <?php
        
      /*  $G1dad='33';
   
       $dogs=R::dispense( 'animals');
       $dogs->id='12';
       $dogs->gg1dad1=$G1dad;
      
       $id = R::store( $dogs );
    */
     
    
?>
       
<?php require '/libs/down.php';
