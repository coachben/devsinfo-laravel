<<<<<<< HEAD
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

=======
import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                    'primary':'#447422',
                    'primary-light':'#e7ffd2',
                    'primary-focus':'#dc3545',
                    'secondary':'#dc3545',
                    'secondary-light':'#dc3545',
                    'accent':'#f1f5f9',
            }
        },
    },

    plugins: [forms],
};
>>>>>>> master
