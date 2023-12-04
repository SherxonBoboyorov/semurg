
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tab-content");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "grid";
    evt.currentTarget.className += " active";
  }

  document.addEventListener('DOMContentLoaded', () => {
    const defaultTab = document.getElementById('categoryTab').children[0].classList.add('active')

    const defaultTabContent = document.querySelectorAll('.tab-content')[0].style.display = 'grid'
})
