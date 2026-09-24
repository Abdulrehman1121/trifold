/**
 * TRIFOLD — APPLICATION ENGINE
 * Handles header dynamics, navigation overlays, interactive 6-step planner, and portfolio filtering.
 */

(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', () => {
    initHeaderScroll();
    initMobileNavigation();
    initProjectPlanner();
    initPortfolioFiltering();
  });

  /* ------------------------------------------------------------------------
     01. HEADER SCROLL OBSERVER
     ------------------------------------------------------------------------ */
  function initHeaderScroll() {
    const header = document.querySelector('.site-header');
    if (!header) return;

    const isInherentlyDark = header.classList.contains('nav-light');
    const darkSections = document.querySelectorAll('.story-scroll-section, [data-theme="dark"], .case-hero');

    function checkHeaderContrast() {
      const scrollY = window.scrollY;
      if (scrollY > 40) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }

      if (!isInherentlyDark) {
        let isOverDark = false;
        darkSections.forEach((sec) => {
          const rect = sec.getBoundingClientRect();
          // Check if section background is dark
          const bg = window.getComputedStyle(sec).backgroundColor;
          if (rect.top <= 70 && rect.bottom >= 40) {
            if (sec.classList.contains('story-scroll-section') || bg.includes('17, 24, 39') || bg.includes('25, 25, 25') || bg.includes('18, 18, 20')) {
              isOverDark = true;
            }
          }
        });
        if (isOverDark) {
          header.classList.add('nav-light');
        } else {
          header.classList.remove('nav-light');
        }
      }
    }

    window.addEventListener('scroll', checkHeaderContrast, { passive: true });
    checkHeaderContrast();
  }

  /* ------------------------------------------------------------------------
     02. FULLSCREEN & MOBILE NAVIGATION TOGGLE
     ------------------------------------------------------------------------ */
  function initMobileNavigation() {
    const toggleBtn = document.querySelector('.menu-toggle');
    const overlay = document.querySelector('.fullscreen-menu');
    if (!toggleBtn || !overlay) return;

    toggleBtn.addEventListener('click', () => {
      const isOpen = overlay.classList.contains('open');
      if (isOpen) {
        overlay.classList.remove('open');
        toggleBtn.classList.remove('active');
        toggleBtn.setAttribute('aria-expanded', 'false');
        document.body.classList.remove('nav-open');
      } else {
        overlay.classList.add('open');
        toggleBtn.classList.add('active');
        toggleBtn.setAttribute('aria-expanded', 'true');
        document.body.classList.add('nav-open');
      }
    });

    // Close on link click
    const menuLinks = overlay.querySelectorAll('a');
    menuLinks.forEach((link) => {
      link.addEventListener('click', () => {
        overlay.classList.remove('open');
        toggleBtn.classList.remove('active');
        toggleBtn.setAttribute('aria-expanded', 'false');
        document.body.classList.remove('nav-open');
      });
    });
  }

  /* ------------------------------------------------------------------------
     03. INTERACTIVE 6-STEP PROJECT PLANNER (CONTACT PAGE)
     ------------------------------------------------------------------------ */
  function initProjectPlanner() {
    const planner = document.querySelector('.project-planner-box');
    if (!planner) return;

    const tabs = planner.querySelectorAll('.planner-step-tab');
    const panels = planner.querySelectorAll('.planner-step-panel');
    const prevBtn = planner.querySelector('.planner-prev-btn');
    const nextBtn = planner.querySelector('.planner-next-btn');
    const submitBtn = planner.querySelector('.planner-submit-btn');
    const summaryBox = planner.querySelector('.planner-summary-box');

    let currentStep = 1;
    const totalSteps = 6;

    // State object to store choices
    const plannerData = {
      services: [],
      businessName: '',
      industry: '',
      website: '',
      objective: '',
      budget: '',
      timeline: '',
      name: '',
      email: '',
      notes: ''
    };

    function updateStepView() {
      tabs.forEach((t) => {
        const stepNum = parseInt(t.getAttribute('data-step'), 10);
        if (stepNum === currentStep) {
          t.classList.add('active');
        } else {
          t.classList.remove('active');
        }
      });

      panels.forEach((p) => {
        const stepNum = parseInt(p.getAttribute('data-step'), 10);
        if (stepNum === currentStep) {
          p.classList.add('active');
        } else {
          p.classList.remove('active');
        }
      });

      // Update button visibility
      if (prevBtn) {
        prevBtn.style.visibility = currentStep === 1 ? 'hidden' : 'visible';
      }

      if (currentStep === totalSteps) {
        if (nextBtn) nextBtn.style.display = 'none';
        if (submitBtn) submitBtn.style.display = 'inline-flex';
      } else {
        if (nextBtn) nextBtn.style.display = 'inline-flex';
        if (submitBtn) submitBtn.style.display = 'none';
      }
    }

    // Handle Option Cards (Single and Multi Select)
    const optionCards = planner.querySelectorAll('.planner-option-card');
    optionCards.forEach((card) => {
      card.addEventListener('click', () => {
        const step = card.closest('.planner-step-panel').getAttribute('data-step');
        const isMulti = card.closest('.planner-step-panel').getAttribute('data-multi') === 'true';

        if (!isMulti) {
          card.parentElement.querySelectorAll('.planner-option-card').forEach((c) => c.classList.remove('selected'));
          card.classList.add('selected');
        } else {
          card.classList.toggle('selected');
        }
      });
    });

    if (nextBtn) {
      nextBtn.addEventListener('click', () => {
        if (currentStep < totalSteps) {
          currentStep += 1;
          updateStepView();
        }
      });
    }

    if (prevBtn) {
      prevBtn.addEventListener('click', () => {
        if (currentStep > 1) {
          currentStep -= 1;
          updateStepView();
        }
      });
    }

    if (submitBtn) {
      submitBtn.addEventListener('click', (e) => {
        e.preventDefault();
        const nameInput = planner.querySelector('#planner-name');
        const emailInput = planner.querySelector('#planner-email');

        if (nameInput && !nameInput.value.trim()) {
          alert('Please enter your name.');
          nameInput.focus();
          return;
        }

        if (emailInput && (!emailInput.value.trim() || !emailInput.value.includes('@'))) {
          alert('Please enter a valid working email address.');
          emailInput.focus();
          return;
        }

        // Show confirmation view
        if (summaryBox) {
          planner.querySelectorAll('.planner-step-panel').forEach((p) => p.classList.remove('active'));
          if (prevBtn) prevBtn.style.display = 'none';
          if (submitBtn) submitBtn.style.display = 'none';
          if (nextBtn) nextBtn.style.display = 'none';
          tabs.forEach((t) => t.classList.remove('active'));

          summaryBox.style.display = 'block';
          summaryBox.innerHTML = `
            <div style="text-align: center; padding: 40px 20px;">
              <div style="width: 56px; height: 56px; border-radius: 50%; background: #E4492E; color: #fff; display: flex; align-items: center; justify-content: center; margin: 0 auto 24px; font-size: 24px;">✓</div>
              <h3 style="font-size: 2rem; font-weight: 800; color: #191919; margin-bottom: 16px;">BRIEF RECEIVED. LET'S UNFOLD IT.</h3>
              <p style="font-size: 1.1rem; color: #666; max-width: 540px; margin: 0 auto 28px;">
                Thank you for reaching out, <strong>${nameInput ? nameInput.value : ''}</strong>. We have received your project details and the Trifold team (Farhan, Shayan, and Abdul Rehman) will review and reply within one business day.
              </p>
              <a href="index.html" class="btn btn-primary">Return to Homepage</a>
            </div>
          `;
        }
      });
    }

    updateStepView();
  }

  /* ------------------------------------------------------------------------
     04. PORTFOLIO FILTERING (WORK PAGE)
     ------------------------------------------------------------------------ */
  function initPortfolioFiltering() {
    const filterBtns = document.querySelectorAll('.portfolio-filter-bar .filter-btn');
    const projectCards = document.querySelectorAll('.portfolio-grid-item');
    if (!filterBtns.length || !projectCards.length) return;

    filterBtns.forEach((btn) => {
      btn.addEventListener('click', () => {
        filterBtns.forEach((b) => b.classList.remove('active'));
        btn.classList.add('active');

        const filterVal = btn.getAttribute('data-filter');

        projectCards.forEach((card) => {
          const category = card.getAttribute('data-category') || '';
          const isMatch = (filterVal === 'all' || category.includes(filterVal));
          if (isMatch) {
            card.style.display = 'flex';
            requestAnimationFrame(() => {
              card.style.opacity = '1';
              card.style.transform = 'translateY(0)';
            });
          } else {
            card.style.display = 'none';
            card.style.opacity = '0';
            card.style.transform = 'translateY(12px)';
          }
        });
      });
    });
  }
})();
