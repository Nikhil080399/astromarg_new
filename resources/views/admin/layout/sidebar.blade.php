<div class="sidebar-wrapper " data-simplebar="true">
    <div class="sidebar-header bg-dark">
        <div>
            <img src="{{ asset('backend/assets/images/1.png') }}" class="" alt="logo icon" style="height: 50px; width:100px">
        </div>
       
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ url('dashboard') }}">
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
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Insert Data</div>
            </a>
            <ul>
                <li> <a href="{{ url('blog') }}"><i class="bx bx-right-arrow-alt"></i>Blog</a> </li>
                <li> <a href="{{ url('video_back') }}"><i class="bx bx-right-arrow-alt"></i>Video</a> </li>
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
