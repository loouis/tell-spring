module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    uglify: {
      build: {
        src: ['js/libs/*.js','js/global.js'], //input
        dest: 'js/build/global.min.js' //output
      }
    },

    sass: {                              
      dist: {                            
        options: {                       
          style: 'expanded' //compressed, expanded…
        },
        files: {                         
          './style.css': 'css/output.scss',       
        }
      }
    },




    watch:{
       options: {
          livereload: true,
        },
        scripts: {
          files: ['js/*.js'],
          tasks: ['uglify'],
          options: {
            spawn: false,
          }
        },
        css: {
          files: ['css/*.scss'],
          tasks: ['sass'],
          options: {
            spawn: false,
          }
        },
        images: {
          files: ['images/**/*.{png,jpg,gif}', 'images/*.{png,jpg,gif}'],
          tasks: ['imagemin'],
          options: {
            spawn: false,
          }
        },
        html:{
          files: ['./**/*.html'],
          tasks: [],
          options: {
            spawn: false
          }
        }
      },

      jshint: {
        all: ['js/*.js']
      }


  });

  // Load the tasks.
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  modRewrite = require('connect-modrewrite')

  // Default task(s).
  grunt.registerTask('default', ['sass','uglify', 'jshint','watch']);

};
