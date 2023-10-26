@extends('template_front.layout')

@section('content')
@section('title', 'Loker')   
<section class="uni-banner">
   <div class="container">
      <div class="uni-banner-text-area">
         <h1>Loker</h1>
         <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/loker">Loker</a></li>
            <li>{{$judul??''}}</li>
            
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
                  <div class="blog-details-text-area details-text-area">
                     <h3 class="mt-0">{{$judul??''}}</h3>
                     <div class="blog-date">
                     <ul>
                           <li><i class="far fa-calendar-alt"></i> {{$tanggal_posting??''}}</li>
                           <li><i class="fas fa-user"></i> By <a href="#">Admin</a></li>
                           <li><i class="far fa-folder"></i> Terkni</li>
                     </ul>
                     </div>
                     <img src="{{ asset('') }}{{$img_posting??''}}" alt="image" class="img-fluid img-responsive" style="width:100%"/>
                     <div class="mt-3">
                     <?php echo $isi_posting??''; ?>
                     </div>
                  </div>
                  <div class="blog-text-footer mt-30">
                  <div class="tag-area">
                     <ul>
                     <li><i class="fas fa-tags"></i></li>
                     <li><a href="/tag/terkini">Terkini,</a></li>
                     </ul>
                  </div>
                  <div class="social-icons">
                     <ul>
                     <li><span>Share:</span></li>
                     <li>
                           <a href="https://www.facebook.com/" target="_blank"
                           ><i class="fab fa-facebook-f"></i
                           ></a>
                     </li>
                     <li>
                           <a href="https://www.linkedin.com/" target="_blank"
                           ><i class="fab fa-linkedin-in"></i
                           ></a>
                     </li>
                     <li>
                           <a href="https://twitter.com/" target="_blank"
                           ><i class="fab fa-twitter"></i
                           ></a>
                     </li>
                     <li>
                           <a href="https://www.instagram.com/" target="_blank"
                           ><i class="fab fa-instagram"></i
                           ></a>
                     </li>
                     </ul>
                  </div>
                  </div>
               </div>

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