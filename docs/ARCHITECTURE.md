# Architecture & Design System — Trifold v1.0.0

## 1. Brand Tokens & Design System

The Trifold design system enforces strict geometric restraint and typographic hierarchy:

* **Canvas / Primary Surface (`--color-ivory`)**: `#F5F2EB` (Warm Ivory)
* **Text / Dark Contrast (`--color-ink`)**: `#191919` (Ink)
* **Accent & Mark (`--color-vermilion`)**: `#E4492E` (Vermilion)
* **Structural Borders (`--color-stone`)**: `#B7B1A7` (Stone)
* **Typography**: Manrope (400 Regular, 500 Medium, 800 ExtraBold) loaded locally.
* **Logo Mark**: 3-plane isometric 'T' geometry (`p0`, `p1`, `p2`) with 22.4% gap-to-icon ratio.

---

## 2. Separation of Concerns

```text
┌─────────────────────────────────────────────────────────────┐
│                       TRIFOLD THEME                         │
│  (Presentation, Templates, CSS Tokens, Motion, Navigation)  │
├─────────────────────────────────────────────────────────────┤
│ • front-page.php              • archive-project.php         │
│ • single-project.php          • page-services.php           │
│ • page-work.php               • page-about.php              │
│ • page-insights.php           • page-contact.php            │
│ • trifold-core.css            • trifold-components.css      │
│ • trifold-motion.css          • trifold-motion.js           │
└──────────────────────────────┬──────────────────────────────┘
                               │ Reads CPTs & Meta
┌──────────────────────────────▼──────────────────────────────┐
│                       TRIFOLD CORE                          │
│        (Persistent Data, CPTs, Meta, Widgets, Schema)       │
├─────────────────────────────────────────────────────────────┤
│ • CPT: project                • Taxonomy: project_service   │
│ • CPT: service                • Taxonomy: project_industry  │
│ • CPT: team                   • 18+ Project Meta Fields     │
│ • 10 Elementor Widgets        • JSON-LD Organization Schema │
└─────────────────────────────────────────────────────────────┘
```

### Decoupling Guarantee
If `trifold-theme` is deactivated and another WordPress theme (e.g., Twenty Twenty-Four) is activated, **all project, service, and team data remains safe and accessible** in the database via `trifold-core`.

---

## 3. Motion & Animation Pipeline

* **Lenis**: Virtual inertial scroll at 60fps.
* **GSAP 3.12+ & ScrollTrigger**: Sequential unfolding of hero planes, pinned 4-phase continuous story morph, and inertial carousel drag.
* **Accessibility**: `prefers-reduced-motion` provides instant layout rendering with zero motion dependencies.
* **Cursor Engine**: Contextual cursor (`VIEW`, `DRAG`, `VISIT`) active on desktop; automatically disabled on touch devices via `@media (pointer: coarse)`.
