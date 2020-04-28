const fileinclude = require('gulp-file-include');
const gulp = require('gulp');

function defaultTask(cb) {
  gulp.src(['**.html'])
    .pipe(fileinclude({
      prefix: '@@',
      basepath: '@file'
    }))
    .pipe(gulp.dest('./'));
  cb();
}

exports.default = defaultTask


 
// gulp.task('fileinclude', function() {
//   gulp.src(['index.html'])
//     .pipe(fileinclude({
//       prefix: '@@',
//       basepath: '@file'
//     }))
//     .pipe(gulp.dest('./'));
// });

// function defaultTask(cb) {
//   // place code for your default task here
//   cb();
// }

// exports.default = defaultTask