<?php
/**
 * Template Name: About Page
 *
 * @package QuranChapter
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

  <main>
    <!-- ABOUT HERO SECTION -->
    <section class="about-hero" aria-label="About Quran Chapter Academy">
      <div class="container about-hero-grid">
        <div class="about-hero-content reveal">
          <span class="about-hero-kicker">Quick and Reliable Service</span>
          <h1>Spreading the Light of the<br><em>Quran Worldwide</em></h1>
          <p class="about-hero-lead">Dedicated to teaching the Quran with proper Tajweed, understanding, and sincerity. We aim to connect hearts with the divine message of the Quran. Our qualified tutors ensure every lesson is clear, meaningful, and spiritually uplifting.</p>
          <div class="about-hero-actions">
            <a class="btn btn-gold" href="#contact">Start Free Trial <svg><use href="#i-arrow"/></svg></a>
            <a class="btn btn-outline-dark" href="#plans">Explore Plans <svg><use href="#i-arrow"/></svg></a>
          </div>
          <div class="about-hero-stats-mini">
            <div><b>15+</b><span>Years Teaching Excellence</span></div>
            <div class="divider"></div>
            <div><b>100%</b><span>One-to-One Attention</span></div>
            <div class="divider"></div>
            <div><b>Since 2015</b><span>Operating in the World</span></div>
          </div>
        </div>

        <div class="about-hero-visual reveal delay-1">
          <div class="about-hero-frame">
            <img src="<?php echo esc_url( qc_asset_url( 'about-hero.jpg' ) ); ?>" alt="Holy Quran resting on wooden rehal stand in a serene Islamic sanctuary">
            <div class="about-hero-badge">
              <span class="badge-icon"><svg><use href="#i-book"/></svg></span>
              <div class="badge-text">
                <b>Since 2015</b>
                <small>Operating Worldwide</small>
              </div>
            </div>
            <div class="about-hero-quote-card">
              <p>“The best of you are those who learn the Quran and teach it.”</p>
              <small>— Prophet Muhammad ﷺ</small>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION: WHO WE ARE -->
    <section class="section about-who" id="who-we-are">
      <div class="container about-who-grid">
        <div class="about-who-media reveal">
          <div class="who-img-wrap">
            <img src="<?php echo esc_url( qc_asset_url( 'online-teacher.png' ) ); ?>" alt="Quran tutor conducting live one-on-one session">
          </div>
          <div class="who-experience-pill">
            <span class="pill-number">10+</span>
            <div>
              <b>Years Excellence</b>
              <small>Certified Quran Scholars</small>
            </div>
          </div>
        </div>
        <div class="about-who-copy reveal delay-1">
          <span class="eyebrow"><i></i> Who we are <i></i></span>
          <h2>Welcome to <em>Quran Chapter Academy.</em></h2>
          <p class="lead">Your trusted platform for personalized online Quran education. Experience tailored one-on-one classes with 10+ years of teaching excellence. Our expert instructors deliver authentic Quranic insights.</p>
          <p>Enjoy a seamless, modern online learning environment. We blend traditional wisdom with innovative technology. Elevate your spiritual journey with us today. And easier the registration process visitor will more comfortable to enroll.</p>
          
          <div class="who-feature-box">
            <div class="who-feature-item">
              <span class="feature-check"><svg><use href="#i-check"/></svg></span>
              <div>
                <h4>Learn Online at Your Own Pace</h4>
                <p>Trusted platform for personalized online Quran education with over 15 years of teaching excellence.</p>
              </div>
            </div>
            <div class="who-feature-item">
              <span class="feature-check"><svg><use href="#i-check"/></svg></span>
              <div>
                <h4>Operating Globally Since 2015</h4>
                <p>Guiding students across the UK, USA, Canada, Australia and beyond in comfortable home settings.</p>
              </div>
            </div>
          </div>

          <a class="btn btn-dark" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Schedule Free Consultation <span>→</span></a>
        </div>
      </div>
    </section>

    <!-- SECTION: WHY CHOOSE US -->
    <section class="section benefits" id="why-us">
      <div class="container">
        <div class="section-heading centered reveal">
          <span class="eyebrow"><i></i> Why Choose Us <i></i></span>
          <h2>Why Choose <em>Quran Chapter Academy</em></h2>
          <p>Learn the Quran with certified teachers in a structured and peaceful online environment. Flexible timings, personalized attention, and a strong focus on confident recitation.</p>
        </div>
        <div class="benefit-grid">
          <!-- 1: Expert Quran Tutor -->
          <article class="benefit-card reveal">
            <span class="benefit-icon"><svg><use href="#i-book"/></svg></span>
            <b>01</b>
            <h3>Expert Quran Tutor</h3>
            <p>All the classes of online Quran teaching are conducted by well qualified Islamic scholars and expert Quran tutors who will teach you the recitation of Quran as per Arabic phonetics.</p>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Enroll with Expert →</a>
          </article>
          <!-- 2: We Value Our Students -->
          <article class="benefit-card reveal delay-1">
            <span class="benefit-icon"><svg><use href="#i-student"/></svg></span>
            <b>02</b>
            <h3>We Value Our Students</h3>
            <p>All the classes of online Quran teaching are conducted by well qualified Islamic scholars and expert Quran tutors who will teach you the recitation of Quran as per Arabic phonetics.</p>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Our Student Care →</a>
          </article>
          <!-- 3: Flexible Timings -->
          <article class="benefit-card reveal delay-2">
            <span class="benefit-icon"><svg><use href="#i-clock"/></svg></span>
            <b>03</b>
            <h3>Flexible Timings</h3>
            <p>All the classes of online Quran teaching are conducted by well qualified Islamic scholars and expert Quran tutors who will teach you the recitation of Quran as per Arabic phonetics.</p>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Choose Your Hours →</a>
          </article>
          <!-- 4: Male & Female Teachers -->
          <article class="benefit-card reveal delay-3">
            <span class="benefit-icon"><svg><use href="#i-users"/></svg></span>
            <b>04</b>
            <h3>Male &amp; Female Teachers</h3>
            <p>We have many well qualified and expert male and female Quran tutors and as per the teachings of Sharia we offer separate teachers for male and females accordingly.</p>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Select Your Tutor →</a>
          </article>
        </div>
      </div>
    </section>

    <!-- SECTION: ACHIEVEMENTS & MILESTONES -->
    <section class="section milestones" id="milestones">
      <div class="container">
        <div class="section-heading centered reveal">
          <span class="eyebrow light"><i></i> Alhamdulillah We Have Reached Over <i></i></span>
          <h2 class="text-white">Connecting Hearts <em>Through the Quran</em></h2>
          <p class="text-light-muted">From all around the world, hearts are connecting through the Quran. Your trust and support fuel our mission every day. May Allah accept this journey and guide us all to His light.</p>
        </div>

        <div class="milestones-grid">
          <!-- Card 1 -->
          <div class="milestone-card reveal">
            <div class="milestone-icon-wrap">
              <svg><use href="#i-users"/></svg>
            </div>
            <div class="milestone-counter">150+</div>
            <h3>Active Students</h3>
            <p>Students from across continents engaged in daily recitation, Noorani Qaida, and advanced Tajweed lessons under dedicated guidance.</p>
          </div>

          <!-- Card 2 -->
          <div class="milestone-card featured reveal delay-1">
            <div class="milestone-icon-wrap">
              <svg><use href="#i-star"/></svg>
            </div>
            <div class="milestone-counter">4.5</div>
            <h3>Top Ratings On Trustpilot</h3>
            <p>Our students appreciate the quality, sincerity, and dedication we offer. Your feedback motivates us to continue serving with excellence.</p>
            <div class="stars-gold">★★★★★</div>
          </div>

          <!-- Card 3 -->
          <div class="milestone-card reveal delay-2">
            <div class="milestone-icon-wrap">
              <svg><use href="#i-award"/></svg>
            </div>
            <div class="milestone-counter">25+</div>
            <h3>Hafiz-e-Quran</h3>
            <p>Dedicated teachers and structured lessons make it possible. Each Hafiz is a shining light of the Quran in their community. Join us and become part of a growing legacy of memorization.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION: OUR COURSE PLANS -->
    <section class="section course-plans" id="plans">
      <div class="container">
        <div class="section-heading centered reveal">
          <span class="eyebrow"><i></i> Our Course Plans <i></i></span>
          <h2>Invest in Knowledge That Brings You Closer to the Quran</h2>
          <p>Flexible, affordable pricing designed to help you learn Arabic with ease — from beginner to advanced levels.</p>
        </div>
        <div class="plans-widget reveal delay-1">
          <div class="plans-tabs" role="tablist">
            <button class="plan-tab active" data-country="uk" role="tab" aria-selected="true">
              <svg class="tab-icon"><use href="#i-globe"/></svg>
              <span>United Kingdom</span>
            </button>
            <button class="plan-tab" data-country="usa" role="tab" aria-selected="false">
              <svg class="tab-icon"><use href="#i-globe"/></svg>
              <span>USA</span>
            </button>
            <button class="plan-tab" data-country="canada" role="tab" aria-selected="false">
              <svg class="tab-icon"><use href="#i-globe"/></svg>
              <span>Canada</span>
            </button>
            <button class="plan-tab" data-country="australia" role="tab" aria-selected="false">
              <svg class="tab-icon"><use href="#i-globe"/></svg>
              <span>Australia</span>
            </button>
          </div>
          <div class="plans-panel">
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
            <div class="plan-enroll-bar">
              <span>Enroll today and start your journey with a free trial session.</span>
              <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-gold btn-plan-enroll">Enroll Now <svg><use href="#i-arrow"/></svg></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION: ENROLL NOW CTA & CONTACT -->
    <section class="cta" id="contact">
      <div class="cta-slides">
        <img class="cta-bg active" src="<?php echo esc_url( qc_asset_url( 'cta-quran.png' ) ); ?>" alt="Open Quran inside a peaceful mosque">
        <img class="cta-bg" src="<?php echo esc_url( qc_asset_url( 'cta-family.png' ) ); ?>" alt="Family preparing for an online Quran lesson">
        <img class="cta-bg" src="<?php echo esc_url( qc_asset_url( 'cta-courtyard.png' ) ); ?>" alt="Open Quran in a mosque courtyard">
      </div>
      <div class="container cta-content reveal">
        <span class="eyebrow light"><i></i> Enroll Now to Learn the Book of Allah <i></i></span>
        <h2>Begin a Spiritual Journey<br><em>with Qualified Teachers.</em></h2>
        <p>Begin a spiritual journey with qualified Quran teachers guiding you step by step. Flexible online classes, individual attention, and deep connection with the Holy Quran — from the comfort of your home.</p>
        
        <div class="cta-actions">
          <a class="btn btn-whatsapp" href="https://wa.me/447466484751?text=Hello%2C%20I%20would%20like%20a%20free%20consultation" target="_blank" rel="noopener">
            Start Free Trial on WhatsApp <svg class="btn-wa-svg"><use href="#i-whatsapp"/></svg>
          </a>
        </div>
      </div>
    </section>
  </main>

<?php
get_footer();
