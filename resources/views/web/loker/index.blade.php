@extends('template_front.layout')

@section('content')
@section('title', 'Loker')   
<section class="uni-banner">
   <div class="container">
      <div class="uni-banner-text-area">
         <h1>Loker</h1>
         <ul>
            <li><a href="/">Home</a></li>
            <li>Loker</li>
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
                        <a href="/loker/perusahaan-satu"><img src="{{ asset('') }}front/images/loker/job.jpg" alt="image"></a>
                     </div>
                     <div class="blog-card-text-area">
                        <div class="blog-date">
                           <ul>
                              <li><i class="far fa-calendar-alt"></i> 25/10/2023</li>
                              <li><i class="fas fa-user"></i> By <a href="#">Admin</a></li>
                              <li><i class="far fa-folder"></i> Terkini</li>
                           </ul>
                        </div>
                        <h4><a href="/loker/perusahaan-satu">PERUSAHAAN SATU</a></h4>
                        <p>Lowongan Kerja Terbaru dari Perusahaan Yang Bekerjasama dengan Dinas Kebudayaan Pariwisata Pemuda Dan Olah Raga Kabupaten Subang.</p>
                        <a class="read-more-btn" href="/loker/perusahaan-satu">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="blog-card mb-2">
                     <div class="blog-card-img">
                        <a href="/loker/perusahaan-dua"><img src="{{ asset('') }}front/images/loker/job.jpg" alt="image"></a>
                     </div>
                     <div class="blog-card-text-area">
                        <div class="blog-date">
                           <ul>
                              <li><i class="far fa-calendar-alt"></i> 25/10/2023</li>
                              <li><i class="fas fa-user"></i> By <a href="#">Admin</a></li>
                              <li><i class="far fa-folder"></i> Terkini</li>
                           </ul>
                        </div>
                        <h4><a href="/loker/perusahaan-dua">PERUSAHAAN DUA</a></h4>
                        <p>Lowongan Kerja Terbaru dari Perusahaan Yang Bekerjasama dengan Dinas Kebudayaan Pariwisata Pemuda Dan Olah Raga Kabupaten Subang.</p>
                        <a class="read-more-btn" href="/loker/perusahaan-dua">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="blog-card mb-2">
                     <div class="blog-card-img">
                        <a href="/loker/perusahaan-tiga"><img src="{{ asset('') }}front/images/loker/job.jpg" alt="image"></a>
                     </div>
                     <div class="blog-card-text-area">
                        <div class="blog-date">
                           <ul>
                              <li><i class="far fa-calendar-alt"></i> 25/10/2023</li>
                              <li><i class="fas fa-user"></i> By <a href="#">Admin</a></li>
                              <li><i class="far fa-folder"></i> Terkini</li>
                           </ul>
                        </div>
                        <h4><a href="/loker/perusahaan-tiga">PERUSAHAAN TIGA</a></h4>
                        <p>Lowongan Kerja Terbaru dari Perusahaan Yang Bekerjasama dengan Dinas Kebudayaan Pariwisata Pemuda Dan Olah Raga Kabupaten Subang.</p>
                        <a class="read-more-btn" href="/loker/perusahaan-tiga">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="blog-card mb-2">
                     <div class="blog-card-img">
                        <a href="/loker/perusahaan-empat"><img src="{{ asset('') }}front/images/loker/job.jpg" alt="image"></a>
                     </div>
                     <div class="blog-card-text-area">
                        <div class="blog-date">
                           <ul>
                              <li><i class="far fa-calendar-alt"></i> 25/10/2023</li>
                              <li><i class="fas fa-user"></i> By <a href="#">Admin</a></li>
                              <li><i class="far fa-folder"></i> Terkini</li>
                           </ul>
                        </div>
                        <h4><a href="/loker/perusahaan-empat">PERUSAHAAN EMPAT</a></h4>
                        <p>Lowongan Kerja Terbaru dari Perusahaan Yang Bekerjasama dengan Dinas Kebudayaan Pariwisata Pemuda Dan Olah Raga Kabupaten Subang.</p>
                        <a class="read-more-btn" href="/loker/perusahaan-empat">Read More</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="paginations mt-30">
               <ul>
                  <li><a class="active" href="/loker?page=1">1</a></li>
                  <li><a href="/loker?page=2">2</a></li>
                  <li><a href="/loker?page=3"><i class="fas fa-chevron-right"></i></a></li>
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
                     <a href="/loker/perusahaan-satu"><img src="{{ asset('') }}front/images/loker/job.jpg" alt="image"></a>
                     <h5><a href="/loker/perusahaan-satu">PERUSAHAAN SATU</a></h5>
                     <p>25/10/2023</p>
                  </div>
                  <div class="recent-news-card">
                     <a href="/loker/perusahaan-dua"><img src="{{ asset('') }}front/images/loker/job.jpg" alt="image"></a>
                     <h5><a href="/loker/perusahaan-dua">PERUSAHAAN DUA</a></h5>
                     <p>25/10/2023</p>
                  </div>
                  <div class="recent-news-card">
                     <a href="/loker/perusahaan-tiga"><img src="{{ asset('') }}front/images/loker/job.jpg" alt="image"></a>
                     <h5><a href="/loker/perusahaan-tiga">PERUSAHAAN TIGA</a></h5>
                     <p>25/10/2023</p>
                  </div>
               </div>
               <div class="sidebar-card sidebar-tag mt-30">
                  <h3>Tags</h3>
                  <ul>
                     <li><a href="/tag/loker">Loker</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection