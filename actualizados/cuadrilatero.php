<html>
    <head></head>
    <body>
    <h1>El lado mas corto</h1>
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
<h2>Descripcion</h2>
<p>Escribe un programa que, dadas las coordenadas de los 
vértices de un cuadrilátero, calcule la longitud de su lado más corto.</p>
<h2>Entrada</h2>
<p>Ocho reales x1,y1,x2,y2,x3,y3,x4,y4 y que los vértices se listan ordenados en el sentido de las manecillas del reloj.</p>
<h2>Salida</h2>
<p>Un real que sea la longitud del lado más corto del cuadrilátero. Tu programa se considerará correcto si el valor calculado es razonablemente cercano a la respuesta exacta.</p>
<h2>Ejemplo</h2>
<table border=1>
    <tr>
        <td>10.1 - 10.2<br> 20.2 - 10.3 <br> 22.3 - 4.1 <br> 7.5 - 0.9</td>
        <td>6.545991</td>
    </tr>
</table>
        <form action="cuadrilatero.php" method="post">
        Num 1:
        <input type="text" name="uno"><br>
        Num 2:
        <input type="text" name="dos"><br>
        Num 3:
        <input type="text" name="tres"><br>
        Num 4:
        <input type="text" name="cuatro"><br>
        Num 5:
        <input type="text" name="cinco"><br>
        Num 6:
        <input type="text" name="seis"><br>
        Num 7:
        <input type="text" name="siete"><br>
        Num 8:
        <input type="text" name="ocho"><br>
        
        <input type="submit" value="Enviar"><br>
        </form>

        <?php
    echo "<br>";
        if($_POST)
        {
           
            $x1=$_POST['uno'];
            $y1=$_POST['dos'];
            $x2=$_POST['tres'];
            $y2=$_POST['cuatro'];
            $x3=$_POST['cinco'];
            $y3=$_POST['seis'];
            $x4=$_POST['siete'];
            $y4=$_POST['ocho'];

            echo"lado x1: ".$x1."<br>";
            echo"lado y1: ".$y1."<br>";
            echo"lado x2: ".$x2."<br>";
            echo"lado y2: ".$y2."<br>";
            echo"lado x3: ".$x3."<br>";
            echo"lado y3: ".$y3."<br>";
            echo"lado x4: ".$x4."<br>";
            echo"lado y4: ".$y4."<br>";
            
            
            $a=$y1+$y2;
            $b=$y3+$y4;
            $c=$x2+$x3;
            $d=$x4+$x1;

            if($a< $b and $a< $c and $a< $d)
            {
                echo"El lado mas corto es: ".$a;
            }
            else if($b < $a and $b< $c and $b< $d)
            {
                echo"El lado mas corto es: ".$b;

            }
            else if($c < $b and $c<$a and $c<$d)
            {

                echo"El lado mas corto es: ".$c;
            }
            else if($d < $b and $d<$c and $d<$a)
            {
                echo"El lado mas corto es: ".$d;

            }

            /*10.1 10.2
            20.2 10.3
            22.3 4.1
            7.5 0.9 */



        }

    ?>
</body>
</html>