<?php
     //Template Name:Contact Us

get_header(); 
?>
    
<!-- hero section -->

<section class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/backgrounde.png');
    background-size: cover;">
 <div class="container">
    <h1>If You Have Any Questions <br> You Can Ask Us</h1>
    <p>Our team of experts is ready to help you navigate your next big step. Reach out today and let's start a conversation about your brand's future.</p>
    <div class="hero-btn">
      <a href="#" class="btn con-btn">Send a Message</a>
      <!-- <a href="#" class="btn btn-outline">See Our Projects</a> -->
    </div>
  </div>
    
</section>


    <!-- Contact Info Cards -->
    <section class="contact-info-section">
        <div class="container">
            <div class="info-cards">
                <div class="info-card">
                    <i class="fas fa-phone-alt info-icon"></i>
                    <h3 class="em-title-large">Call Us</h3>
                    <p>Monday - Saturday: 9AM - 6PM</p>
                    <p><a href="tel:+15551234567">+1 (647) 860-2420 &</a></p>
                    <p><a href="tel:+18005551234">+92 320 5019342</a></p>
                </div>
                <div class="info-card">
                    <i class="fas fa-envelope info-icon"></i>
                    <h3 class="em-title-large">Email Us</h3>
                    <p>General Inquiries</p>
                    <p><a href="mailto:Info@elitemarketingtechnology.com">Info@elitemarketingtechnology.com</a></p>
                    <!-- <p><a href="mailto:support@secureinsure.com">support@secureinsure.com</a></p> -->
                </div>
                <div class="info-card">
                    <i class="fas fa-map-marker-alt info-icon"></i>
                    <h3 class="em-title-large">Visit Us</h3>
                    <p>Plot 26,27 Second floor, 4 Corniche Road,</p>
                    <p>Phase 4 Bahria Town,</p>
                    <p>Rawalpindi, 46220</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-form-section">
        <div class="container">
            <div class="form-container">
                <div class="form-info">
                    <h2 class="em-title-large">Send Us a Message</h2>
                    <p>Every great brand starts with a single conversation. Whether you have a specific project in mind or just want to explore how technology can grow your business, we’re here to listen. Fill out the form, and let’s start building your brand’s future together.</p>
                    
                    <div class="business-hours">
                        <h3 style="color: #fff;"><i class="fas fa-clock"></i> Business Hours</h3>
                        <ul class="hours-list">
                            <li>
                                <span class="day">Monday - Saturday</span>
                                <span class="time">9:00 AM - 6:00 PM</span>
                            </li>
                           
                            <li>
                                <span class="day">Sunday</span>
                                <span class="time">Closed</span>
                            </li>
                        </ul>
                    </div>

                </div>

                <form class="contact-form" id="contactForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstName">First Name <span class="required">*</span></label>
                            <input type="text" id="firstName" name="firstName" class="form-control" required>
                            <span class="error-message">Please enter your first name</span>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name <span class="required">*</span></label>
                            <input type="text" id="lastName" name="lastName" class="form-control" required>
                            <span class="error-message">Please enter your last name</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address <span class="required">*</span></label>
                        <input type="email" id="email" name="email" class="form-control" required>
                        <span class="error-message">Please enter a valid email address</span>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="(555) 123-4567">
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject <span class="required">*</span></label>
                        <select id="subject" name="subject" class="form-control" required>
                            <option value="">Select a topic</option>
                            <option value="general">General Inquiry</option>
                            <option value="insurance-quote">Insurance Quote</option>
                            <option value="claim-support">Claim Support</option>
                            <option value="blog-feedback">Blog Feedback</option>
                            <option value="partnership">Partnership Opportunity</option>
                            <option value="technical">Technical Support</option>
                        </select>
                        <span class="error-message">Please select a subject</span>
                    </div>

                    <div class="form-group">
                        <label for="message">Message <span class="required">*</span></label>
                        <textarea id="message" name="message" class="form-control" rows="5" required placeholder="Tell us how we can help you..."></textarea>
                        <span class="error-message">Please enter your message</span>
                    </div>

                    <button type="submit" class="btn" id="submitBtn">
                        <i class="fas fa-paper-plane"></i> Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section"  style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/about/contact.jpg');
    background-size: cover;">
        <div class="map-overlay">
            <div class="map-content">
                <h2>Visit Our Office</h2>
                <p>Conveniently located in bharia town phase 4, rawalpindi</p>
                <button class="btn btn-outline" onclick="openMap()">
                    <i class="fas fa-map-marked-alt"></i> Get Directions
                </button>
            </div>
        </div>
    </section>



    <!-- Success Message -->
    <!-- <div class="success-message" id="successMessage">
        <i class="fas fa-check-circle"></i>
        <div>
            <strong>Message Sent Successfully!</strong>
            <p>We'll get back to you within 24 hours.</p>
        </div>
    </div> -->

    <!-- Footer -->
   <?php get_footer(); ?>