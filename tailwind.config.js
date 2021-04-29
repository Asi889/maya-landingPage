module.exports = {
  purge: [
    './wp-content/themes/canaan/**/*.{vue,js,ts,jsx,tsx,php,svg}'
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],

  theme: {
    extend: {
      spacing: {
        bbc: '1920px',
        // topBarMiddle: '692px',
        md: '16px',
        lg: '24px',
        xl: '48px'
      },
      textColor: theme => theme('colors'),
      textColor: {
        'primary': '#3490dc',
        'secondary': '#ffed4a',
        'danger': '#e3342f',
        'mainTurquoise': '#3C91A0',
        'mainOrange': '#FB9773',
        'mainWhite': '#FFFFFF'
      },

      backgroundColor: theme => ({
        ...theme('colors'),
        'mainOrange': '#FB9773',
      }),


      //  height: {
      //   sm: '8px',
      //   md: '16px',
      //   lg: '24px',
      //   xl: '100px',
      //  }
    }
  }
}
