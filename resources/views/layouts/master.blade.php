<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Admin WEB SIGIT</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="/images/logo.JPG">
        @include('layouts.head')

    </head>

    <body>

        <!-- Navigation Bar-->
        <header id="topnav">
      @include('layouts.admin-topbar')
      @include('layouts.admin-nav-horizontal')
            </header>
        <!-- End Navigation Bar-->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
            <div class="wrapper">
                <div class="container-fluid">
    @yield('content')
    @include('layouts.footer')    
    @include('layouts.right-sidebar')
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
                </div> <!-- end wrapper -->
            </div>
            <!-- end wrapper -->
    @include('layouts.footer-script')    
    </body>
</html>