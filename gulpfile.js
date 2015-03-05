/*
  load gulp
*/
var gulp = require('gulp');
var stylus = require('gulp-stylus');
var browserSync = require('browser-sync');
var reload = browserSync.reload;

gulp.task('styles', function(){
	gulp.src('wp-content/themes/phototheme/stylus/style.styl')
	.pipe(stylus())
	.pipe(gulp.dest('wp-content/themes/phototheme/'))
	.pipe(reload({ stream : true }))
});

gulp.task('browser-sync', function(){
	browserSync({
			proxy: 'localhost:8888'
		})
});

gulp.task('watch', ['browser-sync'], function(){
	gulp.watch('wp-content/themes/phototheme/stylus/*.styl', ['styles']);
});



