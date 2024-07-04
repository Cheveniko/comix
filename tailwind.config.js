/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    container: {
      center: true,
      padding: "2rem",
    },
    extend: {
      colors: {
        "comix-primary": "var(--comix-primary)",
      },
    },
  },
  plugins: [],
};
