const colors = require('tailwindcss/colors')

const fullColorPaletteSafelist = []
const colorTypes = ['bg', 'text', 'border']
const shadeValues = [50, 100, 200, 300, 400, 500, 600, 700, 800, 900]

Object.keys(colors).forEach(color => {
  if (typeof colors[color] === 'object') {
    shadeValues.forEach(shade => {
      colorTypes.forEach(type => {
        fullColorPaletteSafelist.push(`${type}-${color}-${shade}`)
      })
    })
  }
})

module.exports = {
  content: [
    './source/**/*.blade.php',
    './source/**/*.md',
    './source/**/*.html',
  ],
  safelist: [
    ...fullColorPaletteSafelist,
    {
      pattern: /bg-./,
      variants: ['hover', 'group-hover'],
    },
    {
      pattern: /text-./,
      variants: ['hover', 'group-hover'],
    }
  ],
  theme: {
    extend: {
      animation: {
        'fade-in-up': 'fadeInUp 0.8s ease-out forwards',
        'fade-in': 'fadeIn 1s ease-out forwards',
        'blob': 'blob 7s infinite',
        'carousel': 'carousel 40s linear infinite',
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
        },
        carousel: {
          '0%': { transform: 'translateX(0)' },
          '100%': { transform: 'translateX(-50%)' },
        }
      }
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
  ],
}
