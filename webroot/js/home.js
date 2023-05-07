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

    document.querySelector('.screens').scrollLeft = window.innerWidth;
    const screensContainer = document.querySelector('.screens');
    // const btnPrev = document.querySelector('.btn-prev');
    // const btnNext = document.querySelector('.btn-next');

    // btnPrev.addEventListener('click', () => {
    //     screensContainer.scrollBy({
    //         left: -window.innerWidth,
    //         behavior: 'smooth'
    //     });
    // });

    // btnNext.addEventListener('click', () => {
    //     screensContainer.scrollBy({
    //         left: window.innerWidth,
    //         behavior: 'smooth'
    //     });
    // });

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