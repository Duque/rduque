const gulp = require('gulp');
const purify = require('gulp-purifycss');

const nunjucksRender = require('gulp-nunjucks-render');
const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');
const header = require('gulp-header');
const del = require('del');
const concat = require('gulp-concat');
const runSequence = require('run-sequence');


const browserSync = require('browser-sync').create();
const reload = browserSync.reload;


const prettify = require('gulp-jsbeautifier');
const removeEmptyLines = require('gulp-remove-empty-lines');

var config = {
    appPath             : './',
    sassPath            : './wp-content/themes/rDuqueTheme/scss',
    cssPath             : './wp-content/themes/rDuqueTheme/',
    prodPath            : './build',
};

function errorHtml(error) {
    console.log('error Nunjucks');

    console.log(error.toString());
    console.log('File: ' + error.fileName);

    this.emit('end');
};

/** DEV TASKS */

gulp.task('css', function () {
    return gulp.src(config.sassPath+'/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sourcemaps.write())
    .pipe(sass({errLogToConsole: true, outputStyle: 'compact'}).on('error', sass.logError))
    .pipe(gulp.dest(config.cssPath));
});

gulp.task('watch', function() {
    gulp.start('browser-sync');
    
    gulp.watch(config.sassPath+'/**/*.scss', ['css', reload]);
});

gulp.task('browser-sync', function() {
    browserSync.init({
        server: {
            baseDir: "./"
        }
    });
});

gulp.task('purify', function() {
  return gulp.src('./wp-content/themes/rDuqueTheme/style.css')
    .pipe(purify(['./wp-content/themes/rDuqueTheme/js/*.js', './wp-content/themes/rDuqueTheme/purify/*.html']))
    .pipe(gulp.dest('./wp-content/themes/rDuqueTheme/purify/'));
/*
USAGE: 
(Tiene algunos problemillas, hay que afinar mucho y configurar adhoc)
node_modules/purify-css/bin/purifycss ./wp-content/themes/rDuqueTheme/style.css ./wp-content/themes/rDuqueTheme/purify/orig/services_3D.html ./wp-content/themes/rDuqueTheme/purify/orig/index.html ./wp-content/themes/rDuqueTheme/js/rd_3D-services.js --min --info --out ./wp-content/themes/rDuqueTheme/purify/style.css
*/
});