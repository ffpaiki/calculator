const colors = require("tailwindcss/colors");

module.exports = {
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue"
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        colors: {
            merah: "#C10708",
            putih: "#FFFFFF",
            abu: {
                gelap: "#A4A4A4",
                terang: "#00000029"
            }
        },

        extend: {
            width: {
                740: "740px",
                406: "406px"
            },
            height: {
                406: "406px"
            },
            fontfamily: {
                varela: ["Varela Round"]
            }
        }
    },
    variants: {
        extend: {}
    },
    plugins: []
};
