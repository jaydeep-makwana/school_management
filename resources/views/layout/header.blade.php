<!--Main Navigation-->
<header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar bg-white">
        <div class="position-sticky">
            <div class="list-group list-group-flush mx-3 mt-2">
                <a href="{{ url('dashboard') }}"
                    class="list-group-item list-group-item-action py-2 {{ Request::is('dashboard') ? 'active' : '' }}"
                    aria-current="true">
                    <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Dashboard</span>
                </a>
                <a href="{{ route('students.index') }}"
                    class="list-group-item list-group-item-action py-2 {{ Request::is('students*') ? 'active' : '' }}"
                    aria-current="true">
                    <i class="bi bi-people-fill me-3"></i><span>Students</span>
                </a>
                <a href="{{ route('courses.index') }}"
                    class="list-group-item list-group-item-action py-2 {{ Request::is('courses*') ? 'active' : '' }}"
                    aria-current="true">
                    <i class="bi bi-book-fill me-3"></i><span>Courses</span>
                </a>
                <a href="{{ route('fees.index') }}"
                    class="list-group-item list-group-item-action py-2 {{ Request::is('fees*') ? 'active' : '' }}"
                    aria-current="true">
                    <i class="bi bi-wallet-fill me-3"></i><span>Fees</span>
                </a>
                <a href="{{ route('birthdays') }}"
                    class="list-group-item list-group-item-action py-2 {{ Request::is('birthdays*') ? 'active' : '' }}"
                    aria-current="true">
                    <i class="fa fa-birthday-cake fs-5 me-3"></i><span>Birthdays</span>
                    @if (!Request::is('birthdays'))
                        @if (count(returnBirthdays()) > 0)
                            <span class="badge bg-success">{{  count(returnBirthdays()) }}</span>
                        @endif
                        @if (count(returnUpcomingBirthdays()) > 0)
                            <span class="badge bg-warning text-dark">{{ count(returnUpcomingBirthdays()) }}</span>
                        @endif
                    @endif
                </a>
            </div>
        </div>
    </nav>
    <!-- Sidebar -->

    <!-- Navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top p-0">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
                aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Brand -->
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/images/angel.png') }}" height="40" alt="something went wrong" />
            </a>

            <!-- Right links -->
            <ul class="navbar-nav ms-auto d-flex flex-row">
                <!-- Notification dropdown -->
                {{-- <li class="nav-item dropdown">
                      <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#"
                          id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                          <i class="fas fa-bell"></i>
                          <span class="badge rounded-pill badge-notification bg-danger">1</span>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="#">Some news</a></li>
                          <li><a class="dropdown-item" href="#">Another news</a></li>
                          <li>
                              <a class="dropdown-item" href="#">Something else</a>
                          </li>
                      </ul>
                  </li> --}}

                <!-- Avatar -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#"
                        id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('assets/images/admin.png') }}" class="rounded-circle img-thumbnail"
                            width="35" alt="something went wrong" />
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">My profile</a></li>
                        <li><a class="dropdown-item" href="{{ url('logout') }}">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
</header>
<!--Main Navigation-->
