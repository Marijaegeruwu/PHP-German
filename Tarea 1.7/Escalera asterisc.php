<html>
    <head></head>
    <body>
    <h1>Escaera de asteriscos</h1>
        <form action="Escalera asterisc.php" method="post">
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
                     echo "*";
                }
                echo "<br>";
            }

          


        }

    ?>
</body>
</html>