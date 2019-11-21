<?php
/**
 * Template Name: home
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<section class="banner">
  <svg class="first" width="48.357" height="56.5" viewBox="0 0 48.357 56.5">
    <use xlink:href="#marca"></use>
  </svg>

  <div class="container">
    <h1>Uma frase impactante sobre dermatologia</h1>
  </div>

  <svg class="second" width="48.357" height="56.5" viewBox="0 0 48.357 56.5">
    <use xlink:href="#marca"></use>
  </svg>
</section>

<section class="sobre">
  <div class="container">
    <div class="sobre-img">
      <picture data-animar>
        <source srcset="<?=get_template_directory_URI()?>/img/webp/luciana.webp" type="image/webp"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/luciana.jpg" type="image/jpg"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/webp/luciana@2x.webp" type="image/webp" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/luciana@2x.jpg" type="image/jpg" />
        <img src="<?=get_template_directory_URI()?>/img/rsc/luciana@2x.jpg" alt="DRA. LUCIANA REIS GULLA ANHESINI" />
      </picture>
    </div>

    <div class="sobre-txt">
      <h3 class="title" data-animar>
        <svg width="48.357" height="56.5" viewBox="0 0 48.357 56.5">
          <use xlink:href="#marca"></use>
        </svg>
        Sobre
      </h3>

      <h2 data-animar>DRA. LUCIANA REIS GULLA ANHESINI</h2>

      <h4 data-animar>CRM 115274 - RQE 57752</h4>

      <p data-animar>Em seus mais de 10 de anos atuação nas áreas de Dermatologia Clínica, Cirúrgica e Cosmiátrica, Dra.
        Luciana
        Gulla sempre prezou e preza até hoje pela atualização técnica, participando ativamente de congressos e meetings
        nacionais e no exterior. Dra. Luciana é Membro Titular da Sociedade Brasileira de Dermatologia (SBD) e da
        Sociedade Brasileira de Cirurgia Dermatológica (SBCD).</p>
      <blockquote cite="http://lucianagulla.com.br">
        <p data-animar>“Atender a cada paciente de forma personalizada, com o que há de mais moderno na Dermatologia, e
          sempre
          prezando pela ética, responsabilidade e humanização, é o meu grande objetivo.”</p>
      </blockquote>

      <a href="<?=site_url()?>/sobre" class="cta">Saiba mais</a>
    </div>
  </div>
</section>

<section class="dermatologia-home">
  <div class="container">
    <div class="dermatologia-home-txt">
      <svg width="48.357" height="56.5" viewBox="0 0 48.357 56.5">
        <use xlink:href="#marca"></use>
      </svg>

      <h2>AS PRINCIPAIS QUEIXAS DERMATOLÓGICAS</h2>
    </div>

    <a href="<?=site_url()?>/dermatologia-clinica/acne">
      <picture>
        <source srcset="<?=get_template_directory_URI()?>/img/webp/clinica1.webp" type="image/webp"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/clinica1.jpg" type="image/jpg"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/webp/clinica1@2x.webp" type="image/webp" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/clinica1@2x.jpg" type="image/jpg" />
        <img src="<?=get_template_directory_URI()?>/img/rsc/clinica1@2x.jpg" alt="Clínica Luciana Gulla" />
      </picture>
      <strong>Acne na mulher adulta</strong>
    </a>

    <a href="<?=site_url()?>/dermatologia-clinica/acne">
      <picture>
        <source srcset="<?=get_template_directory_URI()?>/img/webp/clinica1.webp" type="image/webp"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/clinica1.jpg" type="image/jpg"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/webp/clinica1@2x.webp" type="image/webp" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/clinica1@2x.jpg" type="image/jpg" />
        <img src="<?=get_template_directory_URI()?>/img/rsc/clinica1@2x.jpg" alt="Clínica Luciana Gulla" />
      </picture>
      <strong>Acne na mulher adulta</strong>
    </a>

    <a href="<?=site_url()?>/dermatologia-clinica/acne">
      <picture>
        <source srcset="<?=get_template_directory_URI()?>/img/webp/clinica1.webp" type="image/webp"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/clinica1.jpg" type="image/jpg"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/webp/clinica1@2x.webp" type="image/webp" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/clinica1@2x.jpg" type="image/jpg" />
        <img src="<?=get_template_directory_URI()?>/img/rsc/clinica1@2x.jpg" alt="Clínica Luciana Gulla" />
      </picture>
      <strong>Acne na mulher adulta</strong>
    </a>

    <a href="<?=site_url()?>/dermatologia-clinica/acne">
      <picture>
        <source srcset="<?=get_template_directory_URI()?>/img/webp/clinica1.webp" type="image/webp"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/clinica1.jpg" type="image/jpg"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/webp/clinica1@2x.webp" type="image/webp" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/clinica1@2x.jpg" type="image/jpg" />
        <img src="<?=get_template_directory_URI()?>/img/rsc/clinica1@2x.jpg" alt="Clínica Luciana Gulla" />
      </picture>
      <strong>Acne na mulher adulta</strong>
    </a>

    <a href="<?=site_url()?>/dermatologia-clinica/acne">
      <picture>
        <source srcset="<?=get_template_directory_URI()?>/img/webp/clinica1.webp" type="image/webp"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/clinica1.jpg" type="image/jpg"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/webp/clinica1@2x.webp" type="image/webp" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/clinica1@2x.jpg" type="image/jpg" />
        <img src="<?=get_template_directory_URI()?>/img/rsc/clinica1@2x.jpg" alt="Clínica Luciana Gulla" />
      </picture>
      <strong>Acne na mulher adulta</strong>
    </a>

    <a href="<?=site_url()?>/dermatologia-clinica/acne">
      <picture>
        <source srcset="<?=get_template_directory_URI()?>/img/webp/clinica1.webp" type="image/webp"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/clinica1.jpg" type="image/jpg"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/webp/clinica1@2x.webp" type="image/webp" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/clinica1@2x.jpg" type="image/jpg" />
        <img src="<?=get_template_directory_URI()?>/img/rsc/clinica1@2x.jpg" alt="Clínica Luciana Gulla" />
      </picture>
      <strong>Acne na mulher adulta</strong>
    </a>
  </div>

  <svg width="48.357" height="56.5" viewBox="0 0 48.357 56.5">
    <use xlink:href="#marca"></use>
  </svg>
</section>

<section class="clinica-home">
  <picture>
    <source srcset="<?=get_template_directory_URI()?>/img/webp/clinica1.webp" type="image/webp"
      media="(max-width: 600px)" />
    <source srcset="<?=get_template_directory_URI()?>/img/rsc/clinica1.jpg" type="image/jpg"
      media="(max-width: 600px)" />
    <source srcset="<?=get_template_directory_URI()?>/img/webp/clinica1@2x.webp" type="image/webp" />
    <source srcset="<?=get_template_directory_URI()?>/img/rsc/clinica1@2x.jpg" type="image/jpg" />
    <img src="<?=get_template_directory_URI()?>/img/rsc/clinica1@2x.jpg" alt="Clínica Luciana Gulla" />
  </picture>

  <picture>
    <source srcset="<?=get_template_directory_URI()?>/img/webp/clinica2.webp" type="image/webp"
      media="(max-width: 600px)" />
    <source srcset="<?=get_template_directory_URI()?>/img/rsc/clinica2.jpg" type="image/jpg"
      media="(max-width: 600px)" />
    <source srcset="<?=get_template_directory_URI()?>/img/webp/clinica2@2x.webp" type="image/webp" />
    <source srcset="<?=get_template_directory_URI()?>/img/rsc/clinica2@2x.jpg" type="image/jpg" />
    <img src="<?=get_template_directory_URI()?>/img/rsc/clinica2@2x.jpg" alt="Clínica Luciana Gulla" />
  </picture>

  <picture>
    <source srcset="<?=get_template_directory_URI()?>/img/webp/clinica3.webp" type="image/webp"
      media="(max-width: 600px)" />
    <source srcset="<?=get_template_directory_URI()?>/img/rsc/clinica3.jpg" type="image/jpg"
      media="(max-width: 600px)" />
    <source srcset="<?=get_template_directory_URI()?>/img/webp/clinica3@2x.webp" type="image/webp" />
    <source srcset="<?=get_template_directory_URI()?>/img/rsc/clinica3@2x.jpg" type="image/jpg" />
    <img src="<?=get_template_directory_URI()?>/img/rsc/clinica3@2x.jpg" alt="Clínica Luciana Gulla" />
  </picture>
</section>

<section class="tecnicas-home">
  <div class="container">
    <svg width="48.357" height="56.5" viewBox="0 0 48.357 56.5">
      <use xlink:href="#marca"></use>
    </svg>
    <h2>TÉCNICAS MODERNAS E TECNOLOGIAS DE
      PONTA PARA O CUIDADO COM A SUA PELE</h2>

    <div class="tecnica-home-wrapper">
      <a href="<?=site_url()?>/">
        <picture>
          <source srcset="<?=get_template_directory_URI()?>/img/webp/toxina.webp" type="image/webp"
            media="(max-width: 600px)" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/toxina.jpg" type="image/jpg"
            media="(max-width: 600px)" />
          <source srcset="<?=get_template_directory_URI()?>/img/webp/toxina@2x.webp" type="image/webp" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/toxina@2x.jpg" type="image/jpg" />
          <img src="<?=get_template_directory_URI()?>/img/rsc/toxina@2x.jpg" alt="Clínica Luciana Gulla" />
        </picture>
        <strong>Toxina Botulínica</strong>
      </a>

      <a href="<?=site_url()?>/">
        <picture>
          <source srcset="<?=get_template_directory_URI()?>/img/webp/toxina.webp" type="image/webp"
            media="(max-width: 600px)" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/toxina.jpg" type="image/jpg"
            media="(max-width: 600px)" />
          <source srcset="<?=get_template_directory_URI()?>/img/webp/toxina@2x.webp" type="image/webp" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/toxina@2x.jpg" type="image/jpg" />
          <img src="<?=get_template_directory_URI()?>/img/rsc/toxina@2x.jpg" alt="Clínica Luciana Gulla" />
        </picture>
        <strong>Toxina Botulínica</strong>
      </a>

      <a href="<?=site_url()?>/">
        <picture>
          <source srcset="<?=get_template_directory_URI()?>/img/webp/toxina.webp" type="image/webp"
            media="(max-width: 600px)" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/toxina.jpg" type="image/jpg"
            media="(max-width: 600px)" />
          <source srcset="<?=get_template_directory_URI()?>/img/webp/toxina@2x.webp" type="image/webp" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/toxina@2x.jpg" type="image/jpg" />
          <img src="<?=get_template_directory_URI()?>/img/rsc/toxina@2x.jpg" alt="Clínica Luciana Gulla" />
        </picture>
        <strong>Toxina Botulínica</strong>
      </a>

      <a href="<?=site_url()?>/">
        <picture>
          <source srcset="<?=get_template_directory_URI()?>/img/webp/toxina.webp" type="image/webp"
            media="(max-width: 600px)" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/toxina.jpg" type="image/jpg"
            media="(max-width: 600px)" />
          <source srcset="<?=get_template_directory_URI()?>/img/webp/toxina@2x.webp" type="image/webp" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/toxina@2x.jpg" type="image/jpg" />
          <img src="<?=get_template_directory_URI()?>/img/rsc/toxina@2x.jpg" alt="Clínica Luciana Gulla" />
        </picture>
        <strong>Toxina Botulínica</strong>
      </a>

      <a href="<?=site_url()?>/">
        <picture>
          <source srcset="<?=get_template_directory_URI()?>/img/webp/toxina.webp" type="image/webp"
            media="(max-width: 600px)" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/toxina.jpg" type="image/jpg"
            media="(max-width: 600px)" />
          <source srcset="<?=get_template_directory_URI()?>/img/webp/toxina@2x.webp" type="image/webp" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/toxina@2x.jpg" type="image/jpg" />
          <img src="<?=get_template_directory_URI()?>/img/rsc/toxina@2x.jpg" alt="Clínica Luciana Gulla" />
        </picture>
        <strong>Toxina Botulínica</strong>
      </a>

      <a href="<?=site_url()?>/">
        <picture>
          <source srcset="<?=get_template_directory_URI()?>/img/webp/toxina.webp" type="image/webp"
            media="(max-width: 600px)" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/toxina.jpg" type="image/jpg"
            media="(max-width: 600px)" />
          <source srcset="<?=get_template_directory_URI()?>/img/webp/toxina@2x.webp" type="image/webp" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/toxina@2x.jpg" type="image/jpg" />
          <img src="<?=get_template_directory_URI()?>/img/rsc/toxina@2x.jpg" alt="Clínica Luciana Gulla" />
        </picture>
        <strong>Toxina Botulínica</strong>
      </a>
    </div>

    <a href="<?=site_url()?>/dermatologia-cosmiatrica" class="cta">Saiba mais</a>
  </div>

  <svg width="48.357" height="56.5" viewBox="0 0 48.357 56.5">
    <use xlink:href="#marca"></use>
  </svg>
</section>

<section class="midias-section">
  <div class="container">
    <div class="midias-cel"></div>

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
      $userid = "350695077";
      $accessToken = "350695077.1677ed0.b78d7ef217054f6c9fe7a6bcd2e1eb9c";
  
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

<section class="estetica-home">
  <a href="<?=site_url()?>/estetica">
    <picture>
      <source srcset="<?=get_template_directory_URI()?>/img/webp/facial.webp" type="image/webp"
        media="(max-width: 600px)" />
      <source srcset="<?=get_template_directory_URI()?>/img/rsc/facial.jpg" type="image/jpg"
        media="(max-width: 600px)" />
      <source srcset="<?=get_template_directory_URI()?>/img/webp/facial@2x.webp" type="image/webp" />
      <source srcset="<?=get_template_directory_URI()?>/img/rsc/facial@2x.jpg" type="image/jpg" />
      <img src="<?=get_template_directory_URI()?>/img/rsc/facial@2x.jpg" alt="Estética facial" />
    </picture>

    <h3>
      <svg width="48.357" height="56.5" viewBox="0 0 48.357 56.5">
        <use xlink:href="#marca"></use>
      </svg>
      Estética Corporal
    </h3>
  </a>

  <a href="<?=site_url()?>/estetica">
    <picture>
      <source srcset="<?=get_template_directory_URI()?>/img/webp/corporal.webp" type="image/webp"
        media="(max-width: 600px)" />
      <source srcset="<?=get_template_directory_URI()?>/img/rsc/corporal.jpg" type="image/jpg"
        media="(max-width: 600px)" />
      <source srcset="<?=get_template_directory_URI()?>/img/webp/corporal@2x.webp" type="image/webp" />
      <source srcset="<?=get_template_directory_URI()?>/img/rsc/corporal@2x.jpg" type="image/jpg" />
      <img src="<?=get_template_directory_URI()?>/img/rsc/corporal@2x.jpg" alt="Estética corporal" />
    </picture>

    <h3>
      <svg width="48.357" height="56.5" viewBox="0 0 48.357 56.5">
        <use xlink:href="#marca"></use>
      </svg>
      Estética Facial
    </h3>
  </a>
</section>

<?php get_footer();