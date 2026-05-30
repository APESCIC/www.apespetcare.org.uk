(function () {
  const menuToggle = document.querySelector('[data-menu-toggle]');
  const mainNav = document.querySelector('[data-main-nav]');

  if (menuToggle && mainNav) {
    menuToggle.addEventListener('click', () => {
      const open = mainNav.classList.toggle('open');
      menuToggle.setAttribute('aria-expanded', String(open));
    });
  }

  document.querySelectorAll('.drop > .drop-trigger').forEach((trigger) => {
    trigger.addEventListener('click', (event) => {
      const isMobile = window.matchMedia('(max-width: 860px)').matches;
      if (!isMobile) return;
      event.preventDefault();
      const parent = trigger.closest('.drop');
      if (parent) parent.classList.toggle('open');
    });
  });

  const cards = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (!entry.isIntersecting) return;
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        });
      },
      { threshold: 0.12 }
    );
    cards.forEach((card, index) => {
      card.style.transitionDelay = `${Math.min(index * 40, 300)}ms`;
      observer.observe(card);
    });
  } else {
    cards.forEach((card) => card.classList.add('is-visible'));
  }
})();
