
@if(isset($guestIn1))
<script>
    // income expense
        const incomeExpenseBar = document.getElementById('incomeExpenseBar').getContext('2d');

        new Chart(incomeExpenseBar, {
            type: 'bar',
            data: {
                labels: [
                    'January', 'February', 'March', 'April', 'May', 'June',
                    'July', 'August', 'September', 'October', 'November', 'December'
                ],
                datasets: [
                    {
                        label: 'Income',
                        data: [{{$all_incomeIn1}}, {{$all_incomeIn2}}, {{$all_incomeIn3}}, {{$all_incomeIn4}}, {{$all_incomeIn5}}, {{$all_incomeIn6}}, {{$all_incomeIn7}}, {{$all_incomeIn8}}, {{$all_incomeIn9}}, {{$all_incomeIn10}}, {{$all_incomeIn11}}, {{$all_incomeIn12}}], // Income data
                        backgroundColor: 'rgba(54, 162, 235, 0.5)', // Blue color for income
                        borderColor: 'rgba(54, 162, 235, 1)', // Blue border for income
                        borderWidth: 1,
                        barPercentage: 0.5 // Adjust bar width
                    },
                    {
                        label: 'Expense',
                        data: [{{$all_expenseIn1}}, {{$all_expenseIn2}}, {{$all_expenseIn3}}, {{$all_expenseIn4}}, {{$all_expenseIn5}}, {{$all_expenseIn6}}, {{$all_expenseIn7}}, {{$all_expenseIn8}}, {{$all_expenseIn9}}, {{$all_expenseIn10}}, {{$all_expenseIn11}}, {{$all_expenseIn12}}], // Expense data
                        backgroundColor: 'rgba(255, 99, 132, 0.5)', // Red color for expense
                        borderColor: 'rgba(255, 99, 132, 1)', // Red border for expense
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


@endif