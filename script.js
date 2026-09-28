const revealItems = document.querySelectorAll('.reveal');

const revealObserver = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        revealObserver.unobserve(entry.target);
      }
    });
  },
  {
    threshold: 0.14,
  }
);

revealItems.forEach((item) => revealObserver.observe(item));

const typewriter = document.querySelector('.typewriter');
if (typewriter) {
  const strings = [
    'const developer = {\n  name: "John Christian Cayanan",\n  role: "Junior Full-Stack Developer",\n  focus: "Web Development",\n  ready: true,\n};',
    'const developer = {\n  name: "John Christian Cayanan",\n  role: "Junior Full-Stack Developer",\n  focus: "Tech + Problem Solving",\n  ready: true,\n};',
    'const developer = {\n  name: "John Christian Cayanan",\n  role: "Junior Full-Stack Developer",\n  focus: "Web Development",\n  ready: true,\n};'
  ];

  let stringIndex = 0;
  let charIndex = 0;
  let deleting = false;

  const typeLoop = () => {
    const currentText = strings[stringIndex];
    typewriter.textContent = currentText.slice(0, charIndex);

    if (!deleting && charIndex < currentText.length) {
      charIndex += 1;
      setTimeout(typeLoop, 28);
      return;
    }

    if (!deleting && charIndex === currentText.length) {
      deleting = true;
      setTimeout(typeLoop, 1100);
      return;
    }

    if (deleting && charIndex > 0) {
      charIndex -= 1;
      setTimeout(typeLoop, 18);
      return;
    }

    deleting = false;
    stringIndex = (stringIndex + 1) % strings.length;
    setTimeout(typeLoop, 180);
  };

  typeLoop();
}

const themeButton = document.querySelector('.theme-btn');
const savedTheme = localStorage.getItem('portfolio-theme');
const initialTheme = savedTheme || 'dark';

document.body.classList.toggle('light-theme', initialTheme === 'light');

if (themeButton) {
  themeButton.textContent = initialTheme === 'light' ? '☾' : '☼';
  themeButton.addEventListener('click', () => {
    const isLight = document.body.classList.toggle('light-theme');
    const nextTheme = isLight ? 'light' : 'dark';
    localStorage.setItem('portfolio-theme', nextTheme);
    themeButton.textContent = isLight ? '☾' : '☼';
  });
}

const yearEl = document.getElementById('year');
if (yearEl) {
  yearEl.textContent = new Date().getFullYear();
}

const contactForm = document.querySelector('.contact-form');
if (contactForm) {
  contactForm.addEventListener('submit', (event) => {
    event.preventDefault();
    const button = contactForm.querySelector('button');
    if (button) {
      const originalText = button.textContent;
      button.textContent = 'Message sent';
      button.disabled = true;
      setTimeout(() => {
        button.textContent = originalText;
        button.disabled = false;
        contactForm.reset();
      }, 1800);
    }
  });
}
