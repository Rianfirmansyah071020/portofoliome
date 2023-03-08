<section id="hero-animated home" class="hero-animated d-flex align-items-center">
    <div class="container-fluid d-flex flex-column justify-content-center align-items-center text-center position-relative"
        data-aos="zoom-out">
        <img src="{{ asset('assets/img/profil/rian2.jpg') }}" class="img-fluid animated img-master">
        <h2 class="text-master">FULLSTACK <span>WEB DEVELOPER</span></h2>
    </div>
</section>

<main id="main" class="p-2">

    <!-- ======= Featured Services Section ======= -->
    <div class="d-flex justify-content-center align-items-center">
        <div class="garis">
            <h3 class="text-judul text-center">Tentang</h3>
        </div>
    </div>
    <section id="tentang" class="featured-services">
        <div class="container-fluid">

            <div class="row gy-4">

                <div class="col-xl-4 col-md-6 col-12 d-flex justify-content-center" data-aos="zoom-out">
                    <div class="service-item position-relative card card-new">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="{{ asset('assets/img/profil/rian2.jpg') }}" alt="rian" class="foto-profil">
                        </div>
                        <div class="mt-2 d-flex justify-content-center align-items-center">
                            <h4 class="text-center text-profesi"><span>FULLSTACK WEB DEVELOPER</span></h4>
                        </div>
                        <ul class="list-group list-group-flush mt-4">
                            <li class="list-group-item text-sm">Nama : Rian Firmansyah</li>
                            <li class="list-group-item">Umur : 23 Tahun</li>
                            <li class="list-group-item">Jenis Kelamin : Laki-Laki</li>
                            <li class="list-group-item">Alamat : Lubuk Alung</li>
                            <li class="list-group-item">Email : Rian Firmansyah</li>
                        </ul>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-8 col-lg-8 col-12 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="600">
                    <div class="service-item position-relative card-new">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                "Hallo Semua Saya Rian Firmansyah Saya Seorang Fullstack Web Developer Tamatan S1 Sistem
                                Informasi"
                            </li>
                        </ul>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <div class="d-flex justify-content-center align-items-center">
        <div class="garis">
            <h3 class="text-judul text-center">Pendidikan</h3>
        </div>
    </div>
    <section id="pendidikan" class="about">
        <div class="container-fluid" data-aos="fade-up">
            <div class="row d-flex justify-content-center align-items-center">

                {{-- sd --}}
                <div class="col-lg-3 col-xl-3 col-md-6 col-sm-12 col-12 card p-3 card-pendidikan m-1">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/img/pendidikan/kampus.jpg') }}" alt="" class="img-card-pendidikan">
                    </div>
                    <div class="mt-3 d-flex justify-content-center align-items-center p-3">
                        SDN 29 LUBUK ALUNG
                    </div>
                </div>

                {{-- smp --}}
                <div class="col-lg-3 col-xl-3 col-md-6 col-sm-12 col-12 card p-3 card-pendidikan m-1">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/img/pendidikan/kampus.jpg') }}" alt="" class="img-card-pendidikan">
                    </div>
                    <div class="mt-3 d-flex justify-content-center align-items-center p-3">
                        SMPN 3 LUBUK ALUNG
                    </div>
                </div>

                {{-- sma --}}

                <div class="col-lg-3 col-xl-3 col-md-6 col-sm-12 col-12 card p-3 card-pendidikan m-1">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/img/pendidikan/kampus.jpg') }}" alt="" class="img-card-pendidikan">
                    </div>
                    <div class="mt-3 d-flex justify-content-center align-items-center p-3">
                        MAN LUBUK ALUNG
                    </div>
                </div>

                {{-- kuliah --}}
                <div class="col-lg-3 col-xl-3 col-md-6 col-sm-12 col-12 card p-3 card-pendidikan m-1">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/img/pendidikan/kampus.jpg') }}" alt="" class="img-card-pendidikan">
                    </div>
                    <div class="mt-3 d-flex justify-content-center align-items-center p-3">
                        STMIK INDONESIA PADANG
                    </div>
                </div>



            </div>
        </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <div class="d-flex justify-content-center align-items-center">
        <div class="garis">
            <h3 class="text-judul text-center">Kemampuan</h3>
        </div>
    </div>
    <section id="kemampuan" class="clients mt-5">
        <div class="container-fluid" data-aos="zoom-out">

            <div class="clients-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide img-kemampuan">
                        <div class="card p-1 card-kemampuan shadow">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('assets/img/kemampuan/mysql.png') }}" class="img-fluid img-skill"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide img-kemampuan">
                        <div class="card p-1 card-kemampuan shadow">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('assets/img/kemampuan/php.png') }}" class="img-fluid img-skill"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide img-kemampuan">
                        <div class="card p-1 card-kemampuan shadow">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('assets/img/kemampuan/sass.png') }}" class="img-fluid img-skill"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide img-kemampuan">
                        <div class="card p-1 card-kemampuan shadow">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('assets/img/kemampuan/bootstrap.png') }}" class="img-fluid img-skill"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide img-kemampuan">
                        <div class="card p-1 card-kemampuan shadow">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('assets/img/kemampuan/ci.png') }}" class="img-fluid img-skill"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide img-kemampuan">
                        <div class="card p-1 card-kemampuan shadow">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('assets/img/kemampuan/css.png') }}" class="img-fluid img-skill"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide img-kemampuan">
                        <div class="card p-1 card-kemampuan shadow">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('assets/img/kemampuan/figma.png') }}" class="img-fluid img-skill"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide img-kemampuan">
                        <div class="card p-1 card-kemampuan shadow">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('assets/img/kemampuan/html.png') }}" class="img-fluid img-skill"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide img-kemampuan">
                        <div class="card p-1 card-kemampuan shadow">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('assets/img/kemampuan/javascript.png') }}"
                                    class="img-fluid img-skill" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide img-kemampuan">
                        <div class="card p-1 card-kemampuan shadow">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('assets/img/kemampuan/jquery.png') }}" class="img-fluid img-skill"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide img-kemampuan">
                        <div class="card p-1 card-kemampuan shadow">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('assets/img/kemampuan/laravel livewire.png') }}"
                                    class="img-fluid img-skill" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide img-kemampuan">
                        <div class="card card-kemampuan shadow p-1">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('assets/img/kemampuan/laravel.png') }}" class="img-fluid img-skill"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Clients Section -->

    <!-- ======= Call To Action Section ======= -->
    <div class="d-flex justify-content-center align-items-center">
        <div class="garis">
            <h3 class="text-judul text-center">Proyek</h3>
        </div>
    </div>
    <section id="proyek" class="about">
        <div class="container-fluid" data-aos="fade-up">
            <div class="row d-flex justify-content-center align-items-center">

                {{-- sd --}}
                <div class="col-lg-3 col-xl-3 col-md-6 col-sm-12 col-12 card p-3 card-proyek m-1">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/img/pendidikan/kampus.jpg') }}" alt="" class="img-card-pendidikan">
                    </div>
                    <div class="mt-3 d-flex justify-content-center align-items-center p-3">
                        SDN 29 LUBUK ALUNG
                    </div>
                </div>

                {{-- smp --}}
                <div class="col-lg-3 col-xl-3 col-md-6 col-sm-12 col-12 card p-3 card-proyek m-1">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/img/pendidikan/kampus.jpg') }}" alt="" class="img-card-pendidikan">
                    </div>
                    <div class="mt-3 d-flex justify-content-center align-items-center p-3">
                        SMPN 3 LUBUK ALUNG
                    </div>
                </div>

                {{-- sma --}}

                <div class="col-lg-3 col-xl-3 col-md-6 col-sm-12 col-12 card p-3 card-proyek m-1">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/img/pendidikan/kampus.jpg') }}" alt="" class="img-card-pendidikan">
                    </div>
                    <div class="mt-3 d-flex justify-content-center align-items-center p-3">
                        MAN LUBUK ALUNG
                    </div>
                </div>

                {{-- kuliah --}}
                <div class="col-lg-3 col-xl-3 col-md-6 col-sm-12 col-12 card p-3 card-proyek m-1">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/img/pendidikan/kampus.jpg') }}" alt="" class="img-card-pendidikan">
                    </div>
                    <div class="mt-3 d-flex justify-content-center align-items-center p-3">
                        STMIK INDONESIA PADANG
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= On Focus Section ======= -->
    <div class="d-flex justify-content-center align-items-center">
        <div class="garis">
            <h3 class="text-judul text-center">Pengalaman</h3>
        </div>
    </div>
    <section id="pengalaman" class="onfocus mt-5 mb-5">
        <div class="container-fluid p-0" data-aos="fade-up">
            <div class="container-xl">
                <div class="row d-flex justify-content-center align-content-center">
                    <div class="col-lg-5 col-xl-5 col-md-12 col-sm-12 col-12 card shadow m-1">
                        <div class="row justify-content-center align-content-center p-2">
                            <div class="col-lg-3 col-xl-3 col-md-12 col-sm-12">
                                <img src="{{ asset('assets/img/pendidikan/kampus.jpg') }}" alt="" class="img-pengalaman">
                            </div>
                            <div class="col-lg-8 col-xl-8 col-md-12 col-sm-12">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum iusto saepe officiis necessitatibus sunt tempore ex dolores dolorem quis odio modi maiores similique impedit ad quo rerum, inventore voluptates! Quia!Delectus placeat cum doloribus voluptatibus voluptatem autem hic odio quos dolore reprehenderit? Consequatur, earum? Incidunt porro tempora ea qui illum quod assumenda tempore unde vitae fugiat, eius itaque quasi veritatis.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-5 col-md-12 col-sm-12 col-12 card shadow m-1">
                        <div class="row justify-content-center align-content-center p-2">
                            <div class="col-lg-3 col-xl-3 col-md-12 col-sm-12">
                                <img src="{{ asset('assets/img/pendidikan/kampus.jpg') }}" alt="" class="img-pengalaman">
                            </div>
                            <div class="col-lg-8 col-xl-8 col-md-12 col-sm-12">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente totam consequuntur officia iure velit debitis,
                                    excepturi cum, adipisci, quam tenetur in nulla cumque aperiam iusto obcaecati ullam impedit perferendis
                                    dignissimos!Impedit tempore odio aperiam! Rerum, cum repudiandae doloribus quasi molestias rem odit quibusdam iusto
                                    culpa modi. Ut accusantium, consectetur aut ratione cumque fugit sunt animi autem ipsum similique fugiat. Nihil.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End On Focus Section -->

</main><!-- End #main -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>