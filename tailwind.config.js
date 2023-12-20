/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/primevue/**/*.{vue,js,ts,jsx,tsx}"
      ],
    theme: {
        extend: {},
    },
    plugins: [],
};
