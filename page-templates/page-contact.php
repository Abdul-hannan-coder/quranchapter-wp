<?php
/**
 * Template Name: Contact Page
 *
 * @package QuranChapter
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

  <main>
    <!-- CONTACT HERO -->
    <section class="contact-hero" aria-label="Contact Quran Chapter Academy">
      <div class="contact-hero-bg-wrap">
        <img src="<?php echo esc_url( qc_asset_url( 'cta-courtyard.png' ) ); ?>" alt="Grand Islamic mosque courtyard illuminated with Holy Quran and serene lanterns" class="contact-hero-bg-img">
        <div class="contact-hero-overlay"></div>
      </div>
      <div class="container">
        <div class="contact-hero-content reveal">
          <span class="contact-hero-kicker">Quick and Reliable Service</span>
          <h1 class="contact-hero-title">Contact Us</h1>
          <p class="contact-hero-lead">Have any questions or need assistance? Our dedicated team is here to help you anytime. Feel free to reach out – we'd love to hear from you!</p>
          
          <!-- Action Buttons -->
          <div class="contact-hero-actions">
            <a href="<?php echo esc_url( home_url( '/course/' ) ); ?>" class="btn-contact-dark">Courses</a>
            <a href="#enroll-cta" class="btn-contact-gold">Book a Free Trial</a>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION: QUERIES INFO CARD -->
    <section class="section contact-body-section">
      <div class="container">

        <div class="contact-form-wrapper reveal" style="background:#ffffff; padding:2rem; border-radius:12px; margin-bottom:2rem; box-shadow:0 10px 30px rgba(0,0,0,0.05);">
          <h3 style="margin-top:0; margin-bottom:1rem;">Send Us a Message</h3>
          <?php echo do_shortcode( '[contact-form-7 id="a820585" title="Register Form Production"]' ); ?>
        </div>

        <div class="contact-info-card reveal">
          <h2>If you have any queries, feel free to contact our team</h2>
          <p class="info-card-desc">Our team is ready to assist you with anything you need. Reach out to us through phone, email, or WhatsApp. We aim to respond promptly and ensure your satisfaction.</p>
          
          <div class="info-values-grid">
            <div class="info-value-item">
              <span class="value-icon"><svg><use href="#i-mosque"/></svg></span>
              <div class="value-text">
                <b>Learn Online at Your Own Pace.</b>
              </div>
            </div>

            <div class="info-value-item">
              <span class="value-icon"><svg><use href="#i-globe-custom"/></svg></span>
              <div class="value-text">
                <b>Study Anytime, Anywhere</b>
                <span>Your Learning, Your Schedule.</span>
              </div>
            </div>

            <div class="info-value-item info-value-item-bottom">
              <span class="value-icon"><svg><use href="#i-alarm-clock"/></svg></span>
              <div class="value-text">
                <b>Flexible Learning for Busy Lives</b>
                <span>Learn at Your Convenience.</span>
              </div>
            </div>
          </div>
        </div>

        <!-- SECTION: 5 CONTACT CARDS -->
        <div class="contact-cards-grid reveal delay-1">
          <!-- 1: WhatsApp UK -->
          <div class="c-box">
            <div class="c-box-icon"><svg><use href="#i-whatsapp"/></svg></div>
            <h3>WhatsApp</h3>
            <a href="https://wa.me/447466484751?text=Hello%2C%20I%20would%20like%20a%20free%20consultation" target="_blank" rel="noopener">+44 7466 484751</a>
          </div>

          <!-- 2: United Kingdom -->
          <div class="c-box">
            <div class="c-box-icon"><svg><use href="#i-whatsapp"/></svg></div>
            <h3>United Kingdom</h3>
            <a href="https://wa.me/447466484751?text=Hello%2C%20I%20would%20like%20a%20free%20consultation" target="_blank" rel="noopener">+44 7466 484751</a>
          </div>

          <!-- 3: Email -->
          <div class="c-box">
            <div class="c-box-icon"><svg><use href="#i-mail"/></svg></div>
            <h3>Email</h3>
            <a href="mailto:official@quranchapter.com">official@quranchapter.com</a>
          </div>

          <!-- 4: Support Hours -->
          <div class="c-box">
            <div class="c-box-icon"><svg><use href="#i-clock"/></svg></div>
            <h3>Support Hours</h3>
            <span>Monday – Friday</span>
          </div>

          <!-- 5: Direct WhatsApp -->
          <div class="c-box">
            <div class="c-box-icon"><svg><use href="#i-whatsapp"/></svg></div>
            <h3>Free Consultation</h3>
            <a href="https://wa.me/447466484751?text=Hello%2C%20I%20would%20like%20a%20free%20consultation" target="_blank" rel="noopener">Chat on WhatsApp</a>
          </div>
        </div>
      </div>
    </section>

    <!-- BOTTOM ENROLL CTA SECTION -->
    <section class="fee-cta contact-cta-section" id="enroll-cta">
      <div class="fee-cta-bg-wrap">
        <img src="<?php echo esc_url( qc_asset_url( 'cta-quran.png' ) ); ?>" alt="Holy Quran in serene mosque" class="fee-cta-bg-img">
        <div class="fee-cta-overlay"></div>
      </div>
      <div class="container fee-cta-content reveal">
        <span class="eyebrow light"><i></i> Begin Your Spiritual Journey <i></i></span>
        <h2 class="fee-cta-title">Enroll Now to Learn the Book of Allah</h2>
        <p class="fee-cta-desc">Begin a spiritual journey with qualified Quran teachers guiding you step by step.<br>Flexible online classes, individual attention, and deep connection with the Holy Quran — from the comfort of your home.</p>
        <div class="contact-cta-actions">
          <a href="https://wa.me/447466484751?text=Hello%2C%20I%20would%20like%20a%20free%20consultation" target="_blank" rel="noopener" class="btn-fee-gold-large">
            <svg class="btn-cta-svg"><use href="#i-whatsapp"/></svg> Contact Us on WhatsApp
          </a>
        </div>
      </div>
    </section>
  </main>

<?php
get_footer();
