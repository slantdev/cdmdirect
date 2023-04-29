const theme = require('./theme.json');
const tailpress = require('@jeffreyvr/tailwindcss-tailpress');
const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.php',
    './**/*.php',
    './resources/css/*.css',
    './resources/js/*.js',
    './safelist.txt',
  ],
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
        md: '1.5rem',
        xl: '2rem',
      },
    },
    extend: {
      colors: {
        brand: {
          blue: '#0583FF',
          bluedark: '#002F56',
          bluesky: '#00BBF0',
          orange: '#F8810A',
          yellow: '#FFCB00',
          red: '#F03105',
          purple: '#6852ED',
          gray: '#58595B',
          graylight: '#F3F1EF',
        },
      },
      fontFamily: {
        sans: ['Poppins', ...defaultTheme.fontFamily.sans],
        nunito: ['Nunito', ...defaultTheme.fontFamily.sans],
      },
      typography: {
        DEFAULT: {
          css: {
            color: '#454545',
            a: {
              color: '#EA3325',
              '&:hover': {
                color: '#BF2031',
              },
            },
            h1: {
              fontWeight: '300',
            },
            h2: {
              fontWeight: '600',
            },
            h3: {
              fontWeight: '600',
            },
            h4: {
              fontWeight: '600',
            },
            h5: {
              fontWeight: '400',
            },
            h6: {
              fontWeight: '900',
            },
          },
        },
      },
    },
    screens: {
      xs: '480px',
      sm: '600px',
      md: '768px',
      lg: '1024px',
      xl: '1280px',
      '2xl': '1440px',
      '3xl': '1536px',
      '4xl': '1760px',
      //'4xl': '1921px',
    },
  },
  corePlugins: {
    aspectRatio: false,
  },
  plugins: [
    tailpress.tailwind,
    require('daisyui'),
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/line-clamp'),
    require('@tailwindcss/aspect-ratio'),
  ],
  daisyui: {
    styled: true,
    themes: true,
    base: true,
    utils: true,
    logs: true,
    rtl: false,
    prefix: '',
    darkTheme: false,
  },
};
