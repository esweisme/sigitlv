@extends('layouts.master')


@section('css')

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  
<script>tinymce.init({
  selector: 'textarea#summernote-editor', // Replace this CSS selector to match the placeholder element for TinyMCE
  plugins: 'code table lists image',
  toolbar: 'undo redo | formatselect| bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table',

  image_title: true,
  automatic_uploads: true,
  images_upload_url: '/uploadimgtiny',
  file_picker_types: 'image',
  file_picker_callback: function(cb, value, meta) {
      var input = document.createElement('input');
      input.setAttribute('type', 'file');
      input.setAttribute('accept', 'image/*');
      input.onchange = function() {
          var file = this.files[0];

          var reader = new FileReader();
          reader.readAsDataURL(file);
          reader.onload = function () {
              var id = 'blobid' + (new Date()).getTime();
              var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
              var base64 = reader.result.split(',')[1];
              var blobInfo = blobCache.create(id, file, base64);
              blobCache.add(blobInfo);
              cb(blobInfo.blobUri(), { title: file.name });
          };
      };
      input.click();
  }

});</script>

<!-- Plugins css -->
<link href="{{ URL::asset('assets/libs/jquery-nice-select/jquery-nice-select.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/libs/switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/libs/multiselect/multiselect.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/libs/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css')}}" rel="stylesheet" type="text/css" />


@endsection

@section('content')
 
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Post Form</h4>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form class="forms-sample" method="post" action="/admin/post/store">
          @CSRF
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{old('Description')}}">
          </div>
          <div class="form-group">
          <label for="category">Category</label>
          <select class="form-control" id="category" name="category">
            <option selected disabled>Pilih category</option>
          @foreach ($kat as $item)
            <option value="{{$item->id}}" {{ old('category') == $item->id ? 'selected' : '' }}>{{$item->name}}</option>
          @endforeach
          </select>
        </div>
        <div class="form-group mb-3">
          <label for="tags">Tags</label>
          <select class="form-control" data-toggle="select2" id="tags" multiple name="tags[]">
            <option selected disabled>Pilih Tag</option>
            @foreach ($tags as $tag)
                  <option value="{{$tag->id}}" {{ old('tags') == $tag->id ? 'selected' : '' }}>{{$tag->tag}}</option>
              @endforeach
          </select>
        </div>
          <div class="form-group">
            <label for="summernote-editor">Content</label>
            <textarea id="summernote-editor" class="form-control" name="content" style="min-height:500px;">{{old('content')}}</textarea>
          </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
</div>

@endsection
@section('script')

        <script src="{{ URL::asset('assets/libs/jquery-nice-select/jquery-nice-select.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/switchery/switchery.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/multiselect/multiselect.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/select2/select2.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/jquery-mockjax/jquery-mockjax.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/autocomplete/autocomplete.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>

        <!-- Init js-->
        <script src="{{ URL::asset('assets/js/pages/form-advanced.init.js')}}"></script>

        <!-- Dashboard init JS -->
        <script src="{{ URL::asset('assets/js/pages/dashboard-3.init.js')}}"></script>

        <!-- Summernote js -->
        {{-- <script src="{{ URL::asset('assets/libs/summernote/summernote.min.js')}}"></script> --}}

        <!-- Init js -->
        {{-- <script src="{{ URL::asset('assets/js/pages/form-summernote.init.js')}}"></script> --}}

@endsection