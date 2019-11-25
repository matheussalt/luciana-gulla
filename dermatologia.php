<?php
/**
 * Template Name: servicos
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<section class="dermatologia">
  <div class="container">
    <?php
    $args = array(
        'post_parent' => $post->ID,
        'post_type' => 'page',
        'orderby' => 'menu_order'
    );

    $child_query = new WP_Query( $args );
    ?>

    <?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>
    <a class="dermato-item" href="<?=the_permalink()?>">
      <picture>
        <img src="<?=catch_that_image(2)?>" alt="<?=the_title()?>" />
      </picture>
      <h2><?=the_title()?></h2>
    </a>
    <?php endwhile; ?>
  </div>

  <svg data-object=".2" width="48.357" height="56.5" viewBox="0 0 48.357 56.5">
    <use xlink:href="#marca"></use>
  </svg>
</section>

<?php get_footer();