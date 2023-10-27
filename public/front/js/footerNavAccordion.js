//  ACCORDION MENU
const footerNavAcc = document.querySelectorAll(".footer-relative");
footerNavAcc.forEach((li, index) => {
    li.addEventListener("click", (e) => {
    if (e.target.classList[0] === "footer-list-link") {
        footerNavAcc.forEach((el, i) => {
        index === i
          ? li.classList.toggle("active")
          : el.classList.remove("active");
      });
    }
  });
});
