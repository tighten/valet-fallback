module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
      fontFamily: {
          'sans': 'Helvetica',
      },
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [
      require('tailwindcss'),
      require('autoprefixer'),
  ],
}
