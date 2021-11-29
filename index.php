<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Abben
 */

get_header();
?>

<main>

    <section class="last-article">

        <?php
        $my_posts = get_posts( array(
            'posts_per_page' => 8,
            'orderby' => 'date',
            'post_type' => 'post',
        ) );

        foreach($my_posts as $post){
            setup_postdata( $post );
            ?>

                <div class="article-card">
                    <a href="<?php echo get_permalink(); ?>">
                    <div class="card__img-wrapper">
                        <?php echo get_the_post_thumbnail() ?>
                    </div>
                    <h4 class="article-card__h4"><?php the_title(); ?></h4>
                    <?php the_excerpt(); ?>
                    </a>
                    <div class="card__data-wrapper">
                        <span class="card__date"><?php echo get_the_date(); ?></span>
                    </div>
                </div>
<!--            </a>-->

            <?
        }

        wp_reset_postdata();
        ?>

    </section>

    <section class="second-index-block">
        <div class="categories-list">
            <?php
            $categories = get_categories( [
                'taxonomy' => 'category',
                'orderby'  => 'count'
            ] );

            if( $categories ) {
                foreach ($categories as $cat) { ?>
                    <a href="<?php echo get_category_link( $cat->term_id ); ?>" class="categories-list__link">
                        <div class="categories-list__item">
                            <?php echo $cat->name; ?>
                            <div class="categories-list__item__count">
                                <?php echo $cat->count; ?>
                            </div>
                        </div>
                    </a>
                <?php
                }
            }
            ?>
        </div>
        <div class="tags">
            <?php
            $tags = get_tags();

            foreach ($tags as $tag){
                ?>
                <a href="<?php echo get_tag_link( $tag->term_id ); ?>" class="tags-list__link">
                    <div class="tags__item">
                        #<?php echo $tag->name; ?>
                    </div>
                </a>
                <?php

            }
            ?>
        </div>
    </section>


</main>

<?php
get_sidebar();
get_footer();
