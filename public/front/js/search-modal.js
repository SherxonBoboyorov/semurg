const openSearchBtn = document.querySelector(".menu-right__search");
const searchModal = document.querySelector(".menu-right__search-modal");
const searchModalForm = document.querySelector(".search-modal-form");
const searchModalFormInput = document.querySelector('#search-modal-form-input');

openSearchBtn.addEventListener("click", () => {
  searchModal.classList.remove("hidden");
});

document.addEventListener("click", (e) => {
  if (e.target.classList[0] === "menu-right__search-modal") {
    searchModal.classList.add("hidden");
  }
});

searchModalForm.addEventListener('submit', (e)=>{
    searchModal.classList.add("hidden");
    searchModalFormInput.value = '';
})