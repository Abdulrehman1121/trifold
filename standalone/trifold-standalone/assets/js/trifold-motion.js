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
    initContinuousStory();
    initCinematicCarousel();
    initScrollReveals();
    initServiceAccordion();
  });

  /* ------------------------------------------------------------------------
     01. HERO UNFOLDING CEREMONY
     ------------------------------------------------------------------------ */
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
     02. CONTINUOUS OPENING STORY (IDEA -> IDENTITY -> EXPERIENCE -> CONNECTED)
     ------------------------------------------------------------------------ */
  function initContinuousStory() {
    const storySection = document.querySelector('.story-scroll-section');
    if (!storySection) return;

    const cards = storySection.querySelectorAll('.story-step-card');
    const morphSymbol = storySection.querySelector('.story-svg-box');

    if (!cards.length) return;

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
      { threshold: 0.6 }
    );

    cards.forEach((card) => observer.observe(card));
  }

  /* ------------------------------------------------------------------------
     03. CINEMATIC PORTFOLIO CAROUSEL (~75VW CENTERED + PEEK + DRAG)
     ------------------------------------------------------------------------ */
  function initCinematicCarousel() {
    const carouselSection = document.querySelector('.cinematic-portfolio-section');
    if (!carouselSection) return;

    const track = carouselSection.querySelector('.carousel-track');
    const slides = Array.from(carouselSection.querySelectorAll('.carousel-slide'));
    const counterEl = carouselSection.querySelector('.carousel-counter');
    const prevBtn = carouselSection.querySelector('.carousel-prev');
    const nextBtn = carouselSection.querySelector('.carousel-next');

    if (!track || !slides.length) return;

    let currentIndex = 0;
    let isDragging = false;
    let startX = 0;
    let currentTranslate = 0;
    let prevTranslate = 0;
    let animationID = 0;

    function setPositionByIndex() {
      // Calculate slide width and centering offset
      const slide = slides[0];
      const slideWidth = slide.getBoundingClientRect().width;
      const gap = 40;
      const stageWidth = window.innerWidth;
      const centerOffset = (stageWidth - slideWidth) / 2;

      currentTranslate = -(currentIndex * (slideWidth + gap)) + centerOffset;
      prevTranslate = currentTranslate;
      track.style.transform = `translateX(${currentTranslate}px)`;

      // Update active states
      slides.forEach((s, idx) => {
        if (idx === currentIndex) {
          s.classList.add('active');
        } else {
          s.classList.remove('active');
        }
      });

      // Update counter
      if (counterEl) {
        const currentStr = String(currentIndex + 1).padStart(2, '0');
        const totalStr = String(slides.length).padStart(2, '0');
        counterEl.textContent = `${currentStr} / ${totalStr}`;
      }

      // Background accent shift
      const activeSlide = slides[currentIndex];
      const bgColor = activeSlide.getAttribute('data-bg');
      if (bgColor) {
        carouselSection.style.backgroundColor = bgColor;
      } else {
        carouselSection.style.backgroundColor = 'var(--color-ivory)';
      }
    }

    // Drag / Pointer Events
    track.addEventListener('pointerdown', (e) => {
      isDragging = true;
      startX = e.clientX;
      track.style.transition = 'none';
      track.setPointerCapture(e.pointerId);
    });

    track.addEventListener('pointermove', (e) => {
      if (!isDragging) return;
      const currentX = e.clientX;
      const diff = currentX - startX;
      currentTranslate = prevTranslate + diff;
      track.style.transform = `translateX(${currentTranslate}px)`;
    });

    function endDrag(e) {
      if (!isDragging) return;
      isDragging = false;
      const diff = currentTranslate - prevTranslate;
      track.style.transition = 'transform 0.5s cubic-bezier(0.215, 0.61, 0.355, 1)';

      if (diff < -60 && currentIndex < slides.length - 1) {
        currentIndex += 1;
      } else if (diff > 60 && currentIndex > 0) {
        currentIndex -= 1;
      }
      setPositionByIndex();
    }

    track.addEventListener('pointerup', endDrag);
    track.addEventListener('pointercancel', endDrag);

    // Arrow Buttons
    if (prevBtn) {
      prevBtn.addEventListener('click', () => {
        if (currentIndex > 0) {
          currentIndex -= 1;
          track.style.transition = 'transform 0.5s cubic-bezier(0.215, 0.61, 0.355, 1)';
          setPositionByIndex();
        }
      });
    }

    if (nextBtn) {
      nextBtn.addEventListener('click', () => {
        if (currentIndex < slides.length - 1) {
          currentIndex += 1;
          track.style.transition = 'transform 0.5s cubic-bezier(0.215, 0.61, 0.355, 1)';
          setPositionByIndex();
        }
      });
    }

    // Keyboard navigation
    window.addEventListener('keydown', (e) => {
      if (e.key === 'ArrowLeft' && currentIndex > 0) {
        currentIndex -= 1;
        track.style.transition = 'transform 0.5s cubic-bezier(0.215, 0.61, 0.355, 1)';
        setPositionByIndex();
      } else if (e.key === 'ArrowRight' && currentIndex < slides.length - 1) {
        currentIndex += 1;
        track.style.transition = 'transform 0.5s cubic-bezier(0.215, 0.61, 0.355, 1)';
        setPositionByIndex();
      }
    });

    // Window resize handler
    window.addEventListener('resize', () => {
      track.style.transition = 'none';
      setPositionByIndex();
    });

    // Initial positioning
    track.style.transition = 'transform 0.5s cubic-bezier(0.215, 0.61, 0.355, 1)';
    setPositionByIndex();
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
