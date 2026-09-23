# Production Deployment & Hosting Guide — Trifold v1.0.0

---

## 1. Production Deployment Workflow

1. **Package Final Archives**:
   Generate production distribution ZIP files:
   * `trifold-theme.zip` (contains `trifold-theme/` at root)
   * `trifold-core.zip` (contains `trifold-core/` at root)
2. **Staging Verification**:
   * Install on staging server.
   * Verify all 17 page templates.
   * Verify Customizer settings and navigation menus.
3. **Caching & CDN Configuration**:
   * Set cache TTL for static assets (`/assets/fonts/`, `/assets/images/`, `/assets/icons/`) to 1 year (`Cache-Control: max-age=31536000, immutable`).
   * When deploying CSS/JS updates, update `TRIFOLD_THEME_VERSION` in `functions.php` to bust browser caches.
4. **Core Web Vitals Verification**:
   * Verify LCP (Largest Contentful Paint) is under 1.2s.
   * Verify CLS (Cumulative Layout Shift) is 0.00.
   * Verify FID / INP is under 50ms.
