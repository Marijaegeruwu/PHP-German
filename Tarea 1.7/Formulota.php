<html>
    <head></head>
    <body>
      <h1>Formulota</h1>
        <form action="uwu.php" method="post">
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