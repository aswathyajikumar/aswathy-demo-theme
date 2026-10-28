<?php
/**
 * Main template file for Aswathy Demo Theme.
 *
 * @package Aswathy_Demo_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main class="site-main">
    <h1><?php bloginfo( 'name' ); ?></h1>
    <p><?php bloginfo( 'description' ); ?></p>

    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class( 'post-card' ); ?>>
                <h2>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <p><?php echo esc_html( get_the_date() ); ?></p>
                <?php the_excerpt(); ?>
            </article>
        <?php endwhile; ?>

        <?php the_posts_pagination(); ?>
    <?php else : ?>
        <p>No posts found. Add a post in the WordPress dashboard to see it here.</p>
    <?php endif; ?>
</main>

<?php
get_footer();
