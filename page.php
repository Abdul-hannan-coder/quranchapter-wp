<?php
/**
 * Generic Page Fallback Template
 *
 * @package QuranChapter
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

  <main>
    <section class="section page-default-content" style="padding: 4rem 0;">
      <div class="container">
        <?php
        if ( have_posts() ) :
          while ( have_posts() ) :
            the_post();
            ?>
            <header class="section-heading reveal">
              <h1><?php the_title(); ?></h1>
            </header>
            <div class="entry-content reveal delay-1" style="margin-top: 2rem; line-height: 1.8;">
              <?php the_content(); ?>
            </div>
            <?php
          endwhile;
        else :
          ?>
          <p><?php esc_html_e( 'No content found.', 'quranchapter' ); ?></p>
          <?php
        endif;
        ?>
      </div>
    </section>
  </main>

<?php
get_footer();
