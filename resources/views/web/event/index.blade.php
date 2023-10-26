@extends('template_front.layout')

@section('content')
@section('title', 'Event')   
<section class="uni-banner">
   <div class="container">
      <div class="uni-banner-text-area">
         <h1>Event</h1>
         <ul>
            <li><a href="/">Home</a></li>
            <li>Event</li>
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
                        <a href="/event/seleksi-wirausaha-muda-2023"><img src="{{ asset('') }}front/images/events/event1.jpg" alt="image"></a>
                     </div>
                     <div class="blog-card-text-area">
                        <div class="blog-date">
                           <ul>
                              <li><i class="far fa-calendar-alt"></i> 25/10/2023</li>
                              <li><i class="fas fa-user"></i> By <a href="#">Admin</a></li>
                              <li><i class="far fa-folder"></i> Terkini</li>
                           </ul>
                        </div>
                        <h4><a href="/event/seleksi-wirausaha-muda-2023">SELEKSI WIRAUSAHA MUDA 2023</a></h4>
                        <p>Dinas Kebudayaan Pariwisata Pemuda Dan Olah Raga Kabupaten Subang.</p>
                        <a class="read-more-btn" href="/event/seleksi-wirausaha-muda-2023">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="blog-card mb-2">
                     <div class="blog-card-img">
                        <a href="/event/seleksi-pemuda-pelopor-2023"><img src="{{ asset('') }}front/images/events/event1.jpg" alt="image"></a>
                     </div>
                     <div class="blog-card-text-area">
                        <div class="blog-date">
                           <ul>
                              <li><i class="far fa-calendar-alt"></i> 25/10/2023</li>
                              <li><i class="fas fa-user"></i> By <a href="#">Admin</a></li>
                              <li><i class="far fa-folder"></i> Terkini</li>
                           </ul>
                        </div>
                        <h4><a href="/event/seleksi-pemuda-pelopor-2023">SELEKSI PEMUDA PELOPOR 2023</a></h4>
                        <p>Dinas Kebudayaan Pariwisata Pemuda Dan Olah Raga Kabupaten Subang.</p>
                        <a class="read-more-btn" href="/event/seleksi-pemuda-pelopor-2023">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="blog-card mb-2">
                     <div class="blog-card-img">
                        <a href="/event/webinar-okp-2023"><img src="{{ asset('') }}front/images/events/event1.jpg" alt="image"></a>
                     </div>
                     <div class="blog-card-text-area">
                        <div class="blog-date">
                           <ul>
                              <li><i class="far fa-calendar-alt"></i> 25/10/2023</li>
                              <li><i class="fas fa-user"></i> By <a href="#">Admin</a></li>
                              <li><i class="far fa-folder"></i> Terkini</li>
                           </ul>
                        </div>
                        <h4><a href="/event/webinar-okp-2023">WEBINAR OKP 2023</a></h4>
                        <p>Dinas Kebudayaan Pariwisata Pemuda Dan Olah Raga Kabupaten Subang.</p>
                        <a class="read-more-btn" href="/event/webinar-okp-2023">Read More</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="paginations mt-30">
               <ul>
                  <li><a class="active" href="/event?page=1">1</a></li>
                  <li><a href="/event?page=2">2</a></li>
                  <li><a href="/event?page=3"><i class="fas fa-chevron-right"></i></a></li>
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
                     <a href="/event/seleksi-wirausaha-muda-2023"><img src="{{ asset('') }}front/images/events/event1.jpg" alt="image"></a>
                     <h5><a href="/event/seleksi-wirausaha-muda-2023">SELEKSI WIRAUSAHA MUDA 2023</a></h5>
                     <p>25/10/2023</p>
                  </div>
                  <div class="recent-news-card">
                     <a href="/event/seleksi-pemuda-pelopor-2023"><img src="{{ asset('') }}front/images/events/event1.jpg" alt="image"></a>
                     <h5><a href="/event/seleksi-pemuda-pelopor-2023">SELEKSI PEMUDA PELOPOR 2023</a></h5>
                     <p>25/10/2023</p>
                  </div>
                  <div class="recent-news-card">
                     <a href="/event/webinar-okp-2023"><img src="{{ asset('') }}front/images/events/event1.jpg" alt="image"></a>
                     <h5><a href="/event/webinar-okp-2023">WEBINAR OKP 2023</a></h5>
                     <p>25/10/2023</p>
                  </div>
               </div>
               <div class="sidebar-card sidebar-tag mt-30">
                  <h3>Tags</h3>
                  <ul>
                     <li><a href="/tag/event">Event</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection