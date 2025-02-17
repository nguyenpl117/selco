/** @type {import('tailwindcss').Config} */

const colors = require('tailwindcss/colors')

module.exports = {
    darkMode: ['selector', '[data-theme="dark"]'],
    content: [
        "./resources/**/*.{php,html,js}"
    ],
    theme: {
        extend: {
            fontFamily: {
                'svn': ["SVN Gilroy", 'sans-serif', "serif"],
                'svn-medium': ['SVN Medium', 'sans-serif', 'serif'],
                'svn-bold': ['SVN Bold', 'sans-serif', 'serif'],
            },
            fontSize: {
                sm: '90%',
                base: '1rem',
                lg: '110%',
                xl: '1.25rem',
                '2xl': '1.7rem',
                // '3xl': '1.953rem',
                // '4xl': '2.441rem',
                // '5xl': '3.052rem',
            },
            colors: {
                primary: {
                    '50': '#cce5ff',
                    '100': '#9acafe',
                    '200': '#67b0fe',
                    '300': '#3496fe',
                    '400': '#0163cb',
                    '500': '#0156b2',
                    '600': '#014a98',
                    '700': '#01458e',
                    '800': '#013e7f',
                    '900': '#013165',
                    '950': '#00254c'
                },
            }
        }
    },
    plugins: [],
}

