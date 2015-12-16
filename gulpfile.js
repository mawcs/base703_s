/**
 * 
 */
//var gulp    = require('gulp'),
//    gutil   = require('gulp-util');
//    plugins = require('gulp-load-plugins')();
//    
//
// // Start Watching: Run "gulp"
// gulp.task('default', ['watch']);
//
////var watchLess = require('gulp-watch-less');
//var less = require('gulp-less');
//var path = require('path');
////var watch = require('gulp-watch');
//
//
//gulp.task('less', function(){
//
//	return gulp.src('./less/**/*.less')
////		.pipe(watchLess('./less/**/*.less'))
//		.pipe(less({
//	      paths: [ path.join(__dirname, 'less', 'includes') ]
//	    }))
//	    .pipe(gulp.dest('./less'));
//});
//
//gulp.task('default', function() {
//	
//	return gutil.log('Gulp is running!');
//  
//	
//});


//Load Gulp
var gulp    = require('gulp'),
    gutil   = require('gulp-util');
    plugins = require('gulp-load-plugins')();

// Start Watching: Run "gulp"
gulp.task('default', ['watch']);

//TODO Convert my jQuery plugins to work with this
// Minify jQuery Plugins: Run manually with: "gulp squish-jquery"
gulp.task('squish-jquery', function() {
  return gulp.src('js/libs/**/*.js')
    .pipe(plugins.uglify())
    .pipe(plugins.concat('jquery.plugins.min.js'))
    .pipe(gulp.dest('build'));
});

//TODO Convert my JS to work with this
// Minify Custom JS: Run manually with: "gulp build-js"
gulp.task('build-js', function() {
  return gulp.src('js/*.js')
    .pipe(plugins.jshint())
    .pipe(plugins.jshint.reporter('jshint-stylish'))
    .pipe(plugins.uglify())
    .pipe(plugins.concat('scripts.min.js'))
    .pipe(gulp.dest('build'));
});

// Less to CSS: Run manually with: "gulp build-css"
gulp.task('build-css', function() {
    return gulp.src('less/*.less')
        .pipe(plugins.plumber())
        .pipe(plugins.less())
        .on('error', function (err) {
            gutil.log(err);
            this.emit('end');
        })
        .pipe(plugins.autoprefixer(
            {
                browsers: [
                    '> 1%',
                    'last 2 versions',
                    'firefox >= 4',
                    'safari 7',
                    'safari 8',
                    'IE 8',
                    'IE 9',
                    'IE 10',
                    'IE 11'
                ],
                cascade: false
            }
        ))
//        .pipe(plugins.cssmin())
        .pipe(gulp.dest('less')).on('error', gutil.log);
});

// Default task
gulp.task('watch', function() {
	plugins.livereload.listen();
    gulp.watch('js/libs/**/*.js', ['squish-jquery']);
    gulp.watch('js/*.js', ['build-js']);
    gulp.watch('less/**/*.less', ['build-css']);
});