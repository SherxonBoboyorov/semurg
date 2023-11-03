const leadershipManagementModal = document.querySelector('.leadership-management__modal');

function openleadershipModal(){
    leadershipManagementModal.classList.remove('hidden')
}

document.addEventListener('click', (e)=>{
    if(e.target.classList[0] === 'leadership-management__modal'){
        leadershipManagementModal.classList.add('hidden')
    }
})