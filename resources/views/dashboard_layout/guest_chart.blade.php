
@if(isset($guestIn1))
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
                        data: [{{$guestIn1}}, {{$guestIn2}}, {{$guestIn3}}, {{$guestIn4}}, {{$guestIn5}}, {{$guestIn6}}, {{$guestIn7}}, {{$guestIn8}}, {{$guestIn9}}, {{$guestIn10}}, {{$guestIn11}}, {{$guestIn12}}], // Male guest data
                        backgroundColor: 'rgba(54, 162, 235, 0.5)', // Blue color for male
                        borderColor: 'rgba(54, 162, 235, 1)', // Blue border for male
                        borderWidth: 1,
                        barPercentage: 0.5 // Adjust bar width
                    },
                    {
                        label: 'Female Guests',
                        
                        data: [{{$female_guestIn1}}, {{$female_guestIn2}}, {{$female_guestIn3}}, {{$female_guestIn4}}, {{$female_guestIn5}}, {{$female_guestIn6}}, {{$female_guestIn7}}, {{$female_guestIn8}}, {{$female_guestIn9}}, {{$female_guestIn10}}, {{$female_guestIn11}}, {{$female_guestIn12}}] ,// Female guest data
                        backgroundColor: 'rgba(255, 99, 132, 0.5)', // Red color for femalefemale_
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
    
            data: [{{$all_guestIn1}}, {{$all_guestIn2}}, {{$all_guestIn3}}, {{$all_guestIn4}}, {{$all_guestIn5}}, {{$all_guestIn6}}, {{$all_guestIn7}}, {{$all_guestIn8}}, {{$all_guestIn9}}, {{$all_guestIn10}}, {{$all_guestIn11}}, {{$all_guestIn12}}] ,// all guest data
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
@endif