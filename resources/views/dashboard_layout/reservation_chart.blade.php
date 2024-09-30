@if(isset($all_reservationIn1))
<script>
const reservationBar = document.getElementById('reservationBar').getContext('2d');

new Chart(reservationBar, {
    type: 'bar',
    data: {
        labels: [
            'January', 'February', 'March', 'April', 'May', 'June',
            'July', 'August', 'September', 'October', 'November', 'December'
        ],
        datasets: [{
            label: '# Year Guest Analytics',
            data: [{{$all_reservationIn1}}, {{$all_reservationIn2}}, {{$all_reservationIn3}}, {{$all_reservationIn4}}, {{$all_reservationIn5}}, {{$all_reservationIn6}}, {{$all_reservationIn7}}, {{$all_reservationIn8}}, {{$all_reservationIn9}}, {{$all_reservationIn10}}, {{$all_reservationIn11}},{{$all_reservationIn12}}],
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
@endif