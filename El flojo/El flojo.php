<html>
    <body>
        <h1>EL FLOJO</h1>

        <H3>Descripcion</H3>
        <p>Carlitos es un aluno del ITSUR, el es muy flojo a si que cuando esta asciendo sus apuntes y escucha una palabra larga solo apunta la primera letra , el numero de letras entre la primera y la ultima letra, para el las palabras largas son las que tienen mas de 4 letras, ejemplo la palabra Milanesa la escribiría así M6a, la palabra ingeniero seria asi i7o, la palabra hola se queda igual</p>
        <h3>Entrada</h3>
        <p>Una cadena m</p>
        <h3>Salida</h3>
        <p>La palabra de forma acortada</p>

        <h4>Ejemplo</h4>
        <table border=1>
            <tr>
                <td>Milanesa</td>
                <td>M6a</td>
            </tr>
            <tr>
                <td>ingeniero</td>
                <td>i7o</td>
            </tr>
            <tr>
                <td>hola</td>
                <td>hola</td>
            </tr>
        </table>
        <form action="uwu.php" method="post">
            <table border=1>
                <tr>
                    <td>Palabra: </td>
                    <td><input type="text" name="txtPalabra"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Enviar"></td>
                </tr>
            </table>
        </form>
        <?php
        if($_POST)
        {
            $palabra=$_POST['txtPalabra'];
            $p=strlen($palabra);
            echo "Palabra: " . $palabra . "<br>";
            
            if($p <= 4)
            {
                echo $palabra;
            }
            else
            {
                echo  $palabra[0];
                echo $p-1;
                echo $palabra[$p-1];
           
            }
            
        }
        
        ?>
    </body>
</html>