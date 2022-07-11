@extends('layouts.master')

@section('css')
        <!-- Plugins css-->
        <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Dashboard</h4>
        </div>
    </div>
</div>     
<!-- end page title --> 


<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="card-box">
            <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
            <h4 class="mt-0 font-16">Total Post</h4>
            <h2 class="text-primary my-3 text-center"><span data-plugin="counterup">{{$post->count()}}</span></h2>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card-box">
            <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
            <h4 class="mt-0 font-16">Total Pesan</h4>
            <h2 class="text-primary my-3 text-center"><span data-plugin="counterup">{{$pesan->count()}}</span></h2>
        </div>
    </div>
<!-- end row -->                       

@endsection

@section('script')

        <!-- Chart JS -->
        <script src="{{ URL::asset('assets/libs/chart-js/chart-js.min.js')}}"></script>

        <script src="{{ URL::asset('assets/libs/moment/moment.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/jquery-scrollto/jquery-scrollto.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

        <!-- Chat app -->
        <script src="{{ URL::asset('assets/js/pages/jquery.chat.js')}}"></script>

        <!-- Todo app -->
        <script src="{{ URL::asset('assets/js/pages/jquery.todo.js')}}"></script>

        <!-- Dashboard init JS -->
        <script src="{{ URL::asset('assets/js/pages/dashboard-3.init.js')}}"></script>

@endsection