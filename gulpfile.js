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
    appPath 			: './',
    sassPath 			: './wp-content/themes/rDuqueTheme/scss',
    cssPath 			: './wp-content/themes/rDuqueTheme/css',
    prodPath 			: './build',
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

gulp.task('default', ['css']);

gulp.task('browser-sync', function() {
    browserSync.init({
        server: {
            baseDir: "./"
        }
    });
});