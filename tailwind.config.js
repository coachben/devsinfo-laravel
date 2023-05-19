/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'primary':'#447422',
        'primary-light':'#e7ffd2',
        'primary-focus':'#dc3545',
        'secondary':'#dc3545',
        'secondary-light':'#dc3545',
        'accent':'#f1f5f9',
    },
    },
  },
  plugins: [],
}

