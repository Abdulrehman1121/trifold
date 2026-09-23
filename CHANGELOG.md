# Changelog

All notable changes to the Trifold platform will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

---

## [1.0.0] — 2026-09-23

### Initial Production Release

#### Added
- **Trifold Brand Design System**: Implementation of Warm Ivory (`#F5F2EB`), Ink (`#191919`), Vermilion (`#E4492E`), and Stone (`#B7B1A7`) tokens with local Manrope typography.
- **Isometric Geometric Engine**: Precision 3-plane isometric 'T' mark (`p0`, `p1`, `p2`) with 22.4% gap-to-icon ratio and 21 custom SVG icons.
- **Cinematic Homepage**: GSAP-powered unfolding intro ceremony, continuous 4-phase story scroll, and interactive service accordions.
- **Cinematic Portfolio Carousel**: Horizontal inertia drag stage (~75vw width with 15% peek) and dynamic cursor integration (`VIEW`, `DRAG`).
- **Attribution Guardrail System**: Strict metadata enforcement requiring `Contribution: To be confirmed` on unconfirmed projects and visible `CONCEPT PROJECT` disclaimers on concept explorations.
- **Custom WordPress Theme (`trifold-theme`)**: Clean template hierarchy covering all 17 page types with zero third-party bloated libraries.
- **Companion Plugin (`trifold-core`)**: Isolated architecture registering `project`, `service`, and `team` CPTs, taxonomies, 18+ meta fields, and JSON-LD schema.
- **Elementor Widget Suite**: 10 custom drag-and-drop Elementor widgets registered under "Trifold Agency Elements".
- **Interactive 6-Step Project Brief Planner**: Multi-step client onboarding builder with real-time selection validation.
- **Responsive & Accessibility Support**: Full layout adaptation from 1920px down to 360px with `prefers-reduced-motion: reduce` fallback.
- **Standalone Distribution**: Zero-dependency HTML5/CSS3 prototype package.
