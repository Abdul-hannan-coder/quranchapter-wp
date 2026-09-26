<?php
/**
 * Front Page Template
 *
 * @package QuranChapter
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main>
  <?php
  get_template_part( 'parts/hero' );
  get_template_part( 'parts/trust-strip' );
  get_template_part( 'parts/about' );
  get_template_part( 'parts/courses' );
  get_template_part( 'parts/benefits' );
  get_template_part( 'parts/form' );
  get_template_part( 'parts/testimonials' );
  get_template_part( 'parts/teachers' );
  get_template_part( 'parts/countries' );
  get_template_part( 'parts/faq' );
  get_template_part( 'parts/cta' );
  ?>
</main>

<?php
get_footer();
