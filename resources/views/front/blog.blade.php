@extends('front.layout')

@section('content')

    
<div class="container">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                
                @if(Request::is('blog'))
                <h4 class="page-title">Blog Sigit Wahyudi</h4>
                @endif
    
                @if(Request::is('catatan'))
                <h4 class="page-title">Catatan Sigit</h4>
                @endif
                
            </div>
        </div>
    </div>
    <!-- end page title -->
    
    <div class="row">
        <form action="@if(Request::is('blog'))/blog @else/catatan @endif" method="get">
            <div class="input-group mb-2 mb-sm-3 mr-sm-2 bg-white">
                <input type="search" class="form-control" id="one-ecom-products-search" name="q" value="@if(isset($query)){{ $query }}@endif" placeholder="Cari apa, lalu tekan enter ...">
                <div class="input-group-append">
                    <span class="input-group-text bg-body border-0">
                        <i class="fa fa-search"></i>
                    </span>
                </div>
            </div>
        </form>
    </div>
    
    <div class="row">
        <div class="col-lg-12 col-xl-12">
            <div class="card-box">
                <div class="row">
                        @foreach ($posts as $item)
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body text-secondary">
                                    <a href="/{{$item->url_seo}}"><h5 class="card-title">{{ ucwords ( $item->title ) }}</h5></a>
                                    <p class="card-text">
                                        <p class="card-text">
                                            <small class="">terbit : {{ date('d F Y, H:i', strtotime($item->created)) }}</small>
                                        </p>
                                    </p>
                                </div>
                            </div> <!-- end card-box-->
                        </div> <!-- end col -->
                        @endforeach
                    </div> <!-- end row -->
            </div> <!-- end card-box -->
        </div> <!-- end col-->
    
    </div>
    
    {{ $posts->links() }}

</div>

        
@endsection