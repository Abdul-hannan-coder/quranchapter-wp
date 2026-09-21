<?php
/**
 * Template Name: Nazra Quran
 */
get_header();
?>

  <main>
    <!-- HERO SECTION: Left content, hero-child.png background, 2 buttons -->
    <section class="course-detail-hero" aria-label="Nazra Quran Course Banner">
      <img src="<?php echo esc_url( qc_asset_url( 'hero-child.png' ) ); ?>" alt="Nazra Quran Course - Quran Chapter Academy" class="course-detail-hero-bg">
      <div class="course-detail-hero-overlay"></div>
      <div class="container">
        <div class="course-detail-hero-content reveal">
          <span class="course-hero-kicker">Quick and Reliable Service</span>
          <div class="course-breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
            <span>»</span>
            <a href="<?php echo esc_url( home_url( '/course/' ) ); ?>">Courses</a>
            <span>»</span>
            <strong>Nazra Quran</strong>
          </div>
          <h1 class="course-detail-hero-title">Nazra <em>Quran</em> Course</h1>
          <p class="course-detail-hero-lead">The Nazra Qur’an course is designed to help students learn how to read the Holy Qur’an by looking at the Arabic text with proper pronunciation and Tajweed. This course focuses on building a strong foundation in Qur’anic reading, starting from basic letter recognition to fluent recitation.</p>
          
          <!-- Two Action Buttons in Hero -->
          <div class="hero-two-buttons">
            <a href="<?php echo esc_url( home_url( '/course/' ) ); ?>" class="btn-hero-courses">
              <svg><use href="#i-book"/></svg> Other Courses
            </a>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-hero-trial">
              <svg><use href="#i-arrow"/></svg> Free Trial
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- MAIN TWO-COLUMN SECTION -->
    <section class="course-detail-section">
      <div class="container course-detail-grid">
        
        <!-- LEFT COLUMN: Course Overview, Learning Modules, Who Can Join -->
        <div class="course-content-col">
          
          <!-- Course Overview -->
          <article class="detail-block reveal">
            <h2 class="detail-heading">Course Overview</h2>
            <p class="detail-text">The Nazra Qur’an course is designed to help students learn how to read the Holy Qur’an by looking at the Arabic text with proper pronunciation and Tajweed. This course focuses on building a strong foundation in Qur’anic reading, starting from basic letter recognition to fluent recitation. It is ideal for beginners of all ages, including children and adults, who want to read the Qur’an confidently and correctly.</p>
            <p class="detail-text">Students are guided step-by-step through each lesson to ensure steady progress. Special attention is given to common pronunciation mistakes and Tajweed rules. By the end of the course, learners will be able to read the Qur’an fluently and respectfully, as it was revealed.</p>
          </article>

          <!-- What Will You Learn? (5 Pillars) -->
          <article class="detail-block reveal delay-1">
            <h2 class="detail-heading">What Will You Learn?</h2>
            <p class="detail-text">Our Nazra curriculum guides learners through 5 essential reading milestones:</p>
            
            <ul class="detail-checklist">
              <li>
                <strong>Arabic Letter Recognition:</strong> Start with the basics of the Arabic alphabet and learn how letters change shapes when joined to form words.
              </li>
              <li>
                <strong>Correct Pronunciation (Makharij):</strong> Learn how to pronounce each letter from its authentic origin in the throat, tongue, and lips.
              </li>
              <li>
                <strong>Tajweed Fundamentals:</strong> Understand and apply simple Tajweed rules to beautify your recitation without feeling overwhelmed.
              </li>
              <li>
                <strong>Verse-by-Verse Reading Practice:</strong> Daily recitation drills with short and long verses from the Qur’an to build continuous reading fluency.
              </li>
              <li>
                <strong>Surah Reading &amp; Revision:</strong> Read and revise commonly memorised Surahs such as Al-Fatiha, Al-Ikhlas, Al-Falaq, An-Naas, and more.
              </li>
            </ul>
          </article>

        </div>

        <!-- RIGHT COLUMN: Golden Course Structure Card -->
        <aside class="course-sidebar-col">
          <div class="golden-structure-card reveal">
            <div class="structure-card-header">
              <div class="structure-card-icon">
                <svg><use href="#i-mosque"/></svg>
              </div>
              <h3>Course Structure</h3>
            </div>

            <ul class="structure-items-list">
              <li class="structure-item">
                <div class="structure-badge-icon">✓</div>
                <b>Class Type:</b>
                <span>One-on-One</span>
              </li>
              <li class="structure-item">
                <div class="structure-badge-icon">✓</div>
                <b>Class Duration:</b>
                <span>30 minutes</span>
              </li>
              <li class="structure-item">
                <div class="structure-badge-icon">✓</div>
                <b>Age Level:</b>
                <span>At least 5 Years</span>
              </li>
              <li class="structure-item">
                <div class="structure-badge-icon">✓</div>
                <b>Requirements:</b>
                <span>None</span>
              </li>
              <li class="structure-item">
                <div class="structure-badge-icon">✓</div>
                <b>Course Level:</b>
                <span>Beginner to Intermediate</span>
              </li>
              <li class="structure-item">
                <div class="structure-badge-icon">✓</div>
                <b>Course Period:</b>
                <span>Student’s ability</span>
              </li>
              <li class="structure-item">
                <div class="structure-badge-icon">✓</div>
                <b>Tutor:</b>
                <span>Online Private Tutor</span>
              </li>
              <li class="structure-item">
                <div class="structure-badge-icon">✓</div>
                <b>Gender:</b>
                <span>Both Male/Female</span>
              </li>
              <li class="structure-item">
                <div class="structure-badge-icon">✓</div>
                <b>Languages:</b>
                <span>Urdu / English</span>
              </li>
            </ul>

            <div class="structure-card-cta">
              <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-gold-action">
                <svg><use href="#i-book"/></svg> Book 3-Day Free Trial
              </a>
              <a href="https://wa.me/447466484751?text=Hello%2C%20I%20would%20like%20a%20free%20consultation" target="_blank" rel="noopener" class="btn-wa-action">
                <svg><use href="#i-whatsapp"/></svg> Chat on WhatsApp
              </a>
            </div>
          </div>
        </aside>

      </div>
    </section>

    <!-- SECTION 2: FULL-WIDTH SECTIONS (Why Choose Quran Chapter Academy & Who Can Join) -->
    <section class="fullwidth-course-section">
      <div class="container">
        
        <!-- Full-Width Block 1: Why Choose Quran Chapter Academy? -->
        <article class="fullwidth-block reveal">
          <div style="display:grid; grid-template-columns:1fr 300px; gap:36px; align-items:center;">
            <div>
              <span class="eyebrow" style="margin-bottom:8px;">Excellence in Quran Education</span>
              <h2 class="detail-heading">Why Choose Quran Chapter Academy?</h2>
              <p class="detail-text">We blend dedicated scholars with modern digital learning tools to make Nazra engaging, rewarding, and deeply spiritual for both young learners and adults:</p>
              
              <ul class="detail-checklist two-col" style="margin-top:16px;">
                <li>Structured curriculum designed by experienced Qur’an teachers</li>
                <li>Perfect for kids, adults, reverts, and complete beginners</li>
                <li>Emphasis on fluency and Tajweed rules from day one</li>
                <li>One-on-one personalized, private study sessions</li>
                <li>Flexible class schedules to fit school and work routines</li>
                <li>Bi-weekly recitation progress reports for parents</li>
              </ul>
            </div>
            <div style="height:250px; border-radius:14px; overflow:hidden; box-shadow:0 12px 30px rgba(7,61,55,0.12); border:1px solid rgba(220,182,83,0.3);">
              <img src="<?php echo esc_url( qc_asset_url( 'hero-guided-study.png' ) ); ?>" alt="Guided Quran Nazra Recitation" style="width:100%; height:100%; object-fit:cover;">
            </div>
          </div>
        </article>

        <!-- Full-Width Block 2: Who Can Join? -->
        <article class="fullwidth-block reveal delay-1">
          <span class="eyebrow" style="margin-bottom:8px;">Open to Everyone</span>
          <h2 class="detail-heading">Who Can Join the Nazra Quran Course?</h2>
          <p class="detail-text">This course is open to anyone seeking to build a heartfelt bond with the Book of Allah, regardless of age, background, or prior knowledge:</p>
          
          <ul class="detail-checklist two-col" style="margin:20px 0 10px;">
            <li><strong>Children:</strong> Starting their foundational Islamic education with loving encouragement</li>
            <li><strong>Adults:</strong> Who never got a chance to learn Qur’an properly in their earlier years</li>
            <li><strong>New Muslims &amp; Reverts:</strong> Seeking a supportive, patient step-by-step learning environment</li>
            <li><strong>Fluent Aspirants:</strong> Anyone looking to improve their reading pace and eliminate stuttering</li>
            <li><strong>Parents:</strong> Wanting to build their own recitation fluency to teach their children at home</li>
            <li><strong>Busy Professionals:</strong> Needing custom 30-minute evening or weekend slots</li>
          </ul>
        </article>

      </div>
    </section>

    <!-- FULL-WIDTH LAST CTA BANNER -->
    <section class="fee-cta contact-cta-section" id="enroll-cta">
      <div class="fee-cta-bg-wrap">
        <img src="<?php echo esc_url( qc_asset_url( 'cta-quran.png' ) ); ?>" alt="Holy Quran in serene mosque" class="fee-cta-bg-img">
        <div class="fee-cta-overlay"></div>
      </div>
      <div class="container fee-cta-content reveal">
        <span class="eyebrow light"><i></i> Start Reciting the Book of Allah <i></i></span>
        <h2 class="fee-cta-title">Begin Your Online Nazra Quran Journey Today</h2>
        <p class="fee-cta-desc">Learn to read the Holy Quran fluently and correctly with certified one-to-one teachers.<br>Flexible timings, personal attention, and free 3-day trial.</p>
        <div class="contact-cta-actions">
          <a href="https://wa.me/447466484751?text=Hello%2C%20I%20would%20like%20a%20free%20consultation" target="_blank" rel="noopener" class="btn-fee-gold-large">
            <svg class="btn-cta-svg"><use href="#i-whatsapp"/></svg> Contact Us on WhatsApp
          </a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-cta-outline">
            Book Free Trial
          </a>
        </div>
      </div>
    </section>
  </main>

<?php
get_footer();
?>
