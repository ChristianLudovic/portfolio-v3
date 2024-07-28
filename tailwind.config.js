/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue"
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#363636',
        'secondary': '#4747474',
        'gray': '#F2F2F2',
      },
      borderColor: {
        'primary': '#EFEFEF',
      },
    },
  },
  plugins: [],
}

