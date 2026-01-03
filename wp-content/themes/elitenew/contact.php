<?php
     //Template Name:Contact Us

get_header(); 

?>

    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <div class="container">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="contact-hero">
        <div class="container">
            <h1>Get in Touch</h1>
            <p>Have questions about insurance? We're here to help. Reach out to our team of experts for personalized assistance.</p>
        </div>
    </section>

    <!-- Contact Info Cards -->
    <section class="contact-info-section">
        <div class="container">
            <div class="info-cards">
                <div class="info-card">
                    <i class="fas fa-phone-alt info-icon"></i>
                    <h3>Call Us</h3>
                    <p>Monday - Friday: 9AM - 6PM EST</p>
                    <p><a href="tel:+15551234567">+1 (555) 123-4567</a></p>
                    <p><a href="tel:+18005551234">Toll-Free: 1-800-555-1234</a></p>
                </div>
                <div class="info-card">
                    <i class="fas fa-envelope info-icon"></i>
                    <h3>Email Us</h3>
                    <p>General Inquiries</p>
                    <p><a href="mailto:info@secureinsure.com">info@secureinsure.com</a></p>
                    <p><a href="mailto:support@secureinsure.com">support@secureinsure.com</a></p>
                </div>
                <div class="info-card">
                    <i class="fas fa-map-marker-alt info-icon"></i>
                    <h3>Visit Us</h3>
                    <p>123 Insurance Street</p>
                    <p>Suite 100</p>
                    <p>New York, NY 10001</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-form-section">
        <div class="container">
            <div class="form-container">
                <div class="form-info">
                    <h2>Send Us a Message</h2>
                    <p>Whether you have questions about insurance policies, need help understanding coverage options, or want to share feedback about our blog, we're here to help. Fill out the form and our team will get back to you within 24 hours.</p>
                    
                    <div class="business-hours">
                        <h3><i class="fas fa-clock"></i> Business Hours</h3>
                        <ul class="hours-list">
                            <li>
                                <span class="day">Monday - Friday</span>
                                <span class="time">9:00 AM - 6:00 PM</span>
                            </li>
                            <li>
                                <span class="day">Saturday</span>
                                <span class="time">10:00 AM - 4:00 PM</span>
                            </li>
                            <li>
                                <span class="day">Sunday</span>
                                <span class="time">Closed</span>
                            </li>
                        </ul>
                    </div>

                    <p><strong>Emergency Support:</strong> For urgent insurance claims or assistance, call our 24/7 hotline at <a href="tel:+18005559999">1-800-555-9999</a>.</p>
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
    <section class="map-section">
        <div class="map-overlay">
            <div class="map-content">
                <h2>Visit Our Office</h2>
                <p>Conveniently located in the heart of New York City</p>
                <button class="btn btn-outline" onclick="openMap()">
                    <i class="fas fa-map-marked-alt"></i> Get Directions
                </button>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <p>Quick answers to common questions about our services</p>
            </div>
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How quickly will I receive a response to my inquiry?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            We strive to respond to all inquiries within 24 hours during business days. For urgent matters, please call our hotline at 1-800-555-9999 for immediate assistance.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <span>Do you provide insurance quotes through the blog?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            While our blog focuses on educational content, we can connect you with licensed insurance agents who can provide personalized quotes based on your specific needs. Simply select "Insurance Quote" as your subject when contacting us.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <span>Can I submit guest posts or article ideas?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Yes! We welcome contributions from insurance professionals and industry experts. Please contact us with your article ideas or writing samples. All submissions are reviewed for accuracy and relevance to our audience.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <span>Do you offer one-on-one insurance consultations?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            We offer free 15-minute consultations to help you understand your insurance needs. For more comprehensive planning, we can connect you with our network of certified insurance advisors.
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <span>How do I report an error or correction in your articles?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            We appreciate your attention to detail! Please email us at corrections@secureinsure.com with the article title and details about the error. We review all submissions and make corrections promptly.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Message -->
    <div class="success-message" id="successMessage">
        <i class="fas fa-check-circle"></i>
        <div>
            <strong>Message Sent Successfully!</strong>
            <p>We'll get back to you within 24 hours.</p>
        </div>
    </div>

    <!-- Footer -->
   <?php get_footer(); ?>