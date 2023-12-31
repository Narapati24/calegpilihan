/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,php}", "./src/**/*.{html,php}",
            "./node_modules/tw-elements/dist/js/**/*.js",],
  theme: {
    container: {
      center: true,
    },
    extend: {
      fontFamily: {
        roboto: ['"Roboto"'],
      },
      colors: {
        body: "#F0F2F9",
        main: "#00BCF1",
        "blue": "#4082BF",
        "light-blue": "#42A4FF",
        "gray": "#D9D9D9",
        "light-gray": "#F9F6EE"
      },
      boxShadow: {
        main: "0px 18.078041076660156px 35.09267044067383px -21.26828384399414px rgba(0, 0, 0, 0.25)",
      },

      screens: {
        s: "375px",
        m: "400px",
      },
    },
  },
  plugins: ["prettier-plugin-tailwindcss",
            require("tw-elements/dist/plugin.cjs")],
};
