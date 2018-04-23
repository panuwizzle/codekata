var gulp = require('gulp');
var phpspec = require('gulp-phpspec');
var notify = require('gulp-notify');

gulp.task('test', function() {
    gulp.src('phpspec.yml')
    .pipe(phpspec('', { clear: true, notify: true}))
    .on('error', notify.onError({
        title: 'Crap',
        message: 'Your tests failed'
    }))
    .pipe(notify('All done'));
});

gulp.task('watch', function() {
    gulp.watch(['spec/**/*.php', 'src/**/*.php'], ['test']);
});
