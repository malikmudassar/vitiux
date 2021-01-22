<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    Dashboard
                </a>
            </li>
            
            <li class="nav-item nav-dropdown">
                <a class="nav-link  nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users nav-icon">

                    </i>
                    User Management
                </a>
                <ul class="nav-dropdown-items">
                    
                   
                    <li class="nav-item">
                        <a href="" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-user nav-icon">

                            </i>
                            All Users
                        </a>
                    </li>
                   
                </ul>
            </li>
            

            @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                @can('profile_password_edit')
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" href="{{ route('profile.password.edit') }}">
                            <i class="fa-fw fas fa-key nav-icon">
                            </i>
                            Change Password
                        </a>
                    </li>
                @endcan
            @endif
            <li class="nav-item nav-dropdown">
                <a class="nav-link  nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-book nav-icon">

                    </i>
                    Advertisements
                </a>
                <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a href="{{URL::to('/admin/about')}}" class="nav-link {{ request()->is('admin/about') || request()->is('admin/about/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fas fa-arrow-right nav-icon">

                                </i>
                                All Ads
                            </a>
                        </li>
                    <li class="nav-item">
                        <a href="{{URL::to('/admin/contact')}}" class="nav-link {{ request()->is('admin/contact') || request()->is('admin/contact/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fas fa-arrow-right nav-icon">

                            </i>
                            Add an Adv.
                        </a>
                    </li>
                    
                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link  nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-book nav-icon">

                    </i>
                    Categories
                </a>
                <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a href="{{URL::to('/admin/about')}}" class="nav-link {{ request()->is('admin/about') || request()->is('admin/about/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fas fa-arrow-right nav-icon">

                                </i>
                                All Categories
                            </a>
                        </li>
                    <li class="nav-item">
                        <a href="{{URL::to('/admin/contact')}}" class="nav-link {{ request()->is('admin/contact') || request()->is('admin/contact/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fas fa-arrow-right nav-icon">

                            </i>
                            Add Category
                        </a>
                    </li>
                    
                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link  nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-book nav-icon">

                    </i>
                    Contenido
                </a>
                <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a href="{{URL::to('/admin/about')}}" class="nav-link {{ request()->is('admin/about') || request()->is('admin/about/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fas fa-arrow-right nav-icon">

                                </i>
                                Novedades
                            </a>
                        </li>
                    <li class="nav-item">
                        <a href="{{URL::to('/admin/contact')}}" class="nav-link {{ request()->is('admin/contact') || request()->is('admin/contact/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fas fa-arrow-right nav-icon">

                            </i>
                            Videos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{URL::to('/admin/flipbook')}}" class="nav-link {{ request()->is('admin/flipbook') || request()->is('admin/flipbook/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fas fa-arrow-right nav-icon">

                            </i>
                            Fotos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{URL::to('/admin/index')}}" class="nav-link {{ request()->is('admin/index') || request()->is('admin/index/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fas fa-arrow-right nav-icon">

                            </i>
                            Packs
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{URL::to('/admin/logo')}}" class="nav-link {{ request()->is('admin/logo') || request()->is('admin/logo/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fas fa-arrow-right nav-icon">

                            </i>
                            Vitiux Vlu
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{URL::to('/admin/logo')}}" class="nav-link {{ request()->is('admin/logo') || request()->is('admin/logo/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fas fa-arrow-right nav-icon">

                            </i>
                            Trabaja con nosotros
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{URL::to('/admin/logo')}}" class="nav-link {{ request()->is('admin/logo') || request()->is('admin/logo/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fas fa-arrow-right nav-icon">

                            </i>
                            Manifiesto
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{URL::to('/admin/logo')}}" class="nav-link {{ request()->is('admin/logo') || request()->is('admin/logo/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fas fa-arrow-right nav-icon">

                            </i>
                            Legal
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{URL::to('/admin/logo')}}" class="nav-link {{ request()->is('admin/logo') || request()->is('admin/logo/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fas fa-arrow-right nav-icon">

                            </i>
                            Consultas
                        </a>
                    </li>
                    
                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link  nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-book nav-icon">

                    </i>
                    Perfil
                </a>
                <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a href="{{URL::to('/admin/about')}}" class="nav-link {{ request()->is('admin/about') || request()->is('admin/about/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fas fa-arrow-right nav-icon">

                                </i>
                                Favoritos
                            </a>
                        </li>
                    <li class="nav-item">
                        <a href="{{URL::to('/admin/contact')}}" class="nav-link {{ request()->is('admin/contact') || request()->is('admin/contact/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fas fa-arrow-right nav-icon">

                            </i>
                            Lista de deseos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{URL::to('/admin/flipbook')}}" class="nav-link {{ request()->is('admin/flipbook') || request()->is('admin/flipbook/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fas fa-arrow-right nav-icon">

                            </i>
                            Compras
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{URL::to('/admin/index')}}" class="nav-link {{ request()->is('admin/index') || request()->is('admin/index/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fas fa-arrow-right nav-icon">

                            </i>
                            Historial
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{URL::to('/admin/logo')}}" class="nav-link {{ request()->is('admin/logo') || request()->is('admin/logo/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fas fa-arrow-right nav-icon">

                            </i>
                            Configuración
                        </a>
                    </li>
                    
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    Logout
                </a>
            </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
