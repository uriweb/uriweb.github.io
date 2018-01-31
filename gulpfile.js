var gulp = require('gulp');

// include plug-ins
var jshint = require('gulp-jshint');
var concat = require('gulp-concat');
var stripDebug = require('gulp-strip-debug');
var uglify = require('gulp-uglify');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');

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
        
	gulp.src('./css/**/*.scss')
		.pipe(sourcemaps.init())
		.pipe(sass(sassOptions).on('error', sass.logError))
		.pipe(autoprefixer(autoprefixerOptions))
		.pipe(concat('playground.built.css'))
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