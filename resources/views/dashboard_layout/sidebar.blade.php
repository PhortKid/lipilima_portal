<aside class="app-sidebar shadow" data-bs-theme="dark" style="background-color:#222e3c"> <!--begin::Sidebar Brand-->
            <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="lipilimatower.co.tz" class="brand-link "> <!--begin::Brand Image--> <img src="{{asset('logo/logo.jpg')}}" alt="Lipilima Logo" class="brand-image opacity-75 shadow rounded-circle "> <!--end::Brand Image--> <!--begin::Brand Text--> <span class="brand-text fw-light">Lipilima Tower</span> <!--end::Brand Text--> </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
            <div class="sidebar-wrapper">
                <nav class="mt-2"> <!--begin::Sidebar Menu-->
                    <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                    <li class="nav-header">Dashboard</li>

                    <li class="nav-item "> <a href="{{url('/dash')}}" class="nav-link "> 
                    <i class="nav-icon bi bi-speedometer"></i>
                                <p> Dashboard</p>
                            </a> </li>

                         
                    <!-- Manage Users -->   
                        <li class="nav-item "> <a href="#" class="nav-link "> <i class="nav-icon bi bi-people"></i>
                                <p>
                               Users Management
                               <i class="nav-arrow bi bi-chevron-down"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="{{route('users_management.index')}}" class="nav-link active"> <i class=" bi bi-chevron-double-right"></i>
                                <p>Users</p>
                                    </a> </li>
                            
                              
                            </ul>
                        </li>
                        <!-- End Manage user -->|

                        <li class="nav-header">Guest & Booking</li>  

                            <!-- Manage Guest -->   
                            <li class="nav-item "> <a href="#" class="nav-link "> <i class="fas fa-user-tie"></i>
                                <p>
                               Guest Management
                               <i class="nav-arrow bi bi-chevron-down"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="{{route('guest_management.index')}}" class="nav-link active"> <i class="bi bi-chevron-double-right"></i>
                                        <p>Guest</p>
                                    </a> </li>
                            
                              
                            </ul>
                        </li>
                        <!-- End Manage guest -->

                             <!-- Booking Management -->   
                             <li class="nav-item "> <a href="#" class="nav-link "> <i class="fas fa-calendar"></i>
                                <p>
                               Booking Management
                               <i class="nav-arrow bi bi-chevron-down"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="{{ route('booking_management.index')}}" class="nav-link active"> <i class="bi bi-chevron-double-right"></i>
                                        <p>New Booking</p>
                                    </a> </li>

                                    <li class="nav-item"> <a href="{{ route('marked_booking_request.index')}}" class="nav-link active"> <i class="bi bi-chevron-double-right"></i>
                                        <p>Marked</p>
                                    </a> </li>
   
   
                            </ul>
                        </li>
                        <!-- Booking Management -->|


                        <li class="nav-header">Room Activity</li> 
                             <!-- Room Management -->   
                             <li class="nav-item "> <a href="#" class="nav-link "><i class="fa fa-bed"></i> 
                                <p>
                               Room Management
                                    <i class="nav-arrow bi bi-chevron-down"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="{{ route('rooms_management.index')}}" class="nav-link active"> <i class="bi bi-chevron-double-right"></i>
                                        <p>Room </p>
                                    </a> </li>

                                    <li class="nav-item"> <a href="{{ route('rooms_management.index')}}" class="nav-link active"> <i class="bi bi-chevron-double-right"></i>
                                        <p>Room  report</p>
                                    </a> </li>
   
   
                            </ul>
                        </li>
                        <!-- Booking Management -->


                             <!-- Room Group Management -->   
                             <li class="nav-item "> <a href="#" class="nav-link "> <i class="fa fa-home"></i>
                                <p>
                                Room Group Management
                                <i class="nav-arrow bi bi-chevron-down"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="{{ route('room_type_management.index')}}" class="nav-link active"> <i class="bi bi-chevron-double-right"></i>
                                        <p>Room Group </p>
                                    </a> </li>

                               
   
   
                            </ul>
                        </li>
                      <!-- Room Group Management -->   

                      <li class="nav-header">Reservation</li> 
                             <!-- Reservation Management -->   
                             <li class="nav-item "> <a href="#" class="nav-link "> <i class="fas fa-couch"></i>

                                <p>
                                Reservation Management
                                <i class="nav-arrow bi bi-chevron-down"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="{{ route('reservation_management.index')}}" class="nav-link active"> <i class="bi bi-chevron-double-right"></i>
                                        <p>Reservation management</p>
                                    </a> </li>


                                    </ul>
                                </li>

                                
                                @if(Auth::user()->role == 'Admin')
                                <li class="nav-header">Tax</li> 

                             <!-- Tax Management -->   
                             <li class="nav-item "> <a href="#" class="nav-link "> <i class="fas fa-receipt"></i>
                                <p>
                                Tax Management
                                <i class="nav-arrow bi bi-chevron-down"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="{{ route('tax_management.index')}}" class="nav-link active"> <i class="bi bi-chevron-double-right"></i>
                                        <p>Tax </p>
                                    </a> </li>

                                    </ul>
                                </li>
                            <!-- Tax Management -->

                            <li class="nav-header">Expenses & Budget</li> 

                              <!-- Expense Management -->   
                              <li class="nav-item "> <a href="#" class="nav-link "> <i class="fas fa-dollar-sign"></i>
                                <p>
                                Expense Management
                                <i class="nav-arrow bi bi-chevron-down"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="{{ route('category_expence.index')}}" class="nav-link active"> <i class="bi bi-chevron-double-right"></i>
                                        <p>Category </p>
                                    </a> </li>

                                    <li class="nav-item"> <a href="{{ route('expense_management.index')}}" class="nav-link active"> <i class="bi bi-chevron-double-right"></i>
                                        <p>Expense </p>
                                    </a> </li>

                                    </ul>
                                </li>

                        

                                
                             <!--   Expense Management -->




                              <!-- Budget Management -->   
                              <li class="nav-item "> <a href="#" class="nav-link "> <i class="fas fa-chart-line"></i>
                                <p>
                                Budget Planning
                                <i class="nav-arrow bi bi-chevron-down"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="{{ route('budget_planning.index')}}" class="nav-link active"> <i class="bi bi-chevron-double-right"></i>
                                        <p>Budgets </p>
                                    </a> </li>

                                    <li class="nav-item"> <a href="{{ route('budget_allocation.index')}}" class="nav-link active"> <i class="bi bi-chevron-double-right"></i>
                                        <p>Budget Allocation </p>
                                    </a> </li>

                                    </ul>
                                </li>

                        
                                
                             <!--  Budget Management -->



                              <!-- Properties  Management -->   
                              <li class="nav-item "> <a href="#" class="nav-link "> <i class="fas fa-car"></i>
                                <p>
                                Guest Properties
                                <i class="nav-arrow bi bi-chevron-down"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="{{ route('budget_planning.index')}}" class="nav-link active"> <i class="bi bi-chevron-double-right"></i>
                                        <p>All</p>
                                    </a> </li>

                                  

                                    </ul>
                                </li>

                        

                             
                                @endif   
                             <!--  car management -->
                            
                            
                            

                        
                    </ul> <!--end::Sidebar Menu-->
                </nav>
            </div> <!--end::Sidebar Wrapper-->
        </aside> <!--end::Sidebar--> <!--begin::App Main-->