module.exports = {
    purge: [
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            fontFamily: {
                'sans': ['Ubuntu', 'sans-serif'],
            },
            animation: {
                blob: "blob 10s infinite",
                boundRight: "boundRight 1s infinite",
            },
            keyframes: {
                blob: {
                    "0%": {
                        transform: "translate(0px, 0px) scale(1)",
                    },
                    "33%": {
                        transform: "translate(10%, -20%) scale(1.05)",
                    },
                    "66%": {
                        transform: "translate(5%, 5%) scale(0.95)",
                    },
                    "100%": {
                        transform: "translate(0px, 0px) scale(1)",
                    },
                },
                boundRight: {
                    "0%, 100%": {
                        transform: "translateX(25%)",
                        'animation-timing-function': "cubic-bezier(0.8, 0, 1, 1)"
                    },
                    "50%": {
                        transform: "translateX(0)",
                        'animation-timing-function': "cubic-bezier(0, 0, 9,2, 1)"
                    }
                }
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
