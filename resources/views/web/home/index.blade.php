@extends('template_front.layout')

@section('content')
@section('title', 'Home')   
    <div id="carouselHome" class="carousel slide " data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner ">
            <div class="carousel-item active">
                <img src="{{ asset('') }}front/images/slider/slider-1.png" class="d-block w-100" alt="..." >
                <div class="carousel-caption d-md-block mt--4 half-black">
                <h5 class="fw-bold">SELAMAT DATANG DI SILAPEM</h5>
                <h1>Sistem Informasi Layanan Kepemudaan</h1>
                <!-- <p class="text-white">Lorem ipsum dolor sit amet consectetuer adipiscing phasellus hendrerit lorem dolor sit amet
                    magna nibh nec urna in nisi neque aliquet ve, dapibus id dolor sit amet magna aliqu amet.
                </p>
                <a class="default-button" href="/">Learn More</a> -->
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('') }}front/images/slider/slider-3.png" class="d-block w-100" alt="..." >
                <div class="carousel-caption d-md-block mt--4 half-black">
                <h5 class="fw-bold">SELAMAT DATANG DI SILAPEM</h5>
                <h1>Sistem Informasi Layanan Kepemudaan</h1>
                <!--<p>Lorem ipsum dolor sit amet consectetuer adipiscing phasellus hendrerit lorem dolor sit amet
                    magna nibh nec urna in nisi neque aliquet ve, dapibus id dolor sit amet magna aliqu amet.
                </p>
                <a class="default-button" href="">Learn More</a> -->
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('') }}front/images/slider/slider-2.png" class="d-block w-100" alt="..." >
                <div class="carousel-caption d-md-block mt--4 half-black">
                <h5 class="fw-bold">SELAMAT DATANG DI SILAPEM</h5>
                <h1>Sistem Informasi Layanan Kepemudaan</h1>
                <!--<p>Lorem ipsum dolor sit amet consectetuer adipiscing phasellus hendrerit lorem dolor sit amet
                    magna nibh nec urna in nisi neque aliquet ve, dapibus id dolor sit amet magna aliqu amet.
                </p>
                <a class="default-button" href="">Learn More</a> -->
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselHome"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselHome"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    @include('template_front.support')


    <section class="services service-2 ptb-100 bg-light" data-aos="fade-down">
        <div class="container" data-aos="flip-up">
            <div class="default-section-title default-section-title-middle">
                <h3 class="text-black">Evaluasi Data Kependudukan</h3>
            </div>
            <div class="section-content">
                <div class="row mt-5">
                    <div class="col-md-4">
                        <div class="card card-white-box">
                            <div class="p-2">
                            <div id="pie1" style="min-width: 310px; height: 500px; max-width: 100%; margin: 0 auto"></div>
                                <div class="d-flex justify-content-center py-2">
                                    <a href="/" class="default-button news-btn">Detail</a>
                                    <h5 class="ms-3 mt-2"><i class="fas fa-user"></i> 100</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-white-box">
                            <div class="p-2">
                            <div id="pie2" style="min-width: 310px; height: 500px; max-width: 100%; margin: 0 auto"></div>
                                <div class="d-flex justify-content-center py-2">
                                    <a href="/" class="default-button news-btn">Detail</a>
                                    <h5 class="ms-3 mt-2"><i class="fas fa-user"></i> 100</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-white-box">
                            <div class="p-2">
                            <div id="pie3" style="min-width: 310px; height: 500px; max-width: 100%; margin: 0 auto"></div>
                                <div class="d-flex justify-content-center py-2">
                                    <a href="/" class="default-button news-btn">Detail</a>
                                    <h5 class="ms-3 mt-2"><i class="fas fa-user"></i> 100</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                    <center>
                    <a href="/" class="default-button news-btn mt-5">Selengkapnya</a>
                    </center>
                    <div class="card card-white-box mt-5">
                        <div class="p-2">
                            <div class="d-flex justify-content-between py-4">
                                <h3 class="ms-3 me-3 mt-2">Jadilah Jawara Muda Subang</h3>
                                <h3 class="mt-2">|</h3>
                                <h3 class="ms-3 me-3 mt-2">Jumlah Jawara Muda Subang : 3000 Terdaftar </h3>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <section class="berita ptb-50 bg-white" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
        <div class="container">
            <div class="default-section-title default-section-title-middle">
                <h3>Lowongan Kerja</h3>
                <p>Loker Terbaru</p>
            </div>
            <div class="section-content">
                <div class="agenda-slider-area-1 owl-carousel">
                    <div class="blog-card mlr-15 mb-30">
                        <div class="blog-card-img">
                            <a href="/loker/perusahaan-satu"><img src="{{ asset('') }}front/images/loker/job.jpg" alt="image"></a>
                        </div>
                        <div class="blog-card-text-area">
                            <div class="blog-date">
                                <ul>
                                <li><i class="far fa-calendar-alt"></i> 25/10/2023</li>
                                <li><i class="fas fa-user"></i> By <a href="#">Admin</a></li>
                                <!-- <li><i class="far fa-folder"></i> Terkini</li> -->
                                </ul>
                            </div>
                            <h4><a href="/loker/perusahaan-satu">PERUSAHAAN SATU</a></h4>
                            <p>Lowongan Kerja Terbaru dari Perusahaan Yang Bekerjasama dengan Dinas Kebudayaan Pariwisata Pemuda Dan Olah Raga Kabupaten Subang.</p>
                            <a class="read-more-btn" href="/loker/perusahaan-satu">Read More</a>
                        </div>
                    </div>
                    <div class="blog-card mlr-15 mb-30">
                        <div class="blog-card-img">
                            <a href="/loker/perusahaan-dua"><img src="{{ asset('') }}front/images/loker/job.jpg" alt="image"></a>
                        </div>
                        <div class="blog-card-text-area">
                            <div class="blog-date">
                                <ul>
                                <li><i class="far fa-calendar-alt"></i> 25/10/2023</li>
                                <li><i class="fas fa-user"></i> By <a href="#">Admin</a></li>
                                <!-- <li><i class="far fa-folder"></i> Terkini</li> -->
                                </ul>
                            </div>
                            <h4><a href="/loker/perusahaan-dua">PERUSAHAAN DUA</a></h4>
                            <p>Lowongan Kerja Terbaru dari Perusahaan Yang Bekerjasama dengan Dinas Kebudayaan Pariwisata Pemuda Dan Olah Raga Kabupaten Subang.</p>
                            <a class="read-more-btn" href="/loker/perusahaan-dua">Read More</a>
                        </div>
                    </div>
                    <div class="blog-card mlr-15 mb-30">
                        <div class="blog-card-img">
                            <a href="/loker/perusahaan-tiga"><img src="{{ asset('') }}front/images/loker/job.jpg" alt="image"></a>
                        </div>
                        <div class="blog-card-text-area">
                            <div class="blog-date">
                                <ul>
                                <li><i class="far fa-calendar-alt"></i> 25/10/2023</li>
                                <li><i class="fas fa-user"></i> By <a href="#">Admin</a></li>
                                <!-- <li><i class="far fa-folder"></i> Terkini</li> -->
                                </ul>
                            </div>
                            <h4><a href="/loker/perusahaan-tiga">PERUSAHAAN TIGA</a></h4>
                            <p>Lowongan Kerja Terbaru dari Perusahaan Yang Bekerjasama dengan Dinas Kebudayaan Pariwisata Pemuda Dan Olah Raga Kabupaten Subang.</p>
                            <a class="read-more-btn" href="/loker/perusahaan-tiga">Read More</a>
                        </div>
                    </div>
                    <div class="blog-card mlr-15 mb-30">
                        <div class="blog-card-img">
                            <a href="/loker/perusahaan-empat"><img src="{{ asset('') }}front/images/loker/job.jpg" alt="image"></a>
                        </div>
                        <div class="blog-card-text-area">
                            <div class="blog-date">
                                <ul>
                                <li><i class="far fa-calendar-alt"></i> 25/10/2023</li>
                                <li><i class="fas fa-user"></i> By <a href="#">Admin</a></li>
                                <!-- <li><i class="far fa-folder"></i> Terkini</li> -->
                                </ul>
                            </div>
                            <h4><a href="/loker/perusahaan-empat">PERUSAHAAN EMPAT</a></h4>
                            <p>Lowongan Kerja Terbaru dari Perusahaan Yang Bekerjasama dengan Dinas Kebudayaan Pariwisata Pemuda Dan Olah Raga Kabupaten Subang.</p>
                            <a class="read-more-btn" href="/berita/perusahaan-empat">Read More</a>
                        </div>
                    </div>
                </div>
                <center>
                <a href="/loker" class="default-button news-btn">Selengkapnya</a>
                </center>
            </div>
        </div>
    </section>

    <section class="berita ptb-50 bg-img-one" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
        <div class="container">
            <div class="default-section-title default-section-title-middle">
                <h3>Event</h3>
                <p>Event Terbaru</p>
            </div>
            <div class="section-content">
                <div class="agenda-slider-area-1 owl-carousel">
                    <div class="blog-card mlr-15 mb-30">
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
                    <div class="blog-card mlr-15 mb-30">
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
                    <div class="blog-card mlr-15 mb-30">
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
                    <div class="blog-card mlr-15 mb-30">
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
                <center>
                <a href="/event" class="default-button news-btn">Selengkapnya</a>
                </center>
            </div>
        </div>
    </section>

    <section class="berita ptb-50 bg-white" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
        <div class="container">
            <div class="default-section-title default-section-title-middle">
                <h3>Berita</h3>
                <p>Berita Terbaru</p>
            </div>
            <div class="section-content">
                <div class="agenda-slider-area-1 owl-carousel">
                    <div class="blog-card mlr-15 mb-30">
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
                    <div class="blog-card mlr-15 mb-30">
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
                    <div class="blog-card mlr-15 mb-30">
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
                    <div class="blog-card mlr-15 mb-30">
                        <div class="blog-card-img">
                            <a href="/berita/seleksi-wirausaha-muda-2023"><img src="{{ asset('') }}front/images/berita/berita.jpg" alt="image"></a>
                        </div>
                        <div class="blog-card-text-area">
                            <div class="blog-date">
                                <ul>
                                <li><i class="far fa-calendar-alt"></i> 25/10/2023</li>
                                <li><i class="fas fa-user"></i> By <a href="#">Admin</a></li>
                                <li><i class="far fa-folder"></i> Terkini</li>
                                </ul>
                            </div>
                            <h4><a href="/berita/seleksi-wirausaha-muda-2023">SELEKSI WIRAUSAHA MUDA 2023</a></h4>
                            <p>Dinas Kebudayaan Pariwisata Pemuda Dan Olah Raga Kabupaten Subang.</p>
                            <a class="read-more-btn" href="/berita/seleksi-wirausaha-muda-2023">Read More</a>
                        </div>
                    </div>
                </div>
                <center>
                <a href="/berita" class="default-button news-btn">Selengkapnya</a>
                </center>
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
        text: '<h2>Data Pemuda Usia 16 s.d 30th</h2>'
    },
    tooltip: {
        pointFormat: '{series.name}: {point.y} : {point.percentage:.1f}%'
    },
    legend: {
        layout: 'horizontal',
        backgroundColor: '',
        floating: true,
        align: 'left',
        verticalAlign: 'bottom',
        x: 0,
        y: 0,
        labelFormatter: function () {
            return this.name + ' '+this.options.y+' orang';
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                // format: '<b>{point.name}</b> : {point.y} orang',
                // style: {
                // color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                // }
            },
            showInLegend: true,

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
<script type="text/javascript">
// Build the chart
Highcharts.chart('pie2', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: '<h2>Data Organisasi Kepemudaan</h2>'
    },
    tooltip: {
        pointFormat: '{series.name}: {point.y} : {point.percentage:.1f}%'
    },
    legend: {
        layout: 'horizontal',
        backgroundColor: '',
        floating: true,
        align: 'left',
        verticalAlign: 'bottom',
        x: 0,
        y: 0,
        labelFormatter: function () {
            return this.name + ' '+this.options.y+' orang';
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                // format: '<b>{point.name}</b> : {point.y} orang',
                // style: {
                // color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                // }
            },
            showInLegend: true,

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
<script type="text/javascript">
// Build the chart
Highcharts.chart('pie3', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: '<h2>Data Kewirausahawan pemuda</h2>'
    },
    tooltip: {
        pointFormat: '{series.name}: {point.y} : {point.percentage:.1f}%'
    },
    legend: {
        layout: 'horizontal',
        backgroundColor: '',
        floating: true,
        align: 'left',
        verticalAlign: 'bottom',
        x: 0,
        y: 0,
        labelFormatter: function () {
            return this.name + ' '+this.options.y+' orang';
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                // format: '<b>{point.name}</b> : {point.y} orang',
                // style: {
                // color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                // }
            },
            showInLegend: true,

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