const gulp = require('gulp')

const message = require('../../lib/message')

module.exports = () => {
  return gulp.src('../resources/assets/fonts/**/*.{eot,woff,woff2,ttf,svg}')
    .on('error', message.error('FONT: Minification'))
    .pipe(gulp.dest('../public/fonts'))
}
gulp.task('icons', function () {
  return gulp.src('node_modules/@fortawesome/fontawesome-free/webfonts/*')
    .pipe(gulp.dest(dist + '/assets/webfonts/'))
})
