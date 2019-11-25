function sideBar() {
  const menu = document.querySelector('.dermatologia-menu');
  const openMenu = document.querySelector('.dermatologia-menu h2');

  if (!menu || !openMenu) return null;

  openMenu.addEventListener('click', e => {
    e.preventDefault();

    menu.classList.toggle('ativo');
  });
}
sideBar();
