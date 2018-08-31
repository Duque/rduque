const gulp = require('gulp');
<<<<<<< HEAD
const purify = require('gulp-purifycss');
=======
>>>>>>> f8476ab0bbfed7865db4f9bfab7741a8fd7e840b

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
<<<<<<< HEAD
    appPath 			: './',
    sassPath 			: './wp-content/themes/rDuqueTheme/scss',
    cssPath 			: './wp-content/themes/rDuqueTheme/',
    prodPath 			: './build',
=======
    appPath : './app',
    sassPath : './app/public/scss',
    sassComponetsPath : './app/public/scss/components',
    cssPath : './app/public/css',
    prodPath : './build',
    njkPages : 'app/pages/**/*.+(html|njk)',
    njkTemplates : 'app/templates',
    njkTemplatesWatch : 'app/templates/**/*.njk',
    njkPagesWatch : 'app/pages/**/*.njk'
>>>>>>> f8476ab0bbfed7865db4f9bfab7741a8fd7e840b
};

function errorHtml(error) {
    console.log('error Nunjucks');

    console.log(error.toString());
    console.log('File: ' + error.fileName);

    this.emit('end');
};

/** DEV TASKS */

<<<<<<< HEAD
gulp.task('css', function () {
    return gulp.src(config.sassPath+'/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sourcemaps.write())
    .pipe(sass({errLogToConsole: true, outputStyle: 'compact'}).on('error', sass.logError))
=======
gulp.task('html', function() {
    return gulp.src(config.njkPages)
    .pipe(nunjucksRender({
        path : [config.njkTemplates]
    }))
    .on('error', errorHtml)
    .pipe(removeEmptyLines())
    .pipe(prettify({
        // debug: true,
        indent_level : 1,
        indet_char : '\t'
    }))
    .pipe(prettify.reporter())
    .pipe(gulp.dest(config.appPath));
});

gulp.task('css', function () {
    return gulp.src(config.sassPath+'/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({errLogToConsole: true, outputStyle: 'compact'}).on('error', sass.logError))
    .pipe(sourcemaps.write())
>>>>>>> f8476ab0bbfed7865db4f9bfab7741a8fd7e840b
    .pipe(gulp.dest(config.cssPath));
});

gulp.task('watch', function() {
    gulp.start('browser-sync');
    
<<<<<<< HEAD
    gulp.watch(config.sassPath+'/**/*.scss', ['css', reload]);
});

gulp.task('browser-sync', function() {
    browserSync.init({
        server: {
            baseDir: "./"
=======
    gulp.watch(config.njkTemplatesWatch, ['html', reload]);
    gulp.watch(config.njkPagesWatch, ['html', reload]);

    gulp.watch(config.sassPath+'/**/*.scss', ['css', reload]);
});


gulp.task('default', ['html', 'css']);

gulp.task('browser-sync', function() {
    browserSync.init({
        server: {
            baseDir: "./app/"
>>>>>>> f8476ab0bbfed7865db4f9bfab7741a8fd7e840b
        }
    });
});

<<<<<<< HEAD
gulp.task('purify', function() {
  return gulp.src('./wp-content/themes/rDuqueTheme/style.css')
    .pipe(purify(['./wp-content/themes/rDuqueTheme/js/*.js', './wp-content/themes/rDuqueTheme/purify/*.html']))
    .pipe(gulp.dest('./wp-content/themes/rDuqueTheme/purify/'));
/*
USAGE: 
(Tiene algunos problemillas, hay que afinar mucho y configurar adhoc)
node_modules/purify-css/bin/purifycss ./wp-content/themes/rDuqueTheme/style.css ./wp-content/themes/rDuqueTheme/purify/orig/services_3D.html ./wp-content/themes/rDuqueTheme/purify/orig/index.html ./wp-content/themes/rDuqueTheme/js/rd_3D-services.js --min --info --out ./wp-content/themes/rDuqueTheme/purify/style.css
*/
=======
/** PROD TASKS */
gulp.task('css:prod', function () {
    return gulp.src(config.sassPath+'/*.scss')
    .pipe(sass({errLogToConsole: true, outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest(config.prodPath+'/css'));
});


/** CRAB **/

gulp.task('css:crab:clear', function() {
    return del([config.sassComponetsPath + '/import/**']);
});

gulp.task('css:crab:import-vars', function() {
    return gulp.src(config.sassComponetsPath+'/*.scss')
        .pipe(header('@import \'../../common/variables\';\n'))
        .pipe(gulp.dest(config.sassComponetsPath + '/import'));
});

gulp.task('css:crab:components', function () {
    return gulp.src(config.sassComponetsPath + '/import/*.scss')
        .pipe(sass({errLogToConsole: true, outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(gulp.dest(config.cssPath + '/components'));
});

gulp.task('css:crab:common', function () {
    return gulp.src([
        config.sassPath + '/common.scss',
        config.sassComponetsPath + '/import/buttons.scss',
        config.sassComponetsPath + '/import/card.scss',
        config.sassComponetsPath + '/import/tabs.scss',
        config.sassComponetsPath + '/import/profile-card.scss'
    ])
        .pipe(sass({errLogToConsole: true, outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(concat('common.css'))
        .pipe(gulp.dest(config.cssPath));
});

gulp.task('css:crab', function (cb) {
    return runSequence(
        'css:crab:clear',
        'css:crab:import-vars',
        ['css:crab:components', 'css:crab:common'],
        'css:crab:clear',
        cb
    );
>>>>>>> f8476ab0bbfed7865db4f9bfab7741a8fd7e840b
});
