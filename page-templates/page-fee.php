<?php
/**
 * Template Name: Fee Page
 *
 * @package QuranChapter
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

  <main>
    <!-- HERO SECTION -->
    <section class="fee-hero" aria-label="Quran Chapter Academy Fee Plans">
      <div class="fee-hero-bg-wrap">
        <img src="<?php echo esc_url( qc_asset_url( 'fee-hero.jpg' ) ); ?>" alt="Holy Quran study in peaceful ambient light" class="fee-hero-bg-img">
        <div class="fee-hero-overlay"></div>
      </div>
      <div class="container fee-hero-content reveal">
        <span class="fee-hero-kicker">Quick and Reliable Service</span>
        <h1 class="fee-hero-title">Fee</h1>
        <p class="fee-hero-lead">We offer affordable monthly fees to make Quran learning accessible for everyone. No hidden charges simple and transparent pricing. Choose a plan that fits your schedule and start learning today.</p>

        <!-- Action Buttons -->
        <div class="fee-hero-actions">
          <a href="<?php echo esc_url( home_url( '/course/' ) ); ?>" class="btn-fee-dark">Courses</a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-fee-gold">Contact Us</a>
        </div>
      </div>
    </section>

    <!-- OUR COURSE PLANS SECTION -->
    <section class="section fee-plans-section" id="plans">
      <div class="container">
        <div class="plans-widget fee-widget reveal">
          <!-- Country Tabs with Gold Active Tab -->
          <div class="plans-tabs fee-tabs" role="tablist">
            <button class="plan-tab fee-tab active" data-country="uk" role="tab" aria-selected="true">
              <svg class="tab-icon"><use href="#i-globe"/></svg>
              <span>United Kingdom</span>
            </button>
            <button class="plan-tab fee-tab" data-country="usa" role="tab" aria-selected="false">
              <svg class="tab-icon"><use href="#i-globe"/></svg>
              <span>USA</span>
            </button>
            <button class="plan-tab fee-tab" data-country="canada" role="tab" aria-selected="false">
              <svg class="tab-icon"><use href="#i-globe"/></svg>
              <span>Canada</span>
            </button>
            <button class="plan-tab fee-tab" data-country="australia" role="tab" aria-selected="false">
              <svg class="tab-icon"><use href="#i-globe"/></svg>
              <span>Australia</span>
            </button>
          </div>

          <!-- Pricing Table Panels -->
          <div class="plans-panel fee-panel">
            <!-- United Kingdom -->
            <div class="plan-content active" id="plan-uk">
              <h3 class="plan-country-name">United Kingdom</h3>
              <h4 class="plan-country-rate">Monthly (UK Pound)</h4>
              <div class="table-responsive">
                <table class="plan-table">
                  <thead>
                    <tr>
                      <th>Days</th>
                      <th>Duration/Min</th>
                      <th>Classes/Mon</th>
                      <th>1st Student</th>
                      <th>2nd Student</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr><td>3</td><td>30</td><td>12</td><td><b>30£</b></td><td><b>25£</b></td></tr>
                    <tr><td>6</td><td>30</td><td>24</td><td><b>40£</b></td><td><b>35£</b></td></tr>
                    <tr><td>SAT/SUN</td><td>30</td><td>8</td><td><b>20£</b></td><td><b>15£</b></td></tr>
                    <tr><td>SAT/SUN</td><td>45</td><td>8</td><td><b>25£</b></td><td><b>20£</b></td></tr>
                  </tbody>
                </table>
              </div>
            </div>

            <!-- USA -->
            <div class="plan-content" id="plan-usa">
              <h3 class="plan-country-name">United States of America</h3>
              <h4 class="plan-country-rate">Monthly (US$)</h4>
              <div class="table-responsive">
                <table class="plan-table">
                  <thead>
                    <tr>
                      <th>Days</th>
                      <th>Duration/Min</th>
                      <th>Classes/Mon</th>
                      <th>1st Student</th>
                      <th>2nd Student</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr><td>3</td><td>30</td><td>12</td><td><b>35$</b></td><td><b>30$</b></td></tr>
                    <tr><td>5</td><td>30</td><td>24</td><td><b>50$</b></td><td><b>45$</b></td></tr>
                    <tr><td>SAT/SUN</td><td>30</td><td>8</td><td><b>25$</b></td><td><b>20$</b></td></tr>
                    <tr><td>SAT/SUN</td><td>45</td><td>8</td><td><b>30$</b></td><td><b>25$</b></td></tr>
                  </tbody>
                </table>
              </div>
            </div>

            <!-- Canada -->
            <div class="plan-content" id="plan-canada">
              <h3 class="plan-country-name">Canada</h3>
              <h4 class="plan-country-rate">Monthly (CAN$)</h4>
              <div class="table-responsive">
                <table class="plan-table">
                  <thead>
                    <tr>
                      <th>Days</th>
                      <th>Duration/Min</th>
                      <th>Classes/Mon</th>
                      <th>1st Student</th>
                      <th>2nd Student</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr><td>3</td><td>30</td><td>12</td><td><b>50$</b></td><td><b>45$</b></td></tr>
                    <tr><td>5</td><td>30</td><td>24</td><td><b>75$</b></td><td><b>70$</b></td></tr>
                    <tr><td>SAT/SUN</td><td>30</td><td>8</td><td><b>35$</b></td><td><b>30$</b></td></tr>
                    <tr><td>SAT/SUN</td><td>45</td><td>8</td><td><b>40$</b></td><td><b>40$</b></td></tr>
                  </tbody>
                </table>
              </div>
            </div>

            <!-- Australia -->
            <div class="plan-content" id="plan-australia">
              <h3 class="plan-country-name">Australia</h3>
              <h4 class="plan-country-rate">Monthly (AUD$)</h4>
              <div class="table-responsive">
                <table class="plan-table">
                  <thead>
                    <tr>
                      <th>Days</th>
                      <th>Duration/Min</th>
                      <th>Classes/Mon</th>
                      <th>1st Student</th>
                      <th>2nd Student</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr><td>3</td><td>30</td><td>12</td><td><b>55$</b></td><td><b>50$</b></td></tr>
                    <tr><td>6</td><td>30</td><td>24</td><td><b>80$</b></td><td><b>75$</b></td></tr>
                    <tr><td>SAT/SUN</td><td>30</td><td>8</td><td><b>40$</b></td><td><b>35$</b></td></tr>
                    <tr><td>SAT/SUN</td><td>45</td><td>8</td><td><b>50$</b></td><td><b>45$</b></td></tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ENROLL CTA SECTION -->
    <section class="fee-cta" id="contact">
      <div class="fee-cta-bg-wrap">
        <img src="<?php echo esc_url( qc_asset_url( 'cta-quran.png' ) ); ?>" alt="Holy Quran in serene mosque" class="fee-cta-bg-img">
        <div class="fee-cta-overlay"></div>
      </div>
      <div class="container fee-cta-content reveal">
        <h2 class="fee-cta-title">Enroll Now to Learn the Book of Allah</h2>
        <p class="fee-cta-desc">Begin a spiritual journey with qualified Quran teachers guiding you step by step.<br>Flexible online classes, individual attention, and deep connection with the Holy Quran — from the comfort of your home.</p>
        <div class="fee-cta-btn-wrap">
          <a href="https://wa.me/447466484751?text=Hello%2C%20I%20would%20like%20a%20free%20consultation" target="_blank" rel="noopener" class="btn-fee-gold-large">Contact Us on WhatsApp</a>
        </div>
      </div>
    </section>
  </main>

<?php
get_footer();
