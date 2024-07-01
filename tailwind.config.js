/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      "*",
      "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    colors: {
      'header': '#1a1a1a',
      'general': '#f1f1f1',
      'hover': '#fafafa',
      'search': '#b5b5b5',
      'dark': '#303030',
      'light': '#616161',
    },
    extend: {
      spacing: {
        '1.25': '1.25rem'
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

