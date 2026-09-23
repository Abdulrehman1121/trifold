# Troubleshooting & Diagnostics — Trifold v1.0.0

---

## 1. Common Issues & Solutions

### Issue: Navigation menu is empty
* **Cause**: No menu has been assigned to the `Primary Navigation` theme location.
* **Fix**: Go to **Appearance → Menus**, select your menu, check **Primary Navigation** under *Menu Settings*, and click **Save Menu**.

### Issue: Projects are missing on the homepage carousel
* **Cause**: No projects have the *Featured* flag enabled.
* **Fix**: Go to **Projects → All Projects**, edit your projects, check `[x] Featured on Homepage Cinematic Carousel`, and update.

### Issue: Animations appear instant with no smooth transitions
* **Cause**: The browser or operating system has "Reduce Motion" enabled.
* **Fix**: Check Windows/macOS Accessibility settings under *Display / Motion*. When `prefers-reduced-motion: reduce` is detected, Trifold intentionally provides instant reveals for accessibility.

### Issue: Project planner emails are not arriving
* **Cause**: WordPress standard `mail()` function is not configured on the server.
* **Fix**: Install a dedicated SMTP plugin (e.g. WP Mail SMTP) and configure authenticated SMTP credentials for `hello@trifold.agency`.
