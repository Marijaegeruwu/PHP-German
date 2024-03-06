<html>
    <head></head>
    <body>
      <h1>Formulota</h1>
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

    <h2>Entrada</h2>
    <p>Diseñar un programa que pregunte los valores de las variables x,y,z y evalue la función f(x,y,z).</p>
    <h2>Salida</h2>
    La respuesta, o salida a la consola, será el valor de la función f(x,y,z) redondeado a 6 decimales.

    <h2>Ejemplos</h2>

    <table border=1>
        <tr>
            <td>1<br>2<br>3<br></td>
            <td>0.235714</td>
            <td>0.235714285714286</td>
        </tr>
        <tr>
            <td>4<br>5<br>6<br></td>
            <td>0.074477</td>
            <td>0.0744773519163764</td>
        </tr>
        <tr>
            <td>7<br>8<br>9<br></td>
            <td>0.044525</td>
            <td>0.0445247435713634</td>
        </tr>

    </table>

</table>
        <form action="Formulota.php" method="post">
    Num 1:
        <input type="text" name="num"><br>
    Num 2:
        <input type="text" name="numdoh"><br>
    Num 3:
        <input type="text" name="numtre"><br>
        <input type="submit" value="Enviar"><br>
        </form>
    <?php
    echo "<br>";
        if($_POST)
        {
            $x=$_POST['num'];
            $y=$_POST['numdoh'];
            $z=$_POST['numtre'];
            echo "Num 1: ". $x ."<br>";
            echo "Num 2: ". $y ."<br>";
            echo "Num 3: ". $z ."<br>";
            
            $f=((($x + $y) / (2 * $x)) + (($x * $x * $x + $y * $y * $y) / ($x * $x + $y * $y))) / ($x * $x + $y * $y + $z * $z);

            echo "Resultado de la formulota : ". $f;


        }

    ?>
</body>
</html>