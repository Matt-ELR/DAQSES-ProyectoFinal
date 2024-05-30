function carrito(){
    alert("Su producto fue agregado al carrito");
}

const backToTopButton = document.querySelector('.back-to-top');

backToTopButton.addEventListener('click', () => {
  window.scrollTo({ top: 0, behavior: 'smooth' });
});

/*Test de cambios de JS*/

const subHeader = document.querySelector('.sub-header');
const scrollThreshold = 200; // adjust this value to your liking
  
window.addEventListener('scroll', () => {
if (window.scrollY > scrollThreshold) {
  subHeader.classList.add('fixed');
} else {
  subHeader.classList.remove('fixed');
  }
});