module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        container: {
            center: true,
        },
        extend: {
            backgroundImage: {
                'motif': "url('/img/motif.png')",
            },
            colors: {
                bouff: {
                    primaryone: '#f39719',
                    primarytwo: '#ffc988',
                    primarytree: '#ffecd9',
                    primaryfor: '#fffcf9',
                    secondaryone: '#1d1d1b',
                    secondarytwo: '#1b213d',
                    secondarytree: '#49434c',
                }
            },
            animation: {
                'bounce-slow': 'bounce 2s infinite',
            }
        },
    },
    plugins: [
    ],
}
