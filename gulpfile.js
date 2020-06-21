const gulp = require('gulp');
const sass = require('gulp-sass');
const watch =   require('gulp-watch');
const sourcemaps = require('gulp-sourcemaps');

gulp.task('compScss', function () {
    return gulp.src('./scss/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(sourcemaps.write())
        .pipe(sass({
            includePaths: require('node-normalize-scss').includePaths
        }))
        .pipe(gulp.dest('./css/'))

});

gulp.task('watch', function () {
    gulp.watch('./scss/**/*.scss', gulp.series('compScss'));
});