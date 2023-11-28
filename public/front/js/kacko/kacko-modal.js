const kackoModal = document.querySelector('.kacko-modal');

function openKackoModal(){
    kackoModal.classList.remove('hidden')
}

document.addEventListener('click', (e)=>{
    if(e.target.classList[0] === 'kacko-modal'){
        kackoModal.classList.add('hidden')
    }
})

function closeKackoModal(){
    kackoModal.classList.add('hidden')
}