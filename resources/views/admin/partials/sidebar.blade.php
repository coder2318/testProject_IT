<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="{{ asset('img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">IT - Visa Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- SidebarSearch Form -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="{{ route('company.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Компании
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('specialist-relocation.index') }}" class="nav-link  ">
                        <i class="nav-icon fas fa-id-card-alt"></i>
                        <p>
                            IT-специалист релоканты
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('specialist-visa.index') }}" class="nav-link  ">
                        <i class="nav-icon fas fa-id-card-alt"></i>
                        <p>
                            IT-специалист виза
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('investor.index') }}" class="nav-link  ">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Инвестори
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('founder.index') }}" class="nav-link  ">
                        <i class="nav-icon fas fa-user-tie"></i>
                        <p>
                            Учредители резидентов IT Park
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('application.index') }}" class="nav-link  ">
                        <i class="nav-icon fas fa-user-tie"></i>
                        <p>
                            Единый электронный реестр выданных рекомендаций
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="justify-bottom" style="margin-top: 100%">
            <a href="{{ route('admin.logout') }}" class="nav-link"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
