const navList = document.querySelector('.nav__list');
const bars = document.querySelector('.bars');
const bgNavList = document.querySelector('.bg-nav__list');

bars.addEventListener('click', ()=>{
    navList.classList.toggle('resNavActive')
    bgNavList.classList.toggle('hidden')
    bars.classList.toggle('change')
})

document.addEventListener('click', (e)=>{
   if(e.target.classList[0] === 'bg-nav__list'){
    navList.classList.remove('resNavActive')
    bgNavList.classList.add('hidden')
    bars.classList.remove('change')
   }
})

