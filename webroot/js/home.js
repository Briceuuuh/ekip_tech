document.addEventListener("mousemove", parallax, );
function parallax(event) {
  this.querySelectorAll(".parallax-wrap img, .parallax-wrap h2").forEach((shift) => {
    const position = shift.getAttribute("value");
    const x = (window.innerWidth - event.pageX * position) / 200;
    const y = (window.innerHeight - event.pageY * position) / 200;

    shift.style.transform = `translateX(${x}px) translateY(${y}px)`;
  });
}

document.addEventListener('DOMContentLoaded', () => {
    const screens = document.querySelectorAll('.screen');

    document.querySelector('.screens').addEventListener('scroll', () => {
    const offset = window.innerWidth * 0.2;
    const scroll = document.querySelector('.screens').scrollLeft;
    screens.forEach((screen) => {
        const x = (scroll - screen.offsetLeft + offset) / 100;
        screen.style.transform = `translateX(${x}px)`;
    });
    });

    document.querySelector('.screens').scrollLeft = window.innerWidth;

    const press = document.getElementById('pres');
    const popup = document.getElementById('popup');
    const popupClose = document.getElementById('popup-close');
    console.log("je click");

    press.addEventListener('click', () => {
        popup.style.display = 'block';
    });

    popupClose.addEventListener('click', () => {
        popup.style.display = 'none';
    })

    const onyrix = document.getElementById('ony');
    const popupony = document.getElementById('popupony');
    const popuponyClose = document.getElementById('popupony-close');
    console.log("je click");

    onyrix.addEventListener('click', () => {
        popupony.style.display = 'block';
    });

    popuponyClose.addEventListener('click', () => {
        popupony.style.display = 'none';
    })

    const testIa = document.getElementById('ia');
    const popupIa = document.getElementById('popupIa');
    const popupIaClose = document.getElementById('popupIa-close');
    console.log("je click");

    testIa.addEventListener('click', () => {
        popupIa.style.display = 'block';
    });

    popupIaClose.addEventListener('click', () => {
        popupIa.style.display = 'none';
    })

});