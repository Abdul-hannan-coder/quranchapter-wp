<?php
/**
 * Theme Footer Template
 *
 * @package QuranChapter
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
  <!-- FOOTER -->
  <footer>
    <div class="support-bar">
      <div class="container">
        <span>Need help? Our support team is here MON–FRI</span>
        <a href="https://wa.me/447466484751?text=Hello%2C%20I%20would%20like%20a%20free%20consultation" target="_blank" rel="noopener">WhatsApp +44 7466 484751 →</a>
      </div>
    </div>
    <div class="footer-main container">
      <div class="footer-brand">
        <img src="<?php echo esc_url( qc_asset_url( 'logo.jpg' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        <p>Learn the Holy Quran with expert male and female tutors through flexible, personal one-to-one sessions.</p>
        <div class="footer-socials">
          <a href="#" aria-label="Facebook"><svg><use href="#i-facebook"/></svg></a>
          <a href="#" aria-label="Instagram"><svg><use href="#i-instagram"/></svg></a>
          <a class="wa-footer-link" href="https://wa.me/447466484751?text=Hello%2C%20I%20would%20like%20a%20free%20consultation" target="_blank" rel="noopener" aria-label="WhatsApp"><svg><use href="#i-whatsapp"/></svg></a>
        </div>
      </div>
      <div>
        <h4>Quick Links</h4>
        <?php
        $is_landing = is_front_page() || is_page( 'online-quran-academy' ) || is_page_template( 'page-online-quran-academy.php' );
        ?>
        <a href="<?php echo $is_landing ? '#home' : esc_url( home_url( '/' ) ); ?>">Home</a>
        <a href="<?php echo $is_landing ? '#about' : esc_url( home_url( '/about/' ) ); ?>">About Us</a>
        <a href="<?php echo $is_landing ? '#courses' : esc_url( home_url( '/course/' ) ); ?>">Courses</a>
        <a href="<?php echo $is_landing ? '#free-trial' : esc_url( home_url( '/online-quran-academy/#free-trial' ) ); ?>">Book 7-Days Free Trial</a>
        <a href="<?php echo $is_landing ? '#free-trial' : esc_url( home_url( '/online-quran-academy/#free-trial' ) ); ?>">Contact Us</a>
      </div>
      <div>
        <h4>Our Courses</h4>
        <a href="<?php echo $is_landing ? '#courses' : esc_url( home_url( '/course/#qaida' ) ); ?>">Qaida</a>
        <a href="<?php echo $is_landing ? '#courses' : esc_url( home_url( '/course/#arabic' ) ); ?>">Arabic Language</a>
        <a href="<?php echo $is_landing ? '#courses' : esc_url( home_url( '/course/#namaz' ) ); ?>">Namaz &amp; Duas</a>
        <a href="<?php echo $is_landing ? '#courses' : esc_url( home_url( '/course/#tajweed' ) ); ?>">Tajweed Rules</a>
        <a href="<?php echo $is_landing ? '#courses' : esc_url( home_url( '/course/#translation' ) ); ?>">Quran Translation</a>
      </div>
      <div>
        <h4>Get in touch</h4>
        <a href="https://wa.me/447466484751?text=Hello%2C%20I%20would%20like%20a%20free%20consultation" target="_blank" rel="noopener">WhatsApp: +44 7466 484751</a>
        <a href="mailto:official@quranchapter.com">official@quranchapter.com</a>
      </div>
    </div>
    <div class="copyright container">
      <span>© <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</span>
      <a href="#home">Back to top ↑</a>
    </div>
  </footer>

  <!-- ANIMATED WHATSAPP FLOATING BUTTON -->
  <a class="whatsapp-float-v2" href="https://wa.me/447466484751?text=Hello%2C%20I%20would%20like%20a%20free%20consultation" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
    <div class="wa-icon-circle">
      <svg viewBox="0 0 32 32" class="wa-svg-icon" aria-hidden="true">
        <path fill="currentColor" d="M16 .5C7.4.5.5 7.4.5 16c0 2.8.7 5.4 2.1 7.7L.5 31.5l8-2.1c2.2 1.2 4.7 1.9 7.5 1.9 8.6 0 15.5-6.9 15.5-15.5S24.6.5 16 .5zm0 28.4c-2.4 0-4.6-.6-6.6-1.8l-.5-.3-4.7 1.2 1.3-4.6-.3-.5c-1.3-2-2-4.4-2-6.9C3.2 9 9 3.2 16 3.2s12.8 5.8 12.8 12.8-5.7 12.9-12.8 12.9zm7-9.6c-.4-.2-2.3-1.1-2.6-1.3-.4-.1-.6-.2-.9.2-.3.4-1 1.3-1.2 1.5-.2.3-.4.3-.8.1-.4-.2-1.7-.6-3.2-2-1.2-1.1-2-2.4-2.2-2.8-.2-.4 0-.6.2-.8.2-.2.4-.4.5-.7.2-.2.2-.4.4-.6.1-.3.1-.5 0-.7-.1-.2-.9-2.1-1.2-2.9-.3-.8-.7-.7-.9-.7h-.8c-.3 0-.7.1-1.1.5-.4.4-1.5 1.5-1.5 3.6s1.5 4.2 1.8 4.5c.2.3 3 4.6 7.4 6.5 1 .4 1.9.7 2.5.9 1.1.3 2 .3 2.8.2.8-.1 2.5-1 2.8-2 .4-1 .4-1.8.3-2-.2-.2-.4-.3-.8-.5z"/>
      </svg>
    </div>
    <span class="wa-tooltip">Chat with us</span>
  </a>

<?php wp_footer(); ?>
</body>
</html>
