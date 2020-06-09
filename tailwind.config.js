const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    purge: false,
    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            fill: theme => theme('colors'),
            zIndex: {
                '100': '100',
                '500': '500',
                'overlay': '9999',
                'modal': '10000'
            }
        },
    },
    variants: {
        fill: ['responsive', 'hover', 'focus', 'group-hover'],
        textColor: ['responsive', 'hover', 'focus', 'group-hover'],
        zIndex: ['responsive', 'focus'],
    },
    plugins: [],
}
