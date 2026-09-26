<?php
/**
 * Quran Chapter Theme Functions
 *
 * @package QuranChapter
 */

/**
 * Remove WordPress block/global styles that conflict with theme CSS.
 */
function qc_remove_wp_block_styles() {
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'global-styles' );
    wp_dequeue_style( 'classic-theme-styles' );
    wp_dequeue_style( 'core-block-supports' );
    wp_deregister_style( 'core-block-supports' );
    remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
    remove_action( 'wp_footer', 'wp_enqueue_global_styles', 1 );
}
add_action( 'wp_enqueue_scripts', 'qc_remove_wp_block_styles', 100 );

/**
 * Redirect root URL to /online-quran-academy/ (production only)
 */
function qc_redirect_home_to_slug() {
    if ( is_front_page() && ! is_page( 'online-quran-academy' ) && ! is_page( 'home' ) ) {
        $page = get_page_by_path( 'online-quran-academy' );
        if ( $page ) {
            wp_redirect( home_url( '/online-quran-academy/' ), 301 );
            exit;
        }
    }
}
add_action( 'template_redirect', 'qc_redirect_home_to_slug' );

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'QC_VERSION', '1.0.0' );

/**
 * Theme setup and support.
 */
function qc_setup() {
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 80,
			'width'       => 240,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'quranchapter' ),
			'footer'  => __( 'Footer Menu', 'quranchapter' ),
		)
	);
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
	);
}
add_action( 'after_setup_theme', 'qc_setup' );

/**
 * Enqueue scripts and styles.
 */
function qc_enqueue_scripts() {
	wp_enqueue_style(
		'qc-google-fonts',
		'https://fonts.googleapis.com/css2?family=Amiri:wght@700&family=Cormorant+Garamond:ital,wght@0,600;0,700;1,600&family=Outfit:wght@300;400;500;600;700&display=swap',
		array(),
		null
	);
	wp_enqueue_style( 'qc-style', get_stylesheet_uri(), array( 'qc-google-fonts' ), QC_VERSION );
	wp_enqueue_script( 'qc-script', get_template_directory_uri() . '/js/script.js', array(), QC_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'qc_enqueue_scripts' );

function qc_resource_hints( $urls, $relation_type ) {
	if ( 'preconnect' === $relation_type ) {
		$urls[] = array( 'href' => 'https://fonts.googleapis.com' );
		$urls[] = array( 'href' => 'https://fonts.gstatic.com', 'crossorigin' => 'anonymous' );
	}
	return $urls;
}
add_filter( 'wp_resource_hints', 'qc_resource_hints', 10, 2 );

function qc_body_classes( $classes ) {
	if ( is_page_template( 'page-online-quran-academy.php' ) || is_page( 'online-quran-academy' ) ) {
		$classes[] = 'page-online-quran-academy';
	} elseif ( is_page_template( 'page-about.php' ) || is_page( 'about' ) ) {
		$classes[] = 'page-about';
	} elseif ( is_page_template( 'page-contact.php' ) || is_page( 'contact' ) ) {
		$classes[] = 'page-contact';
	} elseif ( is_page_template( 'page-course.php' ) || is_page( 'course' ) || is_page( 'courses' ) ) {
		$classes[] = 'page-courses';
	} elseif ( is_page_template( 'page-fee.php' ) || is_page( 'fee' ) ) {
		$classes[] = 'page-fee';
	} elseif ( is_page_template( 'page-download-quran.php' ) || is_page( 'download-quran' ) || is_page( 'download' ) ) {
		$classes[] = 'page-download';
	} elseif ( is_page_template( 'page-arabic-language.php' ) || is_page_template( 'page-nazra-quran.php' ) || is_page_template( 'page-quran-translation.php' ) || is_page_template( 'page-learn-tajweed-rules.php' ) || is_page_template( 'page-namaz.php' ) || is_page_template( 'page-qaida.php' ) ) {
		$classes[] = 'page-course-detail';
	}
	return $classes;
}
add_filter( 'body_class', 'qc_body_classes' );

/**
 * Custom Nav Walker for qch- prefixed flat HTML menu structure.
 */
class QC_Nav_Walker extends Walker_Nav_Menu {
	public function start_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '<div class="dropdown-menu">';
	}

	public function end_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '</div>';
	}

	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$classes   = empty( $item->classes ) ? array() : (array) $item->classes;
		$is_active = in_array( 'current-menu-item', $classes ) || in_array( 'current-menu-ancestor', $classes );
		$has_children = in_array( 'menu-item-has-children', $classes );

		if ( $has_children && $depth === 0 ) {
			$output .= '<div class="nav-dropdown">';
			$output .= '<button type="button" class="' . ( $is_active ? 'active' : '' ) . '" onclick="location.href=\'' . esc_url( $item->url ) . '\'">' . esc_html( $item->title ) . '</button>';
		} else {
			$active_class = $is_active ? 'active' : '';
			$output      .= '<a class="' . esc_attr( $active_class ) . '" href="' . esc_url( $item->url ) . '">' . esc_html( $item->title ) . '</a>';
		}
	}

	public function end_el( &$output, $item, $depth = 0, $args = null ) {
		$classes   = empty( $item->classes ) ? array() : (array) $item->classes;
		$has_children = in_array( 'menu-item-has-children', $classes );

		if ( $has_children && $depth === 0 ) {
			$output .= '</div>';
		}
	}
}

function qc_primary_menu_fallback() {
	if ( is_front_page() || is_page( 'online-quran-academy' ) || is_page_template( 'page-online-quran-academy.php' ) ) {
		echo '<div class="nav-links">';
		echo '<a href="#home">Home</a>';
		echo '<a href="#about">About</a>';
		echo '<a href="#courses">Courses</a>';
		echo '<a href="#free-trial">Contact</a>';
		echo '</div>';
	} else {
		$home_url    = home_url( '/' );
		$about_url   = home_url( '/online-quran-academy/#about' );
		$course_url  = home_url( '/online-quran-academy/#courses' );
		$contact_url = home_url( '/online-quran-academy/#free-trial' );

		$is_home    = is_front_page();
		$is_about   = is_page( 'about' ) || is_page_template( 'page-about.php' );
		$is_course  = is_page( 'course' ) || is_page( 'courses' ) || is_page_template( 'page-course.php' );
		$is_contact = is_page( 'contact' ) || is_page_template( 'page-contact.php' );

		echo '<div class="nav-links">';
		echo '<a class="' . ( $is_home ? 'active' : '' ) . '" href="' . esc_url( $home_url ) . '">Home</a>';
		echo '<a class="' . ( $is_about ? 'active' : '' ) . '" href="' . esc_url( $about_url ) . '">About</a>';
		echo '<a class="' . ( $is_course ? 'active' : '' ) . '" href="' . esc_url( $course_url ) . '">Courses</a>';
		echo '<a class="' . ( $is_contact ? 'active' : '' ) . '" href="' . esc_url( $contact_url ) . '">Contact</a>';
		echo '</div>';
	}
}


/**
 * Get media library asset URL with fallback to local theme assets.
 */
function qc_asset_url( $filename ) {
	static $cdn_map = array(
		'about-hero.jpg'            => 'https://quranchapter.com/wp-content/uploads/2026/09/about-hero.jpg',
		'contact-hero.jpg'          => 'https://quranchapter.com/wp-content/uploads/2026/09/contact-hero.jpg',
		'course-arabic.png'         => 'https://quranchapter.com/wp-content/uploads/2026/09/course-arabic.png',
		'course-namaz.png'          => 'https://quranchapter.com/wp-content/uploads/2026/09/course-namaz.png',
		'course-qaida.png'           => 'https://quranchapter.com/wp-content/uploads/2026/09/course-qaida.png',
		'courses-bg-v2.png'         => 'https://quranchapter.com/wp-content/uploads/2026/09/courses-bg-v2.png',
		'cta-courtyard.png'         => 'https://quranchapter.com/wp-content/uploads/2026/09/cta-courtyard.png',
		'cta-family.png'            => 'https://quranchapter.com/wp-content/uploads/2026/09/cta-family.png',
		'cta-quran.png'             => 'https://quranchapter.com/wp-content/uploads/2026/09/cta-quran.png',
		'fee-hero.jpg'              => 'https://quranchapter.com/wp-content/uploads/2026/09/fee-hero.jpg',
		'flag-australia.png'        => 'https://quranchapter.com/wp-content/uploads/2026/09/flag-australia.png',
		'flag-canada.png'           => 'https://quranchapter.com/wp-content/uploads/2026/09/flag-canada.png',
		'flag-germany.png'          => 'https://quranchapter.com/wp-content/uploads/2026/09/flag-germany.png',
		'flag-uk.png'               => 'https://quranchapter.com/wp-content/uploads/2026/09/flag-uk.png',
		'flag-usa.png'              => 'https://quranchapter.com/wp-content/uploads/2026/09/flag-usa.png',
		'hero-child.png'            => 'https://quranchapter.com/wp-content/uploads/2026/09/hero-child.png',
		'hero-female-tutor.png'     => 'https://quranchapter.com/wp-content/uploads/2026/09/hero-female-tutor.png',
		'hero-guided-study.png'     => 'https://quranchapter.com/wp-content/uploads/2026/09/hero-guided-study.png',
		'hero-home-v3.png'          => 'https://quranchapter.com/wp-content/uploads/2026/09/hero-home-v3.png',
		'hero-quran.png'            => 'https://quranchapter.com/wp-content/uploads/2026/09/hero-quran.png',
		'logo.jpg'                  => 'https://quranchapter.com/wp-content/uploads/2026/09/logo.webp',
		'online-teacher.png'        => 'https://quranchapter.com/wp-content/uploads/2026/09/online-teacher.png',
		'teacher-1.jpg'             => 'https://quranchapter.com/wp-content/uploads/2026/09/teacher-1.jpg',
		'teacher-2.jpg'             => 'https://quranchapter.com/wp-content/uploads/2026/09/teacher-2.jpg',
		'teacher-3.jpg'             => 'https://quranchapter.com/wp-content/uploads/2026/09/teacher-3.jpg',
		'teacher-4.jpg'             => 'https://quranchapter.com/wp-content/uploads/2026/09/teacher-4.jpg',
		'teacher-5.jpg'             => 'https://quranchapter.com/wp-content/uploads/2026/09/teacher-5.jpg',
		'teacher-6.jpg'             => 'https://quranchapter.com/wp-content/uploads/2026/09/teacher-6.jpg',
		'team-bg-v2.png'            => 'https://quranchapter.com/wp-content/uploads/2026/09/team-bg-v2.png',
		'testimonial-student-v2.png' => 'https://quranchapter.com/wp-content/uploads/2026/09/testimonial-student-v2.png',
	);

	if ( isset( $cdn_map[ $filename ] ) ) {
		return $cdn_map[ $filename ];
	}

	return get_template_directory_uri() . '/assets/' . $filename;
}
