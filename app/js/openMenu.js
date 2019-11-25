function openMenu() {
  const header = document.querySelector('.header');
  const menuHamb = document.querySelector('.menu-hamb');
  const menu = document.querySelector('.header-wrapper');

  menuHamb.addEventListener('click', e => {
    e.preventDefault();

    menu.classList.toggle('ativo');
    menuHamb.classList.toggle('ativo');
  });

  window.addEventListener('scroll', e => {
    if (window.scrollY > 100) {
      header.classList.add('ativo');
    } else {
      header.classList.remove('ativo');
    }
  });
}
openMenu();
