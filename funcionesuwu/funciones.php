<?php
    if($_POST)
    {
        $x=$_POST["txtn1"];
        


        function a ($x)
        {
           if($x<=0.0)
           {
                $f=$x **2-$x;
           }
           else if($x>0)
           {
                $f=-$x**2 + 3 * $x;
           }
            return $f;
        }
        $r=a($x);
       
        echo "La salida es: ", $r;
    }
?>