const { src, dest, watch, series } = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const postcss = require("gulp-postcss");
const cssnano = require("cssnano");
const terser = require("gulp-terser");
const browsersync = require("browser-sync").create();

function scssTask() {
  return src("assets/src/scss/**/*.scss", { sourcemaps: true })
    .pipe(sass())
    .pipe(postcss([cssnano()]))
    .pipe(dest("assets/dist", { sourcemaps: "." }));
}

function jsTask() {
  return src("assets/src/scripts/script.js", { sourcemaps: true })
    .pipe(terser())
    .pipe(dest("assets/dist", { sourcemaps: true }));
}

// Browsersync Task
// function browsersyncServe(cb) {
//   browsersync.init({
//     server: {
//       baseDir: ".",
//     },
//   });
//   cb();
// }

function browsersyncReload(cb) {
  browsersync.reload();
  cb();
}

function watchTask() {
  watch("*.php", browsersyncReload);
  watch(
    ["assets/src/scss/**/*.scss", "assets/src/scripts/**/*.js"],
    series(scssTask, jsTask, browsersyncReload)
  );
}

// Default Gulp Task
exports.default = series(scssTask, jsTask, watchTask);
