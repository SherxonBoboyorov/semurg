const mapBtn = document.getElementById('contact-page-mapBtn');
const listBtn = document.getElementById('contact-page-listBtn');

const map = document.querySelector('.contact-page__map');
const list = document.querySelector('.contact-page__list');

mapBtn.addEventListener('click',()=>{
    mapBtn.classList.add('primary-btn')
    listBtn.classList.remove('primary-btn')
    map.classList.remove('hidden')
    list.classList.add('hidden')
})

listBtn.addEventListener('click',()=>{
    mapBtn.classList.remove('primary-btn')
    listBtn.classList.add('primary-btn')
    map.classList.add('hidden')
    list.classList.remove('hidden')
})