// curser

const dot = document.querySelector('.cursor-dot');

// follow mouse
document.addEventListener('mousemove', (e) => {
    dot.style.left = e.clientX + 'px';
    dot.style.top = e.clientY + 'px';
});

// enlarge dot on link hover
document.querySelectorAll('a').forEach(link => {
    link.addEventListener('mouseenter', () => {
        dot.classList.add('link-hover');
    });

    link.addEventListener('mouseleave', () => {
        dot.classList.remove('link-hover');
    });
});

// navbar
const menuBtn = document.querySelector('.mobile-menu-btn');
  const nav = document.querySelector('.main-nav');

  menuBtn.addEventListener('click', () => {
    // Toggle the 'active' class which triggers the CSS transition
    nav.classList.toggle('active');
  });

  // Optional: Close menu when a link is clicked
  document.querySelectorAll('.main-nav a').forEach(link => {
    link.addEventListener('click', () => {
      nav.classList.remove('active');
    });
  });

// branding


  document.querySelectorAll('.marquee').forEach(marquee => {
    const track = marquee.querySelector('.marquee-track');
    const direction = marquee.dataset.direction;

    // Duplicate content until it fills screen
    const content = track.innerHTML;
    while (track.offsetWidth < window.innerWidth * 2) {
      track.innerHTML += content;
    }

    // Apply animation
    track.style.animation = 
      direction === 'right'
        ? 'scroll-right 35s linear infinite'
        : 'scroll-left 35s linear infinite';
  });


// view more btn

  const btn = document.getElementById("toggleBtn");
  const hiddenCards = document.querySelectorAll(".service-card.hidden");

  btn.addEventListener("click", () => {
    const isOpen = hiddenCards[0].style.display === "block";

    hiddenCards.forEach(card => {
      card.style.display = isOpen ? "none" : "block";
    });

    btn.innerHTML = isOpen ? "View More ↓" : "View Less ↑";
  });
  





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

        // Form submission handlers
        document.querySelector('.search-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const searchTerm = this.querySelector('input').value;
            if (searchTerm) {
                // In a real application, this would perform a search
                alert(`Searching for: ${searchTerm}`);
                this.querySelector('input').value = '';
            }
        });

        document.querySelector('.newsletter-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input').value;
            if (email) {
                // In a real application, this would subscribe the user
                alert(`Thank you for subscribing with email: ${email}`);
                this.querySelector('input').value = '';
            }
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId !== '#') {
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 80,
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });

        // Add animation on scroll
        function animateOnScroll() {
            const elements = document.querySelectorAll('.category-card, .blog-card');
            
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
        document.querySelectorAll('.category-card, .blog-card').forEach(element => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(20px)';
            element.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        });

        // Run animation on scroll
        window.addEventListener('scroll', animateOnScroll);
        // Run once on page load
        animateOnScroll();
    