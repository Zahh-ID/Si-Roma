/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/views/**/*.blade.php',
    './resources/js/**/*.js'
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          DEFAULT: '#5B8DEF',
          50: '#EEF4FF',
          100: '#DBE7FF',
          200: '#B7CEFE',
          300: '#93B5FC',
          400: '#6F9CF9',
          500: '#4B83F5',
          600: '#3A69C3',
          700: '#2B4F92',
          800: '#1B3562',
          900: '#0C1C33',
        }
      },
      fontFamily: {
        display: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
        body: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif']
      },
      boxShadow: {
        soft: '0 10px 25px -10px rgba(0,0,0,0.2)'
      },
      borderRadius: {
        '2xl': '1rem'
      }
    },
  },
  plugins: [],
}