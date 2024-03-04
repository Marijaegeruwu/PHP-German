<html>
    <head></head>
    <body>
    <h1>Calculos condicionales</h1>
        <form action="Calculos condicionales.php" method="post">
    Num 1:
        <input type="text" name="uno"><br>
        <input type="submit" value="Enviar"><br>
        </form>
        <?php
    echo "<br>";
        if($_POST)
        {
            $n=$_POST['uno'];
            
            echo "Numero inicial: ". $n ."<br>";
            $contador=0;
            while($n != 1)
            {

          
            if( $n%2==0)
            {
                $n=$n/2;
                $contador=$contador+1;
            }
            else if ( $n%2== !0)
            {
                $n=$n+1;
                $contador=$contador+1;
            }

            else if($n >100)
            {
                $n=$n/3;
                $contador=$contador+1;
            }
            else if($n>9 and  $n< 100)
            {
                $n=$n-1;
                $contador=$contador+1;
            }
        }
            
            echo "Veces que el numero fue modidicado: ". $contador;

          


        }

    ?>
</body>
</html>