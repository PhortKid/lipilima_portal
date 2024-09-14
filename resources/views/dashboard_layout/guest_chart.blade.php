

<script>
        const guestBar = document.getElementById('guestBar').getContext('2d');

        new Chart(guestBar, {
            type: 'bar',
            data: {
                labels: [
                    'January', 'February', 'March', 'April', 'May', 'June',
                    'July', 'August', 'September', 'October', 'November', 'December'
                ],
                datasets: [
                    {
                        label: 'Male Guests',
                        data: [12, 19, 3, 5, 2, 3, 7, 10, 8, 6, 9, 11], // Male guest data
                        backgroundColor: 'rgba(54, 162, 235, 0.5)', // Blue color for male
                        borderColor: 'rgba(54, 162, 235, 1)', // Blue border for male
                        borderWidth: 1,
                        barPercentage: 0.5 // Adjust bar width
                    },
                    {
                        label: 'Female Guests',
                        data: [10, 15, 5, 8, 6, 4, 9, 12, 7, 5, 8, 13], // Female guest data
                        backgroundColor: 'rgba(255, 99, 132, 0.5)', // Red color for female
                        borderColor: 'rgba(255, 99, 132, 1)', // Red border for female
                        borderWidth: 1,
                        barPercentage: 0.5 // Adjust bar width
                    }
                ]
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
                        },
                        stacked: true // Stack bars for each month
                    },
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Number of Guests'
                        }
                    }
                },
                plugins: {
                    legend: {
                        position: 'top'
                    }
                }
            }
        });
    </script>


<script>
      const ctx2 = document.getElementById('myguestLine').getContext('2d');

new Chart(ctx2, {
    type: 'line',
    data: {
        labels: [
            'January', 'February', 'March', 'April', 'May', 'June',
            'July', 'August', 'September', 'October', 'November', 'December'
        ],
        datasets: [{
            label: '# Year Guest Analytics',
            data: [12, 19, 3, 5, 2, 3, 7, 10, 8, 6, 9, 11], // Example data
            borderColor: 'rgba(75, 192, 192, 1)', // Line color
            backgroundColor: 'rgba(75, 192, 192, 0.2)', // Area under the line color
            borderWidth: 2,
            fill: true, // Fill the area under the line
            tension: 0.4 // Smooth curve
        }]
    },
    options: {
        responsive: true,
        animations: {
      tension: {
        duration: 1000,
        easing: 'linear',
        from: 1,
        to: 0,
        loop: true
      }
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