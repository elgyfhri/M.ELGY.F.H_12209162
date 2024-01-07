@extends('layouts.template')

@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
          <main class="content px-3 py-2">
               @if (Session::get('cantAccess'))
               <div class="alert alert-danger">{{ Session::get('cantAccess') }}</div>
           @endif
               <div class="container-fluid">
               <div class="mb-3">
                    <h4>Admin Dashboard</h4>
               </div>
               <div class="row">
                    <div class="col-12 col-md-6 d-flex">
                         <div class="card flex-fill border-0 illustration">
                              <div class="card-body p-0 d-flex flex-fill">
                                   <div class="row g-0 w-100">
                                   <div class="col-6">
                                        <div class="p-3 m-1">
                                             <h4>Welcome Back, Admin</h4>
                                             <p class="mb-0">Admin Dashboard, CodzSword</p>
                                        </div>
                                   </div>
                                   <div class="col-6 align-self-end text-end">
                                        <img src="image/customer-support.jpg" class="img-fluid illustration-img"
                                             alt="">
                                   </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="col-12 col-md-6 d-flex">
                         <div class="card flex-fill border-0">
                              <div class="card-body py-4">
                                   <div class="d-flex align-items-start">
                                   <div class="flex-grow-1">
                                        <h4 class="mb-2">
                                             Hello, Administrator!
                                        </h4>
                                        <p class="mb-2">
                                             Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt corporis ipsa voluptates magni aspernatur cumque dolorum quaerat. Cumque praesentium ad iusto hic fuga. Quaerat est dolores impedit inventore voluptas earum facilis, tempore odit minus aliquid voluptatem ut molestias dicta modi cumque delectus totam distinctio unde, in maxime beatae doloremque mollitia.
                                        </p>
                                   </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
               <!-- Table Element -->
               <div class="card border-0">
                    <div class="card-header">
                         <h5 class="card-title">
                              Statistik
                         </h5>
                         <h6 class="card-subtitle text-muted">
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ducimus,
                              necessitatibus reprehenderit itaque!
                         </h6>
                    </div>
                              
                    <div class="container px-4">
                         <div class="row g-3 my-2 mb-4">
                              <div class="col-md-3">
                                   <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                   <div>
                                        <h3 class="fs-2">6</h3>
                                        <p class="fs-5">Peserta Didik</p>
                                   </div>
                                   <i class="ri-user-fill fs-1"></i>
                                   </div>
                              </div>

                              <div class="col-md-3">
                                   <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                   <div>
                                        <h3 class="fs-2">1</h3>
                                        <p class="fs-5">Administrator</p>
                                   </div>
                                   <i class="ri-user-fill fs-1"></i>
                                   </div>
                              </div>

                              <div class="col-md-3">
                                   <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                   <div>
                                        <h3 class="fs-2">5</h3>
                                        <p class="fs-5">Pembimbing Siswa</p>
                                   </div>
                                   <i class="ri-user-fill fs-1"></i>
                                   </div>
                              </div>

                              <div class="col-md-3">
                                   <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                   <div>
                                        <h3 class="fs-2">12</h3>
                                        <p class="fs-5">Rombel</p>
                                   </div>
                                   <i class="ri-bookmark-fill fs-1"></i>
                                   </div>
                              </div>

                              <div class="col-md-3">
                                   <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                   <div>
                                        <h3 class="fs-2">5</h3>
                                        <p class="fs-5">Rayon</p>
                                   </div>
                                   <i class="ri-bookmark-fill fs-1"></i>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
               </div>
          </main>
          <a href="#" class="theme-toggle">
               <i class="fa-regular fa-moon"></i>
               <i class="fa-regular fa-sun"></i>
          </a>
          <footer class="footer">
               <div class="container-fluid">
               <div class="row text-muted">
                    <div class="col-6 text-start">
                         <p class="mb-5">
                              <a href="#" class="text-muted">
                                   <strong>Rekam Keterlambatan</strong>
                              </a>
                         </p>
                    </div>
               </div>
               </div>
          </footer>
        
      <script src="{{ asset('js/script.js') }}"></script>

@endsection