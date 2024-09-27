
<!DOCTYPE html>
<html lang="en"> 

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Lipilima Tower | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="lipilima Towe Dashboard">
    <meta name="author" content="lipilima">
    <meta name="description" content="lipilima">
    <meta name="keywords" content="lipilima,lipilima,lipilima">
    <link rel="stylesheet" href="{{asset('custom.css')}}">
    <link rel="stylesheet" href="{{asset('assets/adminkit/other/index.css')}}" integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/adminkit/other/overlayscrollbars.min.css')}}" integrity="sha256-dSokZseQNT08wYEWiz5iLI8QPlKxG+TswNRD8k35cpg=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css" integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/adminkit/css/adminlte.css')}}">
    <link rel="stylesheet" href="{{asset('assets/adminkit/other/apexcharts.css')}}" integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0=" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/adminkit/other/jsvectormap.min.css')}}" integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4=" crossorigin="anonymous">

    <!-- Data Table -->
    <link rel="stylesheet" href="{{ asset('assets/datatable/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/datatables/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/datatables/buttons.bootstrap4.min.css') }}">


    <!-- chosen -->
    <link href="{{asset('chosen/chosen.min.css')}}" rel="stylesheet" />

    <link rel="stylesheet" href="{{asset('fontawesome-free/css/all.min.css')}}">

    <link rel="stylesheet" href="{{ asset('vendor/flasher/toastr.min.css') }}">

    
    <link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css">
  
    @if(isset($sb2admin))
    <link rel="stylesheet" href="https://startbootstrap.github.io/startbootstrap-sb-admin-2/css/sb-admin-2.min.css">
    @endif

    <script>
        function updatePrice() {
            const selectElement = document.getElementById('roomSelect');
            const hiddenPriceInput = document.getElementById('roomPrice');
            const selectedOption = selectElement.options[selectElement.selectedIndex];
            const roomPrice = selectedOption.getAttribute('data-price');
            hiddenPriceInput.value = roomPrice;
        }
    </script>
   
<!-- hii style ni kwaajili ya table ya reservation -->
<style>
  .table-wrapper {
    max-height: 400px; /* Adjust as needed */
    overflow-y: auto; /* Enable vertical scrolling */
    border: 1px solid #dee2e6;
    border-radius: 0.25rem;
    padding: 10px; /* Add padding around the content */
  }

  .table-container {
    display: block;
    width: 100%;
    margin-bottom: 20px; /* Space between reservations */
    border-bottom: 1px solid #dee2e6; /* Border between reservations */
    padding-bottom: 10px; /* Padding at the bottom */
  }

  .row {
    display: flex;
    border-bottom: 1px solid #dee2e6;
    margin-bottom: 5px; /* Space between rows */
  }

  .name {
    flex: 1;
    padding: 10px;
    font-weight: bold;
    background-color: #f8f9fa;
    border-right: 1px solid #dee2e6;
    margin-right: 10px; /* Add margin to the right of the name column */
  }

  .value {
    flex: 2;
    padding: 10px;
  }

  .row:last-child {
    border-bottom: none;
  }
</style>

<!-- hii style ni kwaajili ya table ya reservation -->
  


</head> 
<!-- bg-body-tertiary -->
<body class="layout-fixed sidebar-expand-lg  ">

    <div class="app-wrapper"> <!--begin::Header-->
        <nav class="app-header navbar navbar-expand bg-body " > <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Start Navbar Links-->
                <ul class="navbar-nav">
                    <li class="nav-item"> <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"> <i class="bi bi-list"></i>  </a> </li>

                </ul> <!--end::Start Navbar Links--> <!--begin::End Navbar Links-->
                <ul class="navbar-nav ms-auto" > <!--begin::Navbar Search-->
                    <li class="nav-item dropdown"> <a class="nav-link" data-bs-toggle="dropdown" href="#"> <i class="bi bi-bell-fill"></i> <span class="navbar-badge badge text-bg-warning">--</span> </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <span class="dropdown-item dropdown-header">(--)Notifications</span>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"> <i class="bi bi-envelope me-2"></i> new Booking
                                <span class="float-end text-secondary fs-7">time</span> </a>
                         
                            <div class="dropdown-divider"></div> <a href="{{url('dash/booking_management')}}" class="dropdown-item dropdown-footer">
                                See All Notifications
                            </a>
                        </div>
                    </li> <!--end::Notifications Dropdown Menu--> <!--begin::Fullscreen Toggle-->
                    <li class="nav-item"> <a class="nav-link" href="#" data-lte-toggle="fullscreen"> <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i> <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none;"></i> </a> </li> <!--end::Fullscreen Toggle--> <!--begin::User Menu Dropdown-->
                    <li class="nav-item dropdown user-menu"> <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> <img src="/storage/profile_image/{{ Auth::user()->profile_image }}" class="user-image rounded-circle shadow" alt="{{auth()->user()->firstname}} image"> <span class="d-none d-md-inline">{{ Auth::user()->firstname }}</span> </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <!--begin::User Image-->
                            <li class="user-header text-bg-primary"> <img src="/storage/profile_image/{{ Auth::user()->profile_image }}" class="rounded-circle shadow" alt="{{auth()->user()->firstname}} image">
                                <p>
                                {{ Auth::user()->firstname }} - {{ Auth::user()->role }}
                                    <small>Created at {{ Auth::user()->created_at }}</small>
                                </p>
                            </li> <!--end::User Image--> <!--begin::Menu Body-->
                           
                            <li class="user-footer"> <a href="{{route('myprofile.index')}}" class="btn btn-default btn-flat">Profile</a> <!-- <a href="/logout" class="btn btn-default btn-flat float-end">Sign out</a> -->
                        
                            <div class="btn btn-default btn-flat float-end text-dark">
                            <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                            </div>
           
                        
                        </li> <!--end::Menu Footer-->
                        </ul>
                    </li> <!--end::User Menu Dropdown-->
                </ul> <!--end::End Navbar Links-->
            </div> <!--end::Container-->
        </nav> <!--end::Header--> <!--begin::Sidebar-->
        <!-- bg-body-secondary -->


    @include('dashboard_layout.sidebar')


        <main class="app-main"> <!--begin::App Content Header-->
            <div class="app-content-header"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Dashboard</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Dashboard
                                </li>
                            </ol>
                        </div>
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div> <!--end::App Content Header--> <!--begin::App Content-->
            <div class="app-content"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    

                    @include('dashboard_layout.message')
                    @yield('content')


                </div> <!--end::Container-->
            </div> <!--end::App Content-->
        </main> <!--end::App Main--> <!--begin::Footer-->
        <footer class="app-footer" > <!--begin::To the end-->
            <div class="float-end d-none d-sm-inline">By</div> <!--end::To the end--> <!--begin::Copyright--> <strong>
                Copyright &copy; 2024-2025&nbsp;
                <a href="#" class="text-decoration-none">Lipilima Tower & Apartment</a>.
            </strong>
            All rights reserved.
            <!--end::Copyright-->
        </footer> <!--end::Footer-->
    </div> <!--end::App Wrapper--> <!--begin::Script--> <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script src="{{asset('assets/adminkit/other/overlayscrollbars.browser.es6.min.js')}}" integrity="sha256-H2VM7BKda+v2Z4+DRy69uknwxjyDRhszjXFhsL4gD3w=" crossorigin="anonymous"></script> <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script src="{{asset('assets/adminkit/other/popper.min.js')}}" integrity="sha256-whL0tQWoY1Ku1iskqPFvmZ+CHsvmRWx/PIoEvIeWh4I=" crossorigin="anonymous"></script> <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script src="{{asset('assets/adminkit/other/bootstrap.min.js')}}" integrity="sha256-YMa+wAM6QkVyz999odX7lPRxkoYAan8suedu4k2Zur8=" crossorigin="anonymous"></script> <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="{{asset('assets/adminkit/js/adminlte.js')}}"></script> <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
        const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
        const Default = {
            scrollbarTheme: "os-theme-light",
            scrollbarAutoHide: "leave",
            scrollbarClickScroll: true,
        };
        document.addEventListener("DOMContentLoaded", function() {
            const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
            if (
                sidebarWrapper &&
                typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== "undefined"
            ) {
                OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                    scrollbars: {
                        theme: Default.scrollbarTheme,
                        autoHide: Default.scrollbarAutoHide,
                        clickScroll: Default.scrollbarClickScroll,
                    },
                });
            }
        });
    </script> <!--end::OverlayScrollbars Configure--> <!-- OPTIONAL SCRIPTS --> <!-- sortablejs -->
    <script src="{{asset('assets/adminkit/other/Sortable.min.js')}}" integrity="sha256-ipiJrswvAR4VAx/th+6zWsdeYmVae0iJuiR+6OqHJHQ=" crossorigin="anonymous"></script> <!-- sortablejs -->
    <script src="{{asset('assets/adminkit/other/apexcharts.min.js')}}" integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8=" crossorigin="anonymous"></script> <!-- ChartJS -->
    <script src="{{asset('assets/adminkit/other/jsvectormap.min.js')}}" integrity="sha256-/t1nN2956BT869E6H4V1dnt0X5pAQHPytli+1nTZm2Y=" crossorigin="anonymous"></script>
    <script src="{{asset('assets/adminkit/other/world.js')}}" integrity="sha256-XPpPaZlU8S/HWf7FZLAncLg2SAkP8ScUTII89x9D3lY=" crossorigin="anonymous"></script> <!-- jsvectormap -->


    <!-- Data Table Link  -->
    <script src="{{ asset('assets/datatable/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/datatable/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/datatable/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/datatable/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/datatable/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/datatable/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/datatable/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/datatable/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/datatable/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/datatable/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/datatable/buttons.colVis.min.js') }}"></script>
   



    <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
     "buttons": ["copy", "csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
  // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
</script>
<script src="{{asset('chosen/chosen.jquery.min.js')}}" ></script>
<script src="{{asset('chosen/popper.min.js')}}" ></script>
<script>
    $(document).ready(
        function()
        {
            $('.chosen-select').chosen(
                {
                    width:'100%',
                    placeholder_text_single:'select room'
                }
            );
        }
    );
</script>

<!-- Booking  form execution-->
<script> 
document.addEventListener('DOMContentLoaded', function() {
  const reservationTypeSelect = document.getElementById('reservation-type');
  const customPeriodContainer = document.getElementById('custom-period-container');
  const customPeriodInput = document.getElementById('custom-period-input');
  const hiddenCustomPeriod = document.getElementById('custom-period');

  reservationTypeSelect.addEventListener('change', function() {
    if (this.value === 'custom') {
      customPeriodContainer.style.display = 'block';
    } else {
      customPeriodContainer.style.display = 'none';
      if (this.value === 'long') {
        hiddenCustomPeriod.value = 30;
        customPeriodInput.value = 30;
      } else {
        hiddenCustomPeriod.value = '';
        customPeriodInput.value = '';
      }
    }
  });

  document.getElementById('increment').addEventListener('click', function() {
    customPeriodInput.value = parseInt(customPeriodInput.value) + 1;
    hiddenCustomPeriod.value = customPeriodInput.value;
  });

  document.getElementById('decrement').addEventListener('click', function() {
    if (parseInt(customPeriodInput.value) > 1) {
      customPeriodInput.value = parseInt(customPeriodInput.value) - 1;
      hiddenCustomPeriod.value = customPeriodInput.value;
    }
  });
});
</script>
<!-- Booking  form execution-->





    
    <!-- Toastr JS -->
    <script src="{{ asset('vendor/flasher/toastr.min.js') }}"></script>
    <script src="{{ asset('vendor/flasher/flasher-toastr.min.js') }}"></script>
<script>
        // Handle session messages
        @if(session('success'))
            toastr.success("{{ session('success') }}", 'Success');
        @endif

        @if(session('error'))
            toastr.error("{{ session('error') }}", 'Error');
        @endif

        // Handle validation errors (assuming you are using Laravel's built-in validation)
        @if($errors->any())
            @foreach($errors->all() as $error)
                toastr.error("{{ $error }}", 'Validation Error');
            @endforeach
        @endif
    </script>


<script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
<script>
  function printContent() {
    printJS({
      printable: 'printable-area', // The ID of the element to print
      type: 'html', // Type of content
      style: `
        /* Optional: Include any CSS you want to apply to the printed content */
        .row { border-bottom: 1px solid #dee2e6; margin-bottom: 5px; }
        .name { font-weight: bold; background-color: #f8f9fa; }
        .value { padding: 10px; }
        @media print {
          .no-print { display: none; }
        }
      `
    });
  }
</script>

<!-- export excel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>

<!-- used for export excel fromart and csv -->
@if(isset($reservations))
    @include('dashboard_layout.reservation_script')
@endif
<!--end  used for export excel fromart and csv -->

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
   @include('dashboard_layout.guest_chart')
   @include('dashboard_layout.booking_chart')
   @include('dashboard_layout.reservation_chart')

</body><!--end::Body-->


</html>