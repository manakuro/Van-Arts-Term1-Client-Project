module.exports = function() {
    return {
        'document_root': 'http://thinkw',
        'js': {
            'app': './app/js/**/*.js',
            'ignore': './app/js/vendor/**/*.js',
            'dist': './dist/js/',
            'bundled': 'bundle.js'
        },
        'css': {
            'app': './app/css/**/*.scss',
            'dist': './dist/css/'
        },
        'img': {
            'app': './app/img/**/*.+(png|jpg|gif|svg)',
            'dist': './dist/img/'
        },
        'html': {
            'app': './app/templates/header.php',
            'dist': './'
        },
        'fonts': {
            'app': './app/fonts/**/*',
            'dist': './dist/fonts/'
        } 
    };
};