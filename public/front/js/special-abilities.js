const html = document.querySelector("html");
const grayscaleColor = document.querySelector(".grayscale-color");
const normalColor = document.querySelector(".normal-color");
const specialAbilities = document.querySelector(".special-abilities");
const haBtns = document.querySelectorAll(".ha-btn");
const overlay = document.querySelector(".overlay");

const minFont = 12;
const maxFont = 18;
const defaultFont = 16;
let currentFont = defaultFont;

document.addEventListener("click", (e) => {
  if (e.target.classList[0] === "menu-right__view") {
    specialAbilities.classList.toggle("hidden");
    overlay.classList.toggle("hidden");
  }
});

overlay.addEventListener("click", () => {
  specialAbilities.classList.add("hidden");
  overlay.classList.add("hidden");
});

grayscaleColor.addEventListener("click", () => {
  html.style.cssText = `--grayscale: 1; font-size: ${currentFont}px;`;
});
normalColor.addEventListener("click", () => {
  html.style.cssText = `--grayscale: 0; font-size: ${currentFont}px;`;
});



if (haBtns) {
  haBtns.forEach((haBtn) => {
    haBtn.addEventListener("click", (e) => {
      const id = e.target.getAttribute("id");
      switch (id) {
        case "fontSizeMin":
          {
            if (currentFont > minFont) {
              currentFont--;
            }
          }
          break;

        case "fontSizeMax":
          {
            if (currentFont < maxFont) {
              currentFont++;
            }
          }
          break;

        default:
          currentFont = defaultFont;
          break;
      }

      document.documentElement.style.fontSize = `${currentFont}px`;
    });
  });
}
