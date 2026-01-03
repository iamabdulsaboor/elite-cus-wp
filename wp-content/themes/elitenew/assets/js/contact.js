
        // Mobile menu toggle
        document.getElementById('mobileMenuBtn').addEventListener('click', function() {
            document.getElementById('mainNav').classList.toggle('active');
            this.querySelector('i').classList.toggle('fa-times');
            this.querySelector('i').classList.toggle('fa-bars');
        });

        // Close mobile menu when clicking on a link
        document.querySelectorAll('.main-nav a').forEach(link => {
            link.addEventListener('click', function() {
                document.getElementById('mainNav').classList.remove('active');
                document.getElementById('mobileMenuBtn').querySelector('i').classList.add('fa-bars');
                document.getElementById('mobileMenuBtn').querySelector('i').classList.remove('fa-times');
            });
        });

        // FAQ Accordion
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', function() {
                const faqItem = this.parentElement;
                const isActive = faqItem.classList.contains('active');
                
                // Close all FAQ items
                document.querySelectorAll('.faq-item').forEach(item => {
                    item.classList.remove('active');
                });
                
                // Open clicked item if it wasn't active
                if (!isActive) {
                    faqItem.classList.add('active');
                }
            });
        });

        // Form Validation and Submission
        const contactForm = document.getElementById('contactForm');
        const submitBtn = document.getElementById('submitBtn');
        const successMessage = document.getElementById('successMessage');

        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Reset previous errors
            document.querySelectorAll('.form-group').forEach(group => {
                group.classList.remove('error');
            });
            
            let isValid = true;
            
            // Validate required fields
            const requiredFields = ['firstName', 'lastName', 'email', 'subject', 'message'];
            requiredFields.forEach(fieldName => {
                const field = document.getElementById(fieldName);
                const value = field.value.trim();
                
                if (!value) {
                    field.parentElement.classList.add('error');
                    isValid = false;
                }
            });
            
            // Validate email format
            const emailField = document.getElementById('email');
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (emailField.value && !emailRegex.test(emailField.value)) {
                emailField.parentElement.classList.add('error');
                isValid = false;
            }
            
            // Validate phone format (optional)
            const phoneField = document.getElementById('phone');
            if (phoneField.value) {
                const phoneRegex = /^[\d\s\-\(\)]+$/;
                if (!phoneRegex.test(phoneField.value)) {
                    phoneField.parentElement.classList.add('error');
                    isValid = false;
                }
            }
            
            if (isValid) {
                // Show loading state
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
                
                // Simulate form submission
                setTimeout(() => {
                    // Reset form
                    contactForm.reset();
                    
                    // Reset button
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Send Message';
                    
                    // Show success message
                    successMessage.classList.add('show');
                    
                    // Hide success message after 5 seconds
                    setTimeout(() => {
                        successMessage.classList.remove('show');
                    }, 5000);
                    
                    // Scroll to top
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                }, 2000);
            }
        });

        // Remove error state on input
        document.querySelectorAll('.form-control').forEach(input => {
            input.addEventListener('input', function() {
                this.parentElement.classList.remove('error');
            });
        });

        // Open map function
        function openMap() {
            // In a real application, this would open Google Maps or a map service
            window.open('https://maps.google.com/?q=123+Insurance+Street+New+York+NY+10001', '_blank');
        }

        // Phone number formatting
        document.getElementById('phone').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length > 0) {
                if (value.length <= 3) {
                    value = `(${value}`;
                } else if (value.length <= 6) {
                    value = `(${value.slice(0, 3)}) ${value.slice(3)}`;
                } else {
                    value = `(${value.slice(0, 3)}) ${value.slice(3, 6)}-${value.slice(6, 10)}`;
                }
            }
            e.target.value = value;
        });

        // Add animation on scroll
        function animateOnScroll() {
            const elements = document.querySelectorAll('.info-card, .faq-item');
            
            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;
                
                if (elementPosition < windowHeight - 100) {
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }
            });
        }

        // Initial setup for animation
        document.querySelectorAll('.info-card, .faq-item').forEach(element => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(30px)';
            element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        });

        // Run animation on scroll
        window.addEventListener('scroll', animateOnScroll);
        // Run once on page load
        animateOnScroll();
    