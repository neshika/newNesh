<?php
//подключение файлов
/*require "/html/header.html";
require "/html/nav.html";
require "/html/aside.html";
*/
require "/libs/up.php";
      
        echo 'Добро пожаловать, ' . $_SESSION['logged_user']->login . ' .';
        echo ' Сегодня: ' . date("Y-m-d");
       
      ?><h3><li>Последние новости</li></h3>
        <?php if (isset($_POST['comment'])) { //если в форме NewDog включена кнопка отправки имени собаки
                //echo 'Поле было заполнено';
                echo 'родился малыш: ';
                echo $a = $_POST['comment'];
               // echo $_SESSION['id_new'];
                insert_name($_SESSION['id_new'],$_POST['comment']);
          
                } ?> 
        <h3><li>Важные события: </li></h3>
        <?php
        
        // $id=3;
        // $value='name';
        // $value2='sex';
        // $value3='url';
        // echo 'Имя: ' .  find_where($id,$value);
        //  echo '  ' .  find_where($id,$value2);
        //  echo '  ' .  find_where($id,$value3);
     
    
?>
       
<?php require '/libs/down.php';
