
    const emCounters = document.querySelectorAll('.em-counter');
    
    const emAnimate = (el) => {
        const target = +el.getAttribute('data-val');
        let current = 0;
        const step = target / 40; // Adjust for speed

        const emUpdate = () => {
            if (current < target) {
                current += step;
                el.innerText = Math.ceil(current) + "+";
                setTimeout(emUpdate, 40);
            } else {
                el.innerText = target + "+";
            }
        };
        emUpdate();
    };

    const emObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                emAnimate(entry.target);
                emObserver.unobserve(entry.target); // Runs only once
            }
        });
    }, { threshold: 1.0 });

    emCounters.forEach(c => emObserver.observe(c));
