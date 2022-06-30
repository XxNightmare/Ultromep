<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ultromep - Omeprazol</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Arvo&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="build/img/Icono.ico">
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>
    <header class="header"> <!--Inicio header-->
    <section id="nav_header" class="navegacion clearfix">
        <div class="contenedor_header">
            <div class="logo">
                <a href="">
                    <picture>
                        <source srcset="build/img/logo.avif" type="image/avif">
                        <source srcset="build/img/logo.webp" type="image/webp">
                        <img loading="lazy" src="build/img/logo.png" alt="Imagen Ultromep">
                        <!-- <img class="logo" src="img/logo.png" alt="Imagen Logo"> -->
                    </picture>
                </a>
            </div>
            <div class="contenido-menu">
                <div class="menu-movil">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            
            <nav id="NavText" class="navegacion_texto clearfix">
                <a class="centrar-texto" onclick="Eliminarpad(true)">Padecimientos</a>
                <a class="centrar-texto" onclick="Eliminardos(true)">Dosis</a>
                <a class="centrar-texto" onclick="Eliminardis(true)">Distribucion</a>
                <a class="centrar-texto" onclick="Eliminarcon(true)">Contacto</a>
            </nav>
        </div>
    </section>
    </header> <!--Fin Navegacion / header-->
