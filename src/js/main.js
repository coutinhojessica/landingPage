import { iniciarHeader } from './header.js';
import { iniciarTema } from './theme.js';

async function carregarComponente(id, arquivo) {
  const resposta = await fetch(arquivo);

  const html = await resposta.text();

  document.getElementById(id).innerHTML = html;

  if (id === 'header') {
    iniciarHeader();
    iniciarTema();
  }
}

carregarComponente('header', './components/header.html');
carregarComponente('hero', './components/hero.html');
carregarComponente('footer', './components/footer.html');
