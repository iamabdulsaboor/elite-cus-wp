  // Floating hero image
  const floats = document.querySelectorAll('.emt-floating');
  floats.forEach(el => {
    let direction = 1;
    let pos = 0;
    setInterval(() => {
      pos += 0.3 * direction;
      if(pos > 15 || pos < -15) direction *= -1;
      el.style.transform = `translateY(${pos}px)`;
    }, 20);
  });

  const filterButtons = document.querySelectorAll(".tab-btn");
const portfolioItems = document.querySelectorAll(".portfolio-item");

filterButtons.forEach(button => {
  button.addEventListener("click", () => {
    // 1. Remove active class from all buttons and add to clicked one
    filterButtons.forEach(btn => btn.classList.remove("active"));
    button.classList.add("active");

    const filterValue = button.getAttribute("data-filter");

    // 2. Filter items with a smooth fade effect
    portfolioItems.forEach(item => {
      item.style.opacity = "0"; // Fade out
      
      setTimeout(() => {
        if (filterValue === "all" || item.classList.contains(filterValue)) {
          item.classList.remove("hide");
          item.style.opacity = "1"; // Fade in
        } else {
          item.classList.add("hide");
        }
      }, 300);
    });
  });
});
