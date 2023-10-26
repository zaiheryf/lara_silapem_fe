@extends('template_front.layout')

@section('content')
@section('title', 'Daftar')   
<!-- <section class="uni-banner">
   <div class="container">
      <div class="uni-banner-text-area">
         <h1>Daftar</h1>
         <ul>
            <li><a href="/">Home</a></li>
            <li>Daftar</li>
         </ul>
      </div>
   </div>
</section> -->

<section class="contact-form-area pb-100">
   <div class="container">
      <div class="section-content">
         <div class="row">
            
            <div class="col-lg-4">
               <h3>Login Silapem </h3>
               <div class="contact-form-text-area">
                  <form id="FormDaftar">
                     <div class="row align-items-center">
                        <div class="col-md-12 col-sm-6 col-12">
                           <div class="form-group">
                              <input type="text" class="form-control form-control-sm" placeholder="Username" id="username" required="" data-error="Mohon input username">
                              
                           </div>
                           <div class="form-group">
                              <input type="password" class="form-control form-control-sm" placeholder="Password" id="password" required="" data-error="Mohon input password">
                              
                           </div>
                        </div>
                        
                        
                        <div class="col-md-12 col-sm-12 col-12">
                           <button class="default-button" type="submit"><span>Login</span></button>
                           <br><br>
                           <small>belum punya akun ? </small>
                           <a href="/daftar" class="btn btn-dark w-100 mt-3" ><span>Daftar</span></a>
                           <div id="msgSubmit" class="h6 text-center hidden"></div>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="pr-20">
                  <img src="{{ asset('') }}front/images/laptop-and-book-scaled.jpg" alt="image" class="fit-object" style="width:100%;height:600px;">
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection