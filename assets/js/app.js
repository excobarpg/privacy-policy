document.addEventListener('DOMContentLoaded', () => {
  const nav = document.querySelector('.nav-shell');
  const toggle = document.querySelector('.nav__toggle');
  const links = document.querySelector('.nav__links');

  window.addEventListener('scroll', () => {
    if (window.scrollY > 24) {
      nav?.classList.add('nav--scrolled');
    } else {
      nav?.classList.remove('nav--scrolled');
    }
  });

  toggle?.addEventListener('click', () => {
    links?.classList.toggle('nav__links--open');
  });

  // Close mobile menu on link click
  links?.querySelectorAll('a').forEach((a) =>
    a.addEventListener('click', () => links.classList.remove('nav__links--open'))
  );

  // Simple scroll reveal
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('reveal--visible');
        }
      });
    },
    { threshold: 0.18 }
  );

  document.querySelectorAll('.reveal').forEach((el) => observer.observe(el));

  // Parallax hero image
  const media = document.querySelector('.media-frame');
  if (media) {
    window.addEventListener('mousemove', (e) => {
      const x = (e.clientX / window.innerWidth - 0.5) * 10;
      const y = (e.clientY / window.innerHeight - 0.5) * 10;
      media.style.transform = `translate3d(${x}px, ${y}px, 0)`;
    });
  }

  // Tilt cards for subtle 3D feel
  const tilts = document.querySelectorAll('.tilt');
  tilts.forEach((card) => {
    card.addEventListener('mousemove', (e) => {
      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      const rotateY = ((x / rect.width) - 0.5) * 8;
      const rotateX = ((y / rect.height) - 0.5) * -8;
      card.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-6px)`;
    });

    card.addEventListener('mouseleave', () => {
      card.style.transform = '';
    });
  });

  // Smooth anchor scroll
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener('click', (e) => {
      const target = document.querySelector(anchor.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });
});

