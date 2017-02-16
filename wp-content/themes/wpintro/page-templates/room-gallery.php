<?php
/**
 *	Template name: Room Gallery
 *
 *	The template for displaying Custom Page Template: Room Gallery.
 *
 *	@package WordPress
 *	@subpackage illdy
 */
function wp_intro_room_gallery_scripts() {
	wp_register_style(
		'slick-css',
		'//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css'
	);
	wp_enqueue_style( 'slick-css' );
	wp_register_script(
        'slick',
        '//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js',
        array( 'jquery' )
    );
    wp_register_script( 
        'room-gallery-view',
        get_theme_file_uri( '/js/page-templates/room-gallery.js' ),
        array( 'jquery', 'slick' )
    );
    wp_enqueue_script( 'slick' );
    wp_enqueue_script( 'room-gallery-view' );
}
add_action( 'wp_enqueue_scripts', 'wp_intro_room_gallery_scripts' );

?>
<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<section id="blog">
				<?php
				if( have_posts() ):
					while( have_posts() ):
						the_post();
						get_template_part( 'template-parts/content-room', 'page' );
					endwhile;
				endif;
				?>
			</section><!--/#blog-->
		</div><!--/.col-sm-12-->
	</div><!--/.row-->
</div><!--/.container-->
<?php get_footer(); ?>