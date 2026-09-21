<?php
/**
 * Template Name: Learn Tajweed Rules
 */
get_header();
?>

  <main>
    <!-- HERO SECTION: Left content, online-teacher.png background, 2 buttons -->
    <section class="course-detail-hero" aria-label="Learn Tajweed Rules Banner">
      <img src="<?php echo esc_url( qc_asset_url( 'online-teacher.png' ) ); ?>" alt="Learn Tajweed Rules Course - Quran Chapter Academy" class="course-detail-hero-bg">
      <div class="course-detail-hero-overlay"></div>
      <div class="container">
        <div class="course-detail-hero-content reveal">
          <span class="course-hero-kicker">Quick and Reliable Service</span>
          <div class="course-breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
            <span>»</span>
            <a href="<?php echo esc_url( home_url( '/course/' ) ); ?>">Courses</a>
            <span>»</span>
            <strong>Learn Tajweed Rules</strong>
          </div>
          <h1 class="course-detail-hero-title">Learn <em>Tajweed</em> Rules</h1>
          <p class="course-detail-hero-lead">Learn the essential rules of Tajweed to recite the Qur’an with clarity and beauty. Understand each letter’s proper pronunciation and articulation (Makharij). Improve your fluency and avoid common recitation mistakes. Perfect for beginners and anyone wanting to enhance their Qur’anic recitation.</p>
          
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
        
        <!-- LEFT COLUMN: Course Outline, Requirements, Benefits -->
        <div class="course-content-col">
          
          <!-- About Rules of Tajweed Course -->
          <article class="detail-block reveal">
            <h2 class="detail-heading">About Rules of Tajweed Course</h2>
            <p class="detail-text">This course is designed for students who have already completed the Quran Reading course and can read Quran but want to improve their Tajweed skills. This course provides extensive practical recitation practice in order to enhance student’s confidence while applying Tajweed rules taught in basic level courses.</p>
            <p class="detail-text">One of the main principles of fluent Quranic reading is repetition and continuous practice. All basic and intermediate Tajweed rules are covered thoroughly along with intensive verse-by-verse reading practice.</p>
          </article>

          <!-- Requirements -->
          <article class="detail-block reveal delay-1">
            <h2 class="detail-heading">Requirements</h2>
            <p class="detail-text">This is the follow-up course of application of Tajweed Rules in the Quran Reading Course. Therefore, the student is required to know how to read Arabic words and must possess working knowledge of Harakaat, Sukoon, Madd, Tanween, and Shaddah.</p>
            <p class="detail-text">You just need to go through the basic Quran Reading Course first, and then you can start this Tajweed Course easily. After completing this course, students become able to recite the Holy Quran with proper rules of Tajweed and melodious pronunciation.</p>
            <div style="display:flex; gap:20px; align-items:center; margin-top:16px; flex-wrap:wrap;">
              <div style="flex:1; min-width:220px;">
                <ul class="detail-checklist" style="margin:0;">
                  <li>Basic Arabic alphabet recognition required</li>
                  <li>One-on-one personalized recitation feedback</li>
                  <li>Intensive practice on common mistakes</li>
                </ul>
              </div>
              <div style="width:170px; height:120px; flex:none; border-radius:12px; overflow:hidden; box-shadow:0 8px 22px rgba(7,61,55,0.12); border:1px solid rgba(220,182,83,0.3);">
                <img src="<?php echo esc_url( qc_asset_url( 'hero-quran.png' ) ); ?>" alt="Holy Quran Tajweed Study" style="width:100%; height:100%; object-fit:cover;">
              </div>
            </div>
          </article>

        </div>

        <!-- RIGHT COLUMN: Golden Course Structure Card (Matches Reference Image 1) -->
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
                <b>Recitation Style:</b>
                <span>Hafs ‘an ‘Asim</span>
              </li>
              <li class="structure-item">
                <div class="structure-badge-icon">✓</div>
                <b>Class Type:</b>
                <span>One-to-One</span>
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
                <span>Basic Quran Reading</span>
              </li>
              <li class="structure-item">
                <div class="structure-badge-icon">✓</div>
                <b>Course Level:</b>
                <span>Intermediate</span>
              </li>
              <li class="structure-item">
                <div class="structure-badge-icon">✓</div>
                <b>Course Period:</b>
                <span>Student’s ability</span>
              </li>
              <li class="structure-item">
                <div class="structure-badge-icon">✓</div>
                <b>Gender:</b>
                <span>Male / Female</span>
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

    <!-- SECTION 2: FULL-WIDTH SECTIONS (Rules of Tajweed Course Outline & Why Learn Tajweed) -->
    <section class="fullwidth-course-section">
      <div class="container">
        
        <!-- Full-Width Block 1: Rules of Tajweed Course Outline -->
        <article class="fullwidth-block reveal">
          <div style="display:flex; justify-content:space-between; align-items:flex-end; flex-wrap:wrap; gap:16px; margin-bottom:14px;">
            <div>
              <span class="eyebrow" style="margin-bottom:8px;">Comprehensive Curriculum</span>
              <h2 class="detail-heading" style="margin:0;">Rules of Tajweed Course Outline</h2>
            </div>
            <p class="detail-text" style="margin:0; max-width:540px;">Our comprehensive 10-point syllabus ensures complete theoretical and practical mastery of the science of Tajweed:</p>
          </div>
          
          <div class="tajweed-outline-grid">
            <div class="tajweed-outline-card">
              <span class="tajweed-num">01</span>
              <div>
                <b>Makhaarij</b>
                <p style="font-size:12px; color:#556763; margin:6px 0 0; line-height:1.45;">Points of articulation for all Arabic letters.</p>
              </div>
            </div>
            <div class="tajweed-outline-card">
              <span class="tajweed-num">02</span>
              <div>
                <b>Waqf Rules</b>
                <p style="font-size:12px; color:#556763; margin:6px 0 0; line-height:1.45;">Rules and symbols of stopping &amp; pausing in recitation.</p>
              </div>
            </div>
            <div class="tajweed-outline-card">
              <span class="tajweed-num">03</span>
              <div>
                <b>Harakāt &amp; Madd</b>
                <p style="font-size:12px; color:#556763; margin:6px 0 0; line-height:1.45;">Short, long, and compulsory prolongations.</p>
              </div>
            </div>
            <div class="tajweed-outline-card">
              <span class="tajweed-num">04</span>
              <div>
                <b>Qalqalah</b>
                <p style="font-size:12px; color:#556763; margin:6px 0 0; line-height:1.45;">The bouncing sound on Qaf, Tta, Ba, Jim, Dal.</p>
              </div>
            </div>
            <div class="tajweed-outline-card">
              <span class="tajweed-num">05</span>
              <div>
                <b>Sun &amp; Moon Letters</b>
                <p style="font-size:12px; color:#556763; margin:6px 0 0; line-height:1.45;">Huroof Shamsiyyah &amp; Qamariyyah rules.</p>
              </div>
            </div>
            <div class="tajweed-outline-card">
              <span class="tajweed-num">06</span>
              <div>
                <b>Nun Sakinah &amp; Tanween</b>
                <p style="font-size:12px; color:#556763; margin:6px 0 0; line-height:1.45;">Izhar, Ikhfa, Idgham, and Iqlab rules.</p>
              </div>
            </div>
            <div class="tajweed-outline-card">
              <span class="tajweed-num">07</span>
              <div>
                <b>Meem Sakinah Rules</b>
                <p style="font-size:12px; color:#556763; margin:6px 0 0; line-height:1.45;">Izhar, Ikhfa, and Idgham Shafawi.</p>
              </div>
            </div>
            <div class="tajweed-outline-card">
              <span class="tajweed-num">08</span>
              <div>
                <b>Recitation of Al-Fatiha</b>
                <p style="font-size:12px; color:#556763; margin:6px 0 0; line-height:1.45;">Word-by-word practical Tajweed drills.</p>
              </div>
            </div>
            <div class="tajweed-outline-card">
              <span class="tajweed-num">09</span>
              <div>
                <b>Juz Amma Recitation</b>
                <p style="font-size:12px; color:#556763; margin:6px 0 0; line-height:1.45;">Intensive reading on commonly recited Surahs.</p>
              </div>
            </div>
            <div class="tajweed-outline-card">
              <span class="tajweed-num">10</span>
              <div>
                <b>Mistake Correction Drills</b>
                <p style="font-size:12px; color:#556763; margin:6px 0 0; line-height:1.45;">Interactive exercises to fix major &amp; subtle errors.</p>
              </div>
            </div>
          </div>
        </article>

        <!-- Full-Width Block 2: Why Learn Tajweed? -->
        <article class="fullwidth-block reveal delay-1">
          <span class="eyebrow" style="margin-bottom:8px;">Spiritual &amp; Scholarly Importance</span>
          <h2 class="detail-heading">Why Learn Tajweed?</h2>
          <p class="detail-text">Tajweed is not merely an optional embellishment — it preserves the exact words, vowels, and meanings revealed by Allah to Prophet Muhammad ﷺ:</p>
          
          <ul class="detail-checklist two-col" style="margin:24px 0 10px;">
            <li>Recite the Qur’an exactly as it was revealed to the Prophet ﷺ</li>
            <li>Avoid major and minor recitation mistakes (Lahn Jaliyy &amp; Khafiyy)</li>
            <li>Earn greater spiritual rewards with every perfected letter</li>
            <li>Develop deep love, respect, and awe for the Holy Qur’an</li>
            <li>Enhance the beauty, harmony, and melody of your recitation</li>
            <li>Improve focus and heartfelt spiritual connection in daily Salah</li>
            <li>Strengthen memorisation and long-term retention of verses</li>
            <li>Follow the noble Sunnah of the Prophet Muhammad ﷺ</li>
            <li>Teach your children and family members with accuracy and authority</li>
            <li>Feel spiritually uplifted, tranquil, and connected to Allah’s divine speech</li>
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
        <span class="eyebrow light"><i></i> Perfect Your Recitation <i></i></span>
        <h2 class="fee-cta-title">Recite the Holy Quran with Perfect Tajweed</h2>
        <p class="fee-cta-desc">Master Makhaarij, Waqf, and Madd with certified Quran teachers guiding you one-on-one.<br>Flexible schedules, personal attention, and free 3-day trial.</p>
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
