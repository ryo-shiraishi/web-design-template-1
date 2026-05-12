/* eslint-disable */
(function () {
  'use strict';

  // ─── Header scroll effect ────────────────────────────────────────────────────
  const header = document.getElementById('site-header');
  if (header) {
    const scrolledClasses = [
      'bg-brand-bg/90',
      'backdrop-blur-md',
      'border-b',
      'border-brand-border',
    ];

    function updateHeader() {
      if (window.scrollY > 50) {
        scrolledClasses.forEach(function (cls) { header.classList.add(cls); });
      } else {
        scrolledClasses.forEach(function (cls) { header.classList.remove(cls); });
      }
    }

    window.addEventListener('scroll', updateHeader, { passive: true });
    updateHeader();
  }

  // ─── Mobile menu ─────────────────────────────────────────────────────────────
  const menuOpenBtn  = document.getElementById('menu-open-btn');
  const menuCloseBtn = document.getElementById('menu-close-btn');
  const mobileMenu   = document.getElementById('mobile-menu');
  const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');

  function openMenu() {
    mobileMenu.classList.remove('hidden-menu');
    mobileMenu.classList.add('visible-menu');
    mobileMenu.setAttribute('aria-hidden', 'false');
    menuOpenBtn.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden';
  }

  function closeMenu() {
    mobileMenu.classList.remove('visible-menu');
    mobileMenu.classList.add('hidden-menu');
    mobileMenu.setAttribute('aria-hidden', 'true');
    menuOpenBtn.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
  }

  if (menuOpenBtn)  menuOpenBtn.addEventListener('click', openMenu);
  if (menuCloseBtn) menuCloseBtn.addEventListener('click', closeMenu);
  mobileNavLinks.forEach(function (link) {
    link.addEventListener('click', closeMenu);
  });

  // Close menu on Escape key
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeMenu();
  });

  // ─── Scroll-reveal (FadeInView) ───────────────────────────────────────────────
  const fadeElements = document.querySelectorAll('.fade-in');

  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
          }
        });
      },
      { rootMargin: '-100px 0px', threshold: 0 }
    );

    fadeElements.forEach(function (el) { observer.observe(el); });
  } else {
    // Fallback: show all elements immediately
    fadeElements.forEach(function (el) { el.classList.add('visible'); });
  }
})();
