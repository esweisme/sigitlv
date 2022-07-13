@extends('layouts.master-layouts')

@section('content')

<div class="row">
    <div class="col-lg-12 col-xl-12 mt-2">
        <h4>Tag : {{ $tag->tag }}</h4>
        <div class="row">

                @foreach ($items as $item)
                {{-- <a href="/{{$item->url_seo}}"><h5>{{ ucwords ( $item->title ) }}</h5></a> --}}
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-secondary">
                            <a href="/{{$item->url_seo}}"><h5 class="card-title">{{ ucwords ( $item->title ) }}</h5></a>
                            <p class="card-text">
                                @if($item->modified) 
                                <p class="card-text">
                                    <small class="">terakhir diedit : {{ date('d F Y, H:i', strtotime($item->modified)) }}</small>
                                </p>
                                    
                                @else
                                <p class="card-text">
                                    <small class="">terbit : {{ date('d F Y, H:i', strtotime($item->created)) }}</small>
                                </p>
                                @endif
                            </p>
                        </div>
                    </div> <!-- end card-box-->
                </div> <!-- end col -->
                @endforeach
        </div>
    </div> <!-- end col-->

</div>

{{ $items->links() }}

        
@endsection

@section('script')

        <!-- Plugins js -->
        <script src="{{ URL::asset('assets/libs/morris-js/morris-js.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/raphael/raphael.min.js')}}"></script>

        <!-- Dashboard init-->
        <script src="{{ URL::asset('assets/js/pages/dashboard-4.init.js')}}"></script>

@endsection