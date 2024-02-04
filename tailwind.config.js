/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class', // or 'media' or 'class'
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'primary': '#FF6363',
                'secondary': {
                    100: '#E2E2D5',
                    200: '#888883',
                }
            },
            fontFamily: {
                header: ['Nabla', 'sans-serif'],
            }
        },
    },
    plugins: [],
}

