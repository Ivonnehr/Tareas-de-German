<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OmegaUp</title>
    <link rel="stylesheet" href="https://fonts.googleapais.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            color: #000;
        }

        .container
        {
            max-width: 120rem;
            margin: 0 auto;
        }

        .container-hero
        {
            background-color: var(--background-color);
        }

        .container-navbar {
            background-color: #1B2631; 
            padding: 10px 0;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h1 {
            font-size: 40px;
            margin: 3;
            display: flex;
            align-items: center;
            background-color: #fff;
            background-clip: text;
        }

        .navbar h1 {
            margin-left: 100px;
             margin-top: 25px;
             background-color: #000;
        }

        .navbar ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
            text-align: left;
             margin-left: 120px;
        }

        .navbar ul li {
            margin-right: 20px;
            position: inherit;
        }

        .navbar a {
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            position: relative;
            background-clip: text;
            color: #fff;
        }

        .search-form {
            display: flex;
            align-items: center;
        }

        .search-form input{
            padding: 8px;
            border: none;
            border-radius: 4px;
        }

        hr 
        {
            margin: 10px 0;
            border: none;
            width: 100%;
        }

        .pantalla-blanca 
        {
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
        }

        .gallery
        {
            gap: 2.5rem;
            margin-bottom: 1.5rem;
            margin-left: 900px;
            margin-top: -172px;
        }
        .imagen
        {
            text-align: left;
            gap: 3rem;
            margin-bottom: 4rem;
            margin-left: -10px;
            margin-top: -300px;
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
            <nav class="navbar container">
                <h1 style="color:#fff;"><span>Menú Principal</span></h1>
                <ul>
                    <li><a href="bit.php">Bit de paridad</a></li>
                    <li><a href="autores.php">Autores</a></li>
                    <li><a href="letras.php">Adquisición de Letras</a></li>
                </ul>
            </nav>
        </div>
        <div class="pantalla-blanca">
            <h1 >Tarea 1.7: Varios problemas con entrada de datos</h1>
            <ul>
                <li >Ivonne Itzel Hernández Ruiz<br> </li>
                <li>CBTis 217<br>
                </li>
            </ul>
            <section class="gallery">
                <img src="bandera.png" alt="bandera">
            </section>
            <section class="imagen">
            <img src="dgti.png" alt="dgti">
            </section>
        </div>
    </header>
</body>

</html>