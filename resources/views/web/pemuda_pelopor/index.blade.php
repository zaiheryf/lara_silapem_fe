@extends('template_front.layout')

@section('content')
@section('title', 'Pemuda Pelopor')   
<section class="uni-banner">
   <div class="container">
      <div class="uni-banner-text-area">
         <h1>Pemuda Pelopor</h1>
         <ul>
            <li><a href="/">Home</a></li>
            <li>Pemuda Pelopor</li>
         </ul>
      </div>
   </div>
</section>
@include('template_front.support')
<section class="services service-2 ptb-100 bg-white" data-aos="fade-down">
   <div class="container" data-aos="flip-up">
      <div class="default-section-title default-section-title-middle">
            <h3 class="text-black">Pemuda pelopor Subang</h3>
      </div>
      <div class="section-content">
            <div class="row mt-5 justify-content-center">
               <div class="col-md-6">
                  <div class="card card-white-box">
                        <div class="p-2">
                        <div id="pie1" style="min-width: 310px; height: 400px; max-width: 100%; margin: 0 auto"></div>
                           <div class="d-flex justify-content-center py-2">
                              <a href="/" class="default-button news-btn">Detail</a>
                              <h5 class="ms-3 mt-2"><i class="fas fa-user"></i> 100</h5>
                           </div>
                        </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="card card-white-box">
                     <div class="p-2">
                        <h5 class="ms-3 mt-2 text-center">EVENT 20 <br> DARI 100 DAERAH</h5>
                     </div>
                  </div>
                  <div class="card card-white-box">
                     <div class="p-2">
                        <h5 class="ms-3 mt-2 text-center">PENDAFTAR 1000 <br> DARI 100 DAERAH</h5>
                     </div>
                  </div>
               </div>
            </div>
      </div>
   </div>
</section>
<section class="team ptb-100 bg-f9fbfe">
   <div class="container">
      <div class="default-section-title default-section-title-middle">
         <h3>Anggota pemuda pelopor Subang</h3>
         <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum suspendisse</p> -->
      </div>
      <div class="section-content">
         <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
               <div class="box-shadow rounded team-card bg-white">
                  <div class="team-card-img p-0">
                     <img src="{{ asset('') }}front/images/team/t1.jpg" alt="image" class="rounded">
                     <!-- <div class="team-social-icons">
                        <ul>
                           <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                           <li><a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                           <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                           <li><a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                     </div> -->
                  </div>
                  <div class="team-card-text">
                     <h4>Nama Anggota</h4>
                     <p>umur 20 Tahun</p>
                     <a class="btn default-button" href="#">Selengkapnya <i class="fas fa-chevron-right"></i></a>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
               <div class="box-shadow rounded team-card bg-white">
                  <div class="team-card-img p-0">
                     <img src="{{ asset('') }}front/images/team/t2.jpg" alt="image" class="rounded">
                     <!-- <div class="team-social-icons">
                        <ul>
                           <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                           <li><a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                           <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                           <li><a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                     </div> -->
                  </div>
                  <div class="team-card-text">
                     <h4>Nama Anggota</h4>
                     <p>umur 20 Tahun</p>
                     <a class="btn default-button" href="#">Selengkapnya <i class="fas fa-chevron-right"></i></a>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
               <div class="box-shadow rounded team-card bg-white">
                  <div class="team-card-img p-0">
                     <img src="{{ asset('') }}front/images/team/t3.jpg" alt="image" class="rounded">
                     <!-- <div class="team-social-icons">
                        <ul>
                           <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                           <li><a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                           <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                           <li><a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                     </div> -->
                  </div>
                  <div class="team-card-text">
                     <h4>Nama Anggota</h4>
                     <p>umur 20 Tahun</p>
                     <a class="btn default-button" href="#">Selengkapnya <i class="fas fa-chevron-right"></i></a>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
               <div class="box-shadow rounded team-card bg-white">
                  <div class="team-card-img p-0">
                     <img src="{{ asset('') }}front/images/team/t4.jpg" alt="image" class="rounded">
                     <!-- <div class="team-social-icons">
                        <ul>
                           <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                           <li><a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                           <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                           <li><a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                     </div> -->
                  </div>
                  <div class="team-card-text">
                     <h4>Nama Anggota</h4>
                     <p>umur 20 Tahun</p>
                     <a class="btn default-button" href="#">Selengkapnya <i class="fas fa-chevron-right"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<script type="text/javascript">
// Build the chart
Highcharts.chart('pie1', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: '<h2>Data pemuda pelopor</h2>'
    },
    tooltip: {
        pointFormat: '{series.name}: {point.y} : {point.percentage:.1f}%'
    },
   //  legend: {
   //      layout: 'horizontal',
   //      backgroundColor: '',
   //      floating: true,
   //      align: 'left',
   //      verticalAlign: 'bottom',
   //      x: 0,
   //      y: 40,
   //      labelFormatter: function () {
   //          return this.name + ' '+this.options.y+' orang';
   //      }
   //  },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b> : {point.y} orang',
                style: {
                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            },
            showInLegend: false,

        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Utara',
            y: 360,
            sliced: true,
            selected: true
        }, {
            name: 'Selatan',
            y: 320
        }, {
            name: 'Timur',
            y: 260
        }, {
            name: 'Barat',
            y: 60
        }]
    }]
});
</script>
@endsection