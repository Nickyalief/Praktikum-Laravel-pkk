/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
  "./resources/**/*.blade.php",
  "./resources/**/*.js",
  "./resources/**/*.vue",
  './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
  './storage/framework/views/*.php',
  './resources/js/**/*.tsx',],
  theme: {
    extend: {
      fontFamily : {
        galada: ['Galada'],
        robotocd: ['Roboto Condensed'],
      }
    },
  },
  plugins: [
  require('tailwind-scrollbar'),
  require('@tailwindcss/typography'),
  require('@tailwindcss/forms'),
  require('@tailwindcss/aspect-ratio'),
  require('tailwindcss-animated'),
  require('@tailwindcss/container-queries'),
  require('flowbite/plugin')],
}

