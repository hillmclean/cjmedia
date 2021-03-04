<?php
/**
 * Template part for displaying posts.
 *
 * @package Chelsea_Jade_Media_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>

		<div class="entry-header">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'large' ); ?>
			<?php endif; ?>

			<?php the_title(); ?>

			<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php cjmedia_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php cjmedia_posted_by(); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</div><!-- .entry-header -->

	</div><!-- .entry-content -->

</article><!-- #post-## -->
