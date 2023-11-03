
function openleadershipModal(id, event){
    const leadershipManagementModal = document.querySelector(`#leadership-management__modal-${id}`);
    if(leadershipManagementModal.classList.contains('hidden')) {
        leadershipManagementModal.classList.remove('hidden')
    } else if(event.target.classList.contains('lead-modal-overlay') ) {
        leadershipManagementModal.classList.add('hidden')
    }
}

