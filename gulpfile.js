var gulp = require('gulp');
var casperJs = require('gulp-casperjs');
var phpunit = require('gulp-phpunit');
var phpspec = require('gulp-phpspec');
var phpcs = require('gulp-phpcs');
var phpcbf = require('gulp-phpcbf');
var gutil = require('gulp-util');
var mocha = require('gulp-mocha');
var eslint = require('gulp-eslint');

gulp.task('test-u', function () {
    gulp.src('tests/unit/*.php')
        .pipe(phpunit()); //run phpunit test
});

gulp.task('test-f', function () {
    gulp.src('tests/functional/*.js')
        .pipe(casperJs()); //run casperjs test
});

gulp.task('tdd', function() {
    return gulp.watch(['tests/acceptance/*.js','tests/boot/*.js'], ['test-mocha']);
});

gulp.task('test', ['cbf', 'cs', 'test-u', 'test-f', 'test-mocha', 'spec']);

gulp.task('build', ['copy-js']);

gulp.task('copy-js', function () {
    //If you will not use base, it will only copy the content and not the nested dir structure
    return gulp.src([
        './node_modules/bootstrap/dist/**/*',
        './node_modules/jquery/dist/**/*',
        './node_modules/font-awesome/css/**/*',
        './node_modules/font-awesome/fonts/**/*',
        './node_modules/materialize-css/dist/**/*',
    ], { "base" : "./node_modules" })
        .pipe(gulp.dest('./ui/web/public/libs/'));
});