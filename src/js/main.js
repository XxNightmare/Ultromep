 
/* Seccion especifica para el header*/
let ubicacionPrincipal = window.pageYOffset; //0

  AOS.init();
  
let myNav = document.getElementById('nav_header');
let boleana = false;

  window.addEventListener("scroll", function(){
    let desplazamientoActual = window.pageYOffset; //180
    if(ubicacionPrincipal >= desplazamientoActual){ // 200 > 180
        document.getElementsByClassName("navegacion")[0];
        myNav.classList.remove("nav-transparent");
    }else{
        myNav.classList.add("nav-transparent");
    }
    ubicacionPrincipal= desplazamientoActual; //200
});

/* Declaracion de variables y funciones necesarias*/
var elementPad = document.getElementById("oculto_Padecimientos");
var elementDos = document.getElementById("oculto_Dosis");
var elementDis = document.getElementById("oculto_Distribucion");
var elementCon = document.getElementById("oculto_Contacto");

$("#oculto_Padecimientos").fadeOut();
$("#oculto_Dosis").fadeOut();
$("#oculto_Distribucion").fadeOut();
$("#oculto_Contacto").fadeOut();

$('.navegacion_texto').slideUp(1);

let VistaActivaPad = 0;
let VistaActivaDos = 0;
let VistaActivaDis = 0;
let VistaActivaCon = 0;
let VistaActivaNav = 0;

function Eliminarpad(bandera) {
    if(VistaActivaPad==1){
        $("#oculto_Padecimientos").fadeOut(500);
        VistaActivaPad = 0;
    }
    else{
        if(bandera){
            $('.navegacion_texto').slideUp();
        }
        document.getElementById('asd').scrollIntoView();
    
        $("#oculto_Dosis").fadeOut(500);
        $("#oculto_Distribucion").fadeOut(500);
        $("#oculto_Contacto").fadeOut(500);
        $("#oculto_Padecimientos").fadeIn(1000);
        VistaActivaPad++;
    }
}

function Eliminardos(bandera) {
    if(VistaActivaDos==1){
        $("#oculto_Dosis").fadeOut(500);
        VistaActivaDos = 0;
    }
    else{
        if(bandera){
            $('.navegacion_texto').slideUp();
        }
        document.getElementById('asd').scrollIntoView();
    
        $("#oculto_Distribucion").fadeOut(500);
        $("#oculto_Contacto").fadeOut(500);
        $("#oculto_Padecimientos").fadeOut(500);
        $("#oculto_Dosis").fadeIn(1000);
        VistaActivaDos++;
    }
}

function Eliminardis(bandera) {
    if(VistaActivaDis==1){
        $("#oculto_Distribucion").fadeOut(500);
        VistaActivaDis = 0;
    }
    else{
        if(bandera){
            $('.navegacion_texto').slideUp();
        }
        document.getElementById('asd').scrollIntoView();
    
        $("#oculto_Dosis").fadeOut(500);
        $("#oculto_Contacto").fadeOut(500);
        $("#oculto_Padecimientos").fadeOut(500);
        $("#oculto_Distribucion").fadeIn(1000);
        VistaActivaDis++;
    }
}

function Eliminarcon(bandera) {
    if(VistaActivaCon==1){
        $("#oculto_Contacto").fadeOut(500);
        VistaActivaCon = 0;
    }
    else{
        if(bandera){
            $('.navegacion_texto').slideUp();
        }
        document.getElementById('asd').scrollIntoView();
    
        $("#oculto_Dosis").fadeOut(500);
        $("#oculto_Distribucion").fadeOut(500);
        $("#oculto_Padecimientos").fadeOut(500);
        $("#oculto_Contacto").fadeIn(1000);
        VistaActivaCon++;
    }
}

$(function(){
    $('.nombre-sitio').lettering();
    
    $('.menu-movil').on('click',function(){
    if(VistaActivaNav==1){
        $('.navegacion_texto').slideUp();
        VistaActivaNav = 0;
    }
    else{
        $('.navegacion_texto').slideDown();
        VistaActivaNav++;
    }

    });
});


 $('.btn-primario').click(function(){
 });
