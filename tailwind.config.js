/** @type {import('tailwindcss').Config} */
const flowbite = require('flowbite/plugin');
const forms = require('@tailwindcss/forms'); // Importing the forms plugin

module.exports = {
    content: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
      './node_modules/flowbite/**/*.js',
    ],
    theme: {
      extend: {
        colors: {
          customBlue: '#58a0ad',
        },
      },
    },
    plugins: [forms, flowbite], // Adding both plugins here
};
