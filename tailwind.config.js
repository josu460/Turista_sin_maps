/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
      './node_modules/flowbite/**/*.js'
      
    ],
    theme: {
      extend: {},
    },

    plugins: [forms],
};

const flowbite = require('flowbite/plugin');

module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './node_modules/flowbite/**/*.js', 
    ],
    theme: {
        extend: {
            colors:{
                customBlue:'#58a0ad',
            }
        },
    },
    plugins: [flowbite], 
};