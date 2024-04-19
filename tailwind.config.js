/** @type {import('tailwindcss').Config} */
module.exports = {
    mode: 'jit',
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: 'class',
    theme: {
      extend: {
        colors: {
          primary: '#3490dc',
          secondary: '#ffed4a',
          danger: '#e3342f',
        },
        spacing: {
          '72': '18rem',
          '84': '21rem',
          '96': '24rem',
        },
        fontSize: {
          'xxs': '0.625rem',
          '3xl': '1.875rem',
          '4xl': '2.25rem'
        },
        fontFamily: {
          sans: ['Nunito', 'sans-serif'],
          serif: ['Merriweather', 'serif'],
        },
        borderRadius: {
          'xl': '1rem',
          '2xl': '2rem',
          '3xl': '3rem',
        },
        boxShadow: {
          'sm': '0 4px 6px 0 rgba(0, 0, 0, 0.1)',
          'lg': '0 10px 15px -3px rgba(0, 0, 0, 0.1)',
          'xl': '0 20px 25px -5px rgba(0, 0, 0, 0.1)',
        },
        zIndex: {
          '0': 0,
          '10': 10,
          '20': 20,
          '30': 30,
        },
        opacity: {
          '90': '0.9',
          '95': '0.95',
        },
        extend: {
          spacing: {
            'half': '50%',
          },
          fontSize: {
            '5xl': '3.5rem',
          },
          colors: {
            'dark': '#1a202c',
          },
        },
        screens: {
          'xs': '480px',
          'sm': '640px',
          'md': '768px',
          'lg': '1024px',
          'xl': '1280px',
          '2xl': '1536px',
        },
        variants: {
          extend: {
            backgroundColor: ['active'],
            textColor: ['visited'],
          },
        },
        width: {
          '1/7': '14.2857143%',
          '2/7': '28.5714286%',
          '3/7': '42.8571429%',
          '4/7': '57.1428571%',
          '5/7': '71.4285714%',
        },
        height: {
          'screen-1/2': '50vh',
          'screen-1/3': '33.333333vh',
        },
        spacingScale: {
          '8': '2rem',
          '12': '3rem',
          '16': '4rem',
          '20': '5rem',
        },
      },
    },
    plugins: [require("tailgrids/plugin")],
}