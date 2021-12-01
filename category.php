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
    <?php
    $category = get_category( get_query_var( 'cat' ) );
    $cat_id = $category->cat_ID;
    ?>
    <h1><?php echo single_cat_title();?></h1>
    <section class="category-post-wrapper">
        <?php
        $my_posts = get_posts( array(
            'posts_per_page'    => 10,
            'orderby'           => 'date',
            'post_type'         => 'post',
            'category'          => $cat_id,
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
</main>

<?php
get_sidebar();
get_footer();
