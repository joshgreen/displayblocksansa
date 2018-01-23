var   gulp = require('gulp');
var   gutil = require('gulp-util');
var   coffee = require('gulp-coffee');
var   compass = require('gulp-compass');
var   uglify = require('gulp-uglify');
var   concat = require('gulp-concat');
var   humans = require('humans-generator');
var   image = require('gulp-image');
var   htmlclean = require('gulp-htmlclean');
var   livereload = require('gulp-livereload');
var   lr = require('tiny-lr');
var   server = lr();
// var browserSync = require('browser-sync').create();
var   plumber = require('gulp-plumber');


var Theme = [
    'wp-content/themes/displayblocksansa/'
];

var jsSources = [
    'wp-content/themes/displayblocksansa/js/*.js'
];

var sassSources = [
    'wp-content/themes/displayblocksansa/sass/*.sass'
];

gulp.task('humans', function(cb) {
  humans({
      team: {
          'Josh Green': {
              'Twitter': '@pixelpanda',
              'Email': 'emailcoder@gmail.com',
              'Country': 'Scotland'
          }
      },
      thanks: [
          'Chris Coyier (@Real_CSS_Tricks on Twitter) <chriscoyier@gmail.com>'
      ],
      site: {
          'Standards': 'HTML5, CSS3',
          'Components': 'jQuery, Normalize.css',
          'Software': 'Sublime text 3'
      },
      note: 'Built with love by Josh Green.',
      out: 'wp-content/themes/displayblocksansa/',
      callback: function() {
        return cb();
      }
  });
});



gulp.task('image', function () {
  gulp.src(Theme+'/images/src/*.*')
      .pipe(image({
      pngquant: true,
      optipng: false,
      zopflipng: true,
      jpegRecompress: true,
      mozjpeg: true,
      guetzli: false,
      gifsicle: true,
      svgo: true,
      concurrent: 10
    }))
    .pipe(gulp.dest(Theme+'/images/'));
});

gulp.task('clean', function() {
  return gulp.src(Theme+'/*.php')
    .pipe(htmlclean())
    .pipe(gulp.dest('wp-content/themes/displayblocksansa/compiled'));
});


gulp.task('scripts', function() {
  gulp.src(jsSources)
    .pipe(uglify())
    // .pipe(concat('all.min.js'))
    .pipe(gulp.dest(Theme+'/js/min'));
});

gulp.task('coffee', function() {
   gulp.src(Theme+'/coffee/my-cuppajoe.coffee')
   .pipe(coffee({bare: true})
    .on('error', gutil.log))
   .pipe(gulp.dest(Theme+'/myjavascript'))
});

gulp.task('compass', function() {
  gulp.src(sassSources)
  .pipe(plumber())
  .pipe(compass({
    config_file: 'config.rb',
    css: Theme+'/css',
    sass: Theme+'/sass',
    image: Theme+'/images'
  }))
  .pipe(gulp.dest(Theme+'/css'))
});


gulp.task('watch', function() {
  livereload.listen();
  gulp.watch(Theme+'/sass/*.sass', ['compass']);
  gulp.watch(Theme+'/js/*.js', ['scripts']);
  gulp.watch(Theme+'/**').on('change', livereload.changed);
});


// Default task
gulp.task('default', ['compass', 'scripts', 'humans', 'watch']);