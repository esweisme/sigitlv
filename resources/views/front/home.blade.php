@extends('layouts.master-layouts')

@section('body')
    <body class="gradient-topbar topbar-dark boxed-layout center-menu ">
@endsection

@section('content')

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Home</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

<div class="row">

    <div class="col-lg-12 col-xl-12">
        <div class="card-box text-center">
            <img src="images/sigit2.jpg" class="rounded-circle avatar-lg img-thumbnail"
                alt="profile-image">
    
            <h4 class="mb-0">Sigit Wahyudi</h4>
            <p class="text-muted">web programmer</p>
    
            <div class="text-left mt-3">
                <h4 class="font-13 text-uppercase">&#128516;Hi,</h4>
                <p class="text-muted font-13 mb-3">
                    Otak saya selalu berputar ketika menemukan ide atau hal baru, daripada saya hanya memikirkannya, jauh lebih baik untuk mencoba mewujudkan. Salah satunya adalah web ini. Selamat datang. <br><br>Tulisan saya di sini belum sebaik tulisan profesional. Namun, jika menunggu sempurna saya tidak akan pernah berbagi. Saya memilih memulai. Saya yakin tulisan dan apa saya bagikan akan di lihat oleh orang dan pada saat yang tepat. Di sini kamu bisa membaca blog atau melihat project saya kedepan. <br><br> Tujuan membuat web ini salah tiganya untuk terus belajar membangun aplikasi, membagikan pengalaman serta catatan kerjaan juga mungkin mengutarakan pikiran.
                </p>
            </div>
        </div> <!-- end card-box -->
    
    </div> <!-- end col-->

</div>

        
@endsection

@section('script')

        <!-- Plugins js -->
        <script src="{{ URL::asset('assets/libs/morris-js/morris-js.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/raphael/raphael.min.js')}}"></script>

        <!-- Dashboard init-->
        <script src="{{ URL::asset('assets/js/pages/dashboard-4.init.js')}}"></script>

@endsection