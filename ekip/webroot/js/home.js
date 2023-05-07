document.addEventListener("mousemove", parallax, );
function parallax(event) {
  this.querySelectorAll(".parallax-wrap img, .parallax-wrap h2").forEach((shift) => {
    const position = shift.getAttribute("value");
    const x = (window.innerWidth - event.pageX * position) / 200;
    const y = (window.innerHeight - event.pageY * position) / 200;

    shift.style.transform = `translateX(${x}px) translateY(${y}px)`;
  });
}

const screens = document.querySelectorAll('.screen');

document.querySelector('.screens').addEventListener('scroll', () => {
  const offset = window.innerWidth * 0.2;
  const scroll = document.querySelector('.screens').scrollLeft;
  screens.forEach((screen) => {
    const x = (scroll - screen.offsetLeft + offset) / 100;
    screen.style.transform = `translateX(${x}px)`;
  });
});