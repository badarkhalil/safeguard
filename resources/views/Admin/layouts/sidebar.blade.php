    <!-- Sidebar -->
    <aside id="main-sidebar" class="dt-sidebar">
        <div class="dt-sidebar__container">

          <!-- Sidebar Notification -->
          <div class="dt-sidebar__notification  d-none d-lg-block">
            <!-- Dropdown -->
            <div class="dropdown mb-6" id="user-menu-dropdown">

              <!-- Dropdown Link -->
              <a href="#" class="dropdown-toggle dt-avatar-wrapper text-body"
                 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="dt-avatar" src="{{ asset('admin/assets/images/placeholder.jpg') }}" alt="{{ Auth::user()->name }}">
                <span class="dt-avatar-info">
              <span class="dt-avatar-name">{{ Auth::user()->name }}</span>
            </span> </a>
              <!-- /dropdown link -->

              <!-- Dropdown Option -->
              <div class="dropdown-menu dropdown-menu-right">
                <div class="dt-avatar-wrapper flex-nowrap p-6 mt--5 bg-gradient-purple text-white rounded-top">
                  <img class="dt-avatar" src="{{ asset('admin/assets/images/placeholder.jpg') }}" alt="{{ Auth::user()->name }}">
                  <span class="dt-avatar-info">
                    <span class="dt-avatar-name">{{ Auth::user()->name }}</span>
                    <span class="f-12">Administrator</span>
                  </span>
                </div>
                <a class="dropdown-item" href="javascript:void(0)"> <i class="icon icon-user-o icon-fw mr-2 mr-sm-1"></i>Account
                </a>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="icon icon-edit icon-fw mr-2 mr-sm-1"></i>Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

              </div>
              <!-- /dropdown option -->

            </div>
            <!-- /dropdown -->


            <ul class="dt-list dt-list-xl">
              <li class="dt-list__item pl-5 pr-5">
                <a href="javascript:void(0)" class="dt-list__link"><i class="icon icon-search-new icon-xl"></i></a>
              </li>
              <li class="dt-list__item pl-5 pr-5">
                <a href="javascript:void(0)" class="dt-list__link"><i class="icon icon-notification icon-xl"></i></a>
              </li>
              <li class="dt-list__item pl-5 pr-5">
                <a href="javascript:void(0)" class="dt-list__link"><i class="icon icon-chat-new icon-xl"></i></a>
              </li>
            </ul>
          </div>
          <!-- /sidebar notification -->

          <!-- Sidebar Navigation -->
          <ul class="dt-side-nav">

            <!-- Menu Header -->
            <li class="dt-side-nav__item dt-side-nav__header">
              <span class="dt-side-nav__text">Dashboard</span>
            </li>
            <!-- /menu header -->

            <!-- Menu Item -->
            <li class="dt-side-nav__item ">
              <a href="{{ route('dashbaord') }}" class="dt-side-nav__link" title="Dashboard">
                <i class="icon icon-dashboard icon-fw icon-xl"></i> <span class="dt-side-nav__text">Dashboard</span> </a>

            </li>
            <!-- /menu item -->

            <!-- Menu Header -->
            <li class="dt-side-nav__item dt-side-nav__header">
              <span class="dt-side-nav__text">Main</span>
            </li>
            <!-- /menu header -->


             <!-- Menu Item -->
             <li class="dt-side-nav__item @if(request()->routeIs('user.*')) open @endif">
                <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="Basic Components">
                  <i class="icon icon-card icon-fw icon-xl"></i>
                  <span class="dt-side-nav__text">Users</span> </a>

                <!-- Sub-menu -->
                <ul class="dt-side-nav__sub-menu">
                  <li class="dt-side-nav__item">
                    <a href="{{ route('user.index') }}" class="dt-side-nav__link @if(request()->routeIs('user.index')) active @endif" title="Alerts">
                      <span class="dt-side-nav__text">User list</span> </a>
                  </li>
                </ul>
                <!-- /sub-menu -->
              </li>


            <!-- Menu Item -->
            <li class="dt-side-nav__item @if(request()->routeIs('product.*')) open @endif">
              <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="Basic Components">
                <i class="icon icon-card icon-fw icon-xl"></i>
                <span class="dt-side-nav__text">Product</span> </a>

              <!-- Sub-menu -->
              <ul class="dt-side-nav__sub-menu">
                <li class="dt-side-nav__item">
                  <a href="{{ route('product.create') }}" class="dt-side-nav__link @if(request()->routeIs('product.create')) active @endif" title="Alerts">
                    <span class="dt-side-nav__text">Create</span> </a>
                </li>

                <li class="dt-side-nav__item">
                  <a href="{{ route('product.index') }}" class="dt-side-nav__link @if(request()->routeIs('product.index')) active @endif" title="Badges">
                    <span class="dt-side-nav__text">View</span> </a>
                </li>
              </ul>
              <!-- /sub-menu -->
            </li>

            </ul>
          <!-- /sidebar navigation -->

        </div>
      </aside>
      <!-- /sidebar -->
