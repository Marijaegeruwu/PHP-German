<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                <li><a href="index.html">Inicio</a></li>
                    <li><a href="problema.php">Adquisicion de Numeros</a></li>
    <h1>Bit de paridad</h1>
    <table border=1>
    <tr>
        <td>Points</td>
        <td>9.01</td>
        <td>Memory limit</td>
        <td>32 MiB</td>
    </tr>
    <tr>
        <td>Time limit(case)</td>
        <td>1s</td>
        <td>Time limit(total)</td>
        <td>1m0s</td>
    </tr>
    <tr>
        <td>Input size limit (bytes)</td>
        <td>10KiB</td>
    </tr>
    </table>
    <h2>Descripcion</h2>
    <p>Un bit de paridad es un dígito binario que indica si el número de bits con un valor de 1 en un conjunto de bits es par o impar. Los bits de paridad conforman el método de detección de errores más simple. Existen dos variantes de este método:

Bit de paridad par
Bit de paridad impar.
En el caso de la paridad par, se cuentan el número de unos. Si el total es impar, el bit de paridad se establece en uno y por tanto la suma del total anterior con este bit de paridad, daría par. Si el conteo de bits uno es par, entonces el bit de paridad se deja en 0, pues ya es par.

Escribe un programa que sirva para añadir un bit de paridad par a una secuencia de bits.
</p>
<h2>Entrada</h2>
<p>La entrada consiste de una sola línea con una secuencia de siete bits 0 o 1.</p>
<h2>Salida</h2>
<p>La salida es la misma secuencia de siete bits de la entrada más el bit de paridad par. Dicho bit de paridad se agrega al lado derecho.</p>

<table border=1>
    <tr>
        <td>1010001</td>
        <td>10100011</td>
        <td>El número de bits con valor de 1 en la entrada es 3. La salida son los mismos siete bits de la entrada y se añade un bit 1 para que en total el número de bits con valor 1 sea par.</td>
    </tr>
    <tr>
        <td>1101001</td>
        <td>11010010</td>
        <td>El número de bits con valor de 1 en la entrada es 4. La salida son los mismos siete bits de la entrada y se añade un bit 0 para que en total el número de bits con valor 1 se mantenga par.</td>
    </tr>
    <tr>
        <td>0000000</td>
        <td>00000000</td>
        <td>El número de bits con valor de 1 en la entrada es 0. La salida son los mismos siete bits de la entrada y se añade un bit 0 para que en total el número de bits con valor 1 se mantenga par (cero es un número par).</td>
    </tr>
    <tr>
        <td>1111111</td>
        <td>11111111</td>
        <td>El número de bits con valor de 1 en la entrada es 7. La salida son los mismos siete bits de la entrada y se añade un bit 1 para que en total el número de bits con valor 1 sea par.</td>
    </tr>

</table>

    <form action="problema.php" method="post">
    Num 1:
        <input type="text" name="txtpalabra"><br>
        <input type="submit" value="Enviar"><br>
</form>

<?php

if($_POST)
{
    $nombre=$_POST['txtpalabra'];
   $p=strlen($nombre);
   echo "<br>";
    $cont=0;
    $contdos=0;
   for ($i=0; $i <$p ; $i++) 
   { 
       
       if($nombre[$i]== "0")
       {
         $cont=$cont+1; 
       }
       else if($nombre[$i]== "1")
       {
        $contdos=$contdos+1;    
       }

   }
   echo"Resultado: ";

   if($cont > $contdos )
   {
    echo $nombre;
    echo "1";
   }
   else if($contdos > $cont)
   {
    echo $nombre;
    echo "0";
   }
   


}

?>

    
</body>
</html>