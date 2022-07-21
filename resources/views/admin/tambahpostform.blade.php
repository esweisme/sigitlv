@extends('layouts.master')


@section('css')

<script src="https://cdn.tiny.cloud/1/rzu6cols2smrsme52bpe6c544244vyrd0z2gsnuxv6x2x5zy/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  
<script>
  tinymce.init({
    selector: 'textarea#summernote-editor', // Replace this CSS selector to match the placeholder element for TinyMCE
    menubar: 'edit insert format',
    plugins: 'code table lists image link codesample',
    toolbar: 'undo redo | formatselect| bold underline italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code codesample | table | link',

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

  });
</script>


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

@endsection