<?php
/**
 *    The template for displaying the room gallery content.
 *
 * @package    WordPress
 * @subpackage illdy
 */

$jumbotron_single_image  = get_theme_mod( 'illdy_jumbotron_enable_featured_image', true );

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post' ); ?>>
	<h2 class="blog-post-title"><?php the_title(); ?></h2>
	<?php if ( has_post_thumbnail() && $jumbotron_single_image != true ) { ?>
		<div class="blog-post-image">
			<?php the_post_thumbnail( 'illdy-blog-list' ); ?>
		</div><!--/.blog-post-image-->
	<?php } ?>

	<div class="blog-post-entry markup-format">
		<h2><?php the_field('promo_header'); ?> <small><?php the_field('promo_subheader'); ?></small></h2>

		<div class="slick-photo-gallery">
			<div><div style="height: 450px; background: url(<?php the_field('slider_image_1'); ?>) center center; background-size: cover;"></div></div>
		</div>

		<?php the_field('description'); ?>

		<a href="/?p=<?php the_field('cta_button_link'); ?>" class="blog-post-button"><?php the_field('cta_button_text'); ?></a>
	</div><!--/.blog-post-entry.markup-format-->
	<?php
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;
	?>
</article><!--/#post-<?php the_ID(); ?>.blog-post-->