@if(isset($reservation))
<script>
 
  document.getElementById('export-excel').addEventListener('click', function () {
    var data = [
      { 'Guest Names': '#', 'Room No': '{{$reservation->room_id}}', 'Number Of Guests': '{{$reservation->number_of_guests}}', 'Period To Stay': '{{$reservation->period_to_stay}}', 'Room Price': '{{$reservation->room_price}}', 'Check-in Date': '{{$reservation->check_in_date}}', 'Check-out Date': '{{$reservation->check_out_date}}', 'Date Created': '{{$reservation->created_at}}', 'Total Amount': '{{$reservation->total_amount}}' }
    ];
    
    var ws = XLSX.utils.json_to_sheet(data);
    var wb = XLSX.utils.book_new();
    XLSX.utils.book_append_sheet(wb, ws, 'Reservations');
    XLSX.writeFile(wb, 'reservations.xlsx');
  });

  document.getElementById('export-csv').addEventListener('click', function () {
    var data = [
      { 'Guest Names': '#', 'Room No': '{{$reservation->room_id}}', 'Number Of Guests': '{{$reservation->number_of_guests}}', 'Period To Stay': '{{$reservation->period_to_stay}}', 'Room Price': '{{$reservation->room_price}}', 'Check-in Date': '{{$reservation->check_in_date}}', 'Check-out Date': '{{$reservation->check_out_date}}', 'Date Created': '{{$reservation->created_at}}', 'Total Amount': '{{$reservation->total_amount}}' }
    ];
    
    var ws = XLSX.utils.json_to_sheet(data);
    var wb = XLSX.utils.book_new();
    XLSX.utils.book_append_sheet(wb, ws, 'Reservations');
    XLSX.writeFile(wb, 'reservations.csv', { bookType: 'csv' });
  });
</script>
@endif