<?php 
    //Template Name:About Us

   get_header(); 

?>

<!-- hero section -->

<section class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/backgrounde.png');
    background-size: cover;">
 <div class="container">
    <h1>Your Partner in Business Growth</h1>
    <p>We are a team of expert marketers, designers, developers, and strategists dedicated to making your brand the best in its class</p>
    <div class="hero-btn">
      <a href="#" class="btn con-btn">Work With Us</a>
      <!-- <a href="#" class="btn btn-outline">See Our Projects</a> -->
    </div>
  </div>
    
</section>

<!-- end hero section -->

<!-- CEO section -->

<section class="em-ceo-section">
    <div class="em-ceo-container">
        <div class="em-ceo-grid">
            <div class="em-ceo-content">
                <span class="em-subtitle">Message From Leadership</span>
                <h2 class="em-title-large-1">Meet Our Visionary CEO</h2>
                <p class="em-ceo-quote">"At Elite Marketing, we don't just follow trends; we create them. Our goal is to empower businesses with digital strategies that drive real-world impact."</p>
                
                <div class="em-ceo-details">
                    <h4 class="em-ceo-name">Adnan Liaqat</h4>
                    <p class="em-ceo-role">Founder & CEO, Elite Marketing</p>
                    <div class="em-ceo-social">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
                <button class="em-btn-red">Read Full Story</button>
            </div>

            <div class="em-ceo-image-box">
                <div class="em-ceo-img-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/unnamed.jpg" alt="CEO Image" class="em-ceo-img">
                    <div class="em-ceo-accent"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end ceo section -->

<div class="em-wrapper">

    <section class="em-section">
        <div class="em-grid-2">
            <div>
                <span class="em-subtitle">Elite Marketing</span>
                <h2 class="em-title-large">Why We Are Best?</h2>
                <p style="color:var(--em-grey)">Innovative marketing solutions designed to scale your business using the latest digital trends.</p>
                
                <div class="em-feature-row">
                    <div class="em-icon-box"><i class="fas fa-location-arrow"></i></div>
                    <div class="em-feature-text">
                        <h4>Diverse Destinations</h4>
                        <p>We target audiences across various digital landscapes globally.</p>
                    </div>
                </div>

                <div class="em-feature-row">
                    <div class="em-icon-box"><i class="fas fa-bolt"></i></div>
                    <div class="em-feature-text">
                        <h4>Adventure Time</h4>
                        <p>Rapid growth strategies for businesses that want results fast.</p>
                    </div>
                </div>
            </div>
            <div class="em-img-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/WhatsApp Image 2025-11-06 at 15.15.56_f3d925da.jpg" class="em-img-back" alt="Office">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/about.webp" class="em-img-front" alt="Team">
            </div>
        </div>
    </section>

    <div class="em-stats-strip">
        
                <span class="em-subtitle text-center">Elite Stats</span>
                <h2 class="em-title-large-1 text-center">Your Ultimate Web Solution</h2>
        <div class="em-stats-grid">
            <div class="em-stat-card">
                <i class="far fa-user"></i>
                <p class="em-stat-num em-counter" data-val="890">0</p>
                <span class="em-stat-label">Projects</span>
            </div>
            <div class="em-stat-card">
                <i class="fas fa-briefcase"></i>
                <p class="em-stat-num em-counter" data-val="5">0</p>
                <span class="em-stat-label">Offers</span>
            </div>
            <div class="em-stat-card">
                <i class="far fa-calendar-alt"></i>
                <p class="em-stat-num em-counter" data-val="12">0</p>
                <span class="em-stat-label">Years Experience</span>
            </div>
            <div class="em-stat-card">
                <i class="fas fa-headset"></i>
                <p class="em-stat-num em-counter" data-val="24">0</p>
                <span class="em-stat-label">Hours Support</span>
            </div>
        </div>
    </div>

    <!-- what we do section -->

<section class="what-we-do">
    <div class="info-panel">
        <span class="em-subtitle">Expertise & Innovation</span>
        <h2 class="em-title-large">We Shape the Future of Digital Marketing</h2>
        <p style="color: #fff; font-size: 1.1rem;">We don't just follow trends; we create the technology that drives them. Discover our core pillars of excellence.</p>
    </div>

    <div class="services-flow">
    <div class="service-node">
        <span class="node-number">01</span>
        <h3>SEO</h3>
        <p>We boost your online visibility and drive organic traffic by ranking your website on the first page of search results through strategic keyword optimization.</p>
    </div>

    <div class="service-node">
        <span class="node-number">02</span>
        <h3>SMM</h3>
        <p>Building a powerful brand presence across platforms like Instagram, LinkedIn, and Facebook to engage your audience and grow a loyal community.</p>
    </div>

    <div class="service-node">
        <span class="node-number">03</span>
        <h3>Content Strategy</h3>
        <p>Our team creates high-quality, compelling content that tells your brand story, educates your customers, and converts casual visitors into paying leads.</p>
    </div>

    <div class="service-node">
        <span class="node-number">04</span>
        <h3>PPC Advertising</h3>
        <p>Maximize your ROI with targeted ad campaigns on Google and Social Media, designed to reach the right people at the exact moment they are ready to buy.</p>
    </div>
</div>
</section>

    <!-- faq's section -->

    <section class="em-contact-banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/about/bgfaqsection.png');
    background-size: cover;">
        <div class="em-glass-box">
            <h2 class="em-title-large-2" style="color: #fff !important;">If You Have Any Question<br>You will Ask US</h2>
            <button class="em-btn-red">CONTACT US</button>
        </div>
    </section>

    <!-- <section class="em-section" style="text-align: center;">
        <span class="em-subtitle">Expert Team</span>
        <h2 class="em-title-large">Let's See Our Members</h2>
        <div class="em-team-grid">
            <div class="em-team-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/WhatsApp_Image_2025-11-06_at_12.45.01_8bdcb688-removebg-preview.png" class="em-team-img" alt="Member">
                <h4 style="margin-top:15px">Jawad ELite</h4>
            </div>
            <div class="em-team-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/IMG_20220722_111737-removebg-preview.png" class="em-team-img" alt="Member">
                <h4 style="margin-top:15px">Hasnain Sarwer</h4>
            </div>
            <div class="em-team-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/IMG_2951-removebg-preview.png" class="em-team-img" alt="Member">
                <h4 style="margin-top:15px">Umer Shareef</h4>
            </div>
            <div class="em-team-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/IMG_2949-removebg-preview.png" class="em-team-img" alt="Member">
                <h4 style="margin-top:15px">Imran Niaz</h4>
            </div>
        </div>
    </section> -->

</div>

<?php get_footer(); ?>