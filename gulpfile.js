'use strict';
 
const { src, dest, series } = require('gulp');
const sass = require('gulp-sass');
const concat = require('gulp-concat');
const clean = require('gulp-clean');
const browserify = require('browserify');
const babelify = require('babelify');
const source = require('vinyl-source-stream');
const buffer = require('vinyl-buffer');
const uglify = require('gulp-uglify');
const sourcemaps = require('gulp-sourcemaps');
const rename = require('gulp-rename');
sass.compiler = require('node-sass');

const destFolder = 'build/';
const jsFolder = 'src/js/';
const jsFiles = [
//  'node_modules/jquery/dist/jquery.min.js',
//  'node_modules/bootstrap/dist/js/bootstrap.min.js', 
  'main.js'
];
 
function cleanLocal() {
  return src('build', {read: false, allowEmpty: true})
    .pipe(clean());
}


function php() {
  return src('src/**/*.php')
    .pipe(dest(destFolder));
}


function js(cb) {
  jsFiles.map(function(entry){
    return browserify({
      entries: [jsFolder + entry]
    })
    .transform(babelify, {presets: ['env']})
    .bundle()
    .pipe(source(entry))
    .pipe(rename({extname: '.min.js'}))
    .pipe(buffer())
    .pipe(sourcemaps.init({loadMaps: true}))
    .pipe(uglify())
    .pipe(sourcemaps.write('./'))
    .pipe(dest(destFolder + '/js/'))
  });
  cb();
}


function style() {
    return src(['node_modules/bootstrap/dist/css/bootstrap.min.css', 'src/styles/**/*.sass'])
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(concat('app.css'))
        .pipe(dest(destFolder + "css/"));
}
 
exports.js = js;
exports.style = style;
exports.php = php;
exports.clean = cleanLocal;
exports.default = series(cleanLocal, js, style, php);
