// ===== Header: sticky shadow + right-side mobile drawer =====
(function () {
  const header = document.querySelector('.qc-header');
  if (!header) return;
  const nav = header.querySelector('.qc-nav');
  const toggle = header.querySelector('.qc-toggle');
  const closeBtn = header.querySelector('.qc-close');
  const overlay = header.querySelector('.qc-overlay');
  const mobileQuery = window.matchMedia('(max-width: 960px)');

  // Stagger index for the slide-in animation
  nav.querySelectorAll('.qc-menu > li').forEach((li, i) => li.style.setProperty('--i', i));

  function setOpen(open) {
    const wasOpen = nav.classList.contains('is-open');
    nav.classList.toggle('is-open', open);
    overlay.classList.toggle('is-open', open);
    toggle.setAttribute('aria-expanded', String(open));
    document.documentElement.classList.toggle('qc-lock', open);
    if (open) closeBtn.focus({ preventScroll: true });
    else if (wasOpen) toggle.focus({ preventScroll: true });
  }

  toggle.addEventListener('click', () => setOpen(true));
  closeBtn.addEventListener('click', () => setOpen(false));
  overlay.addEventListener('click', () => setOpen(false));
  document.addEventListener('keydown', e => { if (e.key === 'Escape' && nav.classList.contains('is-open')) setOpen(false); });
  mobileQuery.addEventListener('change', e => { if (!e.matches) setOpen(false); });

  // Close the drawer after tapping a link
  nav.querySelectorAll('a').forEach(a => a.addEventListener('click', () => { if (mobileQuery.matches) setOpen(false); }));

  // Submenus: caret on desktop, tap-to-expand on mobile
  nav.querySelectorAll('.qc-menu > .menu-item-has-children').forEach(li => {
    const btn = document.createElement('button');
    btn.type = 'button';
    btn.className = 'qc-sub-toggle';
    btn.setAttribute('aria-expanded', 'false');
    btn.setAttribute('aria-label', 'Show submenu');
    btn.innerHTML = '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 9l6 6 6-6" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>';
    li.querySelector(':scope > a').after(btn);
    btn.addEventListener('click', () => {
      const open = li.classList.toggle('is-open');
      btn.setAttribute('aria-expanded', String(open));
    });
  });

  // Stronger shadow + slightly smaller header once the page scrolls
  const onScroll = () => header.classList.toggle('is-scrolled', window.scrollY > 40);
  onScroll();
  window.addEventListener('scroll', onScroll, { passive: true });
})();

const revealObserver = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
      revealObserver.unobserve(entry.target);
    }
  });
}, { threshold: .12 });
document.querySelectorAll('.reveal').forEach(item => revealObserver.observe(item));

document.querySelectorAll('.faq-item button').forEach(button => {
  button.addEventListener('click', () => {
    const item = button.parentElement;
    const wasOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item').forEach(faq => {
      faq.classList.remove('open');
      faq.querySelector('b').textContent = '+';
    });
    if (!wasOpen) {
      item.classList.add('open');
      button.querySelector('b').textContent = '−';
    }
  });
});

const quotes = [...document.querySelectorAll('.quote')];
const dots = [...document.querySelectorAll('.slider-dots button')];
let currentQuote = 0;
function showQuote(index) {
  currentQuote = (index + quotes.length) % quotes.length;
  quotes.forEach((quote, i) => quote.classList.toggle('active', i === currentQuote));
  dots.forEach((dot, i) => dot.classList.toggle('active', i === currentQuote));
}
document.querySelector('.next')?.addEventListener('click', () => showQuote(currentQuote + 1));
document.querySelector('.prev')?.addEventListener('click', () => showQuote(currentQuote - 1));
dots.forEach((dot, i) => dot.addEventListener('click', () => showQuote(i)));
if (quotes.length > 1) setInterval(() => showQuote(currentQuote + 1), 6500);

// Testimonials Carousel (Auto-advancing "chaltay rahay" + Controls)
const tSlides = [...document.querySelectorAll('.testimonial-slide')];
const tDots = [...document.querySelectorAll('#testimonialDots button')];
const tPrev = document.querySelector('.t-prev');
const tNext = document.querySelector('.t-next');
let currentTSlide = 0;
let tInterval = null;

function showTestimonial(index) {
  if (!tSlides.length) return;
  currentTSlide = (index + tSlides.length) % tSlides.length;
  tSlides.forEach((slide, i) => slide.classList.toggle('active', i === currentTSlide));
  tDots.forEach((dot, i) => dot.classList.toggle('active', i === currentTSlide));
}

function startTestimonialTimer() {
  if (tInterval) clearInterval(tInterval);
  if (tSlides.length > 1) {
    tInterval = setInterval(() => {
      showTestimonial(currentTSlide + 1);
    }, 4500);
  }
}

tPrev?.addEventListener('click', () => {
  showTestimonial(currentTSlide - 1);
  startTestimonialTimer();
});

tNext?.addEventListener('click', () => {
  showTestimonial(currentTSlide + 1);
  startTestimonialTimer();
});

tDots.forEach((dot, i) => {
  dot.addEventListener('click', () => {
    showTestimonial(i);
    startTestimonialTimer();
  });
});

const tPanel = document.querySelector('.testimonial-panel');
tPanel?.addEventListener('mouseenter', () => {
  if (tInterval) clearInterval(tInterval);
});
tPanel?.addEventListener('mouseleave', () => {
  startTestimonialTimer();
});
startTestimonialTimer();

// Course Plans Tabs Switcher (supports UK, USA, Canada, Australia)
document.querySelectorAll('.plans-widget').forEach(widget => {
  const tabs = widget.querySelectorAll('.plan-tab');
  const panels = widget.querySelectorAll('.plan-content');

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      const country = tab.getAttribute('data-country');
      tabs.forEach(t => {
        const isActive = t === tab;
        t.classList.toggle('active', isActive);
        t.setAttribute('aria-selected', String(isActive));
      });
      panels.forEach(panel => {
        panel.classList.toggle('active', panel.id === `plan-${country}`);
      });
    });
  });
});

const sections = [...document.querySelectorAll('main section[id]')];
window.addEventListener('scroll', () => {
  const point = window.scrollY + 180;
  let active = 'home';
  sections.forEach(section => { if (point >= section.offsetTop) active = section.id; });
  document.querySelectorAll('.qc-menu a, .nav-links a').forEach(link => {
    const href = link.getAttribute('href');
    if (href && href.startsWith('#')) {
      link.classList.toggle('active', href === `#${active}`);
    }
  });
}, { passive: true });

const heroSlides = [...document.querySelectorAll('.hero-slide')];
const heroDots = [...document.querySelectorAll('.hero-dots button')];
let currentHero = 0;
function showHero(index) {
  currentHero = (index + heroSlides.length) % heroSlides.length;
  heroSlides.forEach((slide, i) => slide.classList.toggle('active', i === currentHero));
  heroDots.forEach((dot, i) => dot.classList.toggle('active', i === currentHero));
}
heroDots.forEach((dot, i) => dot.addEventListener('click', () => showHero(i)));
if (heroSlides.length > 1) setInterval(() => showHero(currentHero + 1), 5200);

const ctaSlides = [...document.querySelectorAll('.cta-bg')];
const ctaDots = [...document.querySelectorAll('.cta-dots button')];
let currentCta = 0;
function showCta(index) {
  currentCta = (index + ctaSlides.length) % ctaSlides.length;
  ctaSlides.forEach((slide, i) => slide.classList.toggle('active', i === currentCta));
  ctaDots.forEach((dot, i) => dot.classList.toggle('active', i === currentCta));
}
ctaDots.forEach((dot, i) => dot.addEventListener('click', () => showCta(i)));
if (ctaSlides.length > 1) setInterval(() => showCta(currentCta + 1), 6000);

// ===== Namaz page: click a posture card to enlarge =====
(function () {
  const modal = document.getElementById('postureModal');
  if (!modal) return;
  const img = document.getElementById('postureModalImg');
  const title = document.getElementById('postureModalTitle');
  const closeBtn = document.getElementById('postureModalClose');
  let lastCard = null;

  function open(card) {
    const cardImg = card.querySelector('img');
    const heading = card.querySelector('.namaz-card-caption h4');
    img.src = cardImg.src;
    img.alt = cardImg.alt;
    title.textContent = heading ? heading.textContent : cardImg.alt;
    lastCard = card;
    modal.classList.add('open');
    document.documentElement.classList.add('qc-lock');
    closeBtn.focus();
  }
  function close() {
    modal.classList.remove('open');
    document.documentElement.classList.remove('qc-lock');
    if (lastCard) lastCard.focus();
  }

  document.querySelectorAll('.namaz-card').forEach(card => {
    card.tabIndex = 0;
    card.setAttribute('role', 'button');
    card.addEventListener('click', () => open(card));
    card.addEventListener('keydown', e => {
      if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); open(card); }
    });
  });
  closeBtn.addEventListener('click', close);
  modal.addEventListener('click', e => { if (e.target === modal) close(); });
  document.addEventListener('keydown', e => { if (e.key === 'Escape' && modal.classList.contains('open')) close(); });
})();

// ===== Smooth Scroll for Anchor Links =====
document.addEventListener('click', function(e) {
  const link = e.target.closest('a[href^="#"]');
  if (!link) return;
  const targetId = link.getAttribute('href');
  if (!targetId || targetId === '#') return;
  const targetEl = document.querySelector(targetId);
  if (targetEl) {
    e.preventDefault();
    targetEl.scrollIntoView({ behavior: 'smooth' });
  }
});

// ===== Fallback Trial Form Handler =====
document.addEventListener('DOMContentLoaded', function() {
  const trialForm = document.getElementById('trialRegistrationForm');
  if (trialForm) {
    trialForm.addEventListener('submit', function(e) {
      e.preventDefault();
      alert('JazakAllah Khair! Your 7-Days Free Trial request has been submitted. Our team will get in touch with you shortly on WhatsApp.');
      trialForm.reset();
    });
  }
});