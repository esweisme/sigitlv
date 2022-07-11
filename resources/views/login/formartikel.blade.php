@extends('login.login-template')

@section('title', 'bikin tulisan')

@section('css')
		<link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
@endsection

@section('container')

		<div class="d-flex flex-row flex-column-fluid container">
			<!--begin::Content Wrapper-->
			<div class="main d-flex flex-column flex-row-fluid">
				<div class="content flex-column-fluid" id="kt_content">
					<!--begin::Dashboard-->
					<!--begin::Row-->
					<div class="row">
						<div class="col-md-12">
							<!--begin::List Widget 10-->
							<div class="card card-custom card-border card-stretch">
								<!--begin::Header-->
								<div class="card-header border-0">
									<h3 class="card-title font-weight-bolder text-dark">Tambah Tulisan</h3>
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="card-body pt-0">
									<div class="card card-custom">
								 			
								 			@if (count($errors) > 0)
				                            <div class="alert alert-danger">
				                                <ul>
				                                    @foreach ($errors->all() as $error)
				                                        <li>{{ $error }}</li>
				                                    @endforeach
				                                </ul>
				                            </div>
				                            @endif
										 <!--begin::Form-->
										 <form method="post" action="/ngeblog">
										 @csrf
										  <div class="card-body">
										   <div class="form-group">
										    <label>Judul <span class="text-danger">*</span></label>
										    <input type="text" class="form-control"  placeholder="Judul" name="title" value="{{old('title')}}"/>
										   </div>
										   <div class="form-group">
										    <label for="exampleSelect1">Kategori<span class="text-danger">*</span></label>
										    <select class="form-control" id="exampleSelect1" name="category">
										     	@foreach ($kat as $item)
							                      <option value="{{$item->id}}" {{ old('category') == $item->id ? 'selected' : '' }}>{{$item->name}}</option>
							                    @endforeach
										    </select>
										   </div>
										   
										   <div class="form-group mb-1">
										    <label for="exampleTextarea">Konten <span class="text-danger">*</span></label>
										    <textarea class="summernote" id="kt_summernote_1" name="content">{{old('content')}}</textarea>
										   </div>
										  </div>
										  <div class="card-footer">
										   <input type="submit" class="btn btn-primary mr-2" value="simpan"></button>
										   <button type="reset" class="btn btn-secondary">Cancel</button>
										  </div>
										 </form>
										 <!--end::Form-->

									</div>
								</div>
								<!--end: Card Body-->
							</div>
							<!--end: Card-->
							<!--end: List Widget 10-->
						</div>
						
					</div>
					<!--end::Row-->
					<!--end::Dashboard-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Content Wrapper-->
		</div>

@endsection

@section('js')
	
		
		<!--begin::Page Scripts(used by this page)-->
		<script src="assets/js/pages/crud/forms/editors/summernote.js"></script>
		<!--end::Page Scripts-->


@endsection