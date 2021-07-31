module.exports = {
  mode: 'jit',
  purge: {
    enabled: process.env.ENV === 'production',
    content: [
        'components/**/*.vue',
        'layouts/**/*.vue',
        'pages/**/*.vue',
        'plugins/**/*.js',
        'nuxt.config.js',
    ],
},
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontFamily: {
      display: ['Lato', 'sans-serif'],
      body: ['Lato', 'sans-serif'],
    },
    extend: {},
  },
  variants: {
    margin: ['first', 'last'],
    padding: ['first', 'last'],
    extend: {},
  },
  plugins: [],
};
