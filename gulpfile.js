var gulp = require('gulp'),
    sass = require('gulp-ruby-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    rename = require('gulp-rename');

gulp.task('styles', function() {
  return sass('sass', {
    style: 'expanded'
    // style: 'nested' // default
    // style: 'compact'
    // style: 'compressed'
  })
  .on('error', function (err){
    console.error('Error', err.message);
  })
  .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1'))
  .pipe(gulp.dest('wp-content/themes/engza'))
  .pipe(rename('style.css'))
  .pipe(minifycss())
  .pipe(gulp.dest('wp-content/themes/engza'));
});

gulp.task('default', function() {
  gulp.watch('sass/**/*.scss', ['styles']);
});