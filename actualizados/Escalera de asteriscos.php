<html>
    <head></head>
    <body>
    <h1>Escalera de asteriscos</h1>
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
        <p>u misión es ayudar a Inés a subir a su casa construyendo una escalera
             de longitud y altura hecha de asteriscos.</p>
        <h2>Entrada</h2>
        <p>Un numero entero N el cual representa el numero de la escalera</p>
        <h2>Salida</h2>
        <p>Deberas imprimir como salida una escalera de dimensiones de N de largo y N de alto</p>
        <h2>Ejemplo</h2>
        <table border=1>
            <tr>
                <td>2</td>
                <td>#<br>##</td>
            </tr>
            <tr>
                <td>5</td>
                <td>#<br>##<br>###<br>####<br>#####</td>
            </tr>
            <tr>
                <td>1</td>
                <td>#</td>
            </tr>
            <tr>
                <td>3</td>
                <td>#<br>##<br>###</td>
            </tr>
        </table>

        <form action="Escalera de asteriscos.php" method="post">
    Num 1:
        <input type="text" name="uno"><br>
        <input type="submit" value="Enviar"><br>
        </form>
        <?php
    echo "<br>";
        if($_POST)
        {
            $n=$_POST['uno'];
            
            echo "Numero de escalones: ". $n ."<br>";

            for ($i = 1; $i <= $n; $i++) 
            {
                for ($j = 1; $j <= $i; $j++) 
                {
                     echo "#";
                }
                echo "<br>";
            }

          


        }

    ?>
</body>
</html>