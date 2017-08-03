<?php
//подключение файлов
/*require "/html/header.html";
require "/html/nav.html";
require "/html/aside.html";
*/
require "/libs/up.php";
      
        echo 'Добро пожаловать, ' . $_SESSION['logged_user']->login . ' .';
        //date('d.m.Y', time() - 86400);
        echo ' Сегодня: ' . date('d.m.Y');

        
        $id=get_id($_SESSION['logged_user']->login);
        $l_time=find_where('users', $id,'l_time');
        $now=date('Y-m-d');  //2017-08-03
        $visits=find_where('users',$id,'visits');
        echo '<br>' . $visits .$now . $l_time;

        if($now!=$l_time){
          echo 'разые';
          $visits=$visits+1;

          insert_data('users',$id,'visits',$visits);
          insert_data('users',$id,'l_time',$now);

        }
        
        
       
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

      

        
?>
       
<?php require '/libs/down.php';
