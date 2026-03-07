/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './source/**/*.blade.php',
    './source/**/*.md',
    './source/**/*.html',
  ],
  safelist: [
    {
      pattern: /bg-(blue|teal|green|indigo|orange|purple|yellow|pink|slate)-(50|100|200|500)/,
      variants: ['hover', 'group-hover'],
    },
    {
      pattern: /text-(blue|teal|green|indigo|orange|purple|yellow|pink|slate)-(400|500|600|700)/,
      variants: ['hover', 'group-hover'],
    },
  ],
  theme: {
    extend: {
      animation: {
        'fade-in-up': 'fadeInUp 0.8s ease-out forwards',
        'fade-in': 'fadeIn 1s ease-out forwards',
        'blob': 'blob 7s infinite',
      },
      keyframes: {
        fadeInUp: {
          '0%': { opacity: '0', transform: 'translateY(20px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
        fadeIn: {
          '0%': { opacity: '0' },
          '100%': { opacity: '1' },
        },
        blob: {
          '0%': { transform: 'translate(0px, 0px) scale(1)' },
          '33%': { transform: 'translate(30px, -50px) scale(1.1)' },
          '66%': { transform: 'translate(-20px, 20px) scale(0.9)' },
          '100%': { transform: 'translate(0px, 0px) scale(1)' },
        }
      }
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
  ],
}
