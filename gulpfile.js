var gulp = require('gulp');

// include plug-ins
var jshint = require('gulp-jshint');
var changed = require('gulp-changed');
var imagemin = require('gulp-imagemin');
var concat = require('gulp-concat');
var stripDebug = require('gulp-strip-debug');
var uglify = require('gulp-uglify');
var autoprefix = require('gulp-autoprefixer');
var minifyCSS = require('gulp-minify-css');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var rename = require('gulp-rename');
var header = require('gulp-header');

// options
var sassOptions = {
  errLogToConsole: true,
  outputStyle: 'compressed' //expanded, nested, compact, compressed
};
var CLSassOptions = {
  errLogToConsole: true,
  outputStyle: 'compressed' //expanded, nested, compact, compressed
};
var autoprefixerOptions = {
  browsers: ['last 2 versions', '> 5%', 'Firefox ESR']
};


// CSS concat, auto-prefix and minify
gulp.task('styles', styles);

function styles(done) {
    
    var banner = ['/* Playground Styles | Author: Brandon Fuller <bjcfuller@uri.edu> */','',''].join('\n')
    
	gulp.src('./css/**/*.scss')
		.pipe(sourcemaps.init())
		.pipe(sass(sassOptions).on('error', sass.logError))
		.pipe(autoprefixer(autoprefixerOptions))
		.pipe(concat('playground.built.css'))
        .pipe(header(banner))
		.pipe(sourcemaps.write('./map'))
		.pipe(gulp.dest('./css/'));

  done();
  //console.log('styles ran');
}


// JS concat, strip debugging and minify
gulp.task('scripts', scripts);

function scripts(done) {
  gulp.src('./js/src/*.js')
    .pipe(jshint(done))
    .pipe(jshint.reporter('default'));
  gulp.src('./js/src/*.js')
    .pipe(concat('playground.built.js'))
    //.pipe(stripDebug())
    .pipe(uglify())
    .pipe(gulp.dest('./js/'));
    
	done();
 // console.log('scripts ran');
}


// watch
gulp.task('watcher', watcher);

function watcher(done) {
	
    // watch for Playground CSS changes
	gulp.watch('./css/**/*.scss', styles);
    
    // watch for Playground JS changes
	gulp.watch('./js/src/*.js', scripts);

	// watch for Theme CSS changes
	gulp.watch('./src/sass/*.scss', CLStyles);
    
    // watch for Theme Patches CSS changes
	gulp.watch('./src/sass/patches/*.scss', CLPatchStyles);
    
    // watch for Theme JS changes
	gulp.watch('./src/js/*.js', CLScripts);

	done();
}

gulp.task( 'default',
	gulp.parallel('styles', 'scripts', 'watcher', function(done){
		done();
	})
);


function done() {
	console.log('done');
}