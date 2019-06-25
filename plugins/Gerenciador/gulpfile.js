"use strict";

var gulp = require("gulp");
var browserSync = require("browser-sync");
var sass = require("gulp-sass");
var clean = require("gulp-clean");
var del = require("del");
var sourcemaps = require("gulp-sourcemaps");

var src = "./source/";
var target = "./webroot/";
var vendorPath = "node_modules/";

//compile
gulp.task("sass", function() {
    return gulp
        .src(src + "scss/*.scss")
        .pipe(sourcemaps.init())
        .pipe(sass({ includePaths: [vendorPath] }).on("error", sass.logError))
        .pipe(
            browserSync.reload({
                // Reloading with Browser Sync
                stream: true
            })
        )
        .pipe(sass().on("error", sass.logError))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(target + "css"));
});

gulp.task("scripts", function() {
    return gulp
        .src(src + "js/*")
        .pipe(gulp.dest(target + "js/"))
        .pipe(
            browserSync.reload({
                // Reloading with Browser Sync
                stream: true
            })
        );
});

gulp.task("vendor", function() {
    return gulp
        .src(src + "vendor/**/*")
        .pipe(gulp.dest(target + "vendor/"))
        .pipe(
            browserSync.reload({
                // Reloading with Browser Sync
                stream: true
            })
        );
});

gulp.task("watch", function() {
    browserSync.init({
        server: target,
        browser: "firefox"
    });
    gulp.watch(src + "scss/**/*.scss", gulp.series("sass"));
    gulp.watch(src + "js/**/*.js", gulp.series("scripts"));
    // gulp.watch(src + "images/*", gulp.series("images"));
    // gulp.watch(src + "**/*.html", gulp.series("pages"));
});
