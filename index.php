<?php
/**
 * Main Template Fallback File
 *
 * @package QuranChapter
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

  <main>
    <section class="section index-default-content" style="padding: 4rem 0;">
      <div class="container">
        <?php
        if ( have_posts() ) :
          while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'reveal' ); ?> style="margin-bottom: 3rem;">
              <header class="entry-header">
                <h2><a href="<?php the_permalink(); ?>" style="color: inherit; text-decoration: none;"><?php the_title(); ?></a></h2>
              </header>
              <div class="entry-content" style="margin-top: 1rem; line-height: 1.8;">
                <?php the_excerpt(); ?>
              </div>
            </article>
            <?php
          endwhile;
          the_posts_navigation();
        else :
          ?>
          <p><?php esc_html_e( 'No posts found.', 'quranchapter' ); ?></p>
          <?php
        endif;
        ?>
      </div>
    </section>
  </main>

<?php
get_footer();
