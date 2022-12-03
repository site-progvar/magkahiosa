/** @type {import('tailwindcss').Config} */

const colors = require('tailwindcss/colors')

module.exports = {
    content: ['./resources/**/*.blade.php', './vendor/filament/**/*.blade.php'],
    theme: {
        screens: {
            
            'lg': {'max': '1023px'},
            // => @media (max-width: 1023px) { ... }
      
            'md': {'max': '767px'},
            // => @media (max-width: 767px) { ... }
      
            'sm': {'max': '639px'},
            // => @media (max-width: 639px) { ... }
            'ssm': {'max': '374px'},
            // => @media (max-width: 374px) { ... }
            'taas': { 'raw': '(max-height: 900px)' },
            // => @media (min-height: 800px) { ... }
            'putot': { 'raw': '(max-height: 749px)' },
            // => @media (min-height: 800px) { ... }
          
          },
        extend: {
            colors: {
                danger: colors.rose,
                primary: colors.blue,
                success: colors.green,
                warning: colors.yellow,
            },
            backgroundImage: {
                'background': "url('/image/image.png')"
            }
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}