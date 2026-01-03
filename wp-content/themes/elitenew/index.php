<?php get_header(); ?>

<!-- Hero Section -->

    <section class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/backgrounde.png');
    background-size: cover;">
        <div class="container">
            <h1>Smart Design & Digital Services For Every Business</h1>
            <p>From websites to graphics and social media, Elite Marketing Technology builds what your brand needs. We help businesses in Canada and Pakistan grow online.</p>
            <div class="hero-btn">
            <a href="#" class="btn">Contact</a>
            <a href="#" class="btn btn-outline">See Our Projects</a>
            </div>
        </div>
    </section>


   <!-- branding logos -->

  <section class="trusted-section">
  <h2>Trusted <span>By</span> Leading Businesses</h2>

  <!-- ROW 1 -->
  <div class="marquee" data-direction="right">
    <div class="marquee-track">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/branding/b18-removebg-preview.png">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/branding/b22-removebg-preview.png">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/branding/b23-removebg-preview.png">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/branding/Lucid-removebg-preview (1).png">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/branding/steerline.png">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/branding/unnamed__1_-removebg-preview.png">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/branding/logotoronto11.webp">

    </div>
  </div>

  <!-- ROW 2 -->
  <div class="marquee" data-direction="left">
    <div class="marquee-track">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/branding/unnamed__2_-removebg-preview.png">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/branding/unnamed-removebg-preview.png">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/branding/img-1.png">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/branding/img-2.png">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/branding/img-3.png">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/branding/img-4.png">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/branding/gta.png">
    </div>
  </div>
</section>


<!-- about us section -->

<section class="about-section">
  <div class="about-container">

    <!-- LEFT CONTENT -->
    <div class="about-content">
      <span class="badge">● About Us</span>

      <h2>
        Your Partner for Design,<br>
        Development and Digital<br>
        Growth
      </h2>

      <p>
        Mas Designs is a Pakistan based digital agency specializing in website
        development, creative branding, and complete 360° marketing services.
        We help businesses build a strong online presence with modern UI/UX,
        fast performing websites, strategic social media management, SEO, and
        result driven marketing campaigns.
      </p>

      <h4>What We Do Best</h4>
      <ul>
        <li>Modern branding that builds trust</li>
        <li>Fast and responsive websites</li>
        <li>Strong social media presence for growth</li>
        <li>Digital marketing that brings real results</li>
      </ul>

      <a href="#" class="btn">Read More →</a>
    </div>

    <!-- RIGHT IMAGE -->
    <div class="about-image">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/thumbnail_9896ab70-4dee-4462-b7f2-8238aa5b8adc.png.2048x2048_q85-removebg-preview.png" alt="Rocket">
    </div>

  </div>
</section>


<!-- drive growth section -->

<section class="services-section">
  <div class="container">

    <span class="badge">● OUR SERVICES</span>
    <h2>Digital Solutions That Drive Growth</h2>

    <div class="services-grid">

      <!-- CARD 1 -->
      <div class="service-card">
        <div class="icon">🛠</div>
        <h3>Graphic Designing</h3>
        <p>
          We build strong and consistent brand identities that help businesses
          stand out in Pakistan’s digital market.
        </p>
        <button>Read More</button>
      </div>

      <!-- CARD 2 -->
      <div class="service-card">
        <div class="icon">💻</div>
        <h3>Website Development</h3>
        <p>
          We develop fast, secure, and conversion-focused websites designed to
          support business growth across Pakistan.
        </p>
        <button>Read More</button>
      </div>

      <!-- CARD 3 -->
      <div class="service-card">
        <div class="icon">📱</div>
        <h3>Social Media Management</h3>
        <p>
          We manage your social platforms with strategic planning and creative
          content that keeps your audience engaged.
        </p>
        <button>Read More</button>
      </div>

      <!-- HIDDEN CARDS -->
      <div class="service-card hidden">
        <div class="icon">📣</div>
        <h3>Digital Marketing</h3>
        <p>
          Targeted campaigns that increase reach, boost engagement, and deliver
          measurable business results.
        </p>
        <button>Read More</button>
      </div>

      <div class="service-card hidden">
        <div class="icon">🌐</div>
        <h3>Hosting</h3>
        <p>
          Reliable domain registration and secure hosting with strong uptime,
          fast speeds, and stable performance.
        </p>
        <button>Read More</button>
      </div>

      <div class="service-card hidden">
        <div class="icon">💡</div>
        <h3>Creative & Media Services</h3>
        <p>
          Professional media solutions that support branding, storytelling, and
          digital growth.
        </p>
        <button>Read More</button>
      </div>

    </div>

    <div class="view-more">
      <button id="toggleBtn">View More ↓</button>
    </div>

  </div>
</section>



   <?php get_footer(); ?>

</body>
</html>