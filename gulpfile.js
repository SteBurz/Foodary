'use strict';
 
const { src, dest, parallel } = require('gulp');
const sass = require('gulp-sass');
const babel = require('gulp-babel');
const plumber = require('gulp-plumber');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');


function php() {
  return src('src/**/*.php')
    .pipe(dest('build/'));
}


function js() {
    return src('./src/**/*.js')
    .pipe(plumber())
    .pipe(babel({
      presets: [
        ['@babel/env', {
          modules: false
        }]
      ]
    }))
    .pipe(concat('app.js'))
    .pipe(uglify())
    .pipe(dest('./build/js/'));
}


function style() {
    return src("src/styles/**/*.scss")
        .pipe(sass())
        .on("error", sass.logError)
        .pipe(dest("build/css/"));
}
 
exports.js = js;
exports.style = style;
exports.php = php;
exports.default = parallel(js, style, php);
