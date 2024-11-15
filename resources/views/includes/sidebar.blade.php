<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
        </div>
        <div>
            <h4 class="logo-text"> AllPrinter It Help</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
     </div>
    <ul class="metismenu" id="menu">
 
        <li>
            <a href="{{route('admindashboard')}}">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title"> Dashboard</div>
            </a>
        </li>

        <li class="menu-label">Pages</li>

        <li>
            <a href="{{route('contactadmin')}}">
                <div class="parent-icon"><i class="lni lni-phone"></i>
                </div>
                <div class="menu-title"> Contact</div>
            </a>
        </li>
        
        <li>
            <a href="{{route('admin.blog')}}">
                <div class="parent-icon"><i class="fa-solid fa-blog"></i>
                </div>
                <div class="menu-title"> Blogs</div>
            </a>
        </li>

        <li> <a href="{{ route('blog-category') }}"><i class="bi bi-arrow-right-short"></i>Blog Category</a>
        
        <li>
            <a href="{{route('homeadmin')}}">
                <div class="parent-icon"><i class="fa fa-home" aria-hidden="true"></i>
                </div>
                <div class="menu-title"> Home Page Form</div>
            </a>
        </li>
        
        <li>
            <a href="{{route('settingg.index')}}">
                <div class="parent-icon"><i class="lni lni-cog"></i>
                </div>
                <div class="menu-title"> Setting</div>
            </a>
        </li>
        
    </ul>
</div>
