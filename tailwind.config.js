module.exports = {
    purge: [],
    darkMode: false, // or 'media' or 'class'
    theme: {
        fontFamily: {
            'sans': 'Helvetica',
        },
        extend: {
            colors: {
                purple: {
                    '500': '#B972E5',
                    '700': '#5444CA',
                },
                red: {
                   '400': '#DE6247',
                },
                gray: {
                    '200': '#E5E5E5',
                }
            }
        },
    },
    variants: {
        extend: {},
    },
    plugins: [
        require('tailwindcss'),
        require('autoprefixer'),
    ],
}
