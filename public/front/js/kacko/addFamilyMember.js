const familyMemberItem2 = document.querySelector('#add-family-member-item2')

function addFamilyMemberItem(){
    familyMemberItem2.classList.remove('hidden')
}

function removeFamilyMemberItem(){
    familyMemberItem2.classList.add('hidden')
}


// Range Slider
const rangeSlider = document.querySelector(".range-slider");
const slider = document.querySelector(".slider");
const sliderThumb = document.querySelector(".slider-thumb");
const tooltip = document.querySelector(".tooltip");
const progress = document.querySelector(".progress");

function customSlider(){
    const maxVal = slider.getAttribute("max");
    const val = (slider.value / maxVal) * 100 + "%";

    tooltip.innerHTML = slider.value;
    progress.style.width = val;
    sliderThumb.style.left = val;

}
customSlider()


slider.addEventListener('input', ()=>{
    customSlider()
})