<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autores</title>
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
             margin-top: 25px;">4886. Autores</h1>
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
            Los grandes descubrimientos científicos a menudo son nombrados por los apellidos de los científicos que los hicieron.<br>
            Por ejemplo, el sistema de criptografía asimétrica más popular, RSA fue descubierto por Rivest, Shamir y Adleman.<br>
            Otro ejemplo notable es el algoritmo de Knuth-Morris-Pratt, nombrado por Knuth, Morris y Pratt. La referencia de documentos<br>
            científicos anteriores funciona mucho y es frecuente que un documento utilice dos convenciones de nomenclatura diferentes:<br>
            la variación corta (por ejemplo, KMP) utilizando sólo las primeras letras de los autores y la larga variación <br>
            (por ejemplo, Knuth-Morris-Pratt) Apellidos completos separados por guiones. Encontramos que la mezcla de dos convenciones<br>
            en un papel es estéticamente desagradable y quisiera que usted escribiera un programa que transformara variaciones largas en cortas
        </p>
           
        <h2>Entrada</h2>
        <p>
        La primera y única línea de entrada contendrá como máximo 100 caracteres, letras mayúsculas y minúsculas del alfabeto inglés y guión<br>
         ('-' ASCII 45). El primer carácter siempre será una letra mayúscula. Los guiones siempre serán seguidos por una letra mayúscula. <br>
         Todos los demás caracteres serán letras minúsculas.
        </p>

        <h2>Salida</h2>
        <p>
          La primera y única línea de salida debe contener la variación corta apropiada.
        </p>
        <table border="1">
            <tr>
                <td>Knuth-Morris-Pratt</td>
                <td>KMP</td>
            </tr>
            <tr>
                <td>Mirko-Slavko</td>
                <td>MS</td>
            </tr>
            <tr>
                <td>Pasko-Patak</td>
                <td>PP</td>
            </tr>
        </table>
        <hr>
        <form action="autores.php" method="post">
        <input type="text" name="txtN"><br>
        <input type="submit" value="Enviar"><br>
        </form>

        <?php

            if($_POST)
            {
            }$linea=$_POST['txtN'];
            $t=strlen($linea);
            echo $linea[0];
            for ($i=0; $i <$t; $i++) 
            { 
                
                if($linea[$i]== "-")
                {
                    echo $linea[$i+1];
                }

            }

        ?>
    </body>
</html>