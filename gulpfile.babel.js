'use strict';

import yargs from 'yargs';
import gulp from 'gulp';
import sass from 'gulp-sass';
import browser from 'browser-sync';
import gulpIf from 'gulp-if';
import cssnano from 'gulp-cssnano';
import autoprefixer from 'autoprefixer';
import postcss from 'gulp-postcss';
import plumber from 'gulp-plumber';

const PRODUCTION = !!(yargs.argv.prod);

function scss() {
    const processors = [
      autoprefixer({ browsers: '>1%' }),
  ];

    return gulp.src('src/scss/*.scss')
      .pipe(plumber())
      .pipe(sass())
      .pipe(postcss(processors))
      .pipe(gulpIf(PRODUCTION, cssnano()))
      .pipe(plumber.stop())
      .pipe(gulpIf('style.css', gulp.dest('./')))
      .pipe(gulpIf('!style.css',gulp.dest('./css')));
  }

function server(done) {
  browser.init({
      // server url
      proxy: "http://127.0.0.1/wordpress/"
  }, done);
}
const watch = () => {
  gulp.watch('src/scss/**/*.scss').on('all', scss);
  gulp.watch('./**/*.php').on('all', browser.reload);
  gulp.watch('./**/*.css').on('all', browser.reload);
}

gulp.task('build',
  gulp.parallel(scss));

gulp.task('default',
  gulp.series('build', server, watch));
