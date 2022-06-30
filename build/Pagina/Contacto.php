<div class="contenedor Contacto">
    <!--Contacto-->
    <h2 class="centrar-texto no-margin">Contacto</h2>
    <h4 class="centrar-texto margin-bottom">Nuestro personal esta listo para atenderle a la brevedad, por favor comuníquese con nosotros.</h4>

    <div class="grid centrar-columnas">
        <div class="columnas-12">
            <picture>
                <source srcset="build/img/Contacto/Contactos.avif" type="image/avif">
                <source srcset="build/img/Contacto/Contactos.webp" type="image/webp">
                <img loading="lazy" src="../img/Contacto/Contactos.jpg" alt="Imagen Contacto">
            </picture>
            <!-- <img src="../img/Contacto/Contactos.jpg" alt="imagen contacto"> -->
        </div>

        <div class="columnas-10 formulario-contacto Sombriado_Cen">
            <form action="build/Pagina/EnviarMensaje.php" method="post" id="formulary" name="formulario">
                <h4 class="centrar-texto margin-bottom">SI DESEA QUE NOSOTROS LO CONTACTEMOS, POR FAVOR LLENE LOS SIGUIENTES CAMPOS.</h4>
                <div class="campo">
                    <label for="asunto">Asunto</label>
                    <input type="text" id="asunto" name="Asunto"  placeholder="Asunto">
                </div>
                <div class="campo">
                    <label for="email">E-Mail</label>
                    <input type="email" id="email" name="Correo_electronico"  placeholder="Correo Electrónico">
                </div>
                <div class="campo mensaje">
                    <label for="mensaje">Mensaje</label>
                    <textarea id="mensaje" name="Mensaje"></textarea>
                </div>
                <div class="campo enviar">
                    <button type="submit" class="btn btn-primario">Enviar</button>
                </div>
            </form>
        </div>
    </div>

    <div class="mensaje_2">
        <div class="Cont_uno Sombriado_Izq">
            <h4 class="centrar-texto">TELÉFONO</h4>
            <div class="iconos_contacto">
                <div class="icono_icon">
                    <i class="fas fa-phone-volume"></i>
                </div>
                <div class="mensaje_icono">
                    <p>331 524 2143</p>
                    <p>331 524 2144</p>
                </div>
            </div>
        </div>

        <div class="Cont_dos Sombriado_Der">
            <h4 class="centrar-texto">WHATSAPP</h4>
            <div class="iconos_contacto">
                <div class="icono_icon">
                    <i class="fab fa-whatsapp"></i>
                </div>
                <div class="mensaje_icono">
                    <p>331 775 4527</p>
                </div>
            </div>
        </div>

        <div class="Cont_tres Sombriado_Der">
            <h4 class="centrar-texto">Horario de atención por estos medios:</h4>
            <p class="centrar-texto">Lunes a Viernes de 8:30AM a 4:30PM</p>
        </div>
    </div>
</div>

