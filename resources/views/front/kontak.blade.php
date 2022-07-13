@extends('layouts.master-layouts')
@section('content')

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    
                    <h4 class="page-title">Hubungi Sigit</h4>
                    
                </div>
            </div>
        </div>
        <!-- end page title -->


<div class="row">
    <div class="col-lg-12 col-xl-12">
        <div class="card-box">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                <p class="card-text">untuk menghubungi saya, kamu bisa melalui sosial media saya pada tautan dibawah halaman ini</p><br>
                
                <p class="card-text">pilihan lainnya kamu bisa email saya (terdapat link dibagian bawah web ini) Atau pada isian di bawah kamu bisa mengirimkan kepada saya pesan, masukan atau pertanyaan. Silahkan tinggalkan kontak yang dapat saya hubungi</p>
        
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        Pesanmu sudah saya terima. segera saya akan balas. Trims :)
                    </div>
                @endif
              
                        <form class="kontak" method="post" action="/kontak" >
                            @csrf
                            <div class="form-group mb-12">
                                <label for="simpleinput">Nama</label>
                                <input type="text" id="simpleinput" class="form-control" name="nama" required>
                            </div>
                            <div class="form-group mb-12">
                                <label for="simpleinput">Email atau No HP</label>
                                <input type="text" id="simpleinput" class="form-control" name="alamat" required>
                            </div>
                            <div class="form-group mb-12">
                                <label for="example-textarea">Pesan Untuk saya</label>
                                <textarea class="form-control" id="example-textarea" rows="5" name="pesan" required></textarea>
                            </div>
                            <div class="form-group mb-0 justify-content-end row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-info waves-effect waves-light">Kirim Pesan</button>
                                </div>
                            </div>
                        </form>

                </div>
                </div> <!-- end row -->
                
        </div> <!-- end card-box -->
        <div class="text-center">

            <ul class="social-list list-inline mt-3 mb-0">
                <li class="list-inline-item">
                    <a href="https://facebook.com/sigitpersonal" class="social-list-item border-primary text-primary"><i
                            class="mdi mdi-facebook"></i></a>
                </li>
                <li class="list-inline-item">
                    <a href="https://twitter.com/esweisme" class="social-list-item border-info text-info"><i
                            class="mdi mdi-twitter"></i></a>
                </li>
                <li class="list-inline-item">
                    <a href="https://instagram.com/sigitwahyd" class="social-list-item border-danger text-danger"><i
                            class="mdi mdi-instagram"></i></a>
                </li>
            </ul>

        </div>
    </div> <!-- end col-->

</div>


@endsection

@section('script')

        <!-- Plugins js -->
        <script src="{{ URL::asset('assets/libs/morris-js/morris-js.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/raphael/raphael.min.js')}}"></script>

        <!-- Dashboard init-->
        <script src="{{ URL::asset('assets/js/pages/dashboard-4.init.js')}}"></script>

@endsection