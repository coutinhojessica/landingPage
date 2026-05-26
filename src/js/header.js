export function iniciarHeader() {
  const btnMenu = document.getElementById('menu-mobile');
  function ativarOpenMenu(event) {
    if (event.type === 'touchstart') event.preventDefault();
    const navbar = document.querySelector('.nav-bar');
    navbar.classList.toggle('activeMenu');
    const active = navbar.classList.contains('activeMenu');
    event.currentTarget.setAttribute('aria-expanded', active);
    if (active) {
      event.currentTarget.setAttribute('aria-label', 'Fechar Menu');
    } else {
      event.currentTarget.setAttribute('aria-label', 'Abrir Menu');
    }
  }
  btnMenu.addEventListener('click', ativarOpenMenu);
  btnMenu.addEventListener('touchstart', ativarOpenMenu);
}
