<?php
/**
 * Template Name: servicos interna
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */

$GLOBALS["link2"] = get_the_permalink(wp_get_post_parent_id(get_the_ID()));
$GLOBALS["nome2"] = get_the_title(wp_get_post_parent_id(get_the_ID()));
get_header(); ?>

<?php
$pai = wp_get_post_parent_id(get_the_ID());

if(has_children())
{
$mypages2 = get_pages( array( 'child_of' => get_the_ID(), 'sort_order' => 'desc' ) );
foreach( $mypages2 as $page2 ) { $linkpage = get_page_link( $page2->ID ); } ?>

<script>
window.open('<?=$linkpage?>', '_parent');
</script>
<? } else { ?>

<section class="dermatologia-inside">
  <div class="container">
    <aside class="dermatologia-menu">
      <svg width="48.357" height="56.5" viewBox="0 0 48.357 56.5">
        <use xlink:href="#marca"></use>
      </svg>
      <h2>
        <? $parent_title = get_the_title($post->post_parent);
					echo $parent_title; ?>
      </h2>

      <div class="dermatologia-links">
        <?php $mypages = get_pages( array( 'child_of' => $pai, 'sort_order' => 'asc' ) ); 
        foreach( $mypages as $page ) { ?>
        <a href="<?php echo get_page_link( $page->ID ); ?>" class="<? if (get_the_ID() == $page->ID) { echo "
          active";}?>">
          <?php echo $page->post_title; ?>
        </a>
        <? } ?>
      </div>
    </aside>

    <div class="dermatologia-content">
      <h2><?=the_title()?></h2>

      <?php /* The loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>
      <img class="dermatologia-img-destaque" src="<?=catch_that_image(1)?>" alt="<?=the_title()?>" />
      <?=the_content()?>
      <?php endwhile; ?>
    </div>
  </div>

  <svg data-object=".2" width="48.357" height="56.5" viewBox="0 0 48.357 56.5">
    <use xlink:href="#marca"></use>
  </svg>
</section>

<? } ?>



<?php get_footer();