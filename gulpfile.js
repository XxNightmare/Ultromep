const { src, dest, watch, parallel } = require('gulp');

//css
const sass = require('gulp-sass')(require ('sass'));
const plumber = require('gulp-plumber');
const autoprefixer = require('autoprefixer')
const cssnano = require('cssnano');
const postcss = require('gulp-postcss');
const sourcemaps = require('gulp-sourcemaps');

//Imagenes
const cache = require('gulp-cache');
const imagemin = require('gulp-imagemin');
const webp = require('gulp-webp');
const avif = require('gulp-avif');

//JavaScript
const terser = require('gulp-terser-js');

function css( done ){
    src('src/scss/**/*.scss') // Identificar el archivo .scss
        .pipe(sourcemaps.init())
        .pipe(plumber())
        .pipe(sass()) //Compilando
        .pipe(postcss([autoprefixer(), cssnano()]))
        .pipe(sourcemaps.write('.'))
        .pipe(dest('build/css')) //Almacenamineto

    done();
}

function imagenes (done){
    const opciones = {
        optimizationLevel: 3
    }
    src('src/img/**/*.{png,jpg,PNG}')
    .pipe(cache( imagemin(opciones) ))
    .pipe(dest('build/img'))
    done();
}

function versionWebp (done){
    const opciones = {
        calidad: 50
    };

    src('src/img/**/*.{png,jpg,PNG}')
    .pipe( webp(opciones))
    .pipe (dest('build/img'))
    done();
}

function versionAvif (done){
    const opciones = {
        calidad: 50
    };

    src('src/img/**/*.{png,jpg,PNG}')
    .pipe( avif(opciones))
    .pipe (dest('build/img'))
    done();
}

function javascript(done){
    src('src/js/**/*.js')
    .pipe(sourcemaps.init())
    .pipe(terser())
    .pipe(sourcemaps.write('.'))
    .pipe (dest('build/js'))
    done();
}

function dev(done){
    watch('src/scss/**/*.scss', css);
    watch('src/js/**/*.js', javascript)
    done();
}

exports.css = css;
exports.javascript = javascript;
exports.versionWebp = versionWebp;
exports.imagenes = imagenes;
exports.versionAvif = versionAvif;
//exports.dev = parallel(versionWebp, imagenes, versionAvif, dev);
exports.dev = dev;
