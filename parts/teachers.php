<?php
/**
 * Template Part: Teachers Section
 *
 * @package QuranChapter
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- TEACHERS SECTION -->
<section class="section teachers-v3" id="teachers">
  <div class="container tv3-container">

    <div class="tv3-head reveal">
      <span class="eyebrow light"><i></i> Meet our team <i></i></span>
      <h2>Certified &amp; Patient <em>Quran Teachers</em></h2>
      <p class="tv3-lead">Learn with qualified, caring instructors chosen around your goals and comfort. Our tutors provide patient, one-on-one guidance to ensure proper Tajweed and confident Quran recitation.</p>

      <div class="teachers-features">
        <div class="tf-item">
          <span class="tf-check">✓</span>
          <div>
            <b>Male &amp; Female Tutors Available</b>
            <small>Separate patient tutors for sisters, kids &amp; brothers.</small>
          </div>
        </div>
        <div class="tf-item">
          <span class="tf-check">✓</span>
          <div>
            <b>1-on-1 Personalized Attention</b>
            <small>Dedicated patient instruction focused entirely on your pace.</small>
          </div>
        </div>
        <div class="tf-item">
          <span class="tf-check">✓</span>
          <div>
            <b>Flexible Schedules 24/7</b>
            <small>Convenient class timings tailored around your time zone.</small>
          </div>
        </div>
      </div>
    </div>

    <div class="team-grid reveal delay-1">
      <!-- Row 1: Male teachers -->
      <figure class="tm tm-lead">
        <img src="<?php echo esc_url( qc_asset_url( 'teacher-1.jpg' ) ); ?>" alt="Allama Hafiz Qari Muhammad Nadeem Saifi">
      </figure>
      <figure class="tm">
        <img src="<?php echo esc_url( qc_asset_url( 'teacher-2.jpg' ) ); ?>" alt="Qari &amp; Hafiz Naeem Saqi" loading="lazy">
      </figure>
      <figure class="tm">
        <img src="<?php echo esc_url( qc_asset_url( 'teacher-3.jpg' ) ); ?>" alt="Qari &amp; Hafiz Muhammad Yousaf" loading="lazy">
      </figure>

      <!-- Row 2: Female teachers -->
      <figure class="tm">
        <img src="<?php echo esc_url( qc_asset_url( 'teacher-4.jpg' ) ); ?>" alt="Hafiza Qaria Aalima Zunaira Saleem" loading="lazy">
      </figure>
      <figure class="tm">
        <img src="<?php echo esc_url( qc_asset_url( 'teacher-5.jpg' ) ); ?>" alt="Hafiza Qaria Aalima Aneela Manzoor" loading="lazy">
      </figure>
      <figure class="tm">
        <img src="<?php echo esc_url( qc_asset_url( 'teacher-6.jpg' ) ); ?>" alt="Qaria Aalima Kashmala Saleem" loading="lazy">
      </figure>
    </div>

    <!-- CTAs centered under gallery -->
    <div class="teachers-actions reveal delay-2">
      <a class="btn btn-gold" href="#free-trial">Book 7-Days Free Trial <svg><use href="#i-arrow"/></svg></a>
      <a class="btn btn-whatsapp" href="https://wa.me/447466484751?text=Hello%2C%20I%20would%20like%20a%20free%20consultation" target="_blank" rel="noopener">Free Consultation <svg class="btn-wa-svg"><use href="#i-whatsapp"/></svg></a>
    </div>

  </div>
</section>