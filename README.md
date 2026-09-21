# Quran Chapter WordPress Theme

**Quran Chapter** is a production-ready, high-performance classic WordPress theme converted from the Quran Chapter static website. It is designed to replace page-builder sites with pixel-identical styling, fast load times, and structured SEO.

---

## 1. Installation

1. Log into your WordPress Admin Dashboard.
2. Navigate to **Appearance → Themes**.
3. Click **Add New** → **Upload Theme**.
4. Choose `quranchapter-wp.zip` and click **Install Now**.
5. Click **Activate**.

---

## 2. Required Pages & Slugs

Create the following pages under **Pages → Add New** and set their permalink slugs exactly as specified:

| Page Title | Required Slug | Template Selection |
| :--- | :--- | :--- |
| Home | `home` | Front Page (or default when set as Front Page) |
| About Us | `about` | About Page |
| Courses | `course` | Course Page |
| Fee Plans | `fee` | Fee Page |
| Download Quran | `download-quran` | Download Quran Page |
| Contact Us | `contact` | Contact Page |

---

## 3. WordPress Reading & Permalink Settings

### Set Static Front Page
1. Go to **Settings → Reading**.
2. Select **A static page (select below)**.
3. Set **Homepage** to `Home`.
4. Click **Save Changes**.

### Set Pretty Permalinks
1. Go to **Settings → Permalinks**.
2. Select **Post name** (`/%postname%/`).
3. Click **Save Changes**.

---

## 4. Setting Up Navigation Menu

1. Go to **Appearance → Menus**.
2. Create a new menu named `Primary Menu`.
3. Add the pages: **Home**, **About Us**, **Courses**, **Fee Plans**, **Download Quran**, **Contact Us**.
4. Check **Primary Menu** under **Display location**.
5. Save the menu.

*Note: If no menu is assigned, the theme automatically renders the fallback menu matching the original design structure.*

---

## 5. Contact Form 7 Integration

The theme includes built-in support for **Contact Form 7**:
1. Install and activate **Contact Form 7** from **Plugins → Add New**.
2. Create a contact form.
3. The contact page (`page-contact.php`) automatically detects Contact Form 7.
4. You can update the default shortcode in `page-contact.php` or use the option `qc_cf7_shortcode`.

---

## 6. Migration Guide (Replacing Live Page-Builder Site)

Follow these steps to safely switch from an existing page-builder site (Elementor, Divi, WPBakery, etc.) to this theme:

1. **Full Backup**:
   - Create a full backup of your website files and database using UpdraftPlus, All-in-One WP Migration, or cPanel.
2. **Staging Environment**:
   - Test the theme on a staging server or local site before applying changes to live.
3. **Switch Theme**:
   - Activate **Quran Chapter** theme.
4. **Deactivate Page Builder**:
   - Once activated, deactivate page-builder plugins to prevent redundant script loading and CSS conflicts.
5. **Set Up 301 Redirects**:
   - Install the **Redirection** plugin.
   - Map any old page URLs (e.g., `/contact-us/`, `/pricing/`) to the new slugs (`/contact/`, `/fee/`) using 301 redirects to preserve SEO rankings.

---

## Technical Details

- **PHP Version**: Requires PHP 7.4 or higher
- **WordPress Version**: Requires WordPress 6.0 or higher
- **Text Domain**: `quranchapter`
- **Author**: Abdul Hannan
