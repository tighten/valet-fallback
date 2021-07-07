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
                    '500': '#9963DC',
                    '700': '#604ACD',
                    '800': '#5445CA',
                },
                red: {
                   '400': '#DE6247',
                },
                gray: {
                    '200': '#F5F6F7',
                },
                blue: {
                    '300': '#18A0FB',
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
