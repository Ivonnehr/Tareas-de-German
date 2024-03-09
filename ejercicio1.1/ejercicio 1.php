<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
                <div class="customer-support">
                    <div class="content-customer-support">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                </div>
                <div class="container-logo">
                    <h1 style="text-align: center;">12655. C09</h1>
                </div>
                    <table border="1">
                        <tr>
                            <td>Puntos</td>
                            <td colspan="2" style="text-align: center;">14.92</td>
                            <td>Límite de memoria</td>
                            <td>32 MiB</td>
                        </tr>
                        <tr>
                            <td>Límite de tiempo (caso)</td>
                            <td colspan="2" style="text-align: center;">1s</td>
                            <td>Límite de tiempo (total)</td>
                            <td>1m0s</td>
                        </tr>
                        <tr>
                            <td>Tamaño límite de entrada (bytes)</td>
                            <td colspan="2" style="text-align: center;">10 KiB</td>
                        </tr>
                    </table>
                </div>
                
                <div class="container-user">
                    <div class="content-shopping-cart">
                    </div>
                </div>
    </header>
      <h2>Descripcion</h2>
        <p>Escribe un programa que solicite las calificaciones de Matemáticas, Español y Cocina y nos de su promedio. </p>
      <h2>Entrada</h2>
        <p>Tres números reales. </p>
      <h2>Salida</h2>
        <p>Un número real representado el promedio de los tres números. </p>
      <h2>Ejemplo</h2>
      <table border="1">
        <tr>
          <td>10 9.5 9.0</td>
          <td>9.5</td>
        </tr>
      </table>
     <hr>
</body>
    <?php
    $matematicas = 10;
    $espanol = 9.5;
    $cocina = 9.0;
    $promedio = ($matematicas + $espanol + $cocina) / 3;
    echo "El promedio es: " . number_format($promedio, 2);
    ?>
</html>