/** @type {import('tailwindcss').Config} */

const colors = require('tailwindcss/colors')

module.exports = {
    content: ['./resources/**/*.blade.php', './vendor/filament/**/*.blade.php'],
    theme: {
        screens: {
            '2xl': {'max': '1535px'},
            // => @media (max-width: 1535px) { ... }
      
            'xl': {'max': '1279px'},
            // => @media (max-width: 1279px) { ... }
      
            'lg': {'max': '1023px'},
            // => @media (max-width: 1023px) { ... }
      
            'md': {'max': '767px'},
            // => @media (max-width: 767px) { ... }
      
            'sm': {'max': '639px'},
            // => @media (max-width: 639px) { ... }
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