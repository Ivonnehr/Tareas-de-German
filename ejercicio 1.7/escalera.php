<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escalera de asteriscos</title>
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
             margin-top: 25px;">11338. Escalera de asteriscos</h1>
        </div>
    </header>

    <main>
        <center>
            <table border="1">
                <tr>
                    <td>Puntos</td>
                    <td>23.98</td>
                    <td>Límite de memoria</td>
                    <td>32 MiB</td>
                </tr>
                <tr>
                    <td>Límite de tiempo (caso)</td>
                    <td>1s</td>
                    <td>10 KiB</td>
                    <td>1m0s</td>
                </tr>
                <tr>
                    <td>Tamaño límite de entrada (bytes)</td>
                </tr>
            </table>
        </center>

        <h2>Descripción</h2>
        <p>
            Inés quiere llegar a su casa, pero accidentalmente, los arquitectos construyeron la puerta demasiado alta. Tu mi-<br>
            sión es ayudar a Inés a subir a su casa construyendo una escalera de longitud y altura "N" hecha de asteriscos.
        </p>
        <h2>Entrada</h2>
        <p>
            Se te darán como valor de entrada un numero entero N el cuál representa la longitud y altura de la escalera.
        </p>
        <h2>Salida</h2>
        <p>
            Deberás imprimir como salida una escalera de dimensiones N de largo y N de alto
        </p>
        <table border="1">
            <tr>
                <td>Entrada</td>
                <td>Salida</td>
            </tr>
            <tr>
                <td>2</td>
                <td>#</td>
            </tr>
            <tr>
                <td>5</td>
                <td>	
                    # <br>
                    ## <br>
                    ### <br>
                    #### <br>
                    ##### <br>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>#</td>
            </tr>
            <tr>
                <td>3</td>
                <td>	
                    # <br>
                    ## <br>
                    ### <br>
                </td>
            </tr>
        </table>
            <form  action="escalera.php" method="post">
                <input type="text" name="txtnu"> <br>
                <input type="submit" value="Enviar"> <br>
            </form>
                <?php
                    if($_POST)
                    {
                        $a=$_POST["txtnu"];
                        for($i=1; $i<=$a; $i++)
                        {
                            echo str_repeat("#",$i) . "<br>";
                        }
                    }
                ?>
    </main>
</body>
</html>