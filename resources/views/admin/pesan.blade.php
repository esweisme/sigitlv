@extends('layouts.master')

@section('css')
  <!-- Plugins css-->
  <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
 

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Pesan Masuk</h4>
      
      <div class="table-responsive pt-3">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Number</th>
              <th>Sender</th>
              <th>Address</th>
              <th>Pesan</th>
              <th>Tanggal</th>
            </tr>
          </thead>

          <tbody> 
            <?php $no = 1; ?>
            @foreach ($pesan as $item)	
              <tr>
              <td>{{$no}}</td>
              <td>{{$item->pengirim}}</td>
              <td>{{$item->alamat}}</td>
              <td>{{$item->pesan}}</td>
              <td>{{$item->tanggal}}</td></tr>
              <?php $no++; ?>
            @endforeach
          </tbody>
          
        </table>
      </div>
    </div>
  </div>
</div>

@endsection
@section('script')
        <!-- Dashboard init JS -->
        <script src="{{ URL::asset('assets/js/pages/dashboard-3.init.js')}}"></script>

@endsection