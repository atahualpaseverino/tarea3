

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
    
</head>
<body>

<!--NOTA: LOS COMENTARIOS LOS HE HECHO DE ESTA FORMA PORQUE NO ME PERMITE HACERLOS CON // Y /* */-->

<!--ESTE EJERCICIO MUESTRALAS VARIABLES CON SU VALOR, LA SUMA,RESTA,MULT Y DIV-->
<h1>Ejercicios básicos</h1>
    <?php
     $x=144;
     $y=999;
  
    $suma=$x+$y;
    $resta=$y-$x;
    $multiplicacion=$x*$y;
    $division=$x/$y;
                
              
   echo "<p>el valor de x es :</p>".$x;
   
   echo "<p>el valor de x es :</p>","".$y;

   echo "<p>La suma  de X + Y es :</p>".$suma; 
   echo "<p>La Resta  de X - Y es :</p>".$resta;
   echo "<p>La Multiplicacion  de X * Y es :</p>".$multiplicacion;
   echo "<p>La Division  de X / Y es :</p>".$division;
    ?>
<!--FIN-->


    <!--ESTA PARTE DE CODIGO MUESTRA EL NOMBRE COMPLETO-->
    <h1>Nombre Completo:</h1>
    <?php
    $nombre="<p>Nestor Atahualpa Severino Florentino</p>";
    echo "<p>Mi Nombre es:</p>".$nombre;
    ?>
    <!--FIN-->


<!--ESTA PARTE ES UN CONVERSOR DE MONEDAS, EL CUAL AL INTRODUCIRLE EL VALOR LO CALCULA EN DOLARES Y EURO AMBOS A PESO-->
<form action="index.php" method="post">
<h1>conversor de monedas</h1>
<label for="">cantidad en Moneda</label>
<input type="text" name="peseta" placeholder="Introduca la Cantidad">
<label for="">moneda</label>
<select name="moneda">
<option value=""></option>
<option value="us">US</option>
<option value="euro">Euro</option>
</select>
<input type="submit"value="calcular">
</form>

<?php

function convertir(){
    $peseta= $_POST['peseta'];
    $moneda= $_POST['moneda'];
    if ($moneda=='us'){
        $precio=52.5;
    }
    else{
        $precio= 60.5;
    }
$total= $peseta*$precio;
return array($peseta,$moneda,$total);
    }

?>
<h1>el total es:</h1>
<?php
$resultado=convertir();
echo "El total de "  .  " pesos en "  .  $resultado[1] . "  es " 
. round($resultado[2], 2);
?>

<?php

function convertirdato(){
    $datos= $_POST['datos'];
  
    if ($datos==''){
        return("introdusca un dato");
    }
    else{
        $datos;
    }

return ($datos);
    }
?>
<!--FIN-->


<!--ESTA PARTE MUESTRA EL DATO INGRESADO EN EL IMPUT, EN AL PARTE DEL HTML-->
<form action="index.php" method="post">
<h1>Dato Ingresado</h1>
<label for="">Ingrese un dato</label>
<input type="text" name="datos" placeholder="Introduca un dato">

<input type="submit"value="mostrar datos">
</form>
<h1>El Dato Introducido es:</h1>
<?php
$datos=convertirdato();
echo "El dato introducido es :"  .  $datos ;
?>
<!--FIN-->


<!--MUESTRA URL ACTUAL-->
<?php
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
?>
<h1>URL ACTUAL:</h1>
<?php echo "http://" . $host . $url;?>
<!--FIN-->


<!--MUESTRA IP ACTUAL-->
<h1>su direccion ip es:</h1>
<?php 
echo "Tu dirección IP es: {$_SERVER['REMOTE_ADDR']}";
?>
<!--FIN-->


<!--MUESTRA EL NOMBRE DEL FICHERO ACTUAL-->
<h1>nombre del fichero: </h1>
<?php
echo __FILE__;
?>
<!--FIN-->

<!--ESTA PARTE MUESTRA EL CAR DE LAS PALABRAS RESERVADAS EN PHP-->
<section class="conteiner-fluid">
<h1>PALABRAS RESERVADA EN PHP</h1>

<div class="boxesContainer">
<?php
$array = array("breack","class","else","if");
$array_num = count($array);
for ($i = 0; $i < $array_num; ++$i){
    print $array[$i];
}
?>
<div class="boxesContainer">

  <div class="cardBox">
    <div class="card"id=>
      <div class="front">
        <h3>breack</h3>
        <p>Ver</p>
        <strong>&#x21bb;</strong>
      </div>
      <div class="back">
        <h3>Finaliza la ejecución de ciclos como: for, foreach, while, do-while o switch en curso.</h3>
      </div>
    </div>
  </div>

  <div class="cardBox">
    <div class="card">
      <div class="front">
        <h3>class</h3>
        <p>Ver</p>
        <strong>&#x21bb;</strong>
      </div>
      <div class="back">
        <h3>Sirve para definir una clase.</h3>     
      </div>
    </div>
  </div>

  <div class="cardBox">
    <div class="card">
      <div class="front">
        <h3>Else</h3>
        <p>Ver</p>
        <strong>&#x21bb;</strong>
      </div>
      <div class="back">
        <h3>Permite ejecutar un bloque de instrucciones en caso de validar como falsa la condición de un if.</h3>    
      </div>
    </div>
  </div>

  <div class="cardBox">
    <div class="card">
      <div class="front">
        <h3>IF</h3>
        <p>Ver</p>
        <strong>&#x21bb;</strong>
      </div>
      <div class="back">
        <h3>Es utilizado para la ejecución condicional de fragmentos de código siempre y cuando se cumpla o no una condición.</h3>       
      </div>
    </div>
  </div>

</div>
</section>
<!--FIN-->

</body>
</html>