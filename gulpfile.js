'use strict';

var gulp = require('gulp'),
    sass = require('gulp-sass'),
    connect = require('gulp-connect'),
    autoprefixer = require('gulp-autoprefixer');

gulp.task('sass', function () {
    gulp.src('scss/style.scss')
        .pipe(sass({
            outputStyle: 'compressed'
        }).on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('./css'))
        .pipe(connect.reload());
});


gulp.task('html', function () {
    gulp.src('*.html')
        .pipe(connect.reload());
});

gulp.task('watch', ['sass'], function () {
    gulp.watch('**/*.scss', ['sass']);
    gulp.watch('**/*.html', ['html']);
});

gulp.task('webserver', function() {
    connect.server({
        livereload: true,
        post: 1337
    });
});

gulp.task('default', ['webserver', 'watch']);