module.exports = function(grunt) {

	// Project configuration
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		uglify: {
			options: {
				banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
			},

			js: {
				src: ['frame-child/assets/js/*.js'],
				dest: 'frame-child/assets/js/min/',
				expand: true,
				flatten: true,
				ext: '.min.js',
			}
		},

		sass: {
			dist: {
				options: {
					style: 'compressed',
				},

				files: [{
					cwd: 'frame-child/assets/scss',
					src: ['*.scss', 'admin/*.scss'],
					dest: 'frame-child/assets/css/',
					expand: true,
					flatten: false, 
					ext: '.css',
				}]
			}
		},

		watch: {
			js: {
				files: ['frame-child/assets/js/*.js'],
				tasks: ['uglify']
			},

			css: {
				files: ['frame-child/assets/scss/*.scss', 'frame-child/assets/scss/admin/*.scss'],
				tasks: ['sass']
			}
		}
    });

	// Load plugins
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');

	// Default tasks
	grunt.registerTask('default', ['uglify', 'sass']);

};