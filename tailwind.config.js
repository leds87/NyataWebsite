/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/css/*.{html,js}",
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily:{
        book: ["Book","sans-serif"],
        markpro:["Mark Pro","sans-serif"],
        museo700:["Museo700","sans-serif"],
      },
    extend: {
      
    },
  },
  plugins: [],
}
