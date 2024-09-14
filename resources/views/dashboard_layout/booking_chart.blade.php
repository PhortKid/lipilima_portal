<script>
const bookBar = document.getElementById('bookBar').getContext('2d');

new Chart(bookBar, {
    type: 'bar',
    data: {
        labels: [
            'January', 'February', 'March', 'April', 'May', 'June',
            'July', 'August', 'September', 'October', 'November', 'December'
        ],
        datasets: [{
            label: '# Year Guest Analytics',
            data: [12, 19, 3, 5, 2, 3, 7, 10, 8, 6, 9, 11], // Updated data to match labels
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)', // January
                'rgba(54, 162, 235, 0.2)', // February
                'rgba(255, 206, 86, 0.2)', // March
                'rgba(75, 192, 192, 0.2)', // April
                'rgba(153, 102, 255, 0.2)', // May
                'rgba(255, 159, 64, 0.2)', // June
                'rgba(255, 99, 132, 0.2)', // July
                'rgba(54, 162, 235, 0.2)', // August
                'rgba(255, 206, 86, 0.2)', // September
                'rgba(75, 192, 192, 0.2)', // October
                'rgba(153, 102, 255, 0.2)', // November
                'rgba(255, 159, 64, 0.2)'  // December
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)', // January
                'rgba(54, 162, 235, 1)', // February
                'rgba(255, 206, 86, 1)', // March
                'rgba(75, 192, 192, 1)', // April
                'rgba(153, 102, 255, 1)', // May
                'rgba(255, 159, 64, 1)', // June
                'rgba(255, 99, 132, 1)', // July
                'rgba(54, 162, 235, 1)', // August
                'rgba(255, 206, 86, 1)', // September
                'rgba(75, 192, 192, 1)', // October
                'rgba(153, 102, 255, 1)', // November
                'rgba(255, 159, 64, 1)'  // December
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        animation: {
            duration: 1000, // Duration of animation in milliseconds
            easing: 'easeInOutBounce' // Animation easing function
        },
        scales: {
            x: {
                beginAtZero: true,
                title: {
                    display: true,
                    text: 'Month'
                }
            },
            y: {
                beginAtZero: true,
                title: {
                    display: true,
                    text: 'Number of Guests'
                }
            }
        }
    }
});
</script>