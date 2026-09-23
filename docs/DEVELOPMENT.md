# Local Development & Engineering Guide — Trifold v1.0.0

This guide explains how to develop, test, and contribute to Trifold.

---

## 1. Directory Structure

```text
trifold/
├── wordpress/
│   ├── theme/trifold-theme/        # WordPress Theme source
│   └── plugins/trifold-core/       # Companion Plugin source
├── standalone/
│   └── trifold-standalone/         # Standalone HTML5/CSS3 prototype
├── docs/                           # Architecture, setup & CMS manuals
└── screenshots/                    # Viewport QA captures
```

---

## 2. Running Standalone Build Locally

The standalone prototype has zero third-party dependencies and runs via any standard HTTP server:

```bash
# Navigate to standalone directory
cd standalone/trifold-standalone

# Start Python HTTP server
python -m http.server 8080

# Or with py launcher on Windows:
py -m http.server 8080
```
Then visit: `http://localhost:8080`.

---

## 3. Asset Synchronization

When editing stylesheets or scripts, changes should be synchronized between the standalone prototype and the WordPress theme:

```powershell
# Copy assets from standalone to theme
Copy-Item -Path "standalone\trifold-standalone\assets\*" -Destination "wordpress\theme\trifold-theme\assets" -Recurse -Force
```

---

## 4. Coding Standards & Hygiene

* **WordPress Coding Standards**: All PHP code must adhere to WordPress PHP standards, using `esc_html()`, `esc_attr()`, `esc_url()`, `wp_kses_post()`, and `sanitize_*` helpers.
* **No Speculative Claims**: Never add unverified client achievements or revenue metrics to templates.
* **Strict Brand Tokens**: Never hardcode colors; use CSS variables (`--color-ivory`, `--color-ink`, `--color-vermilion`, `--color-stone`).
