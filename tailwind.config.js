/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.{html,js,php}', // Root-level files
    './foreign-exchange/**/*.{html,js,php}',
    './includesv2/**/*.{html,js,php}',
    './locationData/**/*.{html,js,php}',
    './myaccount/**/*.{html,js,php}', // Include all subdirectories
    './orderv2/**/*.{html,js,php}', // Include order-related components
    './public/**/*.{html,js}', // If you have inline Tailwind in public files
    './rates/**/*.{html,js,php}',
    './scripts/**/*.{html,js,php}', // Scripts folder
    './src/**/*.{html,js,php}', // All source files
    './stylesv2/**/*.{html,js,php}',
    './wire-transfer/**/*.{html,js,php}',
    './university-payment/**/*.{html,js,php}',
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          blue: '#0E51A0',
          red: '#E31D1C',
        },
      },
      fontSize: {
        headingCustom: ['2.4rem', '3rem'],
        headingCustomSmall: ['2.1rem', '2.5rem'],
        mediumFont: ['0.80rem', '1.3rem'],
        smallFont: ['0.6rem', '1rem'],
      },
      screens: {
        md: '950px',
        customMd: '830px',
        customLg: '1150px',
        xs: '450px',
      },
      maxWidth: {
        customMax: '103rem',
      },
      backgroundImage: {
        'custom-gradient':
          'linear-gradient(138.25deg, rgba(14, 81, 160, 0.05) -6.91%, rgba(227, 29, 28, 0.05) 106.82%)',
      },
    },
  },
  variants: {
    extend: {
      fontSize: ['responsive', 'important'],
    },
  },
  plugins: [],
};
