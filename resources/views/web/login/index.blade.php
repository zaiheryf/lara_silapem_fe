@extends('template_front.layout')

@section('content')
@section('title', 'Login')   
<!-- <section class="uni-banner">
   <div class="container">
      <div class="uni-banner-text-area">
         <h1>Login</h1>
         <ul>
            <li><a href="/">Home</a></li>
            <li>Login</li>
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
                  <form id="FormDaftar" method="POST" action="/sign-in">
                     @csrf
                     <div class="row align-items-center">
                        <div class="col-md-12 col-sm-6 col-12">
                           <div class="form-group">
                              <input type="email" name="email" class="form-control form-control-sm" placeholder="Email" id="email" required data-error="Mohon input email">
                              
                           </div>
                           <div class="form-group">
                              <input type="password" name="password" class="form-control form-control-sm" placeholder="Password" id="password" required data-error="Mohon input password">
                              
                           </div>
                        </div>
                        
                        
                        <div class="col-md-12 col-sm-12 col-12">
                           <button class="default-button" type="submit"><span>Login</span></button>
                           <br><br>
                           <small>belum punya akun ? </small>
                           <a href="/sign-up" class="btn btn-dark w-100 mt-3" ><span>Daftar</span></a>
                           <div id="msgSubmit" class="h6 text-center hidden"></div>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
            <div class="col-lg-8 bg-img-two">
               
            </div>
         </div>
      </div>
   </div>
</section>
@endsection