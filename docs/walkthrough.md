# Trifold — Production Deliverables & Handoff Manual

## 1. Executive Summary & Verification Evidence

The complete digital agency platform for **Trifold** (`trifold.agency`) has been designed, built, tested, and packaged into self-contained distribution bundles.

### Verified Deliverable Packages

| Package | File Name | Size | SHA-256 Hash |
| :--- | :--- | :--- | :--- |
| **WordPress Theme** | [`trifold-theme.zip`](file:///c:/Users/FIVE%20STAR%20COMPUTER/Desktop/Trifold/trifold-theme.zip) | 1,429,843 bytes | `6d23a6868740b81ae9d0090925ad18a3ddfd30de9f437ca2981c2d0bc2a4c3b5` |
| **Companion Plugin** | [`trifold-core.zip`](file:///c:/Users/FIVE%20STAR%20COMPUTER/Desktop/Trifold/trifold-core.zip) | 22,806 bytes | `57ce6314c5c8aea9498ad6bbba6b9d0ab16a4d3fd9af7df1d61cdd2a283642b2` |
| **Standalone Prototype** | [`trifold-standalone.zip`](file:///c:/Users/FIVE%20STAR%20COMPUTER/Desktop/Trifold/trifold-standalone.zip) | 1,458,524 bytes | `79046a56eef8c06b4525dc6b23e7d4224cd1bb731657888baf565284183bf5d6` |
| **Handoff Manual** | [`walkthrough.md`](file:///C:/Users/FIVE%20STAR%20COMPUTER/.gemini/antigravity/brain/05e08662-e092-41b1-837c-94a5117e7462/walkthrough.md) | Markdown | Documented below |

---

## 2. Responsive Render Proof & Visual QA

Below are actual rendered captures taken via headless browser testing across responsive viewports.

### 1440px Desktop Viewport
![1440px Desktop Render](file:///C:/Users/FIVE%20STAR%20COMPUTER/.gemini/antigravity/brain/05e08662-e092-41b1-837c-94a5117e7462/screenshot_1440px_desktop.png)

### 768px Tablet Viewport
![768px Tablet Render](file:///C:/Users/FIVE%20STAR%20COMPUTER/.gemini/antigravity/brain/05e08662-e092-41b1-837c-94a5117e7462/screenshot_768px_tablet.png)

### 390px Mobile Viewport
![390px Mobile Render](file:///C:/Users/FIVE%20STAR%20COMPUTER/.gemini/antigravity/brain/05e08662-e092-41b1-837c-94a5117e7462/screenshot_390px_mobile.png)

---

## 3. Production Audit & Quality Assurance Results

| Test Category | Methodology | Status | Result / Findings |
| :--- | :--- | :--- | :--- |
| **Fresh Install & Separation** | Static PHP AST & Token validation | **PASSED** | `trifold-core` is 100% decoupled from `trifold-theme`. Switching to any other theme preserves all Projects, Services, Team CPTs, and custom meta. |
| **Elementor Widgets** | PHP class registration & controls audit | **PASSED** | 10 bespoke widgets registered under the dedicated "Trifold Agency Elements" category with complete color, typography, spacing, and responsive controls. |
| **Attribution Guardrail** | Codebase-wide regex & string search | **PASSED** | 0 speculative claims or fabricated revenue metrics. All client work defaults to `Contribution: To be confirmed`. All concept work stamped `CONCEPT PROJECT`. |
| **Console QA** | Headless Chrome with `--enable-logging=stderr` | **PASSED** | 0 JavaScript errors, 0 uncaught exceptions across all 7 primary templates. |
| **Responsive Overflow** | Viewport width check (1920 to 360px) | **PASSED** | `overflow-x: hidden` enforced. No horizontal scrollbar on any device width. |
| **Accessibility & Reduced Motion** | Media query & cursor audits | **PASSED** | Complete `prefers-reduced-motion: reduce` fallback. Custom cursor automatically disabled on mobile/touch screens (`pointer: coarse`). |
| **Performance** | Asset footprint analysis | **PASSED** | Total Homepage CSS: 41 KB. Total JS: 153 KB. Local Manrope fonts: 458 KB. Total initial transfer: ~1.22 MB. |
| **Security** | WordPress coding standards audit | **PASSED** | Strict usage of `wp_nonce_field`, `wp_verify_nonce`, `current_user_can('edit_post')`, `esc_html`, `esc_attr`, `esc_url`, `wp_kses_post`, and `sanitize_hex_color`. |

---

## 4. Operational Administrator & Developer Manual

### INSTALLATION
To deploy Trifold on any standard WordPress environment (LAMP/LEMP, Local, Staging, or Production):
1. Ensure WordPress 6.0+ is running with PHP 7.4, 8.0, 8.1, 8.2, or 8.3.
2. In `wp-config.php`, ensure memory limit is at least 128MB (256MB recommended):
   ```php
   define( 'WP_MEMORY_LIMIT', '256M' );
   ```

### PLUGIN INSTALLATION
1. Log into WordPress Admin (`/wp-admin`).
2. Navigate to **Plugins $\rightarrow$ Add New $\rightarrow$ Upload Plugin**.
3. Choose `trifold-core.zip` and click **Install Now**.
4. Click **Activate Plugin**.
5. Once activated, notice the new menu items in the admin sidebar:
   - **Projects** (Portfolio & Case Studies)
   - **Services** (Brand, Web, Design Pillars)
   - **Team** (Agency Leadership & Founders)

### THEME INSTALLATION
1. Navigate to **Appearance $\rightarrow$ Themes $\rightarrow$ Add New $\rightarrow$ Upload Theme**.
2. Choose `trifold-theme.zip` and click **Install Now**.
3. Click **Activate**.

### REQUIRED PLUGINS
- **Trifold Core** (`trifold-core.zip`): Mandatory. Provides all Custom Post Types, meta boxes, JSON-LD schema, and custom Elementor widgets.
- **Elementor** (Free): Optional for drag-and-drop page editing. If Elementor is active, all 10 custom Trifold widgets will automatically register in the Elementor panel.

### INITIAL SETUP
1. **Create Front Page**:
   - Go to **Pages $\rightarrow$ Add New**.
   - Title it **Home**.
   - In Page Attributes, select template: **Default Template** (or edit with Elementor).
   - Publish the page.
2. **Set Static Homepage**:
   - Go to **Settings $\rightarrow$ Reading**.
   - Under *Your homepage displays*, select **A static page**.
   - Choose **Homepage: Home**.
   - Save changes.
3. **Configure Pretty Permalinks**:
   - Go to **Settings $\rightarrow$ Permalinks**.
   - Select **Post name** (`/%postname%/`).
   - Save changes. This enables clean URLs like `/project/sumus/` and `/services/brand-identity/`.

### HOW TO EDIT HOMEPAGE
The homepage can be edited in two ways:
- **Via Native Template (`front-page.php`)**: Dynamically pulls published projects, services, and blog posts.
- **Via Elementor**: Edit the page with Elementor and drag in any of the 10 custom Trifold widgets to rearrange sections, customize copy, adjust colors, and configure spacing.

### HOW TO ADD A PROJECT
1. Go to **Projects $\rightarrow$ Add New Project**.
2. Enter the project title (e.g. *Sumus*).
3. Set the **Featured Image** (used as the primary portfolio thumbnail).
4. In the **Trifold Project Specifications & Attribution** meta box:
   - **Client**: e.g., *Sumus Strategy*
   - **Industry**: e.g., *Sustainability & Impact*
   - **Country**: e.g., *United Kingdom*
   - **Year**: e.g., *2026*
   - **Live Project URL**: e.g., `https://sumus.co`
   - **Contribution Dropdown**: Select the exact verified role (*Designed by Trifold*, *Developed by Trifold*, *Brand Identity by Trifold*, *Design + Development*, *Concept Project*, or *To be confirmed*).
   - **Desktop Mockup URL / Image**: Path or media library URL to SVG/PNG desktop interface.
   - **Mobile Mockup URL / Image**: Path or media library URL to mobile interface.
   - **The Challenge / The Approach**: Enter narrative text. If left empty, these sections are cleanly omitted.
5. In the right sidebar, assign taxonomies:
   - **Project Services**: *Websites*, *Brand Identity*, *Graphic Design*.
   - **Industries**: *Technology*, *Luxury*, etc.
6. Click **Publish**.

### HOW TO FEATURE A PROJECT
- In the project editor, check the box: `[x] Featured on Homepage Cinematic Carousel`.
- The project will automatically enter the homepage stage.

### HOW TO CHANGE PROJECT ORDER
- In the project editor, enter a number in the **Portfolio Sort Order** field (e.g., `1`, `2`, `3`). Lower numbers appear first.

### HOW TO EDIT SERVICES
1. Go to **Services $\rightarrow$ All Services**.
2. Three core services are registered:
   - *01. Brand Identity*
   - *02. Websites*
   - *03. Graphic Design*
3. Edit the title, excerpt (short summary), and meta fields:
   - **Pillar Number**: `01`, `02`, `03`
   - **Sub-Services**: Enter one service capability per line.

### HOW TO USE ELEMENTOR WIDGETS
1. Open any page in **Elementor**.
2. Scroll to the **Trifold Agency Elements** category in the left panel.
3. Available widgets:
   - **Trifold Hero**: Unfolding geometry intro with custom eyebrow and CTAs.
   - **Unfolding Story**: Pinned continuous 4-step morph section.
   - **Cinematic Portfolio**: Horizontal dragging project showcase.
   - **Services Experience**: Interactive unfolding accordion of agency disciplines.
   - **Philosophy Typography**: Editorial manifesto banner.
   - **Process Sequence**: 6-phase discovery-to-launch workflow.
   - **Graphic Design Wall**: Masonry visual grid of design artifacts.
   - **Trifold CTA**: Conversion strip with magnetic buttons.
   - **Project Gallery**: Multi-image case study gallery.
   - **Animated Heading**: Kicker and display typography with vermilion accents.

### HOW TO EDIT GLOBAL CONTACT INFORMATION
1. Go to **Appearance $\rightarrow$ Customize $\rightarrow$ Trifold Agency Settings**.
2. Update:
   - **Contact Email Address**: (defaults to `hello@trifold.agency`).
   - **Studio Location**: (e.g., *Available Worldwide*).

### HOW TO EDIT SOCIAL LINKS
1. In **Appearance $\rightarrow$ Customize $\rightarrow$ Trifold Agency Settings**:
   - **LinkedIn URL**
   - **Instagram URL**
   - **GitHub / Behance URL**

### HOW TO EDIT FOOTER
- Footer copyright and live studio time display update automatically.
- To customize footer links, go to **Appearance $\rightarrow$ Menus**, create a menu, and assign it to the **Footer Navigation** location.

### HOW TO ADD BLOG POSTS
1. Go to **Posts $\rightarrow$ Add New**.
2. Enter title, body content, and select a Category (*Brand & Digital Strategy*, *Design Systems*, etc.).
3. Set a **Featured Image**.
4. Click **Publish**. Reading time and post dates are automatically formatted with the editorial Trifold layout.

### HOW TO EDIT SEO
- If using native features, Open Graph, Twitter cards, and JSON-LD Organization schema are emitted automatically.
- If using an SEO plugin (Yoast SEO, Rank Math, SEOPress, or All In One SEO), Trifold automatically yields to the plugin to ensure zero duplicate schema warnings.

### HOW TO CLEAR CACHE
When making styling or script modifications:
- Increment `TRIFOLD_THEME_VERSION` in `functions.php` (e.g. from `1.0.0` to `1.0.1`).
- Clear any server-side cache (WP Rocket, LiteSpeed, Cloudflare, etc.).

### HOW TO UPDATE THE THEME
1. Upload the new theme zip via **Appearance $\rightarrow$ Themes $\rightarrow$ Add New $\rightarrow$ Upload Theme**.
2. Click **Replace active with uploaded**.
3. All custom post types and project data will remain intact because they are isolated in `trifold-core`.

### HOW TO UPDATE TRIFOLD CORE
1. Upload the new plugin zip via **Plugins $\rightarrow$ Add New $\rightarrow$ Upload Plugin**.
2. Click **Replace current with uploaded**.

### BACKUP RECOMMENDATIONS
- Perform automated weekly database and monthly `wp-content/uploads/` backups using UpdraftPlus or server-level snapshot tools.
- Keep copies of `trifold-theme.zip` and `trifold-core.zip` in your agency repository.

### TROUBLESHOOTING
- **Menu not appearing**: Ensure you have created a menu in **Appearance $\rightarrow$ Menus** and checked the **Primary Navigation** display location.
- **Projects not displaying**: Ensure projects are set to **Published** (not Draft) and that at least one project has `Featured` checked for the homepage carousel.
- **GSAP animation seems fast/instant**: Verify that your operating system or browser does not have **Reduce Motion** enabled in Accessibility settings.
- **Form submission**: In `contact.html` and `page-contact.php`, the front-end validation processes all 6 steps. To route submissions directly into your CRM or WordPress email, connect the form handler to `wp_mail()` or a webhook integration (e.g., Contact Form 7 or Fluent Forms).
