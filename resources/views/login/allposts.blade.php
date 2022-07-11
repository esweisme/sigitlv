@extends('login.login-template')

@section('title', 'Semua Tulisan')

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
                  <h3 class="card-title font-weight-bolder text-dark">Daftar Tulisan</h3>
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div class="card-body pt-0">
                  
                 @if(session()->has('status'))
                    <div class="alert alert-success">{{ session()->get('status') }}</div>
                  @endif
                  
                    <table class="table .table-striped">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            judul
                          </th>
                          
                          <th>
                            kategori
                          </th>
                          <th>
                            aksi
                          </th>
                          
                        </tr>
                      </thead>

                      <tbody>
                            <?php $no = 1; ?>
                            @foreach ($post as $item) 
                             <tr>
                               <td>
                                 {{ $no}}
                               </td>
                              <td>
                                 {{$item->title}}
                              </td>
                               <td>
                                 {{$item->kategori->name}}
                               </td>
                              
                            
                            <td>
                               <a href="{{url('/')}}/admin/editpost/{{ $item->id}}">edit </a> | <a href="{{url('/')}}/admin/deletepost/{{ $item->id}}">delete</a>
                            </td>
                            
                            
                          </tr>
                          <?php $no++; ?>
                       @endforeach
                        
                      </tbody>
                    </table>

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
    <!--begin::Page Vendors(used by this page)-->
    <script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="assets/js/pages/widgets.js"></script>
    <!--end::Page Scripts-->

@endsection