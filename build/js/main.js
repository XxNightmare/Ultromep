let ubicacionPrincipal=window.pageYOffset;AOS.init();let myNav=document.getElementById("nav_header"),boleana=!1;window.addEventListener("scroll",(function(){let t=window.pageYOffset;ubicacionPrincipal>=t?(document.getElementsByClassName("navegacion")[0],myNav.classList.remove("nav-transparent")):myNav.classList.add("nav-transparent"),ubicacionPrincipal=t}));var elementPad=document.getElementById("oculto_Padecimientos"),elementDos=document.getElementById("oculto_Dosis"),elementDis=document.getElementById("oculto_Distribucion"),elementCon=document.getElementById("oculto_Contacto");$("#oculto_Padecimientos").fadeOut(),$("#oculto_Dosis").fadeOut(),$("#oculto_Distribucion").fadeOut(),$("#oculto_Contacto").fadeOut(),$(".navegacion_texto").slideUp(1);let VistaActivaPad=0,VistaActivaDos=0,VistaActivaDis=0,VistaActivaCon=0,VistaActivaNav=0;function Eliminarpad(t){1==VistaActivaPad?($("#oculto_Padecimientos").fadeOut(500),VistaActivaPad=0):(t&&$(".navegacion_texto").slideUp(),document.getElementById("asd").scrollIntoView(),$("#oculto_Dosis").fadeOut(500),$("#oculto_Distribucion").fadeOut(500),$("#oculto_Contacto").fadeOut(500),$("#oculto_Padecimientos").fadeIn(1e3),VistaActivaPad++)}function Eliminardos(t){1==VistaActivaDos?($("#oculto_Dosis").fadeOut(500),VistaActivaDos=0):(t&&$(".navegacion_texto").slideUp(),document.getElementById("asd").scrollIntoView(),$("#oculto_Distribucion").fadeOut(500),$("#oculto_Contacto").fadeOut(500),$("#oculto_Padecimientos").fadeOut(500),$("#oculto_Dosis").fadeIn(1e3),VistaActivaDos++)}function Eliminardis(t){1==VistaActivaDis?($("#oculto_Distribucion").fadeOut(500),VistaActivaDis=0):(t&&$(".navegacion_texto").slideUp(),document.getElementById("asd").scrollIntoView(),$("#oculto_Dosis").fadeOut(500),$("#oculto_Contacto").fadeOut(500),$("#oculto_Padecimientos").fadeOut(500),$("#oculto_Distribucion").fadeIn(1e3),VistaActivaDis++)}function Eliminarcon(t){1==VistaActivaCon?($("#oculto_Contacto").fadeOut(500),VistaActivaCon=0):(t&&$(".navegacion_texto").slideUp(),document.getElementById("asd").scrollIntoView(),$("#oculto_Dosis").fadeOut(500),$("#oculto_Distribucion").fadeOut(500),$("#oculto_Padecimientos").fadeOut(500),$("#oculto_Contacto").fadeIn(1e3),VistaActivaCon++)}$((function(){$(".nombre-sitio").lettering(),$(".menu-movil").on("click",(function(){1==VistaActivaNav?($(".navegacion_texto").slideUp(),VistaActivaNav=0):($(".navegacion_texto").slideDown(),VistaActivaNav++)}))})),$(".btn-primario").click((function(){}));
//# sourceMappingURL=main.js.map