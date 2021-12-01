<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Abben
 */

?>

<article>
    <header class='header' style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>);">
        <div class="header__inner">
            <div class="header__inner__text">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                <div class="entry-meta">
                    <?php
                    the_date();
                    ?>
                </div>
            </div>
        </div>
    </header>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'abben' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'abben' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<div class="entry-cat-and-tags">
        <?php
        echo the_category();

        echo the_tags('<div class="post-tags" >', '', '</div>');
        ?>
	</div><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
