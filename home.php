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
  <svg data-animar class="first" width="48.357" height="56.5" viewBox="0 0 48.357 56.5">
    <use xlink:href="#marca"></use>
  </svg>

  <div class="container">
    <h1 data-animar>SUA PELE É ÚNICA E MERECE O QUE HÁ DE MELHOR.</h1>
  </div>

  <svg data-animar class="second" width="48.357" height="56.5" viewBox="0 0 48.357 56.5">
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
    <div data-animar class="dermatologia-home-txt">
      <svg width="48.357" height="56.5" viewBox="0 0 48.357 56.5">
        <use xlink:href="#marca"></use>
      </svg>

      <h2>AS PRINCIPAIS QUEIXAS DERMATOLÓGICAS</h2>
    </div>

    <a data-animar href="<?=site_url()?>/dermatologia/dermatologia-clinica/acne">
      <picture>
        <source srcset="<?=get_template_directory_URI()?>/img/webp/acne.webp" type="image/webp"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/acne.jpg" type="image/jpg"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/webp/acne@2x.webp" type="image/webp" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/acne@2x.jpg" type="image/jpg" />
        <img src="<?=get_template_directory_URI()?>/img/rsc/acne@2x.jpg" alt="Acne" />
      </picture>
      <strong>Acne na mulher adulta</strong>
    </a>

    <a data-animar href="<?=site_url()?>/dermatologia/dermatologia-clinica/melasma/">
      <picture>
        <source srcset="<?=get_template_directory_URI()?>/img/webp/melasma.webp" type="image/webp"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/melasma.jpg" type="image/jpg"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/webp/melasma@2x.webp" type="image/webp" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/melasma@2x.jpg" type="image/jpg" />
        <img src="<?=get_template_directory_URI()?>/img/rsc/melasma@2x.jpg" alt="Melasma" />
      </picture>
      <strong>Melasma</strong>
    </a>

    <a data-animar href="<?=site_url()?>/dermatologia/dermatologia-clinica/queda-de-cabelo-alopecia/">
      <picture>
        <source srcset="<?=get_template_directory_URI()?>/img/webp/cabelo.webp" type="image/webp"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/cabelo.jpg" type="image/jpg"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/webp/cabelo@2x.webp" type="image/webp" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/cabelo@2x.jpg" type="image/jpg" />
        <img src="<?=get_template_directory_URI()?>/img/rsc/cabelo@2x.jpg" alt="Queda de
cabelo" />
      </picture>
      <strong>Queda de cabelo</strong>
    </a>

    <a data-animar href="<?=site_url()?>/dermatologia/dermatologia-cosmiatrica/luz-intensa-pulsada/">
      <picture>
        <source srcset="<?=get_template_directory_URI()?>/img/webp/vasinhos.webp" type="image/webp"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/vasinhos.jpg" type="image/jpg"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/webp/vasinhos@2x.webp" type="image/webp" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/vasinhos@2x.jpg" type="image/jpg" />
        <img src="<?=get_template_directory_URI()?>/img/rsc/vasinhos@2x.jpg" alt="Vasinhos sanguíneos aparentes" />
      </picture>
      <strong>Vasinhos sanguíneos aparentes</strong>
    </a>

    <a data-animar href="<?=site_url()?>/dermatologia/dermatologia-cosmiatrica/peeling-quimico/">
      <picture>
        <source srcset="<?=get_template_directory_URI()?>/img/webp/estrias.webp" type="image/webp"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/estrias.jpg" type="image/jpg"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/webp/estrias@2x.webp" type="image/webp" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/estrias@2x.jpg" type="image/jpg" />
        <img src="<?=get_template_directory_URI()?>/img/rsc/estrias@2x.jpg" alt="Estrias" />
      </picture>
      <strong>Estrias</strong>
    </a>

    <a data-animar href="<?=site_url()?>/dermatologia/dermatologia-clinica/rosacea/">
      <picture>
        <source srcset="<?=get_template_directory_URI()?>/img/webp/rosacea.webp" type="image/webp"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/rosacea.jpg" type="image/jpg"
          media="(max-width: 600px)" />
        <source srcset="<?=get_template_directory_URI()?>/img/webp/rosacea@2x.webp" type="image/webp" />
        <source srcset="<?=get_template_directory_URI()?>/img/rsc/rosacea@2x.jpg" type="image/jpg" />
        <img src="<?=get_template_directory_URI()?>/img/rsc/rosacea@2x.jpg" alt="Rosácea" />
      </picture>
      <strong>Rosácea</strong>
    </a>
  </div>

  <svg data-object=".2" width="48.357" height="56.5" viewBox="0 0 48.357 56.5">
    <use xlink:href="#marca"></use>
  </svg>
</section>

<section class="clinica-home">
  <picture data-animar>
    <source srcset="<?=get_template_directory_URI()?>/img/webp/clinica1.webp" type="image/webp"
      media="(max-width: 600px)" />
    <source srcset="<?=get_template_directory_URI()?>/img/rsc/clinica1.jpg" type="image/jpg"
      media="(max-width: 600px)" />
    <source srcset="<?=get_template_directory_URI()?>/img/webp/clinica1@2x.webp" type="image/webp" />
    <source srcset="<?=get_template_directory_URI()?>/img/rsc/clinica1@2x.jpg" type="image/jpg" />
    <img src="<?=get_template_directory_URI()?>/img/rsc/clinica1@2x.jpg" alt="Clínica Luciana Gulla" />
  </picture>

  <picture data-animar>
    <source srcset="<?=get_template_directory_URI()?>/img/webp/clinica2.webp" type="image/webp"
      media="(max-width: 600px)" />
    <source srcset="<?=get_template_directory_URI()?>/img/rsc/clinica2.jpg" type="image/jpg"
      media="(max-width: 600px)" />
    <source srcset="<?=get_template_directory_URI()?>/img/webp/clinica2@2x.webp" type="image/webp" />
    <source srcset="<?=get_template_directory_URI()?>/img/rsc/clinica2@2x.jpg" type="image/jpg" />
    <img src="<?=get_template_directory_URI()?>/img/rsc/clinica2@2x.jpg" alt="Clínica Luciana Gulla" />
  </picture>

  <picture data-animar>
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
    <svg data-animar width="48.357" height="56.5" viewBox="0 0 48.357 56.5">
      <use xlink:href="#marca"></use>
    </svg>
    <h2 data-animar>TÉCNICAS MODERNAS E TECNOLOGIAS DE
      PONTA PARA O CUIDADO COM A SUA PELE</h2>

    <div class="tecnica-home-wrapper">
      <a data-animar href="<?=site_url()?>/dermatologia/dermatologia-cosmiatrica/toxina-botulinica/">
        <picture>
          <source srcset="<?=get_template_directory_URI()?>/img/webp/toxina.webp" type="image/webp"
            media="(max-width: 600px)" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/toxina.jpg" type="image/jpg"
            media="(max-width: 600px)" />
          <source srcset="<?=get_template_directory_URI()?>/img/webp/toxina@2x.webp" type="image/webp" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/toxina@2x.jpg" type="image/jpg" />
          <img src="<?=get_template_directory_URI()?>/img/rsc/toxina@2x.jpg" alt="Toxina Botulínica" />
        </picture>
        <strong>Toxina Botulínica</strong>
      </a>

      <a data-animar
        href="<?=site_url()?>/dermatologia/dermatologia-cosmiatrica/preenchimento-facial-com-acido-hialuronico/">
        <picture>
          <source srcset="<?=get_template_directory_URI()?>/img/webp/preenchimento.webp" type="image/webp"
            media="(max-width: 600px)" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/preenchimento.jpg" type="image/jpg"
            media="(max-width: 600px)" />
          <source srcset="<?=get_template_directory_URI()?>/img/webp/preenchimento@2x.webp" type="image/webp" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/preenchimento@2x.jpg" type="image/jpg" />
          <img src="<?=get_template_directory_URI()?>/img/rsc/preenchimento@2x.jpg"
            alt="Preenchimento com Ácido Hialurônico" />
        </picture>
        <strong>Preenchimento com Ácido Hialurônico</strong>
      </a>

      <a data-animar
        href="<?=site_url()?>/dermatologia/dermatologia-cosmiatrica/ultrassom-micro-e-macrofocado-ultraformer-iii/">
        <picture>
          <source srcset="<?=get_template_directory_URI()?>/img/webp/ultrassom.webp" type="image/webp"
            media="(max-width: 600px)" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/ultrassom.jpg" type="image/jpg"
            media="(max-width: 600px)" />
          <source srcset="<?=get_template_directory_URI()?>/img/webp/ultrassom@2x.webp" type="image/webp" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/ultrassom@2x.jpg" type="image/jpg" />
          <img src="<?=get_template_directory_URI()?>/img/rsc/ultrassom@2x.jpg"
            alt="Ultrassom Micro e Macrofocado - Ultraformer III" />
        </picture>
        <strong>Ultrassom Micro e Macrofocado - Ultraformer III</strong>
      </a>

      <a data-animar href="<?=site_url()?>/dermatologia/dermatologia-cosmiatrica/bioestimuladores-de-colageno/">
        <picture>
          <source srcset="<?=get_template_directory_URI()?>/img/webp/bioestimuladores.webp" type="image/webp"
            media="(max-width: 600px)" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/bioestimuladores.jpg" type="image/jpg"
            media="(max-width: 600px)" />
          <source srcset="<?=get_template_directory_URI()?>/img/webp/bioestimuladores@2x.webp" type="image/webp" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/bioestimuladores@2x.jpg" type="image/jpg" />
          <img src="<?=get_template_directory_URI()?>/img/rsc/bioestimuladores@2x.jpg"
            alt="Bioestimuladores de Colágeno" />
        </picture>
        <strong>Bioestimuladores de Colágeno</strong>
      </a>

      <a data-animar href="<?=site_url()?>/dermatologia/dermatologia-cosmiatrica/endymed-microagulhamento-robotico/">
        <picture>
          <source srcset="<?=get_template_directory_URI()?>/img/webp/microagulhamento.webp" type="image/webp"
            media="(max-width: 600px)" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/microagulhamento.jpg" type="image/jpg"
            media="(max-width: 600px)" />
          <source srcset="<?=get_template_directory_URI()?>/img/webp/microagulhamento@2x.webp" type="image/webp" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/microagulhamento@2x.jpg" type="image/jpg" />
          <img src="<?=get_template_directory_URI()?>/img/rsc/microagulhamento@2x.jpg"
            alt="Microagulhamento Robótico - EndyMed" />
        </picture>
        <strong>Microagulhamento Robótico - EndyMed</strong>
      </a>

      <a data-animar href="<?=site_url()?>/dermatologia/dermatologia-cosmiatrica/tratamentos-capilares/">
        <picture>
          <source srcset="<?=get_template_directory_URI()?>/img/webp/intradermoterapia.webp" type="image/webp"
            media="(max-width: 600px)" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/intradermoterapia.jpg" type="image/jpg"
            media="(max-width: 600px)" />
          <source srcset="<?=get_template_directory_URI()?>/img/webp/intradermoterapia@2x.webp" type="image/webp" />
          <source srcset="<?=get_template_directory_URI()?>/img/rsc/intradermoterapia@2x.jpg" type="image/jpg" />
          <img src="<?=get_template_directory_URI()?>/img/rsc/intradermoterapia@2x.jpg"
            alt="Intradermoterapia Capilar" />
        </picture>
        <strong>Intradermoterapia Capilar</strong>
      </a>
    </div>

    <a data-animar href="<?=site_url()?>/dermatologia-cosmiatrica" class="cta">Saiba mais</a>
  </div>

  <svg data-object=".2" width="48.357" height="56.5" viewBox="0 0 48.357 56.5">
    <use xlink:href="#marca"></use>
  </svg>
</section>

<? include 'instagram.php' ?>

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