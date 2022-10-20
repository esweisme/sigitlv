@extends('layouts.master-layouts')

@section('content')

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">{{ ucwords ( $item->title ) }}</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="col-lg-12 col-xl-12">
            <div class="card-box">
                <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body text-secondary">
                                    {{-- <h5 class="card-title">{{ ucwords ( $item->title ) }}</h5> --}}
                                    <p class="card-text">{!! $item->content !!}</p>

                                    @if($item->modified) 
                                    <p class="card-text">
                                        <small class="">diedit : {{ date('d F Y, H:i', strtotime($item->modified)) }}</small>
                                    </p>
                                       
                                    @else
                                    <p class="card-text">
                                        <small class="">terbit : {{ date('d F Y, H:i', strtotime($item->created)) }}</small>
                                    </p>
                                    @endif
                                    Kategori : <a href="/category/{{ $item->kategori->slug }}">{{ $item->kategori->name }}</a> |
                                    tags : @foreach ($item->tags as $tag) <a href="/tag/{{$tag->slug}}">{{ $tag->tag  }}</a>, @endforeach
                                </div>
                            </div> <!-- end card-box-->
                        </div> <!-- end col -->
                    </div> <!-- end row -->
            </div> <!-- end card-box -->
        </div> <!-- end col-->

        
@endsection

@section('script')

        <!-- Plugins js -->
        <script src="{{ URL::asset('assets/libs/morris-js/morris-js.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/raphael/raphael.min.js')}}"></script>

        <!-- Dashboard init-->
        <script src="{{ URL::asset('assets/js/pages/dashboard-4.init.js')}}"></script>

@endsection


