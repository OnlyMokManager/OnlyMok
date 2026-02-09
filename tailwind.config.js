/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./src/**/*.{js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
      colors: {
        'onlymok': {
          'bg': '#0793e9',
          'primary': '#0b69dd',
          'accent': '#4f9eff',
          'accent-hover': '#6caeff',
          'green': '#006400',
          'green-hover': '#228B22',
        }
      }
    },
  },
  plugins: [],
}
