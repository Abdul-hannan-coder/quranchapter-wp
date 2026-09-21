<?php
/**
 * Online Quran Academy Landing Page Template
 *
 * Template Name: Online Quran Academy
 * Slug: online-quran-academy
 * @package QuranChapter
 */
/**
 * Front Page Template
 *
 * Template Name: Front Page
 * @package QuranChapter
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

  <main>
    <!-- STATIC HERO SECTION (NO SLIDER) -->
    <section class="hero hero-v3 hero-static" id="home" aria-label="Online Quran Academy introduction">
      <div class="hero-slides-v3">
        <article class="hero-slide active">
          <img class="hero-v3-image" src="<?php echo esc_url( qc_asset_url( 'hero-home-v3.png' ) ); ?>" alt="Open Quran beside a lantern in an Islamic arch">
          <div class="hero-v3-overlay"></div>
          <div class="container hero-v3-content">
            <span class="hero-v3-kicker">Online Quran Learning</span>
            <h1>Online Quran Academy<br><em>Qualified Quran Teachers</em></h1>
            <p>Personalized online Quran classes for kids and adults with qualified male and female tutors, flexible timings and meaningful one-to-one sessions.</p>
            <div class="hero-actions">
              <a class="btn btn-whatsapp" href="https://wa.me/447466484751?text=Hello%2C%20I%20would%20like%20a%20free%20consultation" target="_blank" rel="noopener">
                Free Consultation on WhatsApp <svg class="btn-wa-svg"><use href="#i-whatsapp"/></svg>
              </a>
              <a class="btn btn-outline" href="#free-trial">
                Book 7-Days Free Trial <svg><use href="#i-arrow"/></svg>
              </a>
            </div>
          </div>
        </article>
      </div>
      
      <div class="hero-quote reveal delay-1">
        <span>خَيْرُكُمْ مَنْ تَعَلَّمَ الْقُرْآنَ وَعَلَّمَهُ</span>
        <p>“The best of you are those who learn the Quran and teach it.”</p>
        <small>— Prophet Muhammad ﷺ</small>
      </div>

      <div class="container hero-features">
        <div><i><svg><use href="#i-book"/></svg></i><span>Qualified Tutors</span></div>
        <div><i><svg><use href="#i-users"/></svg></i><span>One-to-One Classes</span></div>
        <div><i><svg><use href="#i-clock"/></svg></i><span>Flexible Timings</span></div>
      </div>
    </section>

    <!-- GOLDEN PILL STATS STRIP -->
    <section class="trust-strip">
      <div class="container">
        <div class="trust-pill-bar reveal">
          <div class="trust-pill-item">
            <div class="trust-text">
              <b>15+</b>
              <span>YEARS OF<br>EXCELLENCE</span>
            </div>
          </div>
          <div class="trust-pill-item">
            <div class="trust-text">
              <b>1 on 1</b>
              <span>PERSONAL<br>CLASSES</span>
            </div>
          </div>
          <div class="trust-pill-item">
            <div class="trust-text">
              <b>5 Days</b>
              <span>MONDAY TO<br>FRIDAY</span>
            </div>
          </div>
          <div class="trust-pill-item">
            <div class="trust-text">
              <b>24/7</b>
              <span>STUDENT<br>SUPPORT</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ABOUT SECTION -->
    <section class="section about" id="about">
      <div class="container about-grid">
        <div class="about-media reveal">
          <div class="image-shell">
            <img src="<?php echo esc_url( qc_asset_url( 'online-teacher.png' ) ); ?>" alt="Quran teacher conducting a live online class">
          </div>
          <div class="experience-badge">
            <b>Since 2015</b>
            <span>Operating worldwide</span>
          </div>
        </div>
        <div class="section-copy reveal delay-1">
          <span class="eyebrow"><i></i> Welcome to Online Quran Academy</span>
          <h2>Spreading the Light of the<br><em>Holy Quran Worldwide</em></h2>
          <p class="lead">Your trusted platform for personalized online Quran education, shaped by more than 15 years of teaching excellence.</p>
          <p>Our expert instructors deliver authentic Quranic guidance in a seamless modern learning environment. We blend traditional wisdom with thoughtful technology, making registration simple and every lesson comfortable.</p>
          <div class="about-points">
            <div><span>✓</span><p><b>Learn at your own pace</b><small>Flexible classes around your family.</small></p></div>
            <div><span>✓</span><p><b>Qualified male &amp; female tutors</b><small>A comfortable match for every learner.</small></p></div>
            <div><span>✓</span><p><b>Operating Globally Since 2015</b><small>Guiding students across the UK, USA, Canada, Australia and beyond.</small></p></div>
            <div><span>✓</span><p><b>100% One-to-One Attention</b><small>Dedicated patient tutors focused on your goals.</small></p></div>
          </div>
          <div class="about-actions">
            <a class="btn btn-gold" href="#free-trial">Book 7-Days Free Trial <svg><use href="#i-arrow"/></svg></a>
            <a class="btn btn-whatsapp" href="https://wa.me/447466484751?text=Hello%2C%20I%20would%20like%20a%20free%20consultation" target="_blank" rel="noopener">Free Consultation on WhatsApp <svg class="btn-wa-svg"><use href="#i-whatsapp"/></svg></a>
          </div>
        </div>
      </div>
    </section>

    <!-- COURSES SECTION -->
    <section class="section courses courses-v2" id="courses">
      <img class="courses-bg" src="<?php echo esc_url( qc_asset_url( 'courses-bg-v2.png' ) ); ?>" alt="">
      <div class="container">
        <div class="section-heading centered reveal">
          <span class="eyebrow light"><i></i> What we offer <i></i></span>
          <h2>Courses made for <em>every learner</em></h2>
          <p>From the first Arabic letter to confident recitation and understanding, learn step by step with a dedicated tutor.</p>
        </div>
        <div class="course-grid">
          <article class="course-card reveal">
            <div class="course-image">
              <img src="<?php echo esc_url( qc_asset_url( 'course-qaida.png' ) ); ?>" alt="Child learning Noorani Qaida">
              <span>01</span>
            </div>
            <div class="course-body">
              <span class="schedule">5 Days/Week <b>MON → FRI</b></span>
              <h3>Qaida</h3>
              <p>Noorani Qaida Course is a fundamental course taught by our tutors using the Noorani Qaida syllabus. A comprehensive course for kids and adults, male and female.</p>
              <a class="course-btn" href="#free-trial">Book Free Trial <svg><use href="#i-arrow"/></svg></a>
            </div>
          </article>

          <article class="course-card reveal delay-1">
            <div class="course-image">
              <img src="<?php echo esc_url( qc_asset_url( 'course-arabic.png' ) ); ?>" alt="Student learning Arabic online">
              <span>02</span>
            </div>
            <div class="course-body">
              <span class="schedule">5 Days/Week <b>MON → FRI</b></span>
              <h3>Arabic Language</h3>
              <p>Our Arabic Language Online Course provides students with a convenient, flexible and interactive way to learn Arabic from the comfort of their homes.</p>
              <a class="course-btn" href="#free-trial">Book Free Trial <svg><use href="#i-arrow"/></svg></a>
            </div>
          </article>

          <article class="course-card reveal delay-2">
            <div class="course-image">
              <img src="<?php echo esc_url( qc_asset_url( 'course-namaz.png' ) ); ?>" alt="Student learning Namaz and Dua">
              <span>03</span>
            </div>
            <div class="course-body">
              <span class="schedule">5 Days/Week <b>MON → FRI</b></span>
              <h3>Namaz &amp; Duas</h3>
              <p>Students memorize new parts of the Qur’an, revise learned surahs, learn Namaz step-by-step, and build confidence with proper Tajweed.</p>
              <a class="course-btn" href="#free-trial">Book Free Trial <svg><use href="#i-arrow"/></svg></a>
            </div>
          </article>
        </div>

        <div class="course-all-offers-wrap reveal delay-1">
          <a href="#free-trial" class="btn btn-gold btn-all-offers">
            Book Your 7-Days Free Trial <svg><use href="#i-arrow"/></svg>
          </a>
        </div>
      </div>
    </section>

    


    <!-- WHY CHOOSE US BENEFITS -->
    <section class="section benefits" id="benefits">
      <div class="container">
        <div class="section-heading centered reveal">
          <span class="eyebrow"><i></i> Why Choose Us <i></i></span>
          <h2>Why Choose <em>Online Quran Academy</em></h2>
          <p>Learn the Quran with certified teachers in a structured and peaceful online environment. Flexible timings, personalized attention, and a strong focus on confident recitation.</p>
        </div>
        <div class="benefit-grid">
          <article class="benefit-card reveal">
            <span class="benefit-icon"><svg><use href="#i-book"/></svg></span>
            <b>01</b>
            <h3>Expert Quran Tutor</h3>
            <p>Online Quran classes are conducted by well-qualified Islamic scholars and expert tutors who teach correct recitation and Arabic phonetics.</p>
            <a href="#free-trial">Book 7-Days Free Trial →</a>
          </article>

          <article class="benefit-card reveal delay-1">
            <span class="benefit-icon"><svg><use href="#i-student"/></svg></span>
            <b>02</b>
            <h3>We Value Our Students</h3>
            <p>Every learner receives patient, respectful guidance and personal attention in a peaceful, encouraging environment.</p>
            <a href="#free-trial">Book 7-Days Free Trial →</a>
          </article>

          <article class="benefit-card reveal delay-2">
            <span class="benefit-icon"><svg><use href="#i-clock"/></svg></span>
            <b>03</b>
            <h3>Flexible Timings</h3>
            <p>Choose convenient class timings that fit school, work and family routines across different time zones.</p>
            <a href="#free-trial">Book 7-Days Free Trial →</a>
          </article>

          <article class="benefit-card reveal delay-3">
            <span class="benefit-icon"><svg><use href="#i-users"/></svg></span>
            <b>04</b>
            <h3>Male &amp; Female Tutors</h3>
            <p>Qualified male and female Quran tutors are available separately to support the comfort of every student.</p>
            <a href="#free-trial">Book 7-Days Free Trial →</a>
          </article>
        </div>
      </div>
    </section>



    <!-- FORM SECTION: BOOK 7-DAYS FREE TRIAL (CONTACT FORM 7 INTEGRATION) -->
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
              // Fallback HTML matching CF7 structure for theme preview / static mode
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
    <section class="section testimonials testimonials-v3" id="testimonials"> <div class="container testimonial-v3-wrap">
        <div class="testimonial-photo reveal">
          <img src="<?php echo esc_url( qc_asset_url( 'testimonial-student-v2.png' ) ); ?>" alt="Student reading the Holy Quran">
          <div class="testimonial-badge-pill">
            <span class="pill-icon"><svg><use href="#i-book"/></svg></span>
            <div>
              <b>Verified Students</b>
              <small>100% Sincere Guidance</small>
            </div>
          </div>
        </div>
        <div class="testimonial-panel reveal delay-1">
          <div class="testimonial-panel-head">
            <span class="eyebrow light"><i></i> Testimonials <i></i></span>
            <h2>Our Happy Students</h2>
            <p>Flexible timings, personalized attention, and a strong focus on confident Quran learning.</p>
            <div class="stars">★★★★★</div>
          </div>
          
          <div class="testimonial-slider-track" id="testimonialSlider">
            <!-- Slide 1: Haroon Khan -->
            <article class="testimonial-slide active">
              <span class="quote-mark">“</span>
              <blockquote>Studying at this Quran Academy has been a wonderful experience. The instructors are knowledgeable and patient, and they encourage students to learn with confidence. I am grateful for the opportunity to improve my Quran reading and Islamic knowledge.</blockquote>
              <div class="student">
                <span class="student-avatar">HK</span>
                <p><b>Haroon Khan</b><small>Student</small></p>
              </div>
            </article>

            <!-- Slide 2: Muhammad Numan -->
            <article class="testimonial-slide">
              <span class="quote-mark">“</span>
              <blockquote>This Quran Academy provides an excellent learning environment. The teaching methods are effective, and the staff are dedicated to helping students achieve their goals.</blockquote>
              <div class="student">
                <span class="student-avatar">MN</span>
                <p><b>Muhammad Numan</b><small>Student · UK</small></p>
              </div>
            </article>

            <!-- Slide 3: Kashif Iqbal -->
            <article class="testimonial-slide">
              <span class="quote-mark">“</span>
              <blockquote>I have learned a lot at this academy. The teachers are kind, supportive, and explain Quran lessons clearly. My recitation and understanding have improved significantly.</blockquote>
              <div class="student">
                <span class="student-avatar">KI</span>
                <p><b>Kashif Iqbal</b><small>Student · USA</small></p>
              </div>
            </article>

            <!-- Slide 4: Amina Siddiqui -->
            <article class="testimonial-slide">
              <span class="quote-mark">“</span>
              <blockquote>Finding patient and certified female Quran teachers for my children was our primary concern. The tutors here are wonderful, punctual, and make every lesson engaging and uplifting.</blockquote>
              <div class="student">
                <span class="student-avatar">AS</span>
                <p><b>Amina Siddiqui</b><small>Parent · Canada</small></p>
              </div>
            </article>

            <!-- Slide 5: Zubair Ahmed -->
            <article class="testimonial-slide">
              <span class="quote-mark">“</span>
              <blockquote>The one-on-one flexible schedule fits perfectly around my university classes. The tutors ensure you understand every rule of phonetics with utmost sincerity.</blockquote>
              <div class="student">
                <span class="student-avatar">ZA</span>
                <p><b>Zubair Ahmed</b><small>Student · Australia</small></p>
              </div>
            </article>
          </div>

          <!-- Testimonial Slider Controls -->
          <div class="testimonial-slider-nav">
            <button class="t-nav-btn t-prev" type="button" aria-label="Previous testimonial">‹</button>
            <div class="testimonial-dots" id="testimonialDots">
              <button class="active" aria-label="Slide 1"></button>
              <button aria-label="Slide 2"></button>
              <button aria-label="Slide 3"></button>
              <button aria-label="Slide 4"></button>
              <button aria-label="Slide 5"></button>
            </div>
            <button class="t-nav-btn t-next" type="button" aria-label="Next testimonial">›</button>
          </div>
        </div>
      </div> </section>
    


    <!-- TEACHERS SECTION -->
    <section class="section teachers teachers-v2" id="teachers">
      <img class="team-bg" src="<?php echo esc_url( qc_asset_url( 'team-bg-v2.png' ) ); ?>" alt="">
      <div class="container">
        <div class="teachers-intro reveal">
          <span class="eyebrow light"><i></i> Meet our team</span>
          <h2>Perfect for<br><em>your match.</em></h2>
          <p>Learn with qualified, caring instructors chosen around your goals and comfort.</p>
          <a class="text-link gold" href="#free-trial">Meet your tutor <span>→</span></a>
        </div>
        <div class="teacher-gallery reveal delay-1">
          <figure class="teacher-card tall">
            <img src="<?php echo esc_url( qc_asset_url( 'teacher-1.jpg' ) ); ?>" alt="Allama Hafiz Qari Muhammad Nadeem Saifi">
          </figure>
          <figure class="teacher-card">
            <img src="<?php echo esc_url( qc_asset_url( 'teacher-2.jpg' ) ); ?>" alt="Qari &amp; Hafiz Naeem Saqi">
          </figure>
          <figure class="teacher-card">
            <img src="<?php echo esc_url( qc_asset_url( 'teacher-3.jpg' ) ); ?>" alt="Qari &amp; Hafiz Muhammad Yousaf">
          </figure>
        </div>
      </div>
    </section>

  
    <!-- GLOBAL CLASSROOM -->
    <section class="countries">
      <div class="container">
        <div class="country-copy reveal">
          <span class="eyebrow"><i></i> Our global classroom</span>
          <h2>One Quran. <em>One connected community.</em></h2>
          <p>From peaceful homes in Canada to vibrant cities across the USA, UK, Australia and Germany—distance means nothing when hearts are united by the words of Allah.</p>
        </div>
        <div class="flag-row reveal delay-1">
          <figure><img src="<?php echo esc_url( qc_asset_url( 'flag-australia.png' ) ); ?>" alt="Australia flag"><figcaption>Australia</figcaption></figure>
          <figure><img src="<?php echo esc_url( qc_asset_url( 'flag-canada.png' ) ); ?>" alt="Canada flag"><figcaption>Canada</figcaption></figure>
          <figure><img src="<?php echo esc_url( qc_asset_url( 'flag-usa.png' ) ); ?>" alt="USA flag"><figcaption>USA</figcaption></figure>
          <figure><img src="<?php echo esc_url( qc_asset_url( 'flag-uk.png' ) ); ?>" alt="UK flag"><figcaption>United Kingdom</figcaption></figure>
          <figure><img src="<?php echo esc_url( qc_asset_url( 'flag-germany.png' ) ); ?>" alt="Germany flag"><figcaption>Germany</figcaption></figure>
        </div>
      </div>
    </section>

    <!-- FAQ SECTION -->
    <section class="section faq" id="resources">
      <div class="container faq-grid">
        <div class="faq-intro reveal">
          <span class="eyebrow"><i></i> Common questions</span>
          <h2>Everything you need<br><em>before you begin.</em></h2>
          <p>Still have a question? Our support team is happy to guide you on WhatsApp or via email.</p>
          <a href="https://wa.me/447466484751?text=Hello%2C%20I%20have%20a%20question" target="_blank" rel="noopener">Ask us on WhatsApp →</a>
        </div>
        <div class="accordion reveal delay-1">
          <div class="faq-item open"><button><span>What is Online Quran Academy?</span><b>−</b></button><div class="faq-answer"><p>An online learning platform offering personalized Quran and Islamic studies classes with qualified male and female tutors.</p></div></div>
          <div class="faq-item"><button><span>Are classes live and one-to-one?</span><b>+</b></button><div class="faq-answer"><p>Yes. Classes are delivered live and personally, allowing your tutor to focus on your pace, pronunciation and goals.</p></div></div>
          <div class="faq-item"><button><span>Do you offer a 7-days free trial?</span><b>+</b></button><div class="faq-answer"><p>Yes! We offer a full 7-days free trial so you and your family can experience our one-on-one lessons with no obligation.</p></div></div>
          <div class="faq-item"><button><span>Can children and adults join?</span><b>+</b></button><div class="faq-answer"><p>Absolutely. Our structured courses support children, adults, beginners and improving readers.</p></div></div>
          <div class="faq-item"><button><span>How flexible are the timings?</span><b>+</b></button><div class="faq-answer"><p>We coordinate a convenient schedule around your time zone and availability, Monday through Friday.</p></div></div>
        </div>
      </div>
    </section>

    <!-- BOTTOM CTA SECTION -->
    <section class="cta" id="contact">
      <div class="cta-slides">
        <img class="cta-bg active" src="<?php echo esc_url( qc_asset_url( 'cta-quran.png' ) ); ?>" alt="Open Quran inside a peaceful mosque">
      </div>
      <div class="container cta-content reveal">
        <span class="eyebrow light"><i></i> Your journey starts here</span>
        <h2>Enroll now to learn<br><em>the Book of Allah.</em></h2>
        <p>Begin a spiritual journey with qualified Quran teachers guiding you step by step—at your pace, in your home.</p>
        <div class="cta-actions">
          <a class="btn btn-whatsapp" href="https://wa.me/447466484751?text=Hello%2C%20I%20would%20like%20a%20free%20consultation" target="_blank" rel="noopener">
            Free Consultation on WhatsApp <svg class="btn-wa-svg"><use href="#i-whatsapp"/></svg>
          </a>
          <a class="btn btn-outline" href="#free-trial">
            Book 7-Days Free Trial <svg><use href="#i-arrow"/></svg>
          </a>
          <a class="call-link" href="https://wa.me/447466484751" target="_blank" rel="noopener">
            <small>Chat with us on WhatsApp</small>
            <b>+44 7466 484751</b>
          </a>
        </div>
      </div>
    </section>
  </main>

<?php
get_footer();
