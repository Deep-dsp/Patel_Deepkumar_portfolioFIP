import './modules/burgerMenu.js';

const imgset = document.querySelectorAll('[data-model-target]');
const close = document.querySelectorAll('[data-close-button]');

imgset.forEach(img => img.addEventListener("click", ()=>{
    console.log("images are clickable now");
    const pop = document.querySelector(img.dataset.modelTarget);
    // light.classList.add('active-pop');
    openpop(pop);
}))

close.forEach(img => img.addEventListener("click", ()=>{
    console.log("images are clickable now");
    const pop = img.closest('.first-eight-pop');
    // light.classList.add('active-pop');
    closepop(pop);
}))

function openpop(pop){
    pop.classList.add('active-pop');
}

function closepop(pop){
    pop.classList.remove('active-pop');
}

