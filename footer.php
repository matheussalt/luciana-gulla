<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<footer class="footer">
  <div class="container">
    <div class="footer-info">
      <div class="dados-footer">
        <h3 class="title">
          <svg width="48.357" height="56.5" viewBox="0 0 48.357 56.5">
            <use xlink:href="#marca"></use>
          </svg>
          Contato
        </h3>

        <h2>Fale conosco</h2>

        <ul class="dados">
          <li>
            <svg width="32" height="32" viewBox="0 0 32 32">
              <use xlink:href="#whatsapp"></use>
            </svg>
            <span>
              <a href="https://wa.me/+5516992411620" target="_blank">(16) 99241-1620 </a>
              //
              <a href="https://wa.me/+5516992411603" target="_blank"> (16) 99241-1603</a>
            </span>
          </li>

          <li>
            <svg width="32" height="32" viewBox="0 0 32 32">
              <use xlink:href="#tel"></use>
            </svg>
            <span>
              <a href="tel:1633318034" target="_blank">(16) 3331-8034 </a>
              //
              <a href="tel:163331-8048" target="_blank"> (16) 3331-8048</a>
            </span>
          </li>

          <li>
            <svg width="32" height="32" viewBox="0 0 32 32">
              <use xlink:href="#mail"></use>
            </svg>
            <span>
              <a href="mailto:contato@lucianagulla.com.br" target="_blank">contato@lucianagulla.com.br</a>
            </span>
          </li>

          <li>
            <svg width="32" height="32" viewBox="0 0 32 32">
              <use xlink:href="#pin"></use>
            </svg>
            <span>
              <a href="https://goo.gl/maps/MTaLMHFfB415vpGe6" target="_blank">RUA HUMAITÁ, 2018 - CENTRO,
                ARARAQUARA - Sp</a>
            </span>
          </li>

          <li class="social-footer">
            <a href="https://facebook.com" target="_blank">
              <svg width="32" height="32" viewBox="0 0 32 32">
                <use xlink:href="#facebook"></use>
              </svg>
            </a>

            <a href="https://instagram.com" target="_blank">
              <svg width="32" height="32" viewBox="0 0 32 32">
                <use xlink:href="#instagram"></use>
              </svg>
            </a>

            <a href="https://youtube.com" target="_blank">
              <svg width="32" height="32" viewBox="0 0 32 32">
                <use xlink:href="#youtube"></use>
              </svg>
            </a>
          </li>
        </ul>
      </div>

      <div class="logo-footer">
        <img src="<?=get_template_directory_URI()?>/img/rsc/logotipo_vertical.svg" alt="Logotipo Luciana Gulla" />
      </div>

      <? echo do_shortcode('[contact-form-7 id="5" title="Form Footer"]'); ?>
    </div>

    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3704.7316008548564!2d-48.1852085850543!3d-21.790646385590676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b8f3deec6b9daf%3A0xf47475ea27ee6d05!2sR.%20Humait%C3%A1%2C%202018%2C%20Araraquara%20-%20SP%2C%2014801-360!5e0!3m2!1spt-BR!2sbr!4v1574269888042!5m2!1spt-BR!2sbr"
      frameborder="0" style="border:0;" allowfullscreen=""></iframe>
  </div>

  <div class="rodape">
    <p>Todos os direitos reservados a Luciana Gulla. Desenvolvido por <a href="https://agenciasalt.com.br"
        target="_blank">Agência Salt.</a>
    </p>

    <a href="http://sevengestao.com.br" target="_blank">
      <img src="<?=get_template_directory_URI()?>/img/rsc/seven.png" alt="Seven gestão" />
    </a>
  </div>
</footer>

<div style="display: none;">
  <? include 'svg.php'; ?>
</div>

<script src="<?=get_template_directory_URI()?>/app/app.js" type="module"></script>

<?php wp_footer(); ?>

</body>

</html>