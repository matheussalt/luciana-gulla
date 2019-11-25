function objectParallax() {
  const objectArray = document.querySelectorAll('[data-object]');

  if (!objectArray) return null;

  objectArray.forEach(object => {
    window.addEventListener('scroll', e => {
      const distTop = object.getBoundingClientRect().top;
      const velocidade = object.getAttribute('data-object');

      if (window.innerHeight >= distTop) {
        object.style.setProperty(
          'transform',
          `translate3d(0, ${distTop * velocidade}px, 0)`
        );
      }
    });
  });
}
objectParallax();
