
        const filterSelect = document.querySelector('.filter');
        const rows = document.querySelectorAll('table tr:not(:first-child)');

        filterSelect.addEventListener('change', (e) => {
            const filterValue = e.target.value;
            rows.forEach(row => {
                const checkInStatus = row.querySelector('.status').textContent.toLowerCase();
                if (filterValue === 'all' || checkInStatus.includes(filterValue)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
