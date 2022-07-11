@extends('layouts.master')

@section('css')
        <!-- Plugins css-->
        <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
 
<div class="row">

  <div class="col-lg-3 mt-3">
    <form action="/allblog" method="get">
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

  
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Post</h4>
        <a href="/admin/post/create" class="btn btn-primary waves-effect waves-light"><i class="far fa-plus-square"></i></a>
        @if(session()->has('status'))
        <div class="alert alert-success">{{ session()->get('status') }}</div>
        @endif
        <div class="table-responsive pt-3">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>id</th>
                <th>judul</th>
                <th>kategori</th>
                <th>tags</th>
                <th>aksi</th>
              </tr>
            </thead>
            
            <tbody>
              
              @foreach ($posts as $post)	
              <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->kategori->name}} </td>
                <td>
                  <ul>
                    @foreach($post->tags as $tag)
                      <li>{{$tag->tag}}</li>
                    @endforeach
                  </ul>
                </td>
                <td>
                  <a class="btn btn-warning waves-effect waves-light " href="/admin/post/edit/{{ $post->id}}"><i class="far fa-edit"></i></a>
                  <form style="display: inline;" action="/admin/deletepost/{{ $post->id}}" method="post">@csrf
                    <button type="submit" class="btn btn-danger waves-effect waves-light" onClick="return confirm('Apakah anda yakin menghapus post -> {{$post->title}}?')" value="Delete"><i class="far fa-trash-alt"></i></button>
                </form>
                </td>
              </tr>
              @endforeach
              
            </tbody>
          </table>
          {{ $posts->links() }}
        </div>
        
      </div>
    </div>
  </div>
</div>

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