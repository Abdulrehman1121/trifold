# Installation Guide — Trifold v1.0.0

This guide covers setting up Trifold in both WordPress production environments and as a standalone interactive prototype.

---

## 1. System Requirements

* **WordPress**: Version 6.0 or higher
* **PHP**: 7.4, 8.0, 8.1, 8.2, or 8.3
* **Web Server**: Apache (with `mod_rewrite`) or NGINX
* **Database**: MySQL 5.7+ or MariaDB 10.3+
* **PHP Extensions**: `curl`, `json`, `mbstring`, `xml`, `zip`
* **Memory Limit**: 128M minimum (256M recommended)

---

## 2. WordPress Production Installation

Trifold uses a dual-layer architecture:
1. **`trifold-core`** (Companion Plugin): Manages Custom Post Types (Projects, Services, Team), taxonomies, custom metadata, JSON-LD schema, and custom Elementor widgets.
2. **`trifold-theme`** (Presentation Theme): Manages layout templates, typography, CSS design tokens, GSAP motion choreography, and smooth scrolling.

### Step 1: Install & Activate Companion Plugin
1. Log into your WordPress administrative dashboard (`/wp-admin`).
2. Go to **Plugins → Add New → Upload Plugin**.
3. Choose `trifold-core.zip` and click **Install Now**.
4. Click **Activate Plugin**.
5. Confirm that **Projects**, **Services**, and **Team** now appear in your admin sidebar.

### Step 2: Install & Activate Theme
1. Go to **Appearance → Themes → Add New → Upload Theme**.
2. Choose `trifold-theme.zip` and click **Install Now**.
3. Click **Activate**.

### Step 3: Configure Pretty Permalinks
1. Go to **Settings → Permalinks**.
2. Select **Post name** (`/%postname%/`).
3. Click **Save Changes**. (This enables clean URLs such as `/project/sumus/` and `/services/brand-identity/`).

### Step 4: Configure Homepage
1. Go to **Pages → Add New**.
2. Create a page titled **Home**.
3. Under *Page Attributes*, ensure **Default Template** is selected.
4. Click **Publish**.
5. Go to **Settings → Reading**.
6. Set *Your homepage displays* to **A static page**.
7. Set *Homepage* to **Home**.
8. Click **Save Changes**.

---

## 3. Standalone Prototype Installation

To run the standalone build without WordPress:

1. Unzip `trifold-standalone.zip` or open `standalone/trifold-standalone/`.
2. Start a local HTTP server:
   ```bash
   cd standalone/trifold-standalone
   python -m http.server 8080
   ```
3. Open `http://localhost:8080` in your web browser.
