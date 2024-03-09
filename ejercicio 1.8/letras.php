<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adquisición de Letras</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            color: #000;
        }

        .container-hero
        {
            background-color: var(--background-color);
        }

        .container-navbar {
            background-color: #1B2631; 
            padding: 10px 0;
        }
      
    </style>
</head>

<body>
    <header>
        <div class="container-hero">
            <div class="container hero">
                <div class="customer-support">
                    <div class="Content-customer-support">
                    </div>
                </div>
                <div class="container-logo">
                </div>
                <div class="container-user">
                </div>
            </div>
        </div>
        <div class="container-navbar">
            <h1 style="color: #fff; margin-left: 500px;
             margin-top: 25px;">3991. Adquisición de Letras</h1>
        </div>
    </header>
            <center>
                <table border="1">
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
         </center>

        <h2>Descripción</h2>
        <p>
        En el ITAM, a los alumnos que estudian ingeniería les gusta comer letras. A Miguel le encanta la letra "d"<br>
        y quiere saber cuántas se va a poder comer de un paquete que la escuela proporciona a todos sus alumnos.<br>
        El paquete que la escuela entrega es una palabra con letras minúsculas del alfabeto
        </p>
           
        <h2>Entrada</h2>

         <p>Un solo string de letras minúsculas.</p>
         <h2>Salida</h2>

         <p>La cantidad de veces que aparece la letra favorita de Miguel.</p>

         <h2>Ejemplo</h2>
        <table border="1">
                <tr>
                    <td>abcjdlllld</td>
                    <td>2</td>
                </tr>
        </table>
        <hr>
        <form action="letras.php" method="post">
            <input type="text" name="txtN"><br>
            <input type="submit" value="Enviar"><br>
        </form>
            <?php
            if($_POST)
            {
                $letra=$_POST['txtN'];
                $t=strlen($letra);
                $cont=0;
                for ($i=0; $i<$t; $i++) 
                { 
                    
                    if($letra[$i]== "t")
                    {
                        $cont++;
                    }

                }
                echo "El numero de veces que d aparecio es: ", $cont;


            }

            ?>
        </div>
</body>
</html>