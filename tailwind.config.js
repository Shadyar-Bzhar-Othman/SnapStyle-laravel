/** @type {import('tailwindcss').Config} */
export default {
    content: [
        // It will include all file and subdirectory files in resources directory
        "./resources/**/*.blade.php",
    ],
    theme: {
        extend: {
            colors: {
                primaryColor: "#F2067E",
                secondaryColor: "#F867CB",
            },
        },
    },
    plugins: [],
};