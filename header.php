<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<svg class="svg-sprite" aria-hidden="true">
    <symbol id="i-phone" viewBox="0 0 24 24"><path d="M22 16.9v3a2 2 0 0 1-2.18 2 19.8 19.8 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.12 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.9.33 1.78.62 2.63a2 2 0 0 1-.45 2.11L8 9.73a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.85.29 1.73.5 2.63.62A2 2 0 0 1 22 16.9z"/></symbol>
    <symbol id="i-mail" viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></symbol>
    <symbol id="i-pin" viewBox="0 0 24 24"><path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0z"/><circle cx="12" cy="10" r="2.5"/></symbol>
    <symbol id="i-facebook" viewBox="0 0 24 24">
      <path fill="currentColor" stroke="none" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
    </symbol>
    <symbol id="i-whatsapp" viewBox="0 0 24 24">
      <path fill="currentColor" stroke="none" d="M12.03 2.01c-5.5 0-9.96 4.46-9.96 9.96 0 1.77.46 3.49 1.34 5.01L2 22l5.24-1.37c1.46.8 3.11 1.23 4.79 1.23 5.5 0 9.96-4.46 9.96-9.96 0-2.66-1.04-5.17-2.92-7.05A9.9 9.9 0 0 0 12.03 2.01zm0 18.23c-1.51 0-2.99-.4-4.29-1.17l-.31-.18-3.19.84.85-3.11-.2-.32a8.19 8.19 0 0 1-1.25-4.43c0-4.52 3.68-8.2 8.2-8.2 2.19 0 4.26.85 5.81 2.4 1.55 1.55 2.41 3.62 2.41 5.81 0 4.52-3.68 8.26-8.22 8.26zm4.18-5.74c-.23-.11-1.35-.67-1.56-.74-.21-.08-.36-.11-.52.11-.15.23-.59.74-.72.9-.13.15-.27.17-.5.06-.23-.11-.96-.35-1.83-1.13-.68-.6-1.14-1.35-1.27-1.58-.13-.23-.01-.35.1-.46.1-.1.23-.27.34-.4.11-.14.15-.23.23-.39.08-.15.04-.29-.02-.4-.06-.12-.52-1.24-.71-1.7-.19-.44-.38-.38-.52-.39-.13-.01-.29-.01-.44-.01-.15 0-.4.06-.61.29-.21.23-.81.79-.81 1.92 0 1.13.82 2.23.94 2.38.11.15 1.62 2.47 3.92 3.47.55.24.97.38 1.31.49.55.17 1.05.15 1.45.09.44-.07 1.35-.55 1.55-1.09.19-.54.19-1 .13-1.09-.06-.09-.21-.15-.44-.27z"/>
    </symbol>
    <symbol id="i-instagram" viewBox="0 0 24 24">
      <path fill="currentColor" stroke="none" d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
    </symbol>
    <symbol id="i-book" viewBox="0 0 24 24"><path d="M3 5.5A4.5 4.5 0 0 1 7.5 4H11v15H7.5A4.5 4.5 0 0 0 3 20.5zM21 5.5A4.5 4.5 0 0 0 16.5 4H13v15h3.5a4.5 4.5 0 0 1 4.5 1.5z"/></symbol>
    <symbol id="i-student" viewBox="0 0 24 24"><circle cx="12" cy="6" r="3"/><path d="M5 21v-3a7 7 0 0 1 14 0v3M8 13l4 3 4-3"/></symbol>
    <symbol id="i-clock" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></symbol>
    <symbol id="i-users" viewBox="0 0 24 24"><circle cx="8" cy="8" r="3"/><circle cx="17" cy="9" r="2.5"/><path d="M2.5 20v-2a5.5 5.5 0 0 1 11 0v2M14 15a4.5 4.5 0 0 1 7.5 3.3V20"/></symbol>
    <symbol id="i-arrow" viewBox="0 0 24 24"><path d="M5 12h14M14 7l5 5-5 5"/></symbol>
    <symbol id="i-globe" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></symbol>
    <symbol id="i-check" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></symbol>
    <symbol id="i-award" viewBox="0 0 24 24"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/></symbol>
    <symbol id="i-star" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></symbol>
    <symbol id="i-calendar" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></symbol>
    <symbol id="i-mosque" viewBox="0 0 32 32"><path fill="currentColor" stroke="none" d="M6 9c0-.6.4-1 1-1h2c.6 0 1 .4 1 1v2H6V9zm1.5-6.5a1 1 0 0 1 1 0l1 3.5h-3l1-3.5zM5 12h5v15H5V12zm9-3.5C16.5 5 19.8 3.5 21 2.5c1.2 1 4.5 2.5 7 6 .8 1 1 2 1 3.5H13c0-1.5.2-2.5 1-3.5zm-2 5.5h18v13h-4v-4.5a3.5 3.5 0 0 0-7 0V27H12V14zm5.5 13v-4.5a1.5 1.5 0 0 1 3 0V27h-3z"/></symbol>
    <symbol id="i-quran-book" viewBox="0 0 32 32"><path fill="currentColor" stroke="none" d="M16 8.2c-3.1-2.1-6.8-2.7-10.4-2.6-.9 0-1.6.7-1.6 1.6v14.1c0 .7.5 1.3 1.2 1.5 3.3.6 6.7 1.4 9.6 3.4.7.5 1.7.5 2.4 0 2.9-2 6.3-2.8 9.6-3.4.7-.2 1.2-.8 1.2-1.5V7.2c0-.9-.7-1.6-1.6-1.6-3.6-.1-7.3.5-10.4 2.6zm-1.5 13.7c-2.7-1.6-5.8-2.3-8.9-2.7V7.6c2.8.2 5.5.9 8 2.2v12.1zm11.9-2.7c-3.1.4-6.2 1.1-8.9 2.7V9.8c2.5-1.3 5.2-2 8-2.2v11.6z"/></symbol>
    <symbol id="i-download" viewBox="0 0 24 24"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></symbol>
    <symbol id="i-home" viewBox="0 0 24 24"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></symbol>
  </svg>

<!-- TOP BAR 1: AYAT -->
  <div class="ayat-bar" lang="ar" dir="rtl">
    <div class="container">اَلْحَمْدُ لِلّٰہِ رَبِّ الْعٰلَمِیْنَ وَ الصَّلٰوۃُ وَالسَّلَامُ علٰی سَیِّدِ الْمُرْسَلِیْنَ اَمَّا بَعْدُ فَاَعُوْذُ بِاللّٰہِ مِنَ الشَیْطٰنِ الرَّجِیْمِ ؕ بِسْمِ اللّٰہِ الرَّحْمٰنِ الرَّ حِیْمِ</div>
  </div>
  <!-- TOP BAR 2: CONTACT DETAILS -->
  <div class="bismillah topbar-v3">
    <div class="container topbar-inner">
      <a class="topbar-wa-link" href="https://wa.me/447466484751?text=Hello%2C%20I%20would%20like%20a%20free%20consultation" target="_blank" rel="noopener"><svg class="topbar-wa-svg"><use href="#i-whatsapp"/></svg> +44 7466 484751</a>
      <a href="mailto:quranchapterofficial@gmail.com"><svg><use href="#i-mail"/></svg> quranchapterofficial@gmail.com</a>
      <a class="topbar-wa-link" href="https://wa.me/447466484751?text=Hello%2C%20I%20would%20like%20a%20free%20consultation" target="_blank" rel="noopener"><svg class="topbar-wa-svg"><use href="#i-whatsapp"/></svg> +44 7466 484751</a>
      <small>Learn Quran · Build Character · A Better Tomorrow</small>
    </div>
  </div>

  <!-- MAIN HEADER (sticky) -->
<?php
if ( ! function_exists( 'qc_header_menu_fallback' ) ) {
  /** Shown until a menu is assigned to "Primary" in Appearance → Menus. */
  function qc_header_menu_fallback() {
    if ( is_front_page() || is_page( 'online-quran-academy' ) || is_page_template( 'page-online-quran-academy.php' ) ) {
      $items = array(
        '#home'       => 'Home',
        '#about'      => 'About',
        '#courses'    => 'Courses',
        '#free-trial' => 'Contact',
      );
      echo '<ul class="qc-menu">';
      foreach ( $items as $anchor => $label ) {
        printf(
          '<li class="menu-item"><a href="%s">%s</a></li>',
          esc_attr( $anchor ),
          esc_html( $label )
        );
      }
      echo '</ul>';
    } else {
      $items = array(
        '/'                      => 'Home',
        '/online-quran-academy/' => 'Online Quran Academy',
        '/about/'                => 'About',
        '/course/'               => 'Courses',
        '/fee/'                  => 'Fee',
        '/download-quran/'       => 'Download Quran',
        '/contact/'              => 'Contact',
      );
      echo '<ul class="qc-menu">';
      foreach ( $items as $path => $label ) {
        $slug   = trim( $path, '/' );
        $active = ( '' === $slug ) ? is_front_page() : is_page( $slug );
        printf(
          '<li class="menu-item%s"><a href="%s">%s</a></li>',
          $active ? ' current-menu-item' : '',
          esc_url( home_url( $path ) ),
          esc_html( $label )
        );
      }
      echo '</ul>';
    }
  }
}
$is_single_landing = is_front_page() || is_page( 'online-quran-academy' ) || is_page_template( 'page-online-quran-academy.php' );
$qc_cta_url        = $is_single_landing ? '#free-trial' : home_url( '/online-quran-academy/#free-trial' );
?>
<header class="qc-header" id="home">
  <div class="container qc-header-inner">

    <div class="qc-brand">
      <?php if ( has_custom_logo() ) : ?>
        <?php the_custom_logo(); ?>
      <?php else : ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> home">
          <img src="<?php echo esc_url( qc_asset_url( 'logo.jpg' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
        </a>
      <?php endif; ?>
    </div>

    <nav class="qc-nav" id="qc-nav" aria-label="Primary">
      <div class="qc-drawer-head">
        <span class="qc-drawer-title">Menu</span>
        <button class="qc-close" type="button" aria-label="Close menu">
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 6l12 12M18 6L6 18" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/></svg>
        </button>
      </div>

      <?php
      if ( has_nav_menu( 'primary' ) ) {
        wp_nav_menu(
          array(
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'qc-menu',
            'depth'          => 2,
            'fallback_cb'    => 'qc_header_menu_fallback',
          )
        );
      } else {
        qc_header_menu_fallback();
      }
      ?>

      <div class="qc-drawer-foot">
        <a class="qc-cta" href="<?php echo esc_url( $qc_cta_url ); ?>">Book a Free Trial
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17L17 7M17 7H7M17 7V17" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <a href="https://wa.me/447466484751?text=Hello%2C%20I%20would%20like%20a%20free%20consultation" target="_blank" rel="noopener"><svg class="qc-fill"><use href="#i-whatsapp"/></svg> WhatsApp us (+44 7466 484751)</a>
        <a href="mailto:quranchapterofficial@gmail.com"><svg><use href="#i-mail"/></svg> quranchapterofficial@gmail.com</a>
      </div>
    </nav>

    <a class="qc-cta" href="<?php echo esc_url( $qc_cta_url ); ?>">Book 7-Days Free Trial
      <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17L17 7M17 7H7M17 7V17" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
    </a>

    <button class="qc-toggle" type="button" aria-label="Open menu" aria-expanded="false" aria-controls="qc-nav">
      <span></span><span></span><span></span>
    </button>
  </div>
  <div class="qc-overlay" aria-hidden="true"></div>
</header>