<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <!-- <div>
            <img src="{{asset('backEnd')}}/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
        </div> -->
        <div>
            <h4 class="logo-text" style="color: #194376;">EMO<span style="color: #46C6CE;">BETTING</span></h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{route('admin.index')}}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i></div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-category-alt'></i>
                </div>
                <div class="menu-title">Category</div>
            </a>

            <ul>
                <li> <a href="{{route('admin.category.show')}}"><i class="bx bx-right-arrow-alt"></i>All Category</a>
                </li>
                <li>
                    <a href="{{route('admin.category.create')}}"><i class="bx bx-right-arrow-alt"></i>Add Category</a>
                </li>

            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-message-square-edit'></i>
                </div>
                <div class="menu-title">Articles</div>
            </a>

            <ul>
                <li> <a href="{{route('admin.posts.index')}}"><i class="bx bx-right-arrow-alt"></i>All Blogs</a>
                </li>
                <li>
                    <a href="{{route('admin.posts.create')}}"><i class="bx bx-right-arrow-alt"></i>Add New Blog</a>
                </li>

            </ul>
        </li>
        <li>
            <a href="{{route('admin.comments.show')}}">
                <div class="parent-icon"><i class='bx bx-comment-detail'></i></div>
                <div class="menu-title">Comments</div>
            </a>
        </li>
        <li>
            <a href="{{route('admin.user.showlist')}}">
                <div class="parent-icon"><i class='bx bx-user-x'></i></div>
                <div class="menu-title">User List</div>
            </a>
        </li>
        <li>
            <a href="{{route('admin.admin.show')}}">
                <div class="parent-icon"><i class='bx bxs-user-badge'></i></div>
                <div class="menu-title">Admin List</div>
            </a>
        </li>
        <li>
            <a href="{{route('admin.user.show')}}">
                <div class="parent-icon"><i class='bx bx-user-circle'></i></div>
                <div class="menu-title">Personal Details</div>
            </a>
        </li>
        <li>
            <a href="{{route('blog')}}" target="_blank">
                <div class="parent-icon"><i class='bx bxs-mouse-alt'></i>
                </div>
                <div class="menu-title">Browse FrontEnd</div>
            </a>
        </li>


    </ul>
    <!--end navigation-->
</div>
