<?php
/**
 * Template Name: Course Page
 *
 * @package QuranChapter
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

  <main>
    <!-- COURSES HERO SECTION -->
    <section class="course-hero-wrap" aria-label="Courses Banner">
      <img src="<?php echo esc_url( qc_asset_url( 'hero-guided-study.png' ) ); ?>" alt="Student learning Quran online" class="course-hero-bg">
      <div class="course-hero-overlay"></div>
      <div class="container">
        <div class="course-hero-content reveal">
          <span class="course-hero-kicker">Quick and Reliable Service</span>
          <h1 class="course-hero-title">COURSES</h1>
          <p class="course-hero-lead">Experience the beauty of learning Quran Online from the comfort of your home with our expert Quran Tutors and Teachers who make every lesson meaningful and engaging.</p>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="course-hero-btn">Contact Us</a>
        </div>
      </div>
    </section>

    <!-- WHAT WE OFFER / 6 COURSES CARDS (Same Type as Home Page) -->
    <section class="section courses courses-v2 course-page-cards-section" id="all-courses">
      <img class="courses-bg" src="<?php echo esc_url( qc_asset_url( 'courses-bg-v2.png' ) ); ?>" alt="">
      <div class="container">
        <div class="section-heading centered reveal">
          <span class="eyebrow light"><i></i> WHAT WE OFFER <i></i></span>
          <h2>Courses Made for <em>Every Learner</em></h2>
          <p>From the first Arabic letter to confident recitation and deep understanding, learn step by step with a dedicated tutor.</p>
        </div>

        <div class="course-grid">
          <!-- Card 1: Qaida -->
          <article class="course-card reveal" id="qaida">
            <div class="course-image">
              <img src="<?php echo esc_url( qc_asset_url( 'course-qaida.png' ) ); ?>" alt="Noorani Qaida Course">
              <span>01</span>
            </div>
            <div class="course-body">
              <span class="schedule">5 Days/Week <b>MON → FRI</b></span>
              <h3>Qaida</h3>
              <p>Noorani Qaida Course is a fundamental course taught by our tutors using the authentic Noorani Qaida syllabus. A comprehensive course for beginners, kids, and adults.</p>
              <a class="course-btn" href="<?php echo esc_url( home_url( '/qaida/' ) ); ?>">Learn More <svg><use href="#i-arrow"/></svg></a>
            </div>
          </article>

          <!-- Card 2: Nazra Quran -->
          <article class="course-card reveal delay-1" id="nazra">
            <div class="course-image">
              <img src="<?php echo esc_url( qc_asset_url( 'hero-child.png' ) ); ?>" alt="Nazra Quran Course">
              <span>02</span>
            </div>
            <div class="course-body">
              <span class="schedule">5 Days/Week <b>MON → FRI</b></span>
              <h3>Nazra Quran</h3>
              <p>Quran reading with Tajweed rules is essential. Our course outline covers all Tajweed principles like Izhaar, Ghunna, Ikhfa, and Idgham for smooth, fluent recitation.</p>
              <a class="course-btn" href="<?php echo esc_url( home_url( '/nazra-quran/' ) ); ?>">Learn More <svg><use href="#i-arrow"/></svg></a>
            </div>
          </article>

          <!-- Card 3: Learn Tajweed Rules -->
          <article class="course-card reveal delay-2" id="tajweed">
            <div class="course-image">
              <img src="<?php echo esc_url( qc_asset_url( 'online-teacher.png' ) ); ?>" alt="Learn Tajweed Rules Course">
              <span>03</span>
            </div>
            <div class="course-body">
              <span class="schedule">5 Days/Week <b>MON → FRI</b></span>
              <h3>Learn Tajweed Rules</h3>
              <p>Master the art of recitation with proper Makharij (articulation points), characteristics of letters, elongation rules, and stop signs under certified tutor guidance.</p>
              <a class="course-btn" href="<?php echo esc_url( home_url( '/learn-tajweed-rules/' ) ); ?>">Learn More <svg><use href="#i-arrow"/></svg></a>
            </div>
          </article>

          <!-- Card 4: Quran Translation -->
          <article class="course-card reveal" id="translation">
            <div class="course-image">
              <img src="<?php echo esc_url( qc_asset_url( 'hero-quran.png' ) ); ?>" alt="Quran Translation and Tafseer Course">
              <span>04</span>
            </div>
            <div class="course-body">
              <span class="schedule">5 Days/Week <b>MON → FRI</b></span>
              <h3>Quran Translation</h3>
              <p>Designed for students who want to understand the Holy Quran word by word and absorb the profound divine message with contextual Tafseer and spiritual lessons.</p>
              <a class="course-btn" href="<?php echo esc_url( home_url( '/quran-translation/' ) ); ?>">Learn More <svg><use href="#i-arrow"/></svg></a>
            </div>
          </article>

          <!-- Card 5: Namaz -->
          <article class="course-card reveal delay-1" id="namaz">
            <div class="course-image">
              <img src="<?php echo esc_url( qc_asset_url( 'course-namaz.png' ) ); ?>" alt="Namaz and Daily Duas Course">
              <span>05</span>
            </div>
            <div class="course-body">
              <span class="schedule">5 Days/Week <b>MON → FRI</b></span>
              <h3>Namaz</h3>
              <p>Experienced teachers explain the method and meaning of Salah word by word, along with complete Kalimas, essential daily duas, and Islamic moral manners.</p>
              <a class="course-btn" href="<?php echo esc_url( home_url( '/namaz/' ) ); ?>">Learn More <svg><use href="#i-arrow"/></svg></a>
            </div>
          </article>

          <!-- Card 6: Arabic Language -->
          <article class="course-card reveal delay-2" id="arabic">
            <div class="course-image">
              <img src="<?php echo esc_url( qc_asset_url( 'course-arabic.png' ) ); ?>" alt="Arabic Language Course">
              <span>06</span>
            </div>
            <div class="course-body">
              <span class="schedule">5 Days/Week <b>MON → FRI</b></span>
              <h3>Arabic Language</h3>
              <p>Our Arabic Language Online Course provides students with a convenient, flexible, and interactive way to learn reading, writing, and conversational Arabic with ease.</p>
              <a class="course-btn" href="<?php echo esc_url( home_url( '/arabic-language/' ) ); ?>">Learn More <svg><use href="#i-arrow"/></svg></a>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- STEP BY STEP DARK BANNER (Image 5 Match) -->
    <section class="step-dark-banner">
      <div class="container reveal">
        <span class="step-kicker">STEP BY STEP</span>
        <h2>Learn the Quran with Purpose, Passion, and Personal Guidance</h2>
      </div>
    </section>

    <!-- STEP BY STEP TIMELINE & NARRATIVE (Image 5 Match) -->
    <section class="step-timeline-section">
      <div class="container timeline-container">
        <div class="timeline-center-line"></div>
        <div class="timeline-grid">
          
          <!-- LEFT COLUMN -->
          <div class="timeline-left-col reveal">
            <p class="timeline-text-block">
              <strong>Experience the beauty of learning Quran online from the comfort of your home</strong> with our expert Quran tutors and teachers who make every lesson meaningful and engaging, with interactive courses tailored to your needs.
            </p>
            <p class="timeline-text-block">
              At <strong>Quran Chapter Academy</strong>, unlock the profound wisdom of the Quran from the comfort of your home. Whether you’re a beginner learning to recite or an advanced student perfecting Tajweed, our skilled teachers provide tailored guidance to suit your individual needs. Our online Quran classes offer unparalleled guidance. With interactive lessons, flexible schedules, and a user-friendly platform, Quranic education has never been more accessible.
            </p>

            <!-- Featured Box 1: QAIDA3 -->
            <div class="timeline-featured-box">
              <span class="timeline-date-pill">March 11, 2025</span>
              <h4>QAIDA3</h4>
              <p><strong>About Noorani Qaida Course:</strong> Noorani Qaida Course is a fundamental course that is taught by our tutors using the authentic Noorani Qaida syllabus...</p>
              <a href="https://quranchapter.com/qaida3/" target="_blank" rel="noopener">Read Complete Overview &rarr;</a>
            </div>

            <p class="timeline-text-block">
              <strong>Join a global community of learners and start your Quranic journey today!</strong>
            </p>
            <p class="timeline-text-block">
              We believe that learning the Quran should be both enlightening and convenient, no matter your age or background. Our qualified instructors bring years of experience and deep Islamic knowledge to every session. Each class is designed to not just teach, but to inspire a lifelong connection with the Book of Allah &#65018;. We offer specialized courses for children, adults, and even busy professionals with limited time.
            </p>
          </div>

          <!-- RIGHT COLUMN -->
          <div class="timeline-right-col reveal delay-1">
            <!-- Featured Box 1: QURAN TRANSLATION -->
            <div class="timeline-featured-box">
              <span class="timeline-date-pill">March 11, 2025</span>
              <h4>QURAN TRANSLATION</h4>
              <p><strong>Quran Translation Course:</strong> We have designed translation of Quran Course for students who want to understand the Holy Quran word by word and understand the divine message deeply...</p>
              <a href="https://quranchapter.com/quran-translation3/" target="_blank" rel="noopener">Read Complete Overview &rarr;</a>
            </div>

            <ul class="timeline-bullet-list">
              <li>From basic Noorani Qaida to advanced Tafseer and Islamic Studies, we cover all aspects of Islamic learning.</li>
              <li>Students can learn at their own pace with one-on-one attention to ensure proper understanding.</li>
              <li>We emphasize correct pronunciation, Tajweed rules, and the spiritual essence of every verse.</li>
              <li>All our sessions are conducted in a respectful, distraction-free environment to promote focus and sincerity.</li>
              <li>Parents receive regular updates on their children’s progress and engagement.</li>
              <li>Our teachers are fluent in English, Urdu, and Arabic to accommodate students worldwide.</li>
            </ul>

            <!-- Featured Box 2: LEARN TAJWEED RULES (Placed below content) -->
            <div class="timeline-featured-box">
              <span class="timeline-date-pill">March 11, 2025</span>
              <h4>LEARN TAJWEED RULES</h4>
              <p><strong>About Tajweed Rules Course:</strong> Quran reading with Tajweed rules is essential. Our course outline covers all Tajweed rules like Izhaar, Ghunna, Ikhfa, Idgham, and articulation points taught step by step with personalized attention...</p>
              <a href="https://quranchapter.com/learn-tajweed-rules/" target="_blank" rel="noopener">Read Complete Overview &rarr;</a>
            </div>

            <ul class="timeline-bullet-list">
              <li>Regular assessments, revision sessions, and certification are part of our structured approach.</li>
              <li>We incorporate Islamic manners, daily duas, and moral values in our curriculum to build character.</li>
              <li>Learning the Quran with us is not just about recitation — it’s about living the message.</li>
              <li>With Quran Chapter Academy, you’re not just joining a course — you’re becoming part of a mission to revive the Quran in hearts and homes.</li>
              <li>Our flexible class timings cater to students from different time zones and lifestyles.</li>
              <li>Each lesson is carefully planned to ensure clarity, engagement, and spiritual growth.</li>
              <li>We use modern teaching tools to make online learning effective and interactive.</li>
              <li>Special classes are available for Quran memorization (Hifz) with proper revision schedules.</li>
            </ul>
          </div>

        </div>
      </div>
    </section>

    <!-- BOTTOM ENROLL CTA SECTION -->
    <section class="fee-cta contact-cta-section" id="contact">
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
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-cta-outline">
            Contact Us
          </a>
        </div>
      </div>
    </section>
  </main>

<?php
get_footer();
?>
