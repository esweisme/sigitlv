<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@if(isset($meta['title'])) {{$meta['title']}} @elseif (isset($item->title)) {{ $item->title }} | @if ($item->kategori_id == 1) Tulisan @else Catatan @endif Sigit Wahyudi @else Sigit Wahyudi TIK UBT @endif </title>
        <meta content="esweisme" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="@if(isset($meta['desc'])){{$meta['desc']}} @elseif(isset($item->description)) {{$item->description}} @else Website Sigit Wahyudi TIK UBT. Web programmer dan blogger asal kota tarakan kaltara, aka eswe esweisme @endif">
        <meta name="keywords" content='web,javascript,php,mysql,programmer,kaltara,tarakan,blogger,dengan,aplikasi,sigit,sigit wahyudi,TIK, UBT'>

        <!-- Google / Search Engine Tags -->
        <meta itemprop="name" content="@if(isset($meta['title'])) {{$meta['title']}} @elseif (isset($item->title)) {{ $item->title }} | @if ($item->kategori_id == 1) Tulisan @else Catatan @endif Sigit Wahyudi @else Sigit Wahyudi TIK UBT @endif">
        <meta itemprop="description" content="@if(isset($meta['desc'])){{$meta['desc']}} @elseif(isset($item->description)) {{$item->description}} @else Website Sigit Wahyudi TIK UBT. Web programmer dan blogger asal kota tarakan kaltara, aka eswe esweisme @endif">
        <meta itemprop="image" content="{{ URL::to('/') }}/images/logo.JPG">

        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="{{ URL::to('/') }}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="@if(isset($meta['title'])) {{$meta['title']}} @elseif (isset($item->title)) {{ $item->title }} | @if ($item->kategori_id == 1) Tulisan @else Catatan @endif Sigit Wahyudi @else Sigit Wahyudi TIK UBT @endif">
        <meta property="og:description" content="@if(isset($meta['desc'])){{$meta['desc']}} @elseif(isset($item->description)) {{$item->description}} @else Website Sigit Wahyudi TIK UBT. Web programmer dan blogger asal kota tarakan kaltara, aka eswe esweisme @endif">
        <meta property="og:image" content="{{ URL::to('/') }}/images/logo.JPG">

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_small_image">
        <meta name="twitter:title" content="@if(isset($meta['title'])) {{$meta['title']}} @elseif (isset($item->title)) {{ $item->title }} | @if ($item->kategori_id == 1) Tulisan @else Catatan @endif Sigit Wahyudi @else Sigit Wahyudi TIK UBT @endif">
        <meta name="twitter:description" content="@if(isset($meta['desc'])){{$meta['desc']}} @elseif(isset($item->description)) {{$item->description}} @else Website Sigit Wahyudi TIK UBT. Web programmer dan blogger asal kota tarakan kaltara, aka eswe esweisme @endif">
        <meta name="twitter:image" content="{{ URL::to('/') }}/images/logo.JPG">

        <!-- App favicon -->
        <link rel="shortcut icon" href="/images/logo.JPG">
        
        <!-- App css -->
        <link href="{{ URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

        @yield('css')

    </head>

    <body class="gradient-topbar topbar-dark center-menu ">

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