export function iniciarTema() {
  const tema = document.getElementById('ativarTema');
  const body = document.body;
  const claroIcon = document.querySelector('.claro-tema');
  const escuroIcon = document.querySelector('.escuro-tema');

  tema.addEventListener('click', () => {
    document.body.classList.toggle('claro');
    document.body.classList.toggle('escuro');

    if (body.classList.contains('claro')) {
      claroIcon.style.display = 'block';
      escuroIcon.style.display = 'none';
    } else {
      claroIcon.style.display = 'none';
      escuroIcon.style.display = 'block';
    }
  });
}
