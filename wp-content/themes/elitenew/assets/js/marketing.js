document.addEventListener('DOMContentLoaded', () => {
    const filterBtns = document.querySelectorAll('.tab-btn');
    const items = document.querySelectorAll('.p-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Remove active from all, add to this
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.getAttribute('data-filter');

            items.forEach(item => {
                if (filter === 'all' || item.classList.contains(filter)) {
                    item.style.display = 'block';
                    setTimeout(() => item.style.opacity = '1', 50);
                } else {
                    item.style.opacity = '0';
                    setTimeout(() => item.style.display = 'none', 300);
                }
            });
        });
    });
});