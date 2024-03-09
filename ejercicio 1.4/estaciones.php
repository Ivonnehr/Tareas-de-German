<html>
    <body>
        <center>
        <h1>Omega up</h1>
        </center>
        <h2>Estaciones del Año</h2>
        <h3>Descripción</h3>
        <p>Brithany quiere combinar la programación con el inglés, y se encuentra empezando a usar las estructuras de control selectivas en la programación estructurada,
             como ejercicio necesita desarrollar un programa que sea capaz de especificar a que estación (su nombre en inglés) del año pertenece una fecha en especifico 
             compuesta por un día y un mes 
                según lo siguiente:</p>

               <p> Winter del 21 de diciembre al 20 de marzo<br>
                Spring del 21 de marzo al 21 de junio<br>
                Summer del 22 de junio al 22 de septiembre<br>
                Fall del 23 de septiembre al 20 de diciembre<br>
                Considerando la siguiente cantidad de días para cada mes:<br>

                Enero, Marzo, Mayo, Julio, Agosto, Octubre y Diciembre 31 días<br>
                Abril, Junio, Septiembre y Noviembre 30 días<br>
                Febrero 28 días<br>
                Cualquier fecha fuera de estos rangos debe considerarse como no existente<br>
                Ayuda a Brithany a crear ese programa usando estructuras de control selectivas.</p>
                <h3>Entrada</h3>
                <p>Dos números enteros separados por un espacio que corresponden al día y mes de una fecha determinada</p>
                <h3>Salida</h3>
                <p>Una cadena que indique la estación del año a la que pertenece la fecha ingresada o un mensaje que indique no existe la fecha, si la fecha no es válida</p>
        <?php
            $d=21;
            $m=20;
            if($d==21 and $m==20)
            {
                echo "Winter", "<br>";
            }

            elseif($d==21 and $m==21)
            {
                echo "Spring", "<br>";
            }

            elseif($d==22 and $m==22)
            {
                echo "Summer", "<br>";
            }

            elseif($d==23 and $m==20)
            {
                echo "fall", "<br>";
            }
            else
            {
                echo "no existe la fecha";
            } 
         ?>
         <hr>
         <h2>¿Cuántos valen 7?</h2>
         <h3>Descripción</h3>
         <p>Realiza un problema que imprima el mayor de tres números.</p>
         <h3>Entrada</h3>
         <p>Escribe tres números enteros</p>
         <h3>Salida</h3>
         <p>La cantidad de enteros iguales a 7</p>
        <?php
            $a=1;
            $b=7;
            $c=0;
            if($a==7)
            {
              $c=$c+1;
            }
            if($b==7)
            {
              $c=$c+1;
            }
            echo $c;
        ?>    
        <hr>
        <h2>Mayor de tres</h2>
        <h3>Descripción</h3>
        <p>Realiza un problema que imprima el mayor de tres números.</p>
        <h3>Entrada</h3>
        <p>Escribe tres números enteros.</p>
        <h3>Salida</h3>
        <p>El número entero mayor de los tres números introducidos.</p>
        <?php
        $h=3;
        $f=5;
        $g=10;
        if($h>=$f)
        {
            echo $h;
        }
        if($g>=$h)
        {
            echo $g;
        }
         if($f>=$g)
        {
            echo $f;
        }
        ?>
    </body>
</html>