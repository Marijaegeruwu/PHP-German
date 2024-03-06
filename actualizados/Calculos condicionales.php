<html>
    <head></head>
    <body>
    <h1>Calculos condicionales</h1>
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
<p>Eres muy bueno evaluando fórmulas y realizando cálculos directos, pero te cuesta trabajo decidir en qué situaciones se deben hacer qué operaciones. Un compañero te sugirió un ejercicio de cálculo mental que consiste en, dado un número inicial 
N, realizar las siguientes operaciones en el orden indicado y con aritmética entera:<br>

1.Si el valor actual de N
 es par, divídelo entre 2. En caso contrario, súmale 1.<br>
2.Si el valor actual de N
 tiene tres o más cifras, divídelo entre 100. Pero si tiene exactamente dos cifras, divídelo entre 10.<br>
3.Si el valor actual de N
 es un múltiplo de tres, réstale uno.<br>
Escribe un programa que te ayude a calcular el valor final de 
 y el número de veces que 
 fue modificado.</p>
<h2>Entrada</h2>
<p></p>
<h2>Salida</h2>
<p></p>
<h2>Ejemplo</h2>
<table border=1>
    <tr>
        <td>7</td>
        <td>8,1</td>
    </tr>
</table>
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