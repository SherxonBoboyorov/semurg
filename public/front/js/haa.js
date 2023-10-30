let a = document.querySelector('.about-history-company-par');
let b = document.querySelector('.history-company__year');


a.addEventListener('scroll', (e)=>{
    console.log(e.target.scrollTop);
    if(e.target.scrollTop < 950){
        b.style.cssText = `
        transform: translateY(${((-e.target.scrollTop) + 50) / 3.1}px)
    `
    }
    
})