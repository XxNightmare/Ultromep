<?php include_once('build/Pagina/header.php'); ?> 

    <!--Inicio Carrousel-->
    <div class="Desplazando_Img1 parallax">
        <div class="contenido contenedor">
            <h1 class="no-margin no-padding Mayusculas nombre-sitio">Ultromep</h1>
        </div>
    </div>
    <!--Fin Carrousel-->

    <div class="panel_inicio">
        <h2 class="centrar-texto Mayusculas">Acerca de Ultromep</h2>
        <div class="contenedor inicio">
            <div class="Cont_Izq">
                <picture>
                    <source class="tamano_img Animacion2" srcset="build/img/producto.avif" type="image/avif">
                    <source class="tamano_img Animacion2" srcset="build/img/producto.webp" type="image/webp">
                    <img    class="tamano_img Animacion2" loading="lazy" src="build/img/producto.png" alt="Imagen Paquete">
                    <!-- <img  src="img/producto.png" alt=""> -->
                </picture>
            </div>
            <div class="Cont_Der">
                <h3 class="Mayusculas no-margin no-padding">¿Que es Ultromep?</h3>
                <p class="no-margin no-padding">Ultromep Omeprazol es un medicamento que inhibe la acción del ácido gástrico durante 24 horas, además de aliviar las agruras de manera prolongada. Alivia los síntomas causados por la hiper-acidez estomacal. Detiene la producción de ácidos en el estomago. Una cápsula de Ultromep Omeprazol inhibe la secreción excesiva de ácido.</p>
                <h3 class="Mayusculas no-margin no-padding">¿Dónde lo puedes encontrar?</h3>
                <p class="no-margin no-padding">Ultromep es muy fácil de conseguir, y se encuentra en cualquier tienda de abarrotes.</p>
            </div>
        </div>
    </div>

    <div class="procedimiento">
        <div class="contenedor_boton">
            <a class="centrar-texto" onclick="Eliminarpad(false)">Padecimientos</a>
            <a class="centrar-texto" onclick="Eliminardos(false)">Dosis</a>
            <a id="asd" class="centrar-texto" onclick="Eliminardis(false)">Distribucion</a>
            <a class="centrar-texto" onclick="Eliminarcon(false)">Contacto</a>
        </div>
    </div>

    <div id="oculto_Padecimientos">
        <?php include_once('build/Pagina/Padecimiento.php'); ?>
    </div>
    
    <div id="oculto_Dosis">
        <?php include_once('build/Pagina/Dosis.php'); ?>
    </div>
    
    <div id="oculto_Distribucion">
        <?php include_once('build/Pagina/Distribucion.php'); ?>
    </div>

    <div id="oculto_Contacto">
        <?php include_once('build/Pagina/Contacto.php'); ?>
    </div>
    
    <?php include_once('build/Pagina/footer.php'); ?> 
