/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      container: {
        center: true,
        padding: '16px',
      },
      colors: {
        primary: '#2dd4bf',
        dark: '#18181b',
        navy: '#2E417B',
        tosca: 'rgba(95, 211, 208, 0.15)',
        grey: '#F6F6F6'
      },
      keyframes: {
        wiggle: {
          '0%, 100%': { transform: 'translateY(0rem)' },
          '50%': { transform: 'translateY(2.3rem)' },
        }
      },
      animation: {
        wiggle: 'wiggle 3s linear infinite',
      },
      dropShadow: {
        '2xl' : '0px 10px 50px rgba(95, 211, 208, 0.20)'
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

