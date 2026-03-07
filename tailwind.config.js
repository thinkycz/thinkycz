/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './source/**/*.blade.php',
    './source/**/*.md',
    './source/**/*.html',
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
  ],
}
