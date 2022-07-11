<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Sigit Wahyudi Web</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="@if(isset($desc)){!!$desc!!}@else Sigit Wahyudi TIK UBT Website @endif">
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="/images/logo.JPG">
        @include('layouts.head')

    </head>

    @yield('body')

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
      @include('layouts.right-sidebar')
    @include('layouts.footer')    
                </div> <!-- content -->
            </div>
            <!-- END wrapper -->
    @include('layouts.footer-script')    
    </body>
</html>