module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        brand: {
          pink: "#FFF1E8",
          red: "#AD000A",
          blue: {
            light: "#286ce5",
            dark: "#070628"
          },
          gray: {
            light: "#474747",
            medium: " #33302E",
            dark: "#333333"
          },
          yellow: {
            light: "#F69219"
          }             
        },
      },
      fontFamily: {
        body: ["Nunito Sans"],
        titleMain: ["Abhaya Libre"],
        titleSub: ["Poppins"]
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}

/*
body: #FFF1E8;

blue: #070628
red: AD000A, 90%
gray: 474747, 100%
skyblue: #286CE5 90%;

background-color button : background: #F69219 80%;

border-outline: #F69219

projects: background: #333333 90%;
projects-text: 000000, 45%
text: 000000, 45%
more-projects: 33302E, 100%
footer-text: 33302E, 50%

*/