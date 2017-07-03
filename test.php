<?php
require "db.php";
require "includes/functions.php";

 //R::fancyDebug( TRUE );
ini_set('display_errors',1);
error_reporting(E_ALL);

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<title>Cимулятор заводчика</title>
</head>
<body>

            <form  action="/test.php" method="POST">
                Префикс: <input type="radio" name="pref" value="Nosuf">   
                 Суффикс:  <input type="radio" name="pref" value ="suf" onclick="document.getElementById('qw').style.display=(this.checked)?'block':'none';" >
                 <p id="qw" style="display:none;" >
                     <select  name="list">
                        <option value="1">с</option>
                        <option value="2">со</option>
                        <option value="3">из</option>
                        <option value="4">от</option>
                    </select>
                     <input type="submit" name="but_ok" value="OK">
                 </p>
    </form>
<?php
//var_dump($_POST);
$data=$_POST;
if(isset($data['but_ok'])){
    if (1==$data['list'])
            echo 'выбрали: ' . $data['list'] . 'это C';
     if (2==$data['list'])
            echo 'выбрали: ' . $data['list'] . 'это CO';
      if (3==$data['list'])
            echo 'выбрали: ' . $data['list'] . 'это ИЗ';
       if (4==$data['list'])
            echo 'выбрали: ' . $data['list'] . 'это OT';
}

?>
 
</body>
</html>