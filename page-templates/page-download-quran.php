<?php
/**
 * Template Name: Download Quran Page
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
    <section class="fee-hero" aria-label="Download Quran Resources">
      <div class="fee-hero-bg-wrap">
        <img src="<?php echo esc_url( qc_asset_url( 'cta-courtyard.png' ) ); ?>" alt="Holy Quran in courtyard" class="fee-hero-bg-img">
        <div class="fee-hero-overlay"></div>
      </div>
      <div class="container fee-hero-content reveal">
        <span class="fee-hero-kicker">Free Islamic Resources</span>
        <h1 class="fee-hero-title">Download Quran</h1>
        <p class="fee-hero-lead">Access high-quality PDF downloads of all 30 Paras of the Holy Quran and Noorani Qaida for your personal study and recitation.</p>
        <div class="fee-hero-actions">
          <a href="<?php echo esc_url( home_url( '/course/' ) ); ?>" class="btn-fee-dark">Our Courses</a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-fee-gold">Book a Free Trial</a>
        </div>
      </div>
    </section>

    <!-- 30 PARAS & NOORANI QAIDA DOWNLOAD GRID -->
    <section class="section quran-download-section">
      <div class="container">
        <div class="quran-download-header reveal">
          <span class="eyebrow"><i></i> Authentic Quranic Manuscripts <i></i></span>
          <h2>Download Holy Quran (30 Paras)</h2>
          <p>Click on any Para or Noorani Qaida to read and download the complete high-quality authentic PDF directly in a new tab.</p>
        </div>

        <div class="quran-grid reveal delay-1">
          <!-- Row 1 (Paras 1 to 5) -->
          <a href="https://quranchapter.com/books/quran/para01.pdf" target="_blank" rel="noopener" class="para-card" title="Download Para 01: Alif Lam Meem">
            <div class="para-icon"><svg><use href="#i-quran-book"/></svg></div>
            <div class="para-arabic">الٓمٓ</div>
            <div class="para-english">Alif Lam Meem</div>
          </a>

          <a href="https://quranchapter.com/books/quran/para02.pdf" target="_blank" rel="noopener" class="para-card" title="Download Para 02: Sayaqool">
            <div class="para-icon"><svg><use href="#i-quran-book"/></svg></div>
            <div class="para-arabic">سَيَقُولُ</div>
            <div class="para-english">Sayaqool</div>
          </a>

          <a href="https://quranchapter.com/books/quran/para03.pdf" target="_blank" rel="noopener" class="para-card" title="Download Para 03: Tilkal Rusull">
            <div class="para-icon"><svg><use href="#i-quran-book"/></svg></div>
            <div class="para-arabic">تِلْكَ الرُّسُلُ</div>
            <div class="para-english">Tilkal Rusull</div>
          </a>

          <a href="https://quranchapter.com/books/quran/para04.pdf" target="_blank" rel="noopener" class="para-card" title="Download Para 04: Lan Tana Loo">
            <div class="para-icon"><svg><use href="#i-quran-book"/></svg></div>
            <div class="para-arabic">لَنْ تَنَالُوا</div>
            <div class="para-english">Lan Tana Loo</div>
          </a>

          <a href="https://quranchapter.com/books/quran/para05.pdf" target="_blank" rel="noopener" class="para-card" title="Download Para 05: Wal Mohsanat">
            <div class="para-icon"><svg><use href="#i-quran-book"/></svg></div>
            <div class="para-arabic">وَالْمُحْصَنَاتُ</div>
            <div class="para-english">Wal Mohsanat</div>
          </a>

          <!-- Row 2 (Paras 6 to 10) -->
          <a href="https://quranchapter.com/books/quran/para06.pdf" target="_blank" rel="noopener" class="para-card" title="Download Para 06: La Yuhibbullah">
            <div class="para-icon"><svg><use href="#i-quran-book"/></svg></div>
            <div class="para-arabic">لَا يُحِبُّ اللّٰهُ</div>
            <div class="para-english">La Yuhibbullah</div>
          </a>

          <a href="https://quranchapter.com/books/quran/para07.pdf" target="_blank" rel="noopener" class="para-card" title="Download Para 07: Wa Iza Samiu">
            <div class="para-icon"><svg><use href="#i-quran-book"/></svg></div>
            <div class="para-arabic">وَإِذَا سَمِعُوا</div>
            <div class="para-english">Wa Iza Samiu</div>
          </a>

          <a href="https://quranchapter.com/books/quran/para08.pdf" target="_blank" rel="noopener" class="para-card" title="Download Para 08: Wa Lau Annana">
            <div class="para-icon"><svg><use href="#i-quran-book"/></svg></div>
            <div class="para-arabic">وَلَوْ أَنَّنَا</div>
            <div class="para-english">Wa Lau Annana</div>
          </a>

          <a href="https://quranchapter.com/books/quran/para09.pdf" target="_blank" rel="noopener" class="para-card" title="Download Para 09: Qalal Malao">
            <div class="para-icon"><svg><use href="#i-quran-book"/></svg></div>
            <div class="para-arabic">قَالَ الْمَلَأُ</div>
            <div class="para-english">Qalal Malao</div>
          </a>

          <a href="https://quranchapter.com/books/quran/para10.pdf" target="_blank" rel="noopener" class="para-card" title="Download Para 10: Wa A'lamu">
            <div class="para-icon"><svg><use href="#i-quran-book"/></svg></div>
            <div class="para-arabic">وَاعْلَمُوا</div>
            <div class="para-english">Wa A'lamu</div>
          </a>

          <!-- Row 3 (Paras 11 to 15) -->
          <a href="https://quranchapter.com/books/quran/para11.pdf" target="_blank" rel="noopener" class="para-card" title="Download Para 11: Yatazeroon">
            <div class="para-icon"><svg><use href="#i-quran-book"/></svg></div>
            <div class="para-arabic">يَعْتَذِرُونَ</div>
            <div class="para-english">Yatazeroon</div>
          </a>

          <a href="https://quranchapter.com/books/quran/para12.pdf" target="_blank" rel="noopener" class="para-card" title="Download Para 12: Wa Mamin Da'abat">
            <div class="para-icon"><svg><use href="#i-quran-book"/></svg></div>
            <div class="para-arabic">وَمَا مِنْ دَابَّةٍ</div>
            <div class="para-english">Wa Mamin Da'abat</div>
          </a>

          <a href="https://quranchapter.com/books/quran/para13.pdf" target="_blank" rel="noopener" class="para-card" title="Download Para 13: Wa Ma Ubrioo">
            <div class="para-icon"><svg><use href="#i-quran-book"/></svg></div>
            <div class="para-arabic">وَمَا أُبَرِّئُ</div>
            <div class="para-english">Wa Ma Ubrioo</div>
          </a>

          <a href="https://quranchapter.com/books/quran/para14.pdf" target="_blank" rel="noopener" class="para-card" title="Download Para 14: Rubama">
            <div class="para-icon"><svg><use href="#i-quran-book"/></svg></div>
            <div class="para-arabic">رُبَمَا</div>
            <div class="para-english">Rubama</div>
          </a>

          <a href="https://quranchapter.com/books/quran/para15.pdf" target="_blank" rel="noopener" class="para-card" title="Download Para 15: Subhanallazi">
            <div class="para-icon"><svg><use href="#i-quran-book"/></svg></div>
            <div class="para-arabic">سُبْحَانَ الَّذِي</div>
            <div class="para-english">Subhanallazi</div>
          </a>

          <!-- Row 4 (Paras 16 to 20) -->
          <a href="https://quranchapter.com/books/quran/para16.pdf" target="_blank" rel="noopener" class="para-card" title="Download Para 16: Qal Alam">
            <div class="para-icon"><svg><use href="#i-quran-book"/></svg></div>
            <div class="para-arabic">قَالَ أَلَمْ</div>
            <div class="para-english">Qal Alam</div>
          </a>

          <a href="https://quranchapter.com/books/quran/para17.pdf" target="_blank" rel="noopener" class="para-card" title="Download Para 17: Aqtarabo">
            <div class="para-icon"><svg><use href="#i-quran-book"/></svg></div>
            <div class="para-arabic">اقْتَرَبَ</div>
            <div class="para-english">Aqtarabo</div>
          </a>

          <a href="https://quranchapter.com/books/quran/para18.pdf" target="_blank" rel="noopener" class="para-card" title="Download Para 18: Qadd Aflaha">
            <div class="para-icon"><svg><use href="#i-quran-book"/></svg></div>
            <div class="para-arabic">قَدْ أَفْلَحَ</div>
            <div class="para-english">Qadd Aflaha</div>
          </a>

          <a href="https://quranchapter.com/books/quran/para19.pdf" target="_blank" rel="noopener" class="para-card" title="Download Para 19: Wa Qalallazina">
            <div class="para-icon"><svg><use href="#i-quran-book"/></svg></div>
            <div class="para-arabic">وَقَالَ الَّذِينَ</div>
            <div class="para-english">Wa Qalallazina</div>
          </a>

          <a href="https://quranchapter.com/books/quran/para20.pdf" target="_blank" rel="noopener" class="para-card" title="Download Para 20: A'man Khalaq">
            <div class="para-icon"><svg><use href="#i-quran-book"/></svg></div>
            <div class="para-arabic">أَمَّنْ خَلَقَ</div>
            <div class="para-english">A'man Khalaq</div>
          </a>

          <!-- Row 5 (Paras 21 to 25) -->
          <a href="https://quranchapter.com/books/quran/para21.pdf" target="_blank" rel="noopener" class="para-card" title="Download Para 21: Utlu Ma Oohi">
            <div class="para-icon"><svg><use href="#i-quran-book"/></svg></div>
            <div class="para-arabic">اتْلُ مَا أُوحِيَ</div>
            <div class="para-english">Utlu Ma Oohi</div>
          </a>

          <a href="https://quranchapter.com/books/quran/para22.pdf" target="_blank" rel="noopener" class="para-card" title="Download Para 22: Wa Manyaqnut">
            <div class="para-icon"><svg><use href="#i-quran-book"/></svg></div>
            <div class="para-arabic">وَمَنْ يَّقْنُتْ</div>
            <div class="para-english">Wa Manyaqnut</div>
          </a>

          <a href="https://quranchapter.com/books/quran/para23.pdf" target="_blank" rel="noopener" class="para-card" title="Download Para 23: Wa Mali">
            <div class="para-icon"><svg><use href="#i-quran-book"/></svg></div>
            <div class="para-arabic">وَمَا لِيَ</div>
            <div class="para-english">Wa Mali</div>
          </a>

          <a href="https://quranchapter.com/books/quran/para24.pdf" target="_blank" rel="noopener" class="para-card" title="Download Para 24: Faman Azlam">
            <div class="para-icon"><svg><use href="#i-quran-book"/></svg></div>
            <div class="para-arabic">فَمَنْ أَظْلَمُ</div>
            <div class="para-english">Faman Azlam</div>
          </a>

          <a href="https://quranchapter.com/books/quran/para25.pdf" target="_blank" rel="noopener" class="para-card" title="Download Para 25: Elahe Yuruddo">
            <div class="para-icon"><svg><use href="#i-quran-book"/></svg></div>
            <div class="para-arabic">إِلَيْهِ يُرَدُّ</div>
            <div class="para-english">Elahe Yuruddo</div>
          </a>

          <!-- Row 6 (Paras 26 to 30) -->
          <a href="https://quranchapter.com/books/quran/para26.pdf" target="_blank" rel="noopener" class="para-card" title="Download Para 26: Ha'a Meem">
            <div class="para-icon"><svg><use href="#i-quran-book"/></svg></div>
            <div class="para-arabic">حٰمٓ</div>
            <div class="para-english">Ha'a Meem</div>
          </a>

          <a href="https://quranchapter.com/books/quran/para27.pdf" target="_blank" rel="noopener" class="para-card" title="Download Para 27: Qala Fama Khatbukum">
            <div class="para-icon"><svg><use href="#i-quran-book"/></svg></div>
            <div class="para-arabic">قَالَ فَمَا خَطْبُكُمْ</div>
            <div class="para-english">Qala Fama Khatbukum</div>
          </a>

          <a href="https://quranchapter.com/books/quran/para28.pdf" target="_blank" rel="noopener" class="para-card" title="Download Para 28: Qadd Sami Allah">
            <div class="para-icon"><svg><use href="#i-quran-book"/></svg></div>
            <div class="para-arabic">قَدْ سَمِعَ اللّٰهُ</div>
            <div class="para-english">Qadd Sami Allah</div>
          </a>

          <a href="https://quranchapter.com/books/quran/para29.pdf" target="_blank" rel="noopener" class="para-card" title="Download Para 29: Tabarakallazi">
            <div class="para-icon"><svg><use href="#i-quran-book"/></svg></div>
            <div class="para-arabic">تَبَارَكَ الَّذِي</div>
            <div class="para-english">Tabarakallazi</div>
          </a>

          <a href="https://quranchapter.com/books/quran/para30.pdf" target="_blank" rel="noopener" class="para-card" title="Download Para 30: Amma Yatasa'aloon">
            <div class="para-icon"><svg><use href="#i-quran-book"/></svg></div>
            <div class="para-arabic">عَمَّ يَتَسَاءَلُونَ</div>
            <div class="para-english">Amma Yatasa'aloon</div>
          </a>

          <!-- Noorani Qaida (Full-width card) -->
          <a href="https://quranchapter.com/books/nooraniqaida/NooraniQaida.pdf" target="_blank" rel="noopener" class="noorani-card" title="Download Noorani Qaida PDF">
            <div class="noorani-icon"><svg><use href="#i-quran-book"/></svg></div>
            <div class="noorani-arabic">نُورَانِي قَاعِدَه</div>
            <div class="noorani-english">Noorani Qaida</div>
          </a>
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
