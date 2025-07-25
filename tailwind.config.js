/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/views/**/*.blade.php",
    "./src/**/*.php",
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          50: '#eff6ff',
          100: '#dbeafe',
          200: '#bfdbfe',
          300: '#93c5fd',
          400: '#60a5fa',
          500: '#3b82f6',
          600: '#2563eb',
          700: '#1d4ed8',
          800: '#1e40af',
          900: '#1e3a8a',
        },
        'ussf-blue': {
          100: '#e6f3ff',
          200: '#cce7ff',
          300: '#99d0ff',
          400: '#66b8ff',
          500: '#3399ff',
          600: '#0066cc',
          700: '#004499',
          800: '#003366',
          900: '#002244',
        },
        'ussf-red': {
          100: '#ffe6e6',
          200: '#ffcccc',
          300: '#ff9999',
          400: '#ff6666',
          500: '#ff3333',
          600: '#cc0000',
          700: '#990000',
          800: '#660000',
          900: '#440000',
        },
      },
      fontFamily: {
        sans: ['Inter', 'system-ui', 'sans-serif'],
      },
    },
  },
  plugins: [],
}