/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
  theme: {
    extend: {
        colors: {
            'bg-dark-mode' : '#22303c',
            'background' : '#192734'
        },
        fontFamily: {
            'Poppins' : 'Poppins',
            'Montserrat' : 'Montserrat',
        }
    },
  },
  plugins: [],
}

