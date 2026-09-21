<?php
/**
 * 404 Error Page Template
 *
 * @package QuranChapter
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

  <main>
    <section class="section 404-section" style="padding: 6rem 0; text-align: center; background: var(--surface, #faf7f2);">
      <div class="container reveal">
        <span class="eyebrow centered" style="justify-content: center; display: inline-flex;"><i></i> 404 ERROR <i></i></span>
        <h1 style="font-family: 'Cormorant Garamond', serif; font-size: 3.5rem; margin: 1rem 0; color: #1c2b26;">Page Not Found</h1>
        <p class="lead" style="max-width: 600px; margin: 0 auto 2rem; color: #666;">
          The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-gold">
            Return to Homepage <svg class="nav-cta-arrow" viewBox="0 0 24 24" style="width:16px; height:16px;"><path d="M7 17L17 7M17 7H7M17 7V17" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline-dark">
            Contact Support
          </a>
        </div>
      </div>
    </section>
  </main>

<?php
get_footer();
