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
            
            <div class="col-lg-8">
               <h3>Daftar Silapem </h3>
               <div class="contact-form-text-area">
                  <form id="FormDaftar" method="POST" action="/sign-up">
                     @csrf
                     <div class="row align-items-center">
                        <div class="col-md-12 col-sm-12 col-12">
                           <div class="form-group">
                              <input type="text" name="nama" class="form-control form-control-sm" placeholder="Nama" id="name" required="" data-error="Mohon input nama">
                              
                           </div>
                           <div class="form-group">
                              <input type="email" name="email" class="form-control form-control-sm" placeholder="Email" id="email" required="" data-error="Mohon input Email">
                              
                           </div>
                           <div class="form-group">
                              <input type="password" name="password" class="form-control form-control-sm" placeholder="Password" id="password" required="" data-error="Mohon input password">
                              
                           </div>
                           <div class="form-group">
                              <input type="password" name="kpassword" class="form-control form-control-sm" placeholder="Konfirmasi Password" id="konfirmasipassword" required="" data-error="Mohon input konfirmasi password">
                              
                           </div>
                           <div class="form-group">
                              <input type="text" name="kontak" class="form-control form-control-sm" placeholder="No HP" id="" required="" data-error="Mohon input no hp">
                              
                           </div>
                           <div class="form-group">
                              <select class="form-control form-control-sm w-100 bg-white" name="role">
                                 <option selected="" disabled="">Pilih jenis...</option>
                                 <option value="pp">Pemuda Pelopor</option>
                                 <option value="wm">Wirausaha Muda</option>
                                 <option value="okp">OKP</option>
                                 <option value="uu">User Umum</option>
                              </select>
                           </div>
                        </div>
                        <!-- <div class="col-lg-12">
                           <div class="form-group">
                              <div class="form-check">
                                 <input name="gridCheck" value="I agree to the terms and privacy policy." class="form-check-input" type="checkbox" id="gridCheck" required="">
                                 <label class="form-check-label" for="gridCheck">
                                 I agree to the <a href="#">terms</a> and <a href="#">privacy policy</a>
                                 </label>
                                 <div class="help-block with-errors gridCheck-error"></div>
                              </div>
                           </div>
                        </div> -->
                        <div class="col-md-12 col-sm-12 col-12">
                           <button class="default-button" type="submit"><span>Daftar</span></button>
                           <a href="/sign-in" class="btn btn-dark w-100 mt-3" ><span>Login</span></a>
                           <div id="msgSubmit" class="h6 text-center hidden"></div>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
            <div class="col-lg-4 bg-img-two">

            </div>
         </div>
      </div>
   </div>
</section>
@endsection