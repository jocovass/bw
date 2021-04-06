var gulp = require("gulp");
var rename = require("gulp-rename");
var sass = require("gulp-sass");
var uglify = require("gulp-uglify");
var autoprefixer = require("gulp-autoprefixer");
var sourcemaps = require("gulp-sourcemaps");
var browserify = require("browserify");
var babelify = require("babelify");
var source = require("vinyl-source-stream");
var buffer = require("vinyl-buffer");
var plumber = require("gulp-plumber");
var browserSync = require("browser-sync").create();

var styleSRC = "src/scss/style.scss";

var imgSRC = "src/images/**/*.*";
var imgURL = "assets/images/";

var htmlSRC = "./*.html";
var htmlURL = "./";

var phpSRC = "./*.php";
var phpURL = "./";

var fontsSRC = "src/fonts/**/*.*";
var fontsURL = "assets/fonts/";

var styleDIST = "./assets/css/";

var jsSRC = "script.js";
// var jquery = 'jquery.js';
// var jqueryUi = 'jqueryUi.js';
// var greensocks = 'greensocks.js';
var scrollSRC = "scrollScript.js";
var jsFolder = "src/js/";
var jsDIST = "./assets/js/";
var jsFILES = [jsSRC, scrollSRC];

var styleWatch = "src/scss/**/*.scss";
var jsWatch = "src/js/**/*.js";
var htmlWatch = "./**/*.html";
var phpWatch = "./**/*.php";
var imgWatch = "./src/images/**/*.*";
var fontsWatch = "./src/fonts/**/*.*";
var phpWatch = "./**/*.php";

function triggerPlumber(src, url) {
  return gulp.src(src).pipe(plumber()).pipe(gulp.dest(url));
}

function images() {
  return triggerPlumber(imgSRC, imgURL);
}

function fonts() {
  return triggerPlumber(fontsSRC, fontsURL);
}

function html() {
  return triggerPlumber(htmlSRC, htmlURL).pipe(browserSync.stream());
}

function php() {
  // return triggerPlumber(phpSRC, phpURL).pipe(browserSync.reload());
  return gulp.watch(phpSRC).on("change", browserSync.reload);
}

function browser_sync() {
  browserSync.init({
    injectChanges: true,
    dist: "./",
    proxy: "newsetup.local/",
    /* https: {
            key: '',
            cert: ''
        }  */
  });
}

function reload(done) {
  browserSync.reload;
  done();
}

function css(done) {
  gulp
    .src(styleSRC)
    .pipe(sourcemaps.init())
    .pipe(
      sass({
        errorLogToConsole: true,
        outputStyle: "compressed",
      })
    )
    .on("error", console.error.bind(console))
    .pipe(
      autoprefixer({
        browserlist: ["last 2 versions"],
        cascade: false,
      })
    )
    .pipe(
      rename({
        suffix: ".min",
      })
    )
    .pipe(sourcemaps.write("./"))
    .pipe(gulp.dest(styleDIST))
    .pipe(browserSync.stream());
  done();
}

function js(done) {
  jsFILES.map(function (entry) {
    var b = browserify({
      entries: [jsFolder + entry],
      debug: true,
      transform: [
        babelify.configure({
          presets: ["@babel/env"],
        }),
      ],
    });
    return b
      .bundle()
      .pipe(source(entry))
      .pipe(rename({ extname: ".min.js" }))
      .pipe(buffer())
      .pipe(sourcemaps.init({ loadMaps: true }))
      .pipe(uglify())
      .pipe(sourcemaps.write("./"))
      .pipe(gulp.dest(jsDIST))
      .pipe(browserSync.stream());
  });

  //  browserify({
  //      entries: [jsFolder + scrollSRC],
  //      debug: true,
  //      transform: [babelify.configure({
  //         presets: ['@babel/env']
  //         })]
  //     }).bundle()
  //       .pipe(source(entry))
  //       .pipe(rename({extname:'.min2.js'}))
  //       .pipe(buffer())
  //       .pipe(sourcemaps.init({loadMaps:true}))
  //       .pipe(uglify())
  //       .pipe(sourcemaps.write( './'))
  //       .pipe(gulp.dest(jsDIST))
  //       .pipe(browserSync.stream());

  done();
}

function watch_files() {
  gulp.watch(styleWatch, gulp.series(css, reload));
  gulp.watch(htmlWatch, gulp.series(html, reload));
  gulp.watch(phpWatch, gulp.series(php));
  gulp.watch(imgWatch, gulp.series(images, reload));
  gulp.watch(fontsWatch, gulp.series(fonts, reload));
  gulp.watch(jsWatch, gulp.series(js, reload));
  gulp.src(jsFolder + jsSRC);
  //.pipe(notify({message:'Gulp is watching!'}))
}

gulp.task("browser-sync", browser_sync);

gulp.task("css", css);

gulp.task("js", js);

gulp.task("images", images);

gulp.task("fonts", fonts);

gulp.task("html", html);

gulp.task("watch", gulp.parallel(browser_sync, watch_files));

gulp.task("default", gulp.parallel(css, js, html, fonts, images));
