@extends('layouts.app')

@section('title', 'Mobilan - Sekolah Mengendarai')

@section('content')
    <!-- Content Start -->
    <div id="beranda" class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/main-content.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-6 animated slideInDown">Maju Dengan Keahlian,
                                        Mengemudi Dengan Percaya Diri</h1>
                                    <a href="#booking" class="btn btn-primary py-sm-3 px-sm-5">Booking</a>
                                    <a href="#kursus" class="btn btn-light py-sm-3 px-sm-5 ms-3">Kursus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content End -->


    <!-- Sub Content Start -->
    <div class="container-fluid sub-content py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-car text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5>Belajar dengan Mudah </h5>
                                <span>Raih Keahlian Mengemudi dengan Cepat</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-users text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5>Kualifikasi Tutor Yang Baik</h5>
                                <span>Membimbing Anda Menuju Keahlian Mengemudi</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-file-alt text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5>Dapatkan Lisensi Mengemudi </h5>
                                <span>memperoleh lisensi dengan panduan yang komprehensif</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sub Content End -->


    <!-- Tentang Kami Start -->
    <div id="tentang-kami" class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="img/about.jpg" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="text-primary text-uppercase mb-2">Tentang Kami</h6>
                        <h1 class="display-6 mb-4">Menjadikan Anda Pengemudi Ahli di Jalan Raya.</h1>
                        <p>Selamat datang di Mobilan, tempat terbaik untuk belajar mengemudi dan meningkatkan keterampilan
                            mengemudi Anda. Kami adalah perusahaan yang berkomitmen untuk menyediakan pembelajaran
                            berkualitas tinggi, panduan yang terarah, dan pengalaman belajar yang menyenangkan bagi setiap
                            individu yang ingin menguasai seni mengemudi. </p>
                        <p class="mb-4">kami percaya bahwa memiliki keterampilan mengemudi yang solid adalah kunci untuk
                            keselamatan dan kepercayaan diri di jalan raya. Oleh karena itu, kami menyediakan program
                            belajar yang komprehensif dan disesuaikan dengan kebutuhan dan tingkat keahlian setiap siswa.
                        </p>
                        <div class="row g-2 mb-4 pb-2">
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Berkualifikasi
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Keamanan Terjamin
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Biaya Terjangkau
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Tutor Terbaik
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tentang Kami End -->

    @include('components.schedule-modal')

    <!-- Courses Start -->
    <div id="kursus" class="container-xxl courses my-6 py-6 pb-0">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Kursus</h6>
                <h1 class="display-6 mb-4">Menjadi Pengemudi Yang Andal Bersama Kursus Kami</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">Rp 600.000,-</div>
                            <h5 class="mb-3">Paket A</h5>
                            <p style="margin-bottom: 40px;">Dalam paket ini, Anda akan mendapatkan panduan dan bimbingan
                                yang tepat untuk memulai perjalanan mengemudi Anda. </p>
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner
                                </li>
                                <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>7x
                                    Pertemuan</li>
                            </ol>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/courses-1.jpg" alt="">
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" onclick='openScheduleModal("Jadwal Kelas Paket A", ["Sen","Sel","Rab"])'>Jadwal
                                    Kelas</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">Rp 900.000,-</div>
                            <h5 class="mb-3">Paket B</h5>
                            <p>Dalam paket ini, Anda akan belajar teknik mengemudi yang lebih canggih dan dipadukan dengan
                                pemahaman yang lebih mendalam tentang aturan lalu lintas.</p>
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item small"><i
                                        class="fa fa-signal text-primary me-2"></i>Intermediate</li>
                                <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>12x
                                    Pertemuan</li>
                            </ol>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/courses-2.jpg" alt="">
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" onclick='openScheduleModal("Jadwal Kelas Paket B", ["Sen", "Sel", "Rab", "Sab", "Min"])'>Jadwal
                                    Kelas</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">Rp 1.200.000,-</div>
                            <h5 class="mb-3">Paket C</h5>
                            <p>Dalam paket ini, Anda akan belajar teknik mengemudi tingkat lanjutan, termasuk menghadapi
                                situasi yang kompleks dan mengemudi di berbagai kondisi jalan.</p>
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Expert
                                </li>
                                <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>20x
                                    Pertemuan</li>
                            </ol>
                        </div>
                        <div id="booking" class="position-relative mt-auto">
                            <img class="img-fluid" src="img/courses-3.jpg" alt="">
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" onclick='openScheduleModal("Jadwal Kelas Paket C", ["Sen", "Sel", "Rab", "Kam", "Jum", "Sab", "Min"])'>Jadwal
                                    Kelas</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 my-6 mb-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-primary text-center p-5">
                        <h1 class="mb-4">Buat Janji Temu</h1>
                        <form onsubmit="sendEmail(event)">
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="gname"
                                            placeholder="Gurdian Name" required>
                                        <label for="gname">Nama Anda</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control border-0" id="gmail"
                                            placeholder="Gurdian Email" required>
                                        <label for="gmail">Email Anda</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating position-relative">
                                        <select class="form-control border-0" id="type" required>
                                            <option value="" disabled selected>Pilih</option>
                                            <option value="Paket A">Paket A</option>
                                            <option value="Paket B">Paket B</option>
                                            <option value="Paket C">Paket C</option>
                                        </select>
                                        <label for="type">Tipe Kursus</label>
                                        <span class="dropdown-arrow"></span>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-floating position-relative">
                                        <select class="form-control border-0" id="car" required>
                                            <option value="" disabled selected>Pilih</option>
                                            <option value="Veloz">Veloz</option>
                                            <option value="Xenia">Xenia</option>
                                            <option value="Brio">Brio</option>
                                            <option value="Ignis">Ignis</option>
                                            <option value="March">March</option>
                                            <option value="GO+ Panca">GO+ Panca</option>
                                            <option value="Mobilio">Mobilio</option>
                                            <option value="Sigra">Sigra</option>
                                        </select>
                                        <label for="car">Mobil</label>
                                        <span class="dropdown-arrow"></span>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 100px" required></textarea>
                                        <label for="message">Pesan</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn-form btn-dark w-100 py-3" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->

    <!-- Tutor Start -->
    <div id="tutor" class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Tutor Kami</h6>
                <h1 class="display-6 mb-4">Tutor kami Sudah Berpengalaman Dan Telah Mengajar Banyak Siswa Dengan Sukses
                </h1>
            </div>
            <div class="row g-0 team-items">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/valerie.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Valerie</h5>
                            <span>Trainer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/anthony.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Anthony</h5>
                            <span>Trainer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/jenny.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Jenny</h5>
                            <span>Trainer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/chris.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Chris</h5>
                            <span>Trainer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tutor End -->

    <!-- Mobil Start -->
    <div id="mobil" class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Mobil Sekolah</h6>
                <h1 class="display-6 mb-4">Semua Mobil Kami Selalu Dirawat Dengan Rutin.</h1>
            </div>
            <div class="row g-0 team-items">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/veloz.png" alt=""
                                style="height: 175px;width: 400px">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Veloz</h5>
                            <span>Automatic</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/xenia.jpg" alt=""
                                style="height: 175px;width: 400px">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Xenia</h5>
                            <span>Manual</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/brio.jpeg" alt=""
                                style="height: 175px;width: 400px">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Brio</h5>
                            <span>Automatic</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/ignis.jpeg" alt=""
                                style="height: 175px;width: 400px">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Ignis</h5>
                            <span>Manual</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/march.jpg" alt=""
                                style="height: 175px;width: 400px">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">March</h5>
                            <span>Automatic</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="1.1s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/go.jpg" alt="" style="height: 175px;width: 400px">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">GO+ Panca</h5>
                            <span>Manual</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="1.3s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/mobilio.jpg" alt=""
                                style="height: 175px;width: 400px">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Mobilio</h5>
                            <span>Automatic</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="1.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/sigra.jpg" alt=""
                                style="height: 175px;width: 400px">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Sigra</h5>
                            <span>Manual</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobil End -->

@endsection