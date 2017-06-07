<?php
//подключение файлов
/*require "/html/header.html";
require "/html/nav.html";
require "/html/aside.html";
*/
require "/libs/up.php";

        $owner=ret_owner(); //сохраняем название владельца в переменную из куки

/*Получаем запросом  навание питомника, при условии что владелец идентифицируется по куку Сессии*/
        $kennel = R::getCell('SELECT kennel FROM animals WHERE owner = :owner',
        [':owner' => $owner]);
        ?> <p class="kennel"><?php echo "<br>Питомник: " . '"' . $kennel . '"';
        echo "<br>Владелец: " . $_SESSION['logged_user']->login;
        
/*каунтом считаем сколько строк с собаками по владельцу*/        
         $count = R::count( 'animals', 'owner = :owner',
        [':owner' => $owner]);
         echo "<br>Количество собак: " . $count;
/*создаем форму с кнопками по сортировке собак на виды*/      
      ?>

      <form method="POST" action="/kennel.php">
          <button type="submit" class="knopka" name="all_dogs">все собаки</button>
          <button type="submit" class="knopka" name="female">суки</button>
          <button type="submit" class="knopka" name="male">кобели</button>
      </form>
    </p>
<?php
/* Ели нажата кнопка ВСЕ СОБАКИ выводим на экран всех собак, пренадлежащих владельцу*/
       if( isset($_POST['all_dogs']) ){
        $array[] = R::getAssoc('SELECT id,name FROM animals WHERE owner = :owner',
        [':owner' => $owner]);
/*картинка суки/кобели*/              
        ?><p class="kennel"><img src = "/pic/male.png" width="10%"><img src = "/pic/female.png" width="10%"></p><?php
           foreach($array as $item) {
              foreach ($item as $key => $value) {
                echo "<br><hr><a>";

/*выводим на экран имя собаки как ссылку*/
                $tip=find_where('animals', $key,'hr');
                $lit=find_where('animals', $key,'litter');
                $pup=find_where('animals', $key,'puppy');
                echo '<a href="/name.php?id=' . $key . '">'?>
                  <img src="<?php echo print_pic($key)?>" width="25%" float="left"></a>
              <div>
             <?php echo 'имя: ' . $value;
                    echo '<br> тип : ' . $tip;
                    echo '<br> вязки/дети: ' . $lit . '/' . $pup;
              ?></div><?php
             }    
              echo "<br/>";
            }
             
          }
/* Если нажата кнопка СУКИ выводим на экран всех собак, пренадлежащих владельцу*/
        if( isset($_POST['female']) ){
        $array[] = R::getAssoc('SELECT id,name FROM animals WHERE owner = :owner && sex LIKE "сука"' ,
        [':owner' => $owner]);
/*картинка сук*/
        ?>
          <p class="right"><img src = "/pic/female.png" alt = "девочки" width="10%">
        <?php
           foreach($array as $item) {
              foreach ($item as $key => $value) {
                echo "<br>";
/*выводим имена сук как ссылки на страничку собаки*/
                echo '<a href="/name.php?id=' . $key . '">' . "$value"; ?>
<!-- выводим картинку собаки -->
                <img src="<?php echo print_pic($key)?>" width="25%"> </a>
                 <?php
                }   
              echo "<br />"; 
            }
            ?></p><?php
          }
/* Ели нажата кнопка КОБЕЛИ выводим на экран всех собак, пренадлежащих владельцу*/
        if( isset($_POST['male']) ){
        $array[] = R::getAssoc('SELECT id,name FROM animals WHERE owner = :owner && sex LIKE "кобель"' ,
        [':owner' => $owner]);
        ?>
        <img src = "/pic/male.png" alt = "мальчики" width="10%">
        <?php
           foreach($array as $item) {
              foreach ($item as $key => $value) {
                echo "<br>";
/*выводим имена кобелей как ссылки на страничку собаки*/
                echo '<a href="/name.php?id=' . $key . '">' . "$value"; ?>
                <img src="<?php echo print_pic($key)?>" width="25%"> </a>
                 <?php
                }    
              echo "<br />";
            }
          }

//функция вызывающая футер сайта
require "/libs/down.php";
?> 