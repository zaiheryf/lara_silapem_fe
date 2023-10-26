@extends('template_front.layout')

@section('content')
@section('title', 'Wirausaha Muda')   
<section class="uni-banner">
   <div class="container">
      <div class="uni-banner-text-area">
         <h1>Wirausaha Muda</h1>
         <ul>
            <li><a href="/">Home</a></li>
            <li>Wirausaha Muda</li>
         </ul>
      </div>
   </div>
</section>
@include('template_front.support')
<section class="about pb-100">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="why-we-text-area about-text-area-2 ">
               <div class="why-we-text-list">
                  <h4 >Deskripsi :</h4>
                  <div class="d-flex justify-content-between">
                  <h6>Acara Seleksi Wirausaha Muda Suban 2023 </h6>
                  <a href="#" class="default-button mt-0 px-5">Join</a>
                  </div>
                  <h4 class="mt-4 ms-4">Kategori:</h4>
                  <h6 class="ms-4">Seleksi</h6>

                  <h4 class="mt-4 ms-4">Persyaratan  :</h4>
                  <ul class="ms-4">
                     <li><h6>Mengirimkan Berkas CV</h6></li>
                  </ul>

                  <h4 class="mt-4 ms-4">Alamat :</h4>
                  <h6 class="ms-4">Jl. Jend. Achmad Yani No.11, Pasirkareumbi, Kec. Subang, Kabupaten Subang, Jawa Barat 41211</h6>
                  
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection