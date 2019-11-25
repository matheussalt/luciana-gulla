function instagram(id, token) {
  const profileImg = document.querySelector('.profile-img');
  const username = document.querySelector('.username');
  const follow = document.querySelector('.follow');
  const user = document.querySelector('.user');
  const bio = document.querySelector('.bio');
  const publicacoes = document.querySelector('.publicacoes');
  const seguidores = document.querySelector('.seguidores');
  const seguindo = document.querySelector('.seguindo');
  const grid = document.querySelector('.grid');
  const feed = document.querySelector('.feed');
  const postFeed = document.querySelector('.posts-feed');

  if (
    !profileImg ||
    !username ||
    !follow ||
    !user ||
    !bio ||
    !publicacoes ||
    !seguidores ||
    !seguindo ||
    !grid ||
    !feed ||
    !postFeed
  ) {
    return null;
  }

  fetch(`https://api.instagram.com/v1/users/${id}/?access_token=${token}`)
    .then(r => r.json())
    .then(r => {
      const dados = r.data;

      profileImg.setAttribute('src', dados.profile_picture);
      profileImg.setAttribute(
        'href',
        `https://instagram.com/${dados.username}`
      );

      username.innerText = dados.username;
      username.setAttribute('href', `https://instagram.com/${dados.username}`);

      follow.setAttribute('href', `https://instagram.com/${dados.username}`);

      user.innerText = dados.full_name;

      bio.innerText = dados.bio;

      publicacoes.innerText = dados.counts.media;
      seguidores.innerText = dados.counts.followed_by;
      seguindo.innerText = dados.counts.follows;
    });

  fetch(
    `https://api.instagram.com/v1/users/${id}/media/recent/?access_token=${token}`
  )
    .then(r => r.json())
    .then(r => {
      r.data.forEach(img => {
        const image = document.createElement('a');
        image.setAttribute('href', img.link);
        image.setAttribute('target', '_blank');
        image.innerHTML = `
          <picture>
            <img src="${img.images.low_resolution.url}" />
          </picture>
        `;

        postFeed.appendChild(image);
      });
    });

  grid.addEventListener('click', e => {
    e.preventDefault();

    postFeed.classList.remove('mode-feed');
    postFeed.classList.add('mode-grid');

    feed.classList.remove('ativo');
    grid.classList.add('ativo');
  });

  feed.addEventListener('click', e => {
    e.preventDefault();

    postFeed.classList.remove('mode-grid');
    postFeed.classList.add('mode-feed');

    grid.classList.remove('ativo');
    feed.classList.add('ativo');
  });
}
instagram('7585597329', '7585597329.1677ed0.33d04277350e42a59eab684556af09fc');
