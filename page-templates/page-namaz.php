<?php
/**
 * Template Name: Namaz
 */
get_header();
?>

  <main>
    <!-- HERO SECTION: Two Buttons: Courses & Contact Us -->
    <section class="course-detail-hero" aria-label="Namaz Learning Banner">
      <img src="<?php echo esc_url( qc_asset_url( 'course-namaz.png' ) ); ?>" alt="Learn Namaz Step-by-Step with Postures" class="course-detail-hero-bg">
      <div class="course-detail-hero-overlay"></div>
      <div class="container">
        <div class="course-detail-hero-content reveal">
          <span class="course-hero-kicker">Quick and Reliable Service</span>
          <div class="course-breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
            <span>»</span>
            <a href="<?php echo esc_url( home_url( '/course/' ) ); ?>">Courses</a>
            <span>»</span>
            <strong>Namaz</strong>
          </div>
          <h1 class="course-detail-hero-title">Step-by-Step <em>Namaz</em> Learning</h1>
          <p class="course-detail-hero-lead">This class helps students memorize new parts of the Qur’an and revise the surahs they have already learned. Students are guided with proper Tajweed and pronunciation rules. Our goal is to build a strong connection with the Qur’an through consistent learning and reflection.</p>
          
          <!-- Two Buttons: Courses and Contact Us as requested -->
          <div class="hero-two-buttons">
            <a href="<?php echo esc_url( home_url( '/course/' ) ); ?>" class="btn-hero-courses">
              <svg><use href="#i-book"/></svg> Courses
            </a>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-hero-trial">
              <svg><use href="#i-phone"/></svg> Contact Us
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- MAIN TWO-COLUMN SECTION -->
    <section class="course-detail-section">
      <div class="container course-detail-grid">
        
        <!-- LEFT COLUMN: Intro & Overview -->
        <div class="course-content-col">
          
          <!-- Overview Intro Card -->
          <article class="detail-block reveal">
            <h2 class="detail-heading">Namaz &amp; Prayer Method Guide</h2>
            <p class="detail-text">Salah (Namaz) is the second pillar of Islam and the primary link between a believer and Allah. Our dedicated Namaz course guides children and adults through every posture, Arabic recitation, translation, and Sunnah etiquette step by step.</p>
            <p class="detail-text">Our certified online tutors provide one-on-one personal guidance to ensure your postures, Makhaarij, and silent/loud recitations strictly adhere to the Sunnah of Prophet Muhammad ﷺ.</p>
          </article>

          <!-- What You Will Master Card (Balances the height of Golden Card) -->
          <article class="detail-block reveal delay-1">
            <h2 class="detail-heading">Course Curriculum &amp; Focus</h2>
            <p class="detail-text">A complete syllabus crafted to help you pray with complete confidence, understanding, and spiritual presence:</p>
            <div style="display:flex; gap:20px; align-items:center; margin:16px 0; flex-wrap:wrap;">
              <div style="flex:1; min-width:240px;">
                <ul class="detail-checklist" style="margin:0;">
                  <li>Accurate physical postures (Qayyam, Ruku, Sajdah, Qa'dah)</li>
                  <li>Word-by-word memorization with correct pronunciation</li>
                  <li>Meaning and translation of all recitations &amp; duas</li>
                  <li>Fard, Sunnah, Nafl, and Witr prayer rules</li>
                </ul>
              </div>
              <div style="width:190px; height:140px; flex:none; border-radius:12px; overflow:hidden; box-shadow:0 8px 22px rgba(7,61,55,0.12); border:1px solid rgba(220,182,83,0.3);">
                <img src="<?php echo esc_url( qc_asset_url( 'course-namaz.png' ) ); ?>" alt="Learning Namaz" style="width:100%; height:100%; object-fit:cover;">
              </div>
            </div>
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
                <span>Beginner to Advanced</span>
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

    <!-- SECTION 2: FULL-WIDTH POSTURES GALLERY (Image-Only Cards as explicitly requested) -->
    <section class="fullwidth-course-section">
      <div class="container">
        
        <article class="fullwidth-block reveal">
          <div style="display:flex; justify-content:space-between; align-items:flex-end; flex-wrap:wrap; gap:16px; margin-bottom:14px;">
            <div>
              <span class="eyebrow" style="margin-bottom:8px;">Authentic Step-by-Step Guide</span>
              <h2 class="detail-heading" style="margin:0;">Salah Postures &amp; Recitations Guide</h2>
            </div>
            <p class="detail-text" style="margin:0; max-width:540px;">Click any posture chart below to enlarge and view all authentic Arabic recitations, transliteration, and translation:</p>
          </div>

          <!-- 12 STEP-BY-STEP POSTURE IMAGE CARDS (Full Width, Image-Only, Click to Enlarge) -->
          <div class="namaz-postures-grid">
            
            <!-- Posture 1: Takbeerat -->
            <article class="namaz-card reveal" title="Click to view enlarged chart">
              <div class="namaz-card-img-wrap">
                <span class="namaz-step-badge">Posture 1</span>
                <span class="namaz-zoom-btn">🔍</span>
                <img src="<?php echo esc_url( qc_asset_url( 'namaz-1.jpg' ) ); ?>" alt="Posture 1: Takbeerat">
              </div>
              <div class="namaz-card-caption">
                <h4>TAKBEERAT</h4>
                <span>Posture 1</span>
              </div>
            </article>

            <!-- Posture 2: Al-Qayyam (Sana) -->
            <article class="namaz-card reveal delay-1" title="Click to view enlarged chart">
              <div class="namaz-card-img-wrap">
                <span class="namaz-step-badge">Posture 2</span>
                <span class="namaz-zoom-btn">🔍</span>
                <img src="<?php echo esc_url( qc_asset_url( 'namaz-2.jpg' ) ); ?>" alt="Posture 2: Al-Qayyam (Sana)">
              </div>
              <div class="namaz-card-caption">
                <h4>AL-QAYYAM (Sana)</h4>
                <span>Posture 2</span>
              </div>
            </article>

            <!-- Posture 3: Surah Al-Fatihah -->
            <article class="namaz-card reveal" title="Click to view enlarged chart">
              <div class="namaz-card-img-wrap">
                <span class="namaz-step-badge">Surah Al-Fatihah</span>
                <span class="namaz-zoom-btn">🔍</span>
                <img src="<?php echo esc_url( qc_asset_url( 'namaz-3.jpg' ) ); ?>" alt="Posture 2 Continued: Surah Al-Fatihah">
              </div>
              <div class="namaz-card-caption">
                <h4>AL-FATTIHAH</h4>
                <span>Posture 2 Cont.</span>
              </div>
            </article>

            <!-- Posture 4: Surah Recitation (Al-Ikhlas) -->
            <article class="namaz-card reveal delay-1" title="Click to view enlarged chart">
              <div class="namaz-card-img-wrap">
                <span class="namaz-step-badge">Surah Recitation</span>
                <span class="namaz-zoom-btn">🔍</span>
                <img src="<?php echo esc_url( qc_asset_url( 'namaz-4.jpg' ) ); ?>" alt="Recite any Surah (Al-Ikhlas)">
              </div>
              <div class="namaz-card-caption">
                <h4>RECITE SURAH</h4>
                <span>Surah Al-Ikhlas</span>
              </div>
            </article>

            <!-- Posture 5: Ruku (Bowing) -->
            <article class="namaz-card reveal" title="Click to view enlarged chart">
              <div class="namaz-card-img-wrap">
                <span class="namaz-step-badge">Posture 3</span>
                <span class="namaz-zoom-btn">🔍</span>
                <img src="<?php echo esc_url( qc_asset_url( 'namaz-5.jpg' ) ); ?>" alt="Posture 3: Ruku (Bowing)">
              </div>
              <div class="namaz-card-caption">
                <h4>RUKU (Bowing)</h4>
                <span>Posture 3</span>
              </div>
            </article>

            <!-- Posture 6: Qayyam (Rising from Ruku) -->
            <article class="namaz-card reveal delay-1" title="Click to view enlarged chart">
              <div class="namaz-card-img-wrap">
                <span class="namaz-step-badge">Posture 4</span>
                <span class="namaz-zoom-btn">🔍</span>
                <img src="<?php echo esc_url( qc_asset_url( 'namaz-6.jpg' ) ); ?>" alt="Posture 4: Qayyam (Rising)">
              </div>
              <div class="namaz-card-caption">
                <h4>QAYYAM (Rising)</h4>
                <span>Posture 4</span>
              </div>
            </article>

            <!-- Posture 7: Sajjdah (Prostration) -->
            <article class="namaz-card reveal" title="Click to view enlarged chart">
              <div class="namaz-card-img-wrap">
                <span class="namaz-step-badge">Posture 5</span>
                <span class="namaz-zoom-btn">🔍</span>
                <img src="<?php echo esc_url( qc_asset_url( 'namaz-7.jpg' ) ); ?>" alt="Posture 5: Sajjdah (Prostration)">
              </div>
              <div class="namaz-card-caption">
                <h4>SAJJDAH</h4>
                <span>Posture 5</span>
              </div>
            </article>

            <!-- Posture 8: Quood (Tashahhud) -->
            <article class="namaz-card reveal delay-1" title="Click to view enlarged chart">
              <div class="namaz-card-img-wrap">
                <span class="namaz-step-badge">Posture 8</span>
                <span class="namaz-zoom-btn">🔍</span>
                <img src="<?php echo esc_url( qc_asset_url( 'namaz-8.jpg' ) ); ?>" alt="Posture 8: Quood (Tashahhud)">
              </div>
              <div class="namaz-card-caption">
                <h4>QUOOD (Tashahhud)</h4>
                <span>Posture 8</span>
              </div>
            </article>

            <!-- Posture 9: Durood-e-Ibrahim -->
            <article class="namaz-card reveal" title="Click to view enlarged chart">
              <div class="namaz-card-img-wrap">
                <span class="namaz-step-badge">Durood-e-Ibrahim</span>
                <span class="namaz-zoom-btn">🔍</span>
                <img src="<?php echo esc_url( qc_asset_url( 'namaz-9.jpg' ) ); ?>" alt="Durood-e-Ibrahim in Namaz">
              </div>
              <div class="namaz-card-caption">
                <h4>DUROOD-E-IBRAHIM</h4>
                <span>Final Sitting</span>
              </div>
            </article>

            <!-- Posture 10: Dua-e-Masura -->
            <article class="namaz-card reveal delay-1" title="Click to view enlarged chart">
              <div class="namaz-card-img-wrap">
                <span class="namaz-step-badge">Dua-e-Masura</span>
                <span class="namaz-zoom-btn">🔍</span>
                <img src="<?php echo esc_url( qc_asset_url( 'namaz-10.jpg' ) ); ?>" alt="Dua-e-Masura in Namaz">
              </div>
              <div class="namaz-card-caption">
                <h4>DUA-E-MASURA</h4>
                <span>Supplication</span>
              </div>
            </article>

            <!-- Posture 11: Salam (Tasleem) -->
            <article class="namaz-card reveal" title="Click to view enlarged chart">
              <div class="namaz-card-img-wrap">
                <span class="namaz-step-badge">Salam Posture</span>
                <span class="namaz-zoom-btn">🔍</span>
                <img src="<?php echo esc_url( qc_asset_url( 'namaz-11.jpg' ) ); ?>" alt="Salam - Turning Head Right and Left">
              </div>
              <div class="namaz-card-caption">
                <h4>SALAM (Tasleem)</h4>
                <span>Completion</span>
              </div>
            </article>

            <!-- Posture 12: Dua-e-Qunoot (Witr Salah) -->
            <article class="namaz-card reveal delay-1" title="Click to view enlarged chart">
              <div class="namaz-card-img-wrap">
                <span class="namaz-step-badge">Dua-e-Qunoot</span>
                <span class="namaz-zoom-btn">🔍</span>
                <img src="<?php echo esc_url( qc_asset_url( 'namaz-12.jpg' ) ); ?>" alt="Dua-e-Qunoot in Witr Prayer">
              </div>
              <div class="namaz-card-caption">
                <h4>DUA-E-QUNOOT</h4>
                <span>Witr Salah</span>
              </div>
            </article>

          </div>
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
        <span class="eyebrow light"><i></i> Perfect Your Prayer <i></i></span>
        <h2 class="fee-cta-title">Learn to Pray with Full Devotion &amp; Correct Sunnah Postures</h2>
        <p class="fee-cta-desc">Master the second pillar of Islam with personalized one-to-one instruction for yourself or your children.<br>Dedicated tutors, flexible schedules, and free 3-day trial.</p>
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
