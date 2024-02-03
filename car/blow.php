<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Página</title>
    <style>
      c{
        font-size:14px;
      }
    </style>
</head>
<body>
<h1>Your code</h1>
<br>
<form method="post">
  <input type="text" name="cor" placeholder="for">
  <br>
  <br>
  <input type="text" name="ou" placeholder="menssage">
  <br>
  <br>
  <input type="submit">
</form>
<br>

</body>
</html>

<?php
   $show = $_SERVER['REMOTE_ADDR']; 
   $action = md5($show);
   echo "<c>code:$action</c>";
   echo "<br><br>";
   echo "<a href='index.php'><button>return</button></a>";
   echo "<br><br>";
if($a = $_POST['cor']){
     if($b = $_POST['ou']){
       $machine = fopen("$a/$a.txt",'a');
       fwrite($machine,"<f>👉$action:</f><br><cma>$b </cma>\n");
       fclose($machine);
     }
   }
?>