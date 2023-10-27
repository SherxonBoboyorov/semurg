//  ACCORDION MENU
const resnavItems = document.querySelectorAll(".relative");
resnavItems.forEach((li, index) => {
    li.addEventListener("click", (e) => {
    if (e.target.classList[0] === "nav__list-link") {
        resnavItems.forEach((el, i) => {
        index === i
          ? li.classList.toggle("active")
          : el.classList.remove("active");
      });
    }
  });
});
