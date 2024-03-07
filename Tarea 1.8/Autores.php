<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Autores</h1>
<table border=1 >
    <tr>
        <td>Points</td>
        <td>10.76</td>
        <td>Memory limit</td>
        <td>32 MiB</td>
    </tr>
    <tr>
        <td>Time Limit (case)</td>
        <td>1s</td>
        <td>Time limit (total)</td>
        <td>1m0s</td>
    </tr>
    <tr>
        <td>Input size limit (bytes)</td>
        <td>10Kib</td>
    </tr>
</table>
<!--eso q-->


<h3>Descripcion</h3>
<p>Consta de varias palabras separadas por un "-" por ejemplo
    "Anita-lava-la-tina" entonces debera imprimir la primer letra de tods las palabras despues del "-" la cual seria"Allt"
</p>

<h3>Entrada</h3>
<p>varias palabras separadas por "-"</p>

<h3>Salida</h3>
<p>Lo unico que se imprimira son las iniciales de cada palabra</p>
<h3>Ejemplo</h3>

<table border=1>
    <tr>
        <td>Knuth-Morris-Pratt</td>
        <td>KMP</td>
    </tr>
    <tr>
        <td>Mirko-Slavko</td>
        <td>MS</td>
    </tr>
    <tr>
        <td>Pasko-Patak</td>
        <td>PP</td>
    </tr>
</table>
<form action="Autores.php" method="post">
    Num 1:
        <input type="text" name="txtpalabra"><br>
        <input type="submit" value="Enviar"><br>
</form>

<?php

if($_POST)
{
    $nombre=$_POST['txtpalabra'];
   $p=strlen($nombre);
   echo "La frase es: ",$nombre;
   echo "<br>";
   echo $nombre[0];
   for ($i=0; $i <$p ; $i++) 
   { 
       
       if($nombre[$i]== "-")
       {
           echo $nombre[$i+1];
       }

   }
   


}

?>

    
</body>
</html>