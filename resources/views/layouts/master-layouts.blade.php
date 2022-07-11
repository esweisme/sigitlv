<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@if(isset($meta['title'])) {{$meta['title']}} @elseif (isset($item->title)) {{ $item->title }} | @if ($item->kategori_id == 1) Tulisan @else Catatan @endif Sigit Wahyudi @else Sigit Wahyudi TIK UBT @endif </title>
        <meta content="esweisme" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="@if(isset($meta['desc'])){{$meta['desc']}} @elseif(isset($item->description)) {{$item->description}} @else Website Sigit Wahyudi TIK UBT. Web programmer dan blogger asal kota tarakan kaltara, aka eswe esweisme @endif">

        <!-- App favicon -->
        <link rel="shortcut icon" href="/images/logo.JPG">

        @include('layouts.head')

    </head>

    @yield('body')

        <!-- Navigation Bar-->
        <header id="topnav">
      @include('layouts.topbar')
      @include('layouts.nav-horizontal')
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