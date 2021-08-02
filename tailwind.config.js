module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    colors: {
      white: '#FFFFFF',
      orange : '#FCA311',
      grey: '#E5E5E5',
      darkblue: '#14213D',
      black: '#000000',
    },
    FontFamily: {
      'mermelad': ['Marmelad', 'sans-serif'],
      'oldenburg': ['Oldenburg', 'cursive'],
      'Sintony': ['Sintony', 'sans-serif']
    },
    extend: {},
  },
  variants: {
    animation: ['responsive', 'motion-safe', 'motion-reduce'],
    extend: {},
  },
  plugins: [],
}
