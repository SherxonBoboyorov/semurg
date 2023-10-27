const toTopBtn = document.querySelector(".to-Top-Btn");

window.addEventListener("scroll", () => {
  if (window.scrollY > 600) {
    toTopBtn.classList.add("active");
  } else {
    toTopBtn.classList.remove("active");
  }
});

function scrollToTop() {
  window.scrollTo({
    top: 0,
  });
}
