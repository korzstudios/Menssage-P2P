<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menssage cripy</title>
    <style>
      body{
        background-image: url('bg.jpeg');
      }
     h1{
       color:#ffffff;
     }
   img{
     width:250px;
   }
  cma{
    color:#ffffff;
    font-size:23px;
  }
 f{
   color:#ffea27;
 }
    </style>
</head>
<body>

 <h1>Your menssagens🔮:</h1>
<a href="blow.php"><button>Your profile</button></button></a>
<br>
<?php 
$cretion = $_SERVER['REMOTE_ADDR'];
$generate_md5 = md5($cretion);
mkdir("$generate_md5");
$new = fopen("$generate_md5/$generate_md5.txt",'a');
fclose($new);
//cadhsj

// Nome do arquivo
$nomeArquivo = "$generate_md5/$generate_md5.txt";

// Lê o arquivo para um array e inverte a ordem das linhas
$linhasInvertidas = array_reverse(file($nomeArquivo));

// Itera sobre as linhas invertidas
foreach ($linhasInvertidas as $linha) {
    // Faça algo com cada linha
    echo "\n $linha <br><br>";
} 




?>
   

</body>
</html>


