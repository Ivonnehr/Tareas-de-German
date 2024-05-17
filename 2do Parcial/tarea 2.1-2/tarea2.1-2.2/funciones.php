<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11823. Evaluando Una Función Rara</title>    
    <style>
        *
        {
            padding: 3px;
        }
        body{
            background: linear-gradient(#691d30, #D6B094);
        }
        .contenido
        {
            text-align: center;
        }
        .texto {
        width: 200px; 
        height: 20px; 
        padding: 10px; 
        border: 2px solid; 
        border-radius: 5px;
        font-size: 16px; 
        }
    </style>
</head>

<body>
<header>
        <div class="container-navbar">
            <h1 style="color: #fff; margin-left: 700px;
             margin-top: 25px;">17663. Practicando Funciones</h1>
        </div>
    </header>
    <main>
        <div class="tabla-container">
        <center>
            <table border=1>
                <thead>
                <tr>
                    <td>Puntos</td>
                    <td>13.25</td>
                    <td>Límite de memoria</td>
                    <td>32 MiB</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Límite de tiempo (caso)</td>
                    <td>1s</td>
                    <td>10 KiB</td>
                    <td>1m0s</td>
                </tr>
                </tbody>
                <tr>
                    <td>Tamaño límite de entrada (bytes)</td>
                </tr>
            </table>
          
            </div>
            <div class="contenido">
        <h2>Descripción</h2>
        <p>
        Dados tres numeros x,y,z, calcula el valor de h(x,y,z), si las funciones f,g,h estan definidas así:
        
       </p>
       <img src="funciones.png" alt="">
        <h2>Entrada</h2>
        <p> 
            Tres numeros enteros x,y,z separados por un espacio. Puedes suponer que 1 < x,y,z < 100 y que no <br>
            se produciran diviciones entre cero.
        </p>

         <h2>Salida</h2>

         <p> 
            Tres numeros enteros x,y,z separados por un espacio. Puedes suponer que 1 < x,y,z < 100 y que no <br>
          se produciran diviciones entre cero.</p>
         </div>
        <center>
        <table border="1">
            <tr>
            <tr>
                <th>Entrada</th>
                <th>Salida</th>
            </tr>
            <tr>
                <td>-10 -4 18</td>
                <td>-36</td>
            </tr>
            </tr>
        </table>
        <hr>
        <h2>Solución</h2>
        </center>
        <div class="contenido">
            <form  action="funciones.php" method="post">
                <input type="text" class="texto" name="txtnum1"> <br>
                <input type="text" class="texto" name="txtnum2"> <br>
                <input type="text" class="texto" name="txtnum3"> <br>
                <input type="submit" value="Enviar"> <br>
            </form>
        </div>    
        <?php
       if($_POST)
       {
           $x=$_POST["txtnum1"];
           $y=$_POST["txtnum2"];
           $z=$_POST["txtnum3"];
       
           function f ($a, $b)
           {
              $f=(4pow((int)$a,3))+g(2(int)$a,-3*(int)$a);
               return $f;
            }
    
            function g ($a, $b)
            {
                $g=(7*(int)$b-3)%($a*$a+1);
                return $g;
            }
        
            function h ($x,$y,$z)
            {
                $h= ($x/$y)+3*g($z/$y,$x);
                return $h;
            }
            $hola= h($x,$y,$z);

            echo " <table>";
            echo "<tr>";
            echo "<td> La salida es:  </td> ";
            echo "<td>";
            echo $hola;
            echo "</td>";
            echo "</tr>";
            echo "";
            echo "</table>";
        }
        

        ?>
                
    </main>
</body>
</html>  