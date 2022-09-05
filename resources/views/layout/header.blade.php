<!--Main Navigation-->
  <header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
          <a href="{{url('dashboard')}}" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
            <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
          </a>
          <a href="{{url('add-student')}}" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
            <i class="bi bi-people-fill me-3"></i><span>Add student</span>
          </a>
        </div>
      </div>
    </nav>
    <!-- Sidebar -->

        <!-- Navbar -->
        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
          <!-- Container wrapper -->
          <div class="container-fluid">
              <!-- Toggle button -->
              <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
                  aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fas fa-bars"></i>
              </button>

              <!-- Brand -->
              <a class="navbar-brand" href="#">
                  <img src="{{ asset('images/angel.png') }}" height="40"
                      alt="" loading="lazy" />
              </a>

              <!-- Right links -->
              <ul class="navbar-nav ms-auto d-flex flex-row">
                  <!-- Notification dropdown -->
                  <li class="nav-item dropdown">
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
                  </li>

                  <!-- Avatar -->
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#"
                          id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                          <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle"
                              height="22" alt="" loading="lazy" />
                      </a>
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="#">My profile</a></li>
                          <li><a class="dropdown-item" href="#">Settings</a></li>
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