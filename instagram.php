<section class="midias-section">
  <div class="container">
    <div class="midias-cel" data-object=".15">
      <picture>
        <source srcset="<?=get_template_directory_URI()?>/img/webp/phone.webp" type="image/webp"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/phone.jpg" type="image/jpg"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/webp/phone@2x.webp" type="image/webp" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/phone@2x.jpg" type="image/jpg" />
        <img src="<?=get_template_directory_URI()?>/img/rsc/phone@2x.jpg" alt="Instagram Luciana Gulla" />
      </picture>

      <div class="instagram">
        <div class="instagram-wrapper">
          <header class="instagram-header">
            <a href="https://instagram.com" target="_blank">
              <img class="profile-img" src="" alt="Instagram Luciana Gulla" />
            </a>

            <div class="instagram-buttons">
              <strong class="username"></strong>
              <a class="follow" href="https://instagram.com" target="_blank">Seguir</a>
            </div>
          </header>

          <div class="profile-data">
            <strong class="user"></strong>
            <div class="bio"></div>
          </div>

          <div class="profile-number">
            <div>
              <strong class="publicacoes"></strong>
              <span>publicações</span>
            </div>

            <div>
              <strong class="seguidores"></strong>
              <span>seguidores</span>
            </div>

            <div>
              <strong class="seguindo"></strong>
              <span>seguindo</span>
            </div>
          </div>

          <div class="posts">
            <div class="buttons">
              <button class="grid ativo">
                <svg width="32" height="32" viewBox="0 0 32 32">
                  <use xlink:href="#grid"></use>
                </svg>
              </button>
              <button class="feed">
                <svg width="32" height="32" viewBox="0 0 32 32">
                  <use xlink:href="#feed"></use>
                </svg>
              </button>
              <button disabled="disabled">
                <svg width="32" height="32" viewBox="0 0 32 32">
                  <use xlink:href="#marcado"></use>
                </svg>
              </button>
            </div>

            <div class="posts-feed mode-grid">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="midias-txt">
      <a href="https://instagram.com/dralucianagulla" target="_blank">
        <svg width="32" height="32" viewBox="0 0 32 32">
          <use xlink:href="#instagram"></use>
        </svg>
      </a>

      <h2>Siga no
        instagram</h2>

      <a href="https://instagram.com/dralucianagulla" target="_blank">@dralucianagulla</a>
    </div>

    <div class="midias-insta">
      <?php
      $userid = "7585597329";
      $accessToken = "7585597329.1677ed0.33d04277350e42a59eab684556af09fc";
  
      function fetchData($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 20);
        $result = curl_exec($ch);
        curl_close($ch); 
        return $result;
      }
  
      $result = fetchData("https://api.instagram.com/v1/users/{$userid}/media/recent/?access_token={$accessToken}");
      $result = json_decode($result);
      
      $xx = "1"; foreach ($result->data as $post): if ($xx < 7) { ?>
      <a href="https://www.instagram.com/densita" target="_blank" class="insta-box">
        <img src="<?= $post->images->standard_resolution->url ?>" alt="Instagram Luciana Gulla" />
      </a>
      <? $xx++; } endforeach ?>
    </div>
  </div>
</section>