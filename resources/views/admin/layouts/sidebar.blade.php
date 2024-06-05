<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset('public/assets/images/logo.png')}}" class="img-fluid" alt="logo icon" width="250px" />
        </div>
        {{-- <div>
            <h4 class="logo-text">Ranjesu</h4>
        </div> --}}
        <div class="toggle-icon ms-auto">
            <i class="bx bx-arrow-back"></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-home-alt"></i></div>
                <div class="menu-title">Dashboard</div>
            </a>
            <ul>
                <li>
                    <a href="{{route('admin.slider')}}"><i class="bx bx-radio-circle"></i>Slider</a>
                </li>
                <li>
                    <a href="{{route('admin.newsevents')}}"><i class="bx bx-radio-circle"></i>Upcoming Events</a>
                </li>
                <li>
                    <a href="{{route('admin.gallery')}}"><i class="bx bx-radio-circle"></i>Gallery</a>
                </li>
                <li>
                    <a href="{{route('admin.video.gallery')}}"><i class="bx bx-radio-circle"></i>Video Gallery</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-book-open'></i></div>
                <div class="menu-title">Blogs</div>
            </a>
            <ul>
                <li>
                    <a href="javascript:void"><i class="bx bx-radio-circle"></i>Add New</a>
                </li>
                <li>
                    <a href="{{route('admin.blog')}}"><i class="bx bx-radio-circle"></i>All Blogs</a>
                </li>

            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-book-open'></i></div>
                <div class="menu-title">Articles</div>
            </a>
            <ul>
                <li>
                    <a href="javascript:void"><i class="bx bx-radio-circle"></i>Add New</a>
                </li>
                <li>
                    <a href="{{route('admin.english.article')}}"><i class="bx bx-radio-circle"></i>Articles - English</a>
                </li>
                <li>
                    <a href="{{route('admin.hindi.article')}}"><i class="bx bx-radio-circle"></i>Articles - Hindi</a>
                </li>

            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-user-plus'></i></div>
                <div class="menu-title">Curia Members</div>
            </a>
            <ul>
                <li>
                    <a href="javascript:void"><i class="bx bx-radio-circle"></i>Add Member</a>
                </li>
                <li>
                    <a href="{{route('admin.team')}}"><i class="bx bx-radio-circle"></i>Member List</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-book-open'></i></div>
                <div class="menu-title">Pages</div>
            </a>
            <ul>
                <li>
                    <a href="javascript:void"><i class="bx bx-radio-circle"></i>Add New</a>
                </li>
                <li>
                    <a href="{{route('admin.page')}}"><i class="bx bx-radio-circle"></i>All Pages</a>
                </li>
            </ul>
        </li>

        {{-- <li class="menu-label">UI Elements</li> --}}
        <li>
            <a href="{{route('admin.user')}}">
                <div class="parent-icon"><i class='bx bx-user' ></i></div>
                <div class="menu-title">Users</div>
            </a>
        </li>
        <li>
            <a href="{{route('admin.permission')}}">
                <div class="parent-icon"><i class='bx bx-lock-alt' ></i></div>
                <div class="menu-title">Permissions</div>
            </a>
        </li>


    </ul>
    <!--end navigation-->
</div>
