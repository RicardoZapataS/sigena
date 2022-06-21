<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('index') }}" class="brand-link">
        <img src="{{ asset('assets/img/logo_i_naabol.jpeg') }}" alt="Naabol Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SIGENA</span>
    </a>
    <!-- Sidebar Menu -->
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/plugins/dist/img/user2-160x160.jpg') }}"
                     class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>
        <div class=""
             style="display: flex; flex-direction: column; height: calc(100% - 5.5rem); justify-content: space-between;">

            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                    <li class="nav-header">{{ Auth::user()->area->name }}</li>
                    @foreach(Auth::user()->area->hasRoute as $hasRoute)
                        @include('layouts.components.sidebar.sidebar_menu_item', [ 'route'=> $hasRoute->route_module->route_name, 'icon'=>$hasRoute->route_module->icon, 'name'=>$hasRoute->route_module->name])
                    @endforeach
                    @if(!empty(Auth::user()->hasRoute[0]))
                        <li class="nav-header">Funciones extra</li>
                        @foreach(Auth::user()->hasRoute as $hasRoute)
                            @include('layouts.components.sidebar.sidebar_menu_item', [ 'route'=> $hasRoute->route_module->route_name, 'icon'=>$hasRoute->route_module->icon, 'name'=>$hasRoute->route_module->name])
                        @endforeach
                    @endif
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>
                                Cerrar sesión
                            </p>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              class="d-none">
                            @csrf
                        </form>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->

</aside>
