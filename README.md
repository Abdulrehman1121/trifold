# Trifold — Creative Digital Agency Platform

> **Good things unfold.**  
> *Branding. Websites. Design.*  
> Official Website: [trifold.agency](https://trifold.agency)

[![Version](https://img.shields.io/badge/version-1.0.0-E4492E.svg)](CHANGELOG.md)
[![License](https://img.shields.io/badge/license-Proprietary-191919.svg)](LICENSE)
[![WordPress](https://img.shields.io/badge/WordPress-6.0+-blue.svg)](https://wordpress.org)
[![PHP](https://img.shields.io/badge/PHP-7.4%20|%208.0%20|%208.1%20|%208.2%20|%208.3-777BB4.svg)](https://php.net)

---

## 1. About Trifold

Trifold is a premium creative digital agency founded on connected thinking. Founded by **Farhan Khan**, **Shayan Mutahir**, and **Abdul Rehman Kaleem**, the agency unites brand strategy, custom digital platforms, and everyday graphic design into one coherent system.

* *An idea unfolds into an identity.*
* *An identity unfolds into an experience.*
* *The experience stays connected everywhere.*

---

## 2. Project Architecture & Separation of Concerns

Trifold is built as an enterprise WordPress ecosystem adhering to strict separation between presentation and data architecture:

```text
trifold/
├── wordpress/
│   ├── theme/
│   │   └── trifold-theme/          # Visual styling, motion, and templates
│   └── plugins/
│       └── trifold-core/           # CPTs, taxonomies, meta fields, Elementor widgets, schema
├── standalone/
│   └── trifold-standalone/         # Zero-dependency static prototype
├── docs/                           # Technical, setup, and CMS manuals
└── screenshots/                    # Viewport render verifications
```

### Decoupling Guarantee
* **`trifold-core`** operates completely independently of the theme. If an administrator temporarily activates another theme (e.g. Twenty Twenty-Four), all projects, services, team data, and custom metadata remain intact in the WordPress database.
* **`trifold-theme`** consumes data via native WordPress loop functions (`WP_Query`, `get_post_meta()`) without hardcoded plugin dependencies.

---

## 3. Technology Stack

* **Front-End Styling**: Semantic HTML5, CSS3 Custom Properties (Design Tokens), Flexbox, CSS Grid.
* **Animation Engine**: [GSAP 3.12](https://greensock.com/gsap/) with [ScrollTrigger](https://greensock.com/scrolltrigger/) for choreographed scroll timelines.
* **Smooth Scrolling**: [Lenis](https://github.com/darkroomengineering/lenis) for 60fps inertial scrolling.
* **Typography**: Local Manrope (400 Regular, 500 Medium, 800 ExtraBold) — zero external Google Fonts requests.
* **Iconography**: 21 bespoke isometric SVG icons engineered with Trifold's 35° shear angle.
* **CMS Platform**: WordPress 6.0+ with optional Elementor Free integration.

---

## 4. System Requirements

* **WordPress**: 6.0 or higher
* **PHP**: 7.4, 8.0, 8.1, 8.2, or 8.3
* **Web Server**: Apache (`mod_rewrite` enabled) or NGINX
* **Database**: MySQL 5.7+ or MariaDB 10.3+
* **PHP Memory Limit**: 128MB minimum (256MB recommended)

---

## 5. Quick Start: Standalone Build

To test the interactive frontend immediately without a database:

```bash
# Navigate to standalone directory
cd standalone/trifold-standalone

# Start local web server
python -m http.server 8080

# Or on Windows:
py -m http.server 8080
```
Open `http://localhost:8080` in your browser.

---

## 6. WordPress Installation & Setup

1. **Install Plugin**:
   * Navigate to **Plugins → Add New → Upload Plugin**.
   * Upload and activate `trifold-core.zip`.
2. **Install Theme**:
   * Navigate to **Appearance → Themes → Add New → Upload Theme**.
   * Upload and activate `trifold-theme.zip`.
3. **Configure Permalinks**:
   * Go to **Settings → Permalinks**, select **Post name** (`/%postname%/`), and save.
4. **Assign Homepage**:
   * Create a page titled **Home** and publish it.
   * Go to **Settings → Reading**, choose **A static page**, and select **Home**.
5. **Assign Navigation**:
   * In **Appearance → Menus**, create a menu containing *Work*, *Services*, *About*, *Insights*, and *Contact*, and assign it to **Primary Navigation**.

---

## 7. Portfolio CMS & Attribution Rules

### Mandatory Attribution Governance
* **No Speculative Claims**: Speculative descriptions and fabricated revenue improvements are strictly prohibited.
* **Unconfirmed Projects**: Any project without confirmed client attribution defaults to:
  $$\text{Contribution: To be confirmed}$$
* **Concept Work**: All self-initiated studio concept explorations visibly display the `CONCEPT PROJECT` tag and disclaimer notice.
* **Conditional Case Study Rendering**: If a case study does not have real narrative content for *The Challenge* or *The Approach*, leave the field blank in the CMS; the template will conditionally hide the section rather than rendering filler text.

---

## 8. Elementor Custom Widgets

`trifold-core` registers 10 custom widgets under **Trifold Agency Elements**:
* **Trifold Hero**: Unfolding 3-plane isometric mark ceremony.
* **Unfolding Story**: Pinned 4-phase continuous narrative morph.
* **Cinematic Portfolio**: Horizontal draggable project stage.
* **Services Experience**: Interactive unfolding discipline rows.
* **Philosophy Typography**: Editorial manifesto banner.
* **Process Sequence**: 6-phase discovery-to-launch workflow.
* **Graphic Design Wall**: High-fashion editorial masonry.
* **Trifold CTA**: Conversion strip with magnetic buttons.
* **Project Gallery**: Multi-image case study gallery.
* **Animated Heading**: Fluid typography with vermilion accents.

---

## 9. Performance & Security Summary

* **Zero External HTTP Calls**: Local typography and self-contained vector assets.
* **Reduced Motion Compliance**: Seamless static fallback when `prefers-reduced-motion: reduce` is enabled.
* **Security Hardening**: Nonce verification, role-based capability checks (`current_user_can`), and complete input sanitization / output escaping.
* **Performance Footprint**: Total homepage uncompressed transfer size is ~1.22 MB (CSS: 41 KB, JS: 153 KB, Fonts: 458 KB).

---

## 10. Known Limitations

* **Contact Email Transmission**: The 6-step project brief builder performs complete front-end validation. To send submissions to `hello@trifold.agency`, an active SMTP plugin (e.g. WP Mail SMTP) or custom `wp_mail()` hook must be configured.
* **Visual Drag-and-Drop**: The 10 custom agency widgets require the free Elementor plugin to be active for in-browser visual page building; otherwise, the site operates via native PHP templates.

---

## 11. License & Ownership

Copyright © 2026 Trifold Agency. All rights reserved.  
Trifold name, isometric logo mark, brand assets, and creative designs are proprietary property of Trifold Agency (`trifold.agency`).
