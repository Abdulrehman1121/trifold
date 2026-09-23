# WordPress Initial Setup & Configuration — Trifold v1.0.0

This guide outlines the standard post-installation setup for a fresh WordPress site.

---

## 1. Step-by-Step Configuration Checklist

1. **Activate Core Plugin**:
   * Navigate to **Plugins → Installed Plugins** and ensure **Trifold Core** is active.
2. **Activate Theme**:
   * Navigate to **Appearance → Themes** and ensure **Trifold** is active.
3. **Configure Permalinks**:
   * Navigate to **Settings → Permalinks**.
   * Choose **Post name** (`/%postname%/`) and save changes.
4. **Create Primary Pages**:
   * **Home** (uses front-page template)
   * **Work** (Template: *Portfolio Index*)
   * **Services** (Template: *Services Overview*)
   * **Brand Identity** (Template: *Service — Brand Identity*)
   * **Websites** (Template: *Service — Websites*)
   * **Graphic Design** (Template: *Service — Graphic Design*)
   * **About** (Template: *About Studio*)
   * **Insights** (Template: *Editorial Insights*)
   * **Contact** (Template: *Contact & Project Planner*)
   * **Privacy Policy** (Template: *Privacy Policy*)
5. **Assign Static Homepage**:
   * Navigate to **Settings → Reading**.
   * Set *Your homepage displays* to **A static page**.
   * Assign Homepage to **Home**.
6. **Set Up Navigation Menus**:
   * Go to **Appearance → Menus**.
   * Create a menu named **Primary Navigation**.
   * Add pages: *Work*, *Services*, *About*, *Insights*, *Contact*.
   * Check display location: **Primary Navigation**.
7. **Configure Agency Customizer Settings**:
   * Go to **Appearance → Customize → Trifold Agency Settings**.
   * Enter studio email: `hello@trifold.agency`.
   * Configure social links: LinkedIn, Instagram, Behance.
8. **Configure Contact Form & SMTP**:
   * Install an SMTP plugin (e.g. WP Mail SMTP) to route project brief submissions directly to `hello@trifold.agency`.
