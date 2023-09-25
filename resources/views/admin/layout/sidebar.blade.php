<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('backend/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Rukada</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="javascript:;">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="javascript:;">
                <div class="parent-icon"><i class='bx bx-command'></i>
                </div>
                <div class="menu-title">UI Setting</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Services</div>
            </a>
            <ul>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Add Service</a>
                </li>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Manage Service</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{ url('profile') }}">
                <div class="parent-icon"><i class='bx bx-command'></i>
                </div>
                <div class="menu-title">Profile</div>
            </a>

        {{-- <li>
            <a href="{{ url('profile') }}">
                <div class="parent-icon">
                    <i class="bx bx-home-circle"></i>
                    <div class="menu-title">Profile</div>
                </div>
            </a>
        </li> --}}

        <li class="pl-4">
            <a href="javascript:void(0)">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Logout</button>
                </form>
            </a>



            {{-- <a href="{{route ('logout')}}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Log Out</div>
            </a> --}}
        </li>

    </ul>
    <!--end navigation-->
</div>
