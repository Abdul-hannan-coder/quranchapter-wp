<?php
/**
 * Template Name: Qaida
 */
get_header();
?>

  <main>
    <!-- HERO SECTION: Left content, clear background image, 2 buttons with arrow on right -->
    <section class="course-detail-hero" aria-label="Noorani Qaida Course Banner">
      <img src="<?php echo esc_url( qc_asset_url( 'course-qaida.png' ) ); ?>" alt="Noorani Qaida Course - Quran Chapter Academy" class="course-detail-hero-bg">
      <div class="course-detail-hero-overlay"></div>
      <div class="container">
        <div class="course-detail-hero-content reveal">
          <span class="course-hero-kicker">Quick and Reliable Service</span>
          <div class="course-breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
            <span>»</span>
            <a href="<?php echo esc_url( home_url( '/course/' ) ); ?>">Courses</a>
            <span>»</span>
            <strong>Qaida</strong>
          </div>
          <h1 class="course-detail-hero-title">Noorani <em>Qaida</em> Course</h1>
          <p class="course-detail-hero-lead">Noorani Qaida Course is a fundamental course that is taught by our tutors using Noorani Qaida syllabus. We have designed comprehensive Online Noorani Qaida Course for kids and adults (male and females).</p>
          
          <!-- Two Action Buttons in Hero: "free trial and then arrow" -->
          <div class="hero-two-buttons">
            <a href="<?php echo esc_url( home_url( '/course/' ) ); ?>" class="btn-hero-courses">
              Other Courses <svg><use href="#i-arrow"/></svg>
            </a>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-hero-trial">
              Free Trial <svg><use href="#i-arrow"/></svg>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION 1: TWO-COLUMN GRID (Overview, Why Noorani Qaida, 16 Lessons + Sticky Golden Card) -->
    <section class="course-detail-section">
      <div class="container course-detail-grid">
        
        <!-- LEFT COLUMN -->
        <div class="course-content-col">
          
          <!-- Course Overview Block -->
          <article class="detail-block reveal">
            <h2 class="detail-heading">Course Overview</h2>
            <p class="detail-text">Noorani Qaida Course is a fundamental course that is taught by our tutors using Noorani Qaida syllabus. We have designed comprehensive Online Noorani Qaida Course for kids and adults (male and females) with the help of experienced online Noorani Qaida Tutors. It is the first step for beginners to learn Quran.</p>
            <p class="detail-text">You cannot recite the Holy Quran properly without learning basic rules first. This course starts from learning basic Arabic alphabets. It is recommended for those who do not know Arabic and would like to read the Arabic language and Quran with rules of Tajweed.</p>
          </article>

          <!-- Why Noorani Qaida Course -->
          <article class="detail-block reveal delay-1">
            <h2 class="detail-heading">Why Noorani Qaida Course?</h2>
            <p class="detail-text">Noorani Qaida course is an initial first course for Quran reading. This course is required for kids before starting Quran. Adults who don’t know how to read the Quran can also learn it step by step.</p>
            <p class="detail-text">Noorani Qaida exercises help students to learn Arabic with Tajweed Rules. With the help of our expert tutors, students learn challenging pronunciation and rules with great ease.</p>
            
            <div style="display:flex; gap:20px; align-items:center; margin:18px 0; flex-wrap:wrap;">
              <div style="flex:1; min-width:240px;">
                <ul class="detail-checklist" style="margin:0;">
                  <li>Individual letter recognition &amp; correct Makhaarij</li>
                  <li>Connected compound letters (Huroof e Murakkabat)</li>
                  <li>Short &amp; long vowels with accurate elongation</li>
                  <li>Interactive digital whiteboards &amp; step-by-step guidance</li>
                </ul>
              </div>
              <div style="width:200px; height:150px; flex:none; border-radius:12px; overflow:hidden; box-shadow:0 8px 22px rgba(7,61,55,0.12); border:1px solid rgba(220,182,83,0.3);">
                <img src="<?php echo esc_url( qc_asset_url( 'hero-child.png' ) ); ?>" alt="Child learning Noorani Qaida" style="width:100%; height:100%; object-fit:cover;">
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
                <span>Beginner</span>
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

    <!-- SECTION 2: FULL-WIDTH SECTIONS (16 Lessons Grid + Islamic Knowledge + Benefits) -->
    <section class="fullwidth-course-section">
      <div class="container">
        
        <!-- Full-Width Block 1: 16 Noorani Qaida Lessons Grid -->
        <article class="fullwidth-block reveal">
          <div style="display:flex; justify-content:space-between; align-items:flex-end; flex-wrap:wrap; gap:16px; margin-bottom:12px;">
            <div>
              <span class="eyebrow" style="margin-bottom:8px;">Structured Syllabus</span>
              <h2 class="detail-heading" style="margin:0;">Noorani Qaida Lessons (1 to 16)</h2>
            </div>
            <p class="detail-text" style="margin:0; max-width:540px;">All 16 Noorani Qaida lessons taught methodically by certified one-to-one tutors to build a solid Tajweed foundation:</p>
          </div>
          
          <div class="qaida-lessons-grid">
            <div class="qaida-lesson-card">
              <span class="lesson-number-badge">01</span>
              <div class="lesson-text-wrap">
                <span class="lesson-label">Lesson 1</span>
                <span class="lesson-title">Arabic Alphabets (Huroof e Mufridaat)</span>
              </div>
            </div>
            <div class="qaida-lesson-card">
              <span class="lesson-number-badge">02</span>
              <div class="lesson-text-wrap">
                <span class="lesson-label">Lesson 2</span>
                <span class="lesson-title">Compounds Letters (Huroof e Murakkabat)</span>
              </div>
            </div>
            <div class="qaida-lesson-card">
              <span class="lesson-number-badge">03</span>
              <div class="lesson-text-wrap">
                <span class="lesson-label">Lesson 3</span>
                <span class="lesson-title">Abbreviated Letters (Huroof e Muqta’at)</span>
              </div>
            </div>
            <div class="qaida-lesson-card">
              <span class="lesson-number-badge">04</span>
              <div class="lesson-text-wrap">
                <span class="lesson-label">Lesson 4</span>
                <span class="lesson-title">Movements (Harakaat - Zabar, Zair, Paish)</span>
              </div>
            </div>
            <div class="qaida-lesson-card">
              <span class="lesson-number-badge">05</span>
              <div class="lesson-text-wrap">
                <span class="lesson-label">Lesson 5</span>
                <span class="lesson-title">Nunnation (Tanween - Do Zabar, Zair, Paish)</span>
              </div>
            </div>
            <div class="qaida-lesson-card">
              <span class="lesson-number-badge">06</span>
              <div class="lesson-text-wrap">
                <span class="lesson-label">Lesson 6</span>
                <span class="lesson-title">Exercises of Harakaat and Tanween</span>
              </div>
            </div>
            <div class="qaida-lesson-card">
              <span class="lesson-number-badge">07</span>
              <div class="lesson-text-wrap">
                <span class="lesson-label">Lesson 7</span>
                <span class="lesson-title">Standing Movements (Khari Harakaat)</span>
              </div>
            </div>
            <div class="qaida-lesson-card">
              <span class="lesson-number-badge">08</span>
              <div class="lesson-text-wrap">
                <span class="lesson-label">Lesson 8</span>
                <span class="lesson-title">Maddah and Leen Letters</span>
              </div>
            </div>
            <div class="qaida-lesson-card">
              <span class="lesson-number-badge">09</span>
              <div class="lesson-text-wrap">
                <span class="lesson-label">Lesson 9</span>
                <span class="lesson-title">Movements, Maddah, Leen &amp; Tanween</span>
              </div>
            </div>
            <div class="qaida-lesson-card">
              <span class="lesson-number-badge">10</span>
              <div class="lesson-text-wrap">
                <span class="lesson-label">Lesson 10</span>
                <span class="lesson-title">Sukoon or Jazm</span>
              </div>
            </div>
            <div class="qaida-lesson-card">
              <span class="lesson-number-badge">11</span>
              <div class="lesson-text-wrap">
                <span class="lesson-label">Lesson 11</span>
                <span class="lesson-title">Exercise of Sukoon or Jazm</span>
              </div>
            </div>
            <div class="qaida-lesson-card">
              <span class="lesson-number-badge">12</span>
              <div class="lesson-text-wrap">
                <span class="lesson-label">Lesson 12</span>
                <span class="lesson-title">Tashdeed (Shaddah)</span>
              </div>
            </div>
            <div class="qaida-lesson-card">
              <span class="lesson-number-badge">13</span>
              <div class="lesson-text-wrap">
                <span class="lesson-label">Lesson 13</span>
                <span class="lesson-title">Exercise of Tashdeed</span>
              </div>
            </div>
            <div class="qaida-lesson-card">
              <span class="lesson-number-badge">14</span>
              <div class="lesson-text-wrap">
                <span class="lesson-label">Lesson 14</span>
                <span class="lesson-title">Exercise of Tashdeed with Sukoon</span>
              </div>
            </div>
            <div class="qaida-lesson-card">
              <span class="lesson-number-badge">15</span>
              <div class="lesson-text-wrap">
                <span class="lesson-label">Lesson 15</span>
                <span class="lesson-title">Exercise of Tashdeed with Tashdeed</span>
              </div>
            </div>
            <div class="qaida-lesson-card">
              <span class="lesson-number-badge">16</span>
              <div class="lesson-text-wrap">
                <span class="lesson-label">Lesson 16</span>
                <span class="lesson-title">Tashdeed after Maddah Letter</span>
              </div>
            </div>
          </div>
        </article>
        
        <!-- Full-Width Block 1: Let’s Learn Basic Islamic Knowledge -->
        <article class="fullwidth-block reveal">
          <h2 class="detail-heading">Let’s Learn Basic Islamic Knowledge</h2>
          <p class="detail-text">In this Course, your Kids will not learn Noorani Qaida only. During this course, the tutor gives <strong>20% of each class time</strong> to develop a strong moral character, Islamic values, obedience, and honesty of the student. We provide basic Islamic knowledge such as:</p>
          
          <div class="islamic-knowledge-grid">
            <div class="islamic-knowledge-item">
              <b>Basic Aqaa’id</b>
              <p>Belief in Allah, His Angels, Holy Books, and Holy Prophets.</p>
            </div>
            <div class="islamic-knowledge-item">
              <b>Pillars of Islam</b>
              <p>Shahadah, Salah, Zakah, Sawm (Fasting), and Hajj.</p>
            </div>
            <div class="islamic-knowledge-item">
              <b>Method of Making Wudu</b>
              <p>Step-by-step correct practice and Sunnah manners of purification.</p>
            </div>
            <div class="islamic-knowledge-item">
              <b>Practice of 5 Times Prayer</b>
              <p>Salah postures, timings, and essential recitation rules.</p>
            </div>
            <div class="islamic-knowledge-item">
              <b>Essential Memorization</b>
              <p>Small Surahs, Six Kalimaat, Imaan-e-Mufassil &amp; Mujmal, Ayah-tul-Kursi, Dua-e-Qunoot.</p>
            </div>
            <div class="islamic-knowledge-item">
              <b>Masnoon Daily Duas</b>
              <p>Duas for waking up, sleeping, eating, traveling, entering home &amp; mosque.</p>
            </div>
            <div class="islamic-knowledge-item">
              <b>Islamic Manners of Daily Life</b>
              <p>Respect for parents, honesty, kindness, modesty, and etiquette.</p>
            </div>
            <div class="islamic-knowledge-item">
              <b>Islamic &amp; Moral Stories</b>
              <p>Inspiring stories of the Prophets and righteous companions for kids.</p>
            </div>
          </div>
        </article>

        <!-- Full-Width Block 2: Why Choose Quran Chapter Academy? -->
        <article class="fullwidth-block reveal">
          <h2 class="detail-heading">Why Choose Quran Chapter Academy for Noorani Qaida Course?</h2>
          <p class="detail-text">Quran Chapter Academy is a leading Quran Academy in the field of online Quran Teaching. Our Noorani Qaida Course is <strong>100% effective for beginners</strong>. Our one-to-one online Noorani Qaida classes are fully focused, so you get personal attention and receive full time dedicated by your assigned teacher. You are not bound to be present in a physical classroom like a local mosque. You can see the content of your lesson online from anywhere in the world and choose classes at your ideal time as per your busy schedule. We have a large number of satisfied students and we are sure that choosing Quran Chapter Academy for Noorani Qaida Course is the best option for you and your kids.</p>

          <h3 style="font-family:var(--serif); font-size:24px; color:#073d37; margin:32px 0 14px;">A Specially Designed Noorani Qaida for Kids Course</h3>
          <p class="detail-text">The best thing that parents can offer to their kids is to teach them Quran and Islam. It is well known that the best time to learn anything is a young age. That’s why we have specially designed our Noorani Qaida Course for kids which provides a fun and exciting atmosphere to learn Quran. Our tutors teach with interactive and enjoyable methods in order to make the learning easy and joyful for your child. Our Tutors teach Noorani Qaida with Tajweed rules step by step in such a way that even a 5 years old kid can apply these rules without any difficulty. It will give him/her confidence to complete studying the Quran with love and dedication.</p>
        </article>

        <!-- Full-Width Block 3: Benefits of Noorani Qaida Course & How to Learn -->
        <article class="fullwidth-block reveal">
          <h2 class="detail-heading">Benefits of Noorani Qaida Course</h2>
          <p class="detail-text">Noorani Qaida Course is exceptionally beneficial for those who are not native Arabs as they cannot pronounce Arabic words until they learn how to pronounce the Arabic alphabets. This course teaches the beginners accurate pronunciation of Arabic letters in Arabic accent. After learning Noorani Qaida course, students become able to read the Holy Quran with rules of Tajweed and correct pronunciation.</p>
          
          <h3 style="font-family:var(--serif); font-size:24px; color:#073d37; margin:28px 0 14px;">How to Learn Noorani Qaida Course?</h3>
          <p class="detail-text">With the help of computer technology, now you can learn Noorani Qaida directly from your mobile, computer or laptop. It is like taking regular classes but with a personal online tutor. Our Noorani Qaida course ensures that the starter can learn it in a very easy way. Students from every corner of the world are learning Noorani Qaida online with the help of our hard-working Noorani Qaida Tutors.</p>
          
          <h3 style="font-family:var(--serif); font-size:24px; color:#073d37; margin:28px 0 14px;">Affordable Fees</h3>
          <p class="detail-text">Our aim is to offer the best Noorani Qaida course and incomparable services of Noorani Qaida teaching to your kids with affordable fees. As compared to other educational institutions that charge a very high price for their courses, our online course is a much more preferred option, both in terms of learning and cost.</p>
        </article>

      </div>
    </section>

    <!-- SECTION 3: FULL-WIDTH LAST CTA BANNER (As requested: "last cta show ok and best show for all pages okay") -->
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
