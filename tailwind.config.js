module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      height: {
        l: '1200px',
        k:'960px',
     
       },
       width: {
        l: '1200px',
        k:'960px',
     
       },

      fontFamily:{
        Montserrat:['Montserrat']
      },
      colors:{
        primary: {
          100:'#80B692',
          200:'#548B64',
          300:'#348F6C',
        },
        secondary:{
          100: '#F3E9D7',
          200: '#E3C790',
        }
      },
      spacing: {
        '100': '60rem',
       },
      keyframes: {
        slider: {
          '0%': { transform: 'translate-y-0' },
          '25%': { transform: '-translate-y-80' },
          '75%': { transform: '-translate-y-100' },
          '100%': { transform: 'translate-y-0' },
        }
       },
       animation: {
        slider: 'slider 20s ease-in-out infinite',
       }
       
    },
  },
  variants: {
    extend: {
      animation: ['hover', 'focus'],

    },
  },
  plugins: [
    require('@tailwindcss/line-clamp'),
    require('@tailwindcss/forms'),

  ],
}

 