const gulp = require('gulp');

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
    appPath : './app',
    sassPath : './app/public/scss',
    sassComponetsPath : './app/public/scss/components',
    cssPath : './app/public/css',
    prodPath : './build',
    njkPages : 'app/pages/**/*.+(html|njk)',
    njkTemplates : 'app/templates',
    njkTemplatesWatch : 'app/templates/**/*.njk',
    njkPagesWatch : 'app/pages/**/*.njk'
};

function errorHtml(error) {
    console.log('error Nunjucks');

    console.log(error.toString());
    console.log('File: ' + error.fileName);

    this.emit('end');
};

/** DEV TASKS */

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
    .pipe(gulp.dest(config.cssPath));
});

gulp.task('watch', function() {
    gulp.start('browser-sync');
    
    gulp.watch(config.njkTemplatesWatch, ['html', reload]);
    gulp.watch(config.njkPagesWatch, ['html', reload]);

    gulp.watch(config.sassPath+'/**/*.scss', ['css', reload]);
});


gulp.task('default', ['html', 'css']);

gulp.task('browser-sync', function() {
    browserSync.init({
        server: {
            baseDir: "./app/"
        }
    });
});

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
});
