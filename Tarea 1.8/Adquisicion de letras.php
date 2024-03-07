<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Adquisicion de letras</h1>
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

<h3>Descripcion</h3>
En el ITAM, a los alumnos que estudian ingeniería les gusta comer letras. A Miguel le encanta la letra "d" y quiere saber cuántas se va a poder comer de un paquete que la escuela proporciona a todos sus alumnos.

El paquete que la escuela entrega es una palabra con letras minúsculas del alfabeto
<h3>Entrada</h3>
<p>Un solo string de letras minúsculas.</p>
<h3>Salida</h3>
<p>La cantidad de veces que aparece la letra favorita de Miguel.</p>
<h3>Ejemplo</h3>
<table border=1>
    <tr>
        <td>abcjdlllld</td>
        <td>2</td>
    </tr>
</table>
<form action="Adquisicion de letras.php" method="post">
    Num 1:
        <input type="text" name="txtpalabra"><br>
        <input type="submit" value="Enviar"><br>
        </form>

        <?php
         if($_POST)
         {
             $nombre=$_POST['txtpalabra'];
            $p=strlen($nombre);
            $cont=0;
            for ($i=0; $i <$p ; $i++) { 
                
                if($nombre[$i]== "d")
                {
                    $cont++;
                }

            }
            echo "El numero de veces que d aparecio es: ", $cont;


         }

        ?>
</body>
</html>