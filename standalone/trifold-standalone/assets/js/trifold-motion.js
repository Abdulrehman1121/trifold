/**
 * TRIFOLD — CINEMATIC MOTION & SCROLL ENGINE
 * Technologies: Lenis Smooth Scroll + GSAP 3.12 + ScrollTrigger
 * Choreographs the Trifold unfolding ceremony, continuous story, and cinematic portfolio.
 */

(function () {
  'use strict';

  const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // Initialize Lenis Smooth Scroll
  let lenis = null;
  if (!reducedMotion && typeof Lenis !== 'undefined') {
    lenis = new Lenis({
      duration: 1.15,
      easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
      orientation: 'vertical',
      smoothWheel: true,
      wheelMultiplier: 1.05,
      touchMultiplier: 1.5,
    });

    function raf(time) {
      lenis.raf(time);
      requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);

    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
      lenis.on('scroll', ScrollTrigger.update);
      gsap.ticker.add((time) => {
        lenis.raf(time * 1000);
      });
      gsap.ticker.lagSmoothing(0);
    }
  }

  // Master Initialization on DOM ready
  document.addEventListener('DOMContentLoaded', () => {
    initHeroUnfold();
    init3DHeroDepth();
    initContinuousStory();
    initCinematicCarousel();
    init3DTilt();
    initScrollReveals();
    initServiceAccordion();
  });

  /* ------------------------------------------------------------------------
     01. HERO UNFOLDING CEREMONY & 3D PARALLAX
     ------------------------------------------------------------------------ */
  function init3DHeroDepth() {
    if (reducedMotion || window.matchMedia('(pointer: coarse)').matches) return;
    const hero = document.querySelector('.hero-section');
    if (!hero) return;
    const planes = hero.querySelectorAll('.hero-logo-svg .plane');
    if (!planes.length) return;

    hero.addEventListener('mousemove', (e) => {
      const rect = hero.getBoundingClientRect();
      const xRatio = (e.clientX - rect.left) / rect.width - 0.5;
      const yRatio = (e.clientY - rect.top) / rect.height - 0.5;

      planes.forEach((p, idx) => {
        const factor = (idx + 1) * 14;
        p.style.transform = `translate3d(${xRatio * factor}px, ${yRatio * factor}px, 0)`;
        p.style.transition = 'transform 0.12s ease-out';
      });
    });

    hero.addEventListener('mouseleave', () => {
      planes.forEach((p) => {
        p.style.transition = 'transform 0.6s var(--ease-power3-out)';
        p.style.transform = 'translate3d(0, 0, 0)';
      });
    });
  }

  function initHeroUnfold() {
    const hero = document.querySelector('.hero-section');
    if (!hero) return;

    const p0 = hero.querySelector('.plane.p0');
    const p1 = hero.querySelector('.plane.p1');
    const p2 = hero.querySelector('.plane.p2');
    const letters = hero.querySelectorAll('.hero-logo-svg .letter');
    const eyebrow = hero.querySelector('.hero-eyebrow');
    const headline = hero.querySelector('.hero-headline');
    const descriptor = hero.querySelector('.hero-descriptor');
    const ctas = hero.querySelector('.hero-cta-group');
    const decor1 = hero.querySelector('.hero-backdrop-geometry');
    const decor2 = hero.querySelector('.hero-backdrop-geometry.two');

    if (reducedMotion || typeof gsap === 'undefined') {
      // Instant reveal for reduced motion
      if (p0) p0.style.opacity = '1';
      if (p1) p1.style.opacity = '1';
      if (p2) p2.style.opacity = '1';
      return;
    }

    const tl = gsap.timeline({ defaults: { ease: 'power3.out' } });

    // Step 1: Backdrop subtle rotation
    if (decor1) gsap.to(decor1, { rotation: 45, duration: 20, repeat: -1, yoyo: true, ease: 'sine.inOut' });
    if (decor2) gsap.to(decor2, { rotation: 65, duration: 25, repeat: -1, yoyo: true, ease: 'sine.inOut' });

    // Step 2: Three planes unfold from 3D points
    if (p0) {
      tl.fromTo(
        p0,
        { x: -90, y: -40, rotation: -20, scaleY: 0.05, opacity: 0, svgOrigin: '130 30' },
        { x: 0, y: 0, rotation: 0, scaleY: 1, opacity: 1, duration: 1.15, ease: 'expo.out' },
        0.2
      );
    }
    if (p1) {
      tl.fromTo(
        p1,
        { x: 70, y: -25, rotation: 30, scaleX: 0.04, opacity: 0, svgOrigin: '160 50' },
        { x: 0, y: 0, rotation: 0, scaleX: 1, opacity: 1, duration: 1.0, ease: 'power3.out' },
        0.55
      );
    }
    if (p2) {
      tl.fromTo(
        p2,
        { y: -65, rotation: -25, scaleY: 0.03, opacity: 0, svgOrigin: '95 65' },
        { y: 0, rotation: 0, scaleY: 1, opacity: 1, duration: 1.05, ease: 'back.out(1.1)' },
        0.85
      );
    }

    // Step 3: Logo wordmark letters stagger up
    if (letters && letters.length > 0) {
      tl.fromTo(
        letters,
        { y: 24, opacity: 0 },
        { y: 0, opacity: 1, duration: 0.65, stagger: 0.07, ease: 'power2.out' },
        1.55
      );
    }

    // Step 4: Eyebrow and Headline reveal
    if (eyebrow) {
      tl.fromTo(eyebrow, { y: 15, opacity: 0 }, { y: 0, opacity: 1, duration: 0.6 }, 1.9);
    }
    if (headline) {
      tl.fromTo(
        headline,
        { y: 30, opacity: 0, clipPath: 'inset(100% 0 0 0)' },
        { y: 0, opacity: 1, clipPath: 'inset(0% 0 0 0)', duration: 0.9, ease: 'expo.out' },
        2.1
      );
    }
    if (descriptor) {
      tl.fromTo(descriptor, { y: 18, opacity: 0 }, { y: 0, opacity: 1, duration: 0.7 }, 2.45);
    }
    if (ctas) {
      tl.fromTo(ctas, { y: 20, opacity: 0 }, { y: 0, opacity: 1, duration: 0.65 }, 2.75);
    }
  }

  /* ------------------------------------------------------------------------
     02. CONTINUOUS OPENING STORY & TRAVELLING 3D LOGO
     ------------------------------------------------------------------------ */
  function initContinuousStory() {
    const storySection = document.querySelector('.story-scroll-section');
    if (!storySection) return;

    const cards = storySection.querySelectorAll('.story-step-card');
    const morphSymbol = storySection.querySelector('.story-svg-box');
    const travelMarker = document.getElementById('story-travel-logo');
    const badgeSvg = travelMarker ? travelMarker.querySelector('.story-badge-svg') : null;

    if (!cards.length) return;

    // Helper to calculate start & end Y positions relative to story-timeline-rail
    function getRailOffsets() {
      const firstCard = cards[0];
      const lastCard = cards[cards.length - 1];
      const firstTitle = firstCard.querySelector('.story-step-title') || firstCard;
      const lastTitle = lastCard.querySelector('.story-step-title') || lastCard;

      if (!travelMarker || !travelMarker.parentElement) return { startY: 0, endY: 300 };

      const railRect = travelMarker.parentElement.getBoundingClientRect();
      const firstTitleRect = firstTitle.getBoundingClientRect();
      const lastTitleRect = lastTitle.getBoundingClientRect();

      const startY = (firstTitleRect.top + firstTitleRect.height / 2) - railRect.top - (travelMarker.offsetHeight / 2);
      const endY = (lastTitleRect.top + lastTitleRect.height / 2) - railRect.top - (travelMarker.offsetHeight / 2);

      return { startY: Math.max(0, startY), endY: Math.max(startY, endY) };
    }

    // GSAP ScrollTrigger to move 3D logo from first heading down to last heading
    if (travelMarker && typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined' && !reducedMotion) {
      const initialOffsets = getRailOffsets();
      gsap.set(travelMarker, { y: initialOffsets.startY });

      gsap.to(travelMarker, {
        y: () => getRailOffsets().endY,
        ease: 'none',
        scrollTrigger: {
          trigger: cards[0],
          endTrigger: cards[cards.length - 1],
          start: 'top 65%',
          end: 'bottom 65%',
          scrub: 0.4,
          invalidateOnRefresh: true,
          onUpdate: (self) => {
            const p = self.progress;
            // Full 3D rotation, tilting, and depth scaling as it travels
            const rotY = p * 720;
            const rotX = Math.sin(p * Math.PI * 3) * 22;
            const rotZ = Math.cos(p * Math.PI * 2) * 12;
            const scale = 1 + Math.sin(p * Math.PI) * 0.22;

            if (badgeSvg) {
              badgeSvg.style.transform = `perspective(600px) rotateY(${rotY}deg) rotateX(${rotX}deg) rotateZ(${rotZ}deg) scale(${scale})`;
            }
          }
        }
      });
    }

    // IntersectionObserver to activate step cards & trigger morph states
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            cards.forEach((c) => c.classList.remove('active'));
            entry.target.classList.add('active');

            const step = entry.target.getAttribute('data-step');
            if (morphSymbol) {
              if (step === '1') {
                morphSymbol.style.transform = 'scale(0.85) rotate(-15deg)';
              } else if (step === '2') {
                morphSymbol.style.transform = 'scale(1.05) rotate(0deg)';
              } else if (step === '3') {
                morphSymbol.style.transform = 'scale(1.15) rotate(15deg)';
              } else if (step === '4') {
                morphSymbol.style.transform = 'scale(1) rotate(0deg)';
              }
            }
          }
        });
      },
      { threshold: 0.5 }
    );

    cards.forEach((card) => observer.observe(card));
  }

  /* ------------------------------------------------------------------------
     03. 3D CARD PERSPECTIVE TILT & SPECULAR GLARE
     ------------------------------------------------------------------------ */
  function init3DTilt() {
    if (reducedMotion || window.matchMedia('(pointer: coarse)').matches) return;

    const cards = document.querySelectorAll('.slide-media-card, .work-card, .featured-work-card, .service-hero-visual');
    if (!cards.length) return;

    cards.forEach((card) => {
      let glare = card.querySelector('.card-3d-glare');
      if (!glare) {
        glare = document.createElement('div');
        glare.className = 'card-3d-glare';
        card.appendChild(glare);
      }

      let reqId = null;

      function onMouseMove(e) {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        const xRatio = (x / rect.width) - 0.5;
        const yRatio = (y / rect.height) - 0.5;

        const rotX = -yRatio * 18;
        const rotY = xRatio * 18;

        if (reqId) cancelAnimationFrame(reqId);
        reqId = requestAnimationFrame(() => {
          card.style.transform = `perspective(1100px) rotateX(${rotX}deg) rotateY(${rotY}deg) scale3d(1.025, 1.025, 1.025)`;
          card.style.transition = 'transform 0.08s ease-out';

          const glareX = (x / rect.width) * 100;
          const glareY = (y / rect.height) * 100;
          glare.style.opacity = '1';
          glare.style.background = `radial-gradient(circle at ${glareX}% ${glareY}%, rgba(255, 255, 255, 0.4) 0%, rgba(255, 255, 255, 0) 65%)`;
        });
      }

      function onMouseLeave() {
        if (reqId) cancelAnimationFrame(reqId);
        card.style.transition = 'transform 0.6s cubic-bezier(0.23, 1, 0.32, 1)';
        card.style.transform = 'perspective(1100px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)';
        glare.style.opacity = '0';
      }

      card.addEventListener('mousemove', onMouseMove);
      card.addEventListener('mouseleave', onMouseLeave);
    });
  }

  /* ------------------------------------------------------------------------
     04. CINEMATIC PORTFOLIO REEL (INFINITE HORIZONTAL MARQUEE + TEXT ANIMATION)
     ------------------------------------------------------------------------ */
  function initCinematicCarousel() {
    const carouselSection = document.querySelector('.cinematic-portfolio-section');
    if (!carouselSection) return;

    const track = carouselSection.querySelector('.carousel-track');
    const stage = carouselSection.querySelector('.carousel-stage-wrapper');
    const slides = Array.from(carouselSection.querySelectorAll('.carousel-slide'));
    const prevBtn = carouselSection.querySelector('.carousel-prev');
    const nextBtn = carouselSection.querySelector('.carousel-next');
    const counterEl = carouselSection.querySelector('.carousel-counter');
    const chars = carouselSection.querySelectorAll('.word-char');

    // Text Reveal Animation with GSAP ScrollTrigger
    if (chars.length && typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined' && !reducedMotion) {
      gsap.fromTo(
        chars,
        { y: '115%', opacity: 0 },
        {
          y: '0%',
          opacity: 1,
          duration: 0.85,
          stagger: 0.07,
          ease: 'power3.out',
          scrollTrigger: {
            trigger: carouselSection,
            start: 'top 78%',
            onEnter: () => carouselSection.classList.add('is-revealed')
          }
        }
      );
    } else {
      carouselSection.classList.add('is-revealed');
    }

    if (!track) return;

    // Hover pause and resume for infinite horizontal movement
    track.addEventListener('mouseenter', () => {
      track.style.animationPlayState = 'paused';
    });

    track.addEventListener('mouseleave', () => {
      track.style.animationPlayState = 'running';
    });

    // Arrow button nudges
    if (nextBtn) {
      nextBtn.addEventListener('click', () => {
        track.style.animationPlayState = 'paused';
        const slideW = slides[0] ? slides[0].offsetWidth + 36 : 600;
        track.style.transition = 'transform 0.6s var(--ease-power3-out)';
        const curTransform = window.getComputedStyle(track).transform;
        let matrixX = 0;
        if (curTransform !== 'none') {
          const values = curTransform.split('(')[1].split(')')[0].split(',');
          matrixX = parseFloat(values[4]) || 0;
        }
        track.style.transform = `translateX(${matrixX - slideW}px)`;
        setTimeout(() => {
          track.style.transition = '';
          track.style.animationPlayState = 'running';
        }, 1200);
      });
    }

    if (prevBtn) {
      prevBtn.addEventListener('click', () => {
        track.style.animationPlayState = 'paused';
        const slideW = slides[0] ? slides[0].offsetWidth + 36 : 600;
        track.style.transition = 'transform 0.6s var(--ease-power3-out)';
        const curTransform = window.getComputedStyle(track).transform;
        let matrixX = 0;
        if (curTransform !== 'none') {
          const values = curTransform.split('(')[1].split(')')[0].split(',');
          matrixX = parseFloat(values[4]) || 0;
        }
        track.style.transform = `translateX(${matrixX + slideW}px)`;
        setTimeout(() => {
          track.style.transition = '';
          track.style.animationPlayState = 'running';
        }, 1200);
      });
    }

    if (counterEl) {
      counterEl.textContent = '01 / 08';
    }
  }

  /* ------------------------------------------------------------------------
     04. EDITORIAL SERVICES ACCORDION
     ------------------------------------------------------------------------ */
  function initServiceAccordion() {
    const items = document.querySelectorAll('.service-row-item');
    if (!items.length) return;

    items.forEach((item, index) => {
      const header = item.querySelector('.service-row-header');
      const body = item.querySelector('.service-row-body');

      // Open first item by default
      if (index === 0) {
        item.classList.add('open');
        body.style.maxHeight = body.scrollHeight + 'px';
      }

      header.addEventListener('click', () => {
        const isOpen = item.classList.contains('open');

        // Close all items
        items.forEach((other) => {
          other.classList.remove('open');
          const otherBody = other.querySelector('.service-row-body');
          if (otherBody) otherBody.style.maxHeight = '0px';
        });

        // Toggle selected
        if (!isOpen) {
          item.classList.add('open');
          body.style.maxHeight = body.scrollHeight + 'px';
        }
      });
    });
  }

  /* ------------------------------------------------------------------------
     05. GENERAL SCROLL REVEALS
     ------------------------------------------------------------------------ */
  function initScrollReveals() {
    const revealElements = document.querySelectorAll('[data-unfold]');
    if (!revealElements.length) return;

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-revealed');
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.15 }
    );

    revealElements.forEach((el) => observer.observe(el));
  }
})();
