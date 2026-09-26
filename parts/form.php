<?php
/**
 * Template Part: Free Trial Form Section
 *
 * @package QuranChapter
 */
?>
<!-- FORM SECTION: BOOK 7-DAYS FREE TRIAL -->
<section class="section form-section" id="free-trial">
  <div class="container">
    <div class="form-card-wrap reveal">
      <div class="form-header text-center">
        <span class="eyebrow light"><i></i> Start Your Journey <i></i></span>
        <h2>Book Your <em>7-Days Free Trial</em></h2>
        <p>Experience personalized one-on-one Quran learning with qualified teachers. Fill out the registration form below to start your free 7 days trial.</p>
      </div>

      <div class="trial-form-container">
        <?php
        $cf7_output = do_shortcode( '[contact-form-7 id="a820585" title="Register Form Production"]' );
        if ( ! empty( trim( $cf7_output ) ) && '[contact-form-7 id="a820585" title="Register Form Production"]' !== trim( $cf7_output ) ) {
          echo $cf7_output;
        } else {
          ?>
          <form id="trialRegistrationForm" class="quran-contact-form wpcf7-form" action="#" method="post">
            <div class="form-group">
              <label>Your Name</label>
              <input type="text" name="text-595" class="quran-input full-named" placeholder="Enter Your Name" required>
            </div>
            <div class="form-group">
              <label>Your Email</label>
              <input type="email" name="email-743" class="quran-input user-email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
              <label>Your WhatsApp Number</label>
              <input type="tel" name="tel-737" class="quran-input user-phone" placeholder="Enter your WhatsApp number" required>
            </div>
            <div class="form-group">
              <label>Your Message / Details</label>
              <textarea name="textarea-8" class="quran-input details" rows="4" placeholder="Write your message..."></textarea>
            </div>
            <div class="form-submit-row">
              <input type="submit" value="Send Message / Book Free Trial" class="quran-submit wpcf7-submit">
            </div>
          </form>
          <?php
        }
        ?>
      </div>

      <div class="form-wa-alt">
        <span>Prefer quick registration or consultation on WhatsApp?</span>
        <a href="https://wa.me/447466484751?text=Hello%2C%20I%20would%20like%20to%20Book%20a%207-Days%20Free%20Trial" target="_blank" rel="noopener" class="wa-alt-link">
          <svg><use href="#i-whatsapp"/></svg> Free Consultation on WhatsApp
        </a>
      </div>
    </div>
  </div>
</section>
