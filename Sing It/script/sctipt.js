const input = document.querySelector('.List-Nav-toggle input');
const nav = document.querySelector('.Navigator ul');

input.addEventListener('click',function(){
    nav.classList.toggle('slide');
});

function ubahheader(){
    const tukar1 = document.getElementById('Depan');
    tukar1.style.color = 'red';
    const tukar = document.getElementById('Belakang');
    tukar.style.color = 'whitesmoke';
}

function ubahheader1(){
    const tukar1 = document.getElementById('Depan');
    tukar1.style.color = 'whitesmoke';
    const tukar = document.getElementById('Belakang');
    tukar.style.color = 'red';
    
}

setInterval(activeslideimg0,4000);   
setInterval(activeslideimg1,8000);   
setInterval(activeslideimg2,12000);   

function activeslideimg0(activeSlide = 0){
    const slide = document.querySelectorAll(".content");
    slide[activeSlide].classList.toggle("active");
}

function activeslideimg1(activeSlide = 1){
    const slide = document.querySelectorAll(".content");
    slide[activeSlide].classList.toggle("active");
}

function activeslideimg2(activeSlide = 2){
    const slide = document.querySelectorAll(".content");
    slide[activeSlide].classList.toggle("active");
}

function mode(){
    const ubah = document.body;
    ubah.classList.toggle("light")
}