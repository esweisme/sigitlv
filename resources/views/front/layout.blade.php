<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cherry+Swash&family=Quattrocento+Sans&display=swap" rel="stylesheet">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/main.css">


    <meta content="esweisme" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>@if(isset($meta['title'])) {{$meta['title']}} @elseif (isset($item->title)) {{ $item->title }} | @if ($item->kategori_id == 1) Tulisan @else Catatan @endif Sigit Wahyudi @else Sigit Wahyudi TIK UBT @endif </title>

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

    
</head>
<body>
    @yield('content')


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    
</body>
</html>