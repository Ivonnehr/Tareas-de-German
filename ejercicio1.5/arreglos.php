<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arreglos</title>
</head>
<body>
     <h1 style="text-align: center; background-color: #F5D6E5;">Calificaciones de alumnos</h1>
      <?php
            $cal=array();
            $c=rand(1,1000);
            for ($i=1; $i<=$c; $i++)
            {
                array_push($cal, rand(0,10));
            }
            $prom=0;
            for($i=0; $i<$c; $i++)
            {
                $prom=$prom+$cal[$i];
            }
            $prom=$prom/$c;
            echo "El promedio es: ". round($prom,2). "<br>";
            echo "Calificaciones iguales o mayores al promedio: ". "<br>";
            for($i=0; $i<$c; $i++)
            {
                if($cal[$i]>=$prom)
                {
                    echo $cal[$i]. "-";
                }
            }
            echo "<br>";
            $aprobados=0;
            $conta=0;
            $reprobados=0;
            $contr=0;
            for($i=0; $i<$c; $i++)
            {
                if($cal[$i]<6)
                {
                    $contr++;
                    $reprobados=$reprobados+$cal[$i];
                }
                else
                {
                    $conta++;
                    $aprobados=$aprobados+$cal[$i];
                }
            }
            $aprobados=($aprobados/$c)*100;
            $reprobados=($reprobados/$c)*100;
            echo "Total de alumnos reprobrados: ". $contr. "<br>". "porcentaje de alumnos reprobados: ".round($reprobados,2). "<br>";
            echo "Total de alumnos aprobados: ". $conta. "<br>". "porcentaje de alumnos aprobados:  ".round($aprobados,2). "<br>";
            echo "<table border='1' cellspacing='3' cellpadign='3'; text-align: center;'>";
            for($i=0; $i<$c; $i++)
            {
                if($i%30==0)
                {
                    echo "<tr>";
                }
                else
                {
                    echo "<th  style='text-align: left; background-color: #F5D6E5;'>". $cal[$i]. "</th>";
                }
            }
            echo "</tr>";
            echo "</table>";
            ?>
    </body>
</html>