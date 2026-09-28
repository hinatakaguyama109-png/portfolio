<?php
require_once __DIR__ . '/portfolio-data.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Portfolio website for John Christian Cayanan, a junior full-stack developer and web developer."
    />
    <title>John Christian Cayanan | Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <div class="page-shell">
      <aside class="profile-panel">
        <div class="profile-image-wrap">
          <img src="<?php echo htmlspecialchars($profile['image']); ?>" alt="<?php echo htmlspecialchars($profile['name']); ?>" />
        </div>

        <div class="profile-copy">
          <p class="small-label">HELLO, I'M</p>
          <h2><?php echo htmlspecialchars($profile['name']); ?></h2>
          <span class="role"><?php echo htmlspecialchars($profile['role']); ?></span>
        </div>

        <ul class="contact-list">
          <li>
            <span class="meta-label">EMAIL</span>
            <a href="mailto:<?php echo htmlspecialchars($profile['email']); ?>"><?php echo htmlspecialchars($profile['email']); ?></a>
          </li>
          <li>
            <span class="meta-label">PHONE</span>
            <a href="tel:<?php echo preg_replace('/[^0-9+]/', '', $profile['phone']); ?>"><?php echo htmlspecialchars($profile['phone']); ?></a>
          </li>
          <li>
            <span class="meta-label">LOCATION</span>
            <span><?php echo htmlspecialchars($profile['location']); ?></span>
          </li>
          <li>
            <span class="meta-label">AVAILABILITY</span>
            <span><?php echo htmlspecialchars($profile['availability']); ?></span>
          </li>
        </ul>

        <div class="socials">
          <a href="https://www.facebook.com/jccayanan0069/" target="_blank" rel="noopener noreferrer" aria-label="Facebook">f</a>
          <a href="https://www.linkedin.com/in/johh-christian-cayanan-384a44345/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">in</a>
        </div>

        <div class="support-note"><?php echo htmlspecialchars($profile['support']); ?></div>
      </aside>

      <main class="content-panel">
        <header class="main-header">
          <div class="brand">JC.</div>
          <nav class="main-nav" aria-label="Main menu">
            <?php foreach ($navItems as $navItem): ?>
              <a href="<?php echo htmlspecialchars($navItem['href']); ?>"><?php echo htmlspecialchars($navItem['label']); ?></a>
            <?php endforeach; ?>
          </nav>
          <button class="theme-btn" aria-label="Toggle theme">☼</button>
        </header>

        <section id="about" class="hero-block reveal">
          <div class="hero-copy">
            <div class="availability-badge">✦ Open to work</div>
            <div class="mini-tags">WEB DEVELOPMENT · APPLICATION DEVELOPMENT · PROBLEM SOLVING</div>
            <h1>Junior Full-Stack Developer</h1>
            <p>
              <?php echo htmlspecialchars($professionalSummary); ?>
            </p>
            <div class="hero-actions">
              <a href="#portfolio" class="btn btn-primary">View my work</a>
              <a href="#contact" class="btn btn-secondary">Contact me</a>
            </div>
          </div>

          <div class="code-card">
            <div class="window-top">
              <span class="dot red"></span>
              <span class="dot yellow"></span>
              <span class="dot green"></span>
            </div>
            <pre class="typewriter" aria-label="Developer profile code"></pre>
          </div>
        </section>

        <section class="metrics-row reveal" aria-label="Highlights">
          <div class="metric-card">
            <strong>BSIT</strong>
            <span>Information Technology</span>
          </div>
          <div class="metric-card">
            <strong>Web</strong>
            <span>Application Development</span>
          </div>
          <div class="metric-card">
            <strong>IT</strong>
            <span>Support & Troubleshooting</span>
          </div>
        </section>

        <section id="resume" class="content-section reveal">
          <div class="section-heading">
            <span>Resume</span>
            <h3>Education, projects, and support experience</h3>
          </div>

          <div class="resume-list">
            <?php foreach ($resumeItems as $item): ?>
              <article class="resume-item">
                <span class="resume-year"><?php echo htmlspecialchars($item['year']); ?></span>
                <div>
                  <h4><?php echo htmlspecialchars($item['title']); ?></h4>
                  <p><?php echo htmlspecialchars($item['text']); ?></p>
                </div>
              </article>
            <?php endforeach; ?>
          </div>

          <div class="resume-list" style="margin-top: 2rem;">
            <article class="resume-item">
              <span class="resume-year"><?php echo htmlspecialchars($universityCertificate['date']); ?></span>
              <div>
                <h4><?php echo htmlspecialchars($universityCertificate['title']); ?></h4>
                <p><?php echo htmlspecialchars($universityCertificate['institution']); ?> • <?php echo htmlspecialchars($universityCertificate['description']); ?></p>
              </div>
            </article>
          </div>

          <div class="resume-list" style="margin-top: 2rem;">
            <article class="resume-item">
              <span class="resume-year">2024</span>
              <div>
                <h4>Seminars & Additional Studies</h4>
                <p>
                  <?php foreach ($seminars as $index => $seminar): ?>
                    <?php echo htmlspecialchars($seminar['title']); ?> — <?php echo htmlspecialchars($seminar['date']); ?><?php if ($index < count($seminars) - 1): ?>; <?php endif; ?>
                  <?php endforeach; ?>
                </p>
              </div>
            </article>
          </div>
        </section>

        <section id="skills" class="content-section reveal">
          <div class="section-heading">
            <span>Skills</span>
            <h3>Core technical strengths</h3>
          </div>

          <?php foreach ($skillGroups as $group): ?>
            <div class="skill-group" style="margin-bottom: 1.5rem;">
              <h4 style="margin-bottom: 0.8rem; color: #e2e8f0; font-size: 0.95rem; text-transform: uppercase; letter-spacing: 0.12em; opacity: 0.8;">
                <?php echo htmlspecialchars($group['category']); ?>
              </h4>
              <div class="skill-grid">
                <?php foreach ($group['items'] as $skill): ?>
                  <span><?php echo htmlspecialchars($skill); ?></span>
                <?php endforeach; ?>
              </div>
            </div>
          <?php endforeach; ?>

          <div class="skill-group" style="margin-top: 1rem;">
            <h4 style="margin-bottom: 0.8rem; color: #e2e8f0; font-size: 0.95rem; text-transform: uppercase; letter-spacing: 0.12em; opacity: 0.8;">
              Soft Skills
            </h4>
            <div class="skill-grid">
              <?php foreach ($softSkills as $skill): ?>
                <span><?php echo htmlspecialchars($skill); ?></span>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section id="portfolio" class="content-section reveal">
          <div class="section-heading">
            <span>Portfolio</span>
            <h3>Recent work and projects</h3>
          </div>

          <div class="portfolio-grid">
            <?php foreach ($projects as $project): ?>
              <article class="portfolio-card">
                <div class="portfolio-thumb <?php echo htmlspecialchars($project['type']); ?>"></div>
                <h4><?php echo htmlspecialchars($project['title']); ?></h4>
                <p class="portfolio-tech"><?php echo htmlspecialchars($project['technologies']); ?></p>
                <p><?php echo htmlspecialchars($project['description']); ?></p>
              </article>
            <?php endforeach; ?>
          </div>
        </section>

        <section id="contact" class="content-section reveal">
          <div class="section-heading">
            <span>Contact</span>
            <h3>Let’s build something dependable</h3>
          </div>

          <div class="contact-box">
            <p>Open to junior developer and web development opportunities.</p>
            <div class="contact-actions">
              <a href="mailto:<?php echo htmlspecialchars($profile['email']); ?>" class="btn btn-primary">Email me</a>
              <a href="tel:<?php echo preg_replace('/[^0-9+]/', '', $profile['phone']); ?>" class="btn btn-secondary">Call me</a>
            </div>
          </div>
        </section>
      </main>
    </div>

    <script src="script.js"></script>
  </body>
</html>
