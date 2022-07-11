@extends('layouts.master')

@section('css')
  <!-- Plugins css-->
  <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
 

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Tags</h4>
      <!-- Responsive modal -->
      <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal"><i class="far fa-plus-square"></i></button>
      
      @if (session('status'))
        <div class="alert alert-success mt-1">
            {{ session('status') }}
        </div>
    @endif

      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif

      <div class="table-responsive pt-3">
        <table class="table table-bordered">
          <thead>
            <tr>
                <th>no</th>
                <th>Tag</th>
                <th>Slug</th>
                <th>Aksi</th>

            </tr>
          </thead>

            @foreach ($tags as $tag)	
              <tr>
              <td>{{$tag->id}}</td>
              <td>{{$tag->tag}}</td>
              <td>{{$tag->slug}}</td>
              <td>
                  <Button type="button" class="btn btn-warning waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal-edit{{ $tag->id }}" value= "Edit"><i class="far fa-edit"></i></Button>
                  
                <form style="display: inline;" action="/admin/tag/destroy/{{$tag->id}}" method="post">@csrf
                    <button type="submit" class="btn btn-danger waves-effect waves-light" onClick="return confirm('Apakah anda yakin menghapus tag {{$tag->tag}}?')" value="Delete"><i class="far fa-trash-alt"></i></button>
                </form>
                
                </td>
                
                {{-- modal edit --}}
              <div id="con-close-modal-edit{{ $tag->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Tag</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                    <form action="/admin/tag/update/{{$tag->id}}" method="post">
                        @csrf
                        <div class="modal-body p-4">
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">Tag Name</label>
                                        <input type="text" class="form-control" id="field-1" placeholder="tag" name="tag" value="{{$tag->tag}}">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                            <button type="submit"  class="btn btn-info waves-effect waves-light">Save</button>
                        </div>
                    </form>  
                    </div>
                </div>
            </div><!-- /.modal edit -->
              
            @endforeach
          </tbody>
          
        </table>
      </div>
    </div>
  </div>
</div>


{{-- modal add --}}
<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Tag</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
        <form action="/admin/tag/store" method="post">
            @csrf
            <div class="modal-body p-4">
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="field-1" class="control-label">Tag Name</label>
                            <input type="text" class="form-control @error('tag') is-invalid @enderror" id="field-1" placeholder="tag" name="tag" value="{{ old('tag') }}">
                            @error('tag')<div class="alert alert-danger">{{ $message }}</div>@enderror
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                <button type="submit"  class="btn btn-info waves-effect waves-light">Save</button>
            </div>
        </form>  
        </div>
    </div>
</div><!-- /.modal -->

@endsection
@section('script')
        <!-- Dashboard init JS -->
        <script src="{{ URL::asset('assets/js/pages/dashboard-3.init.js')}}"></script>

@endsection