/**
 * TRIFOLD — CUSTOM INTERACTIVE CURSOR
 * High-performance, GPU-accelerated contextual cursor with magnetic triggers.
 * Automatically disabled on touch & coarse pointer devices.
 */

(function () {
  'use strict';

  // Disable on touch devices
  if (window.matchMedia('(pointer: coarse)').matches || window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    return;
  }

  const cursor = document.createElement('div');
  cursor.className = 'custom-cursor';
  cursor.innerHTML = '<span class="custom-cursor-label"></span>';
  document.body.appendChild(cursor);

  const labelEl = cursor.querySelector('.custom-cursor-label');

  let mouseX = -100;
  let mouseY = -100;
  let currentX = -100;
  let currentY = -100;
  let isHovered = false;

  window.addEventListener('mousemove', (e) => {
    mouseX = e.clientX;
    mouseY = e.clientY;
    if (!cursor.classList.contains('active')) {
      cursor.classList.add('active');
    }
  });

  window.addEventListener('mouseleave', () => {
    cursor.classList.remove('active');
  });

  // Smooth cursor follow with requestAnimationFrame
  function renderCursor() {
    const ease = 0.22;
    currentX += (mouseX - currentX) * ease;
    currentY += (mouseY - currentY) * ease;

    cursor.style.transform = `translate3d(${currentX}px, ${currentY}px, 0)`;
    requestAnimationFrame(renderCursor);
  }
  requestAnimationFrame(renderCursor);

  // Setup contextual cursor listeners
  function initCursorEvents() {
    // Links & Buttons (Subtle expansion)
    const interactables = document.querySelectorAll('a, button, .interactive-target');
    interactables.forEach((el) => {
      el.addEventListener('mouseenter', () => {
        if (!cursor.classList.contains('view-state') && !cursor.classList.contains('drag-state')) {
          cursor.classList.add('link-state');
        }
      });
      el.addEventListener('mouseleave', () => {
        cursor.classList.remove('link-state');
      });
    });

    // Elements with data-cursor
    const customElements = document.querySelectorAll('[data-cursor]');
    customElements.forEach((el) => {
      const type = el.getAttribute('data-cursor');
      el.addEventListener('mouseenter', () => {
        cursor.classList.remove('link-state');
        if (type === 'view') {
          cursor.classList.add('view-state');
          labelEl.textContent = 'View';
        } else if (type === 'drag') {
          cursor.classList.add('drag-state');
          labelEl.textContent = 'Drag';
        } else if (type === 'visit') {
          cursor.classList.add('view-state');
          labelEl.textContent = 'Visit';
        } else if (type === 'play') {
          cursor.classList.add('view-state');
          labelEl.textContent = 'Play';
        }
      });

      el.addEventListener('mouseleave', () => {
        cursor.classList.remove('view-state', 'drag-state');
        labelEl.textContent = '';
      });
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initCursorEvents);
  } else {
    initCursorEvents();
  }

  // Re-run setup on dynamic DOM mutations (e.g. portfolio filters)
  window.initTrifoldCursor = initCursorEvents;
})();
