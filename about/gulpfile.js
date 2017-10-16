'use strict';
var gulp = require('gulp');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var minifyCss = require('gulp-minify-css');
var minifyCss = require('gulp-minify-css');
var csscomb = require('gulp-csscomb');
var rename = require('gulp-rename');

gulp.task('minify-css', function() {
    return gulp.src('./css/main.css')
        .pipe(minifyCss())
        .pipe(rename({suffix:'.min'}))
        .pipe(gulp.dest('./css'))
});

gulp.task('minify-js', function() {
    return gulp.src('./js/script.js')
        .pipe(uglify())
        .pipe(rename({suffix:'.min'}))
        .pipe(gulp.dest('./js'))
});

gulp.task('sass', function() {
    return gulp.src('./sass/main.scss')
        .pipe(sass())
        .pipe(csscomb('../.csscomb.json'))
        .pipe(gulp.dest('./css'))
        .pipe(minifyCss())
        .pipe(rename({suffix:'.min'}))
        .pipe(gulp.dest('./css'))
});

gulp.task('watch-sass', function() {
    gulp.watch('sass/**/*.scss', ['sass']);
});

gulp.task('watch-js', function() {
    gulp.watch('js/script.js', ['minify-js']);
});


gulp.task('default', ['watch-sass', 'watch-js']);
