@extends('template_front.layout')

@section('content')
@section('title', 'Berita')   
<section class="uni-banner">
   <div class="container">
      <div class="uni-banner-text-area">
         <h1>Berita</h1>
         <ul>
            <li><a href="/">Home</a></li>
            <li>Berita</li>
         </ul>
      </div>
   </div>
</section>
<section class="blog-details ptb-100">
   <div class="container">
      <div class="row">
         <div class="col-lg-8">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="blog-card mb-2">
                     <div class="blog-card-img">
                        <a href="/berita/acara-gathering-wirausaha-muda"><img src="{{ asset('') }}front/images/berita/berita.jpg" alt="image"></a>
                     </div>
                     <div class="blog-card-text-area">
                        <div class="blog-date">
                           <ul>
                              <li><i class="far fa-calendar-alt"></i> 25/10/2023</li>
                              <li><i class="fas fa-user"></i> By <a href="#">Admin</a></li>
                              <li><i class="far fa-folder"></i> Terkini</li>
                           </ul>
                        </div>
                        <h4><a href="/berita/acara-gathering-wirausaha-muda">ACARA GATHERING WIRAUSAHA MUDA</a></h4>
                        <p>Dinas Kebudayaan Pariwisata Pemuda Dan Olah Raga Kabupaten Subang.</p>
                        <a class="read-more-btn" href="/berita/acara-gathering-wirausaha-muda">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="blog-card mb-2">
                     <div class="blog-card-img">
                        <a href="/berita/pelaksanaan-gather-okp-2023"><img src="{{ asset('') }}front/images/berita/berita.jpg" alt="image"></a>
                     </div>
                     <div class="blog-card-text-area">
                        <div class="blog-date">
                           <ul>
                              <li><i class="far fa-calendar-alt"></i> 25/10/2023</li>
                              <li><i class="fas fa-user"></i> By <a href="#">Admin</a></li>
                              <li><i class="far fa-folder"></i> Terkini</li>
                           </ul>
                        </div>
                        <h4><a href="/berita/pelaksanaan-gather-okp-2023">PELAKSANAAN GATHER OKP 2023</a></h4>
                        <p>Dinas Kebudayaan Pariwisata Pemuda Dan Olah Raga Kabupaten Subang.</p>
                        <a class="read-more-btn" href="/berita/pelaksanaan-gather-okp-2023">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="blog-card mb-2">
                     <div class="blog-card-img">
                        <a href="/berita/bazar-umkm-subang-2023"><img src="{{ asset('') }}front/images/berita/berita.jpg" alt="image"></a>
                     </div>
                     <div class="blog-card-text-area">
                        <div class="blog-date">
                           <ul>
                              <li><i class="far fa-calendar-alt"></i> 25/10/2023</li>
                              <li><i class="fas fa-user"></i> By <a href="#">Admin</a></li>
                              <li><i class="far fa-folder"></i> Terkini</li>
                           </ul>
                        </div>
                        <h4><a href="/berita/bazar-umkm-subang-2023">BAZAR UMKM SUBANG 2023</a></h4>
                        <p>Dinas Kebudayaan Pariwisata Pemuda Dan Olah Raga Kabupaten Subang.</p>
                        <a class="read-more-btn" href="/berita/bazar-umkm-subang-2023">Read More</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="paginations mt-30">
               <ul>
                  <li><a class="active" href="/berita?page=1">1</a></li>
                  <li><a href="/berita?page=2">2</a></li>
                  <li><a href="/berita?page=3"><i class="fas fa-chevron-right"></i></a></li>
               </ul>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="sidebar-area pl-20 pt-30">
               <div class="sidebar-card search-box">
                  <form>
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Here.." required="">
                        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                     </div>
                  </form>
               </div>
               <div class="sidebar-card sidebar-category mt-30">
                  <h3>Categories</h3>
                  <ul>
                     <li><a href="#"><i class="fas fa-angle-right"></i> Terkini</a></li>
                  </ul>
               </div>
               <div class="sidebar-card recent-news mt-30">
                  <h3>Popular Posts</h3>
                  <div class="recent-news-card">
                     <a href="/berita/acara-gathering-wirausaha-muda"><img src="{{ asset('') }}front/images/berita/berita.jpg" alt="image"></a>
                     <h5><a href="/berita/acara-gathering-wirausaha-muda">ACARA GATHERING WIRAUSAHA MUDA</a></h5>
                     <p>25/10/2023</p>
                  </div>
                  <div class="recent-news-card">
                     <a href="/berita/pelaksanaan-gather-okp-2023"><img src="{{ asset('') }}front/images/berita/berita.jpg" alt="image"></a>
                     <h5><a href="/berita/pelaksanaan-gather-okp-2023">PELAKSANAAN GATHER OKP 2023</a></h5>
                     <p>25/10/2023</p>
                  </div>
                  <div class="recent-news-card">
                     <a href="/berita/bazar-umkm-subang-2023"><img src="{{ asset('') }}front/images/berita/berita.jpg" alt="image"></a>
                     <h5><a href="/berita/bazar-umkm-subang-2023">BAZAR UMKM SUBANG 2023</a></h5>
                     <p>25/10/2023</p>
                  </div>
               </div>
               <div class="sidebar-card sidebar-tag mt-30">
                  <h3>Tags</h3>
                  <ul>
                     <li><a href="/tag/berita">Berita</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection