<div class="topbar-menu">
    <div class="container-fluid">
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                
                <li>
                    <a href="#" disabled> {{ Auth::user()->username}}</a>
                   
                    
                </li>

                <li >
                    <a href="/dashboard">
                    <i class="fe-airplay"></i>Dashboard</a>
                </li>
                <li>
                    <a href="/admin/post">
                    <i class=" far fa-newspaper"></i>Post</a>
                </li>
                
                @if(Auth::user()->role == 'admin')
                <li>
                    <a href="/admin/pesan">
                    <i class="fab fa-facebook-messenger"></i>Pesan</a>
                </li>
                @endif
                <li>
                    <a href="/admin/kategori">
                    <i class="fas fa-compress-arrows-alt"></i>kategori</a>
                </li>
                <li>
                    <a href="/admin/tag">
                        <i class="fas fa-hashtag"></i>Tag</a>
                </li>
                <li>
                    <a href="/logout">
                        <i class="fe-log-out"></i>Logout</a>
                </li>

            </ul>
            <!-- End navigation menu -->

            <div class="clearfix"></div>
        </div>
        <!-- end #navigation -->
    </div>
    <!-- end container -->
</div>
<!-- end navbar-custom -->