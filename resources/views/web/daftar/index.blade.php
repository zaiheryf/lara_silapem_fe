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
            
            <div class="col-lg-8">
               <h3>Daftar Silapem </h3>
               <div class="contact-form-text-area">
                  <form id="FormDaftar">
                     <div class="row align-items-center">
                        <div class="col-md-6 col-sm-6 col-12">
                           <div class="form-group">
                              <input type="text" class="form-control form-control-sm" placeholder="Username" id="username" required="" data-error="Mohon input username">
                              
                           </div>
                           <div class="form-group">
                              <input type="text" class="form-control form-control-sm" placeholder="Nama" id="name" required="" data-error="Mohon input nama">
                              
                           </div>
                           <div class="form-group">
                              <input type="email" name="email" class="form-control form-control-sm" placeholder="Email" id="email" required="" data-error="Mohon input Email">
                              
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-12">
                           <div class="form-group">
                              <input type="password" class="form-control form-control-sm" placeholder="Password" id="password" required="" data-error="Mohon input password">
                              
                           </div>
                           <div class="form-group">
                              <input type="password" class="form-control form-control-sm" placeholder="Konfirmasi Password" id="konfirmasipassword" required="" data-error="Mohon input konfirmasi password">
                              
                           </div>
                           <div class="form-group">
                              <select class="form-control form-control-sm w-100 bg-white" name="pilih">
                                 <option value="">=== Pilih ===</option>
                                 <option value="">Pemuda Pelopor</option>
                                 <option value="">Wirausaha Muda</option>
                                 <option value="">OKP</option>
                                 <option value="">Admin</option>
                                 <option value="">User Admin</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="form-group">
                              <div class="form-check">
                                 <input name="gridCheck" value="I agree to the terms and privacy policy." class="form-check-input" type="checkbox" id="gridCheck" required="">
                                 <label class="form-check-label" for="gridCheck">
                                 I agree to the <a href="#">terms</a> and <a href="#">privacy policy</a>
                                 </label>
                                 <div class="help-block with-errors gridCheck-error"></div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-12">
                           <button class="default-button" type="submit"><span>Daftar</span></button>
                           <a href="/login" class="btn btn-dark w-100 mt-3" ><span>Login</span></a>
                           <div id="msgSubmit" class="h6 text-center hidden"></div>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="pr-20">
                  <img src="{{ asset('') }}front/images/laptop-and-book-scaled.jpg" class="fit-object" alt="image" style="width:100%;height:600px;">
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection