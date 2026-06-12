const ctx = document.getElementById('salesChart');

new Chart(ctx, {
    type: 'line',

    data: {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],

        datasets: [{
            label: 'Sales',

            data: [1200, 1900, 1500, 2200, 1800, 2500, 3000],

            borderWidth: 3,

            tension: 0.4,

            fill: true
        }]
    },

    options: {
        responsive: true,

        plugins: {
            legend: {
                display: false
            }
        }
    }
});