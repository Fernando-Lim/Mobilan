<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Mobilan - Sekolah Mengendarai</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('img/mobilan.png')}}" rel="shortcut icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css?v26')}}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-secondary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0">Mobilan</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Beranda</a>
                <a href="#tentang-kami" class="nav-item nav-link">Tentang Kami</a>
                <a href="#kursus" class="nav-item nav-link">kursus</a>
                <a href="#tutor" class="nav-item nav-link">Tutor</a>
                <a href="#mobil" class="nav-item nav-link">Mobil</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Content Start -->
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/main-content.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-6 animated slideInDown">Maju Dengan Keahlian, Mengemudi Dengan Percaya Diri</h1>
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
                        <img class="position-absolute w-100 h-100" src="img/about.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="text-primary text-uppercase mb-2">Tentang Kami</h6>
                        <h1 class="display-6 mb-4">Menjadikan Anda Pengemudi Ahli di Jalan Raya.</h1>
                        <p>Selamat datang di Mobilan, tempat terbaik untuk belajar mengemudi dan meningkatkan keterampilan mengemudi Anda. Kami adalah perusahaan yang berkomitmen untuk menyediakan pembelajaran berkualitas tinggi, panduan yang terarah, dan pengalaman belajar yang menyenangkan bagi setiap individu yang ingin menguasai seni mengemudi.                        </p>
                        <p class="mb-4">kami percaya bahwa memiliki keterampilan mengemudi yang solid adalah kunci untuk keselamatan dan kepercayaan diri di jalan raya. Oleh karena itu, kami menyediakan program belajar yang komprehensif dan disesuaikan dengan kebutuhan dan tingkat keahlian setiap siswa.</p>
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

    <!-- Modal Paket A-->
<div id="scheduleModalA" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <!-- Add the calendar code here -->
      <h4>Class Schedule A</h4>
      <table class="calendar">
        <thead>
          <tr>
            <th>Senin</th>
            <th>Selasa</th>
            <th>Rabu</th>
            <th>Kamis</th>
            <th>Jumat</th>
            <th>Sabtu</th>
            <th>Minggu</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="available">Ada Kelas</td>
            <td class="available">Ada Kelas</td>
            <td class="available">Ada Kelas</td>
            <td class="unavailable">-</td>
            <td class="unavailable">-</td>
            <td class="unavailable">-</td>
            <td class="unavailable">-</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

    <!-- Modal Paket B-->
<div id="scheduleModalB" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h4>Class Schedule B</h4>
      <table class="calendar">
        <thead>
          <tr>
            <th>Senin</th>
            <th>Selasa</th>
            <th>Rabu</th>
            <th>Kamis</th>
            <th>Jumat</th>
            <th>Sabtu</th>
            <th>Minggu</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="available">Ada Kelas</td>
            <td class="available">Ada Kelas</td>
            <td class="available">Ada Kelas</td>
            <td class="unavailable">-</td>
            <td class="unavailable">-</td>
            <td class="available">Ada Kelas</td>
            <td class="available">Ada Kelas</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  
    <!-- Modal Paket C-->
<div id="scheduleModalC" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h4>Class Schedule C</h4>
      <table class="calendar">
        <thead>
          <tr>
            <th>Senin</th>
            <th>Selasa</th>
            <th>Rabu</th>
            <th>Kamis</th>
            <th>Jumat</th>
            <th>Sabtu</th>
            <th>Minggu</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="available">Ada Kelas</td>
            <td class="available">Ada Kelas</td>
            <td class="available">Ada Kelas</td>
            <td class="available">Ada Kelas</td>
            <td class="available">Ada Kelas</td>
            <td class="available">Ada Kelas</td>
            <td class="available">Ada Kelas</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  

    <!-- Courses Start -->
    <div id="kursus" class="container-xxl courses my-6 py-6 pb-0">
        <div  class="container">
            <div  class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Kursus</h6>
                <h1 class="display-6 mb-4">Menjadi Pengemudi Yang Andal Bersama Kursus Kami</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">Rp 600.000,-</div>
                            <h5 class="mb-3">Paket A</h5>
                            <p style="margin-bottom: 40px;">Dalam paket ini, Anda akan mendapatkan panduan dan bimbingan yang tepat untuk memulai perjalanan mengemudi Anda.  </p>
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li>
                                <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>7x Pertemuan</li>
                            </ol>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/courses-1.jpg" alt="">
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" onclick="openModal('scheduleModalA')">Jadwal Kelas</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">Rp 900.000,-</div>
                            <h5 class="mb-3">Paket B</h5>
                            <p>Dalam paket ini, Anda akan belajar teknik mengemudi yang lebih canggih dan dipadukan dengan pemahaman yang lebih mendalam tentang aturan lalu lintas.</p>
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Intermediate</li>
                                <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>12x Pertemuan</li>
                            </ol>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/courses-2.jpg" alt="">
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" onclick="openModal('scheduleModalB')">Jadwal Kelas</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">Rp 1.200.000,-</div>
                            <h5 class="mb-3">Paket C</h5>
                            <p>Dalam paket ini, Anda akan belajar teknik mengemudi tingkat lanjutan, termasuk menghadapi situasi yang kompleks dan mengemudi di berbagai kondisi jalan.</p>
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Expert</li>
                                <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>20x Pertemuan</li>
                            </ol>
                        </div>
                        <div id="booking" class="position-relative mt-auto">
                            <img class="img-fluid" src="img/courses-3.jpg" alt="">
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" onclick="openModal('scheduleModalC')">Jadwal Kelas</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div  class="col-lg-8 my-6 mb-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-primary text-center p-5">
                        <h1 class="mb-4">Buat Janji Temu</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="gname" placeholder="Gurdian Name">
                                        <label for="gname">Nama Anda</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control border-0" id="gmail" placeholder="Gurdian Email">
                                        <label for="gmail">Email Anda</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="cname" placeholder="Child Name">
                                        <label for="cname">Tipe Kursus</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="cage" placeholder="Child Age">
                                        <label for="cage">Mobil Dan Transmisi Apa </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                        <label for="message">Pesan</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Submit</button>
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
                <h1 class="display-6 mb-4">Tutor kami Sudah Berpengalaman Dan Telah Mengajar Banyak Siswa Dengan Sukses</h1>
            </div>
            <div class="row g-0 team-items">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/valerie.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-instagram"></i></a>
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
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-instagram"></i></a>
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
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-instagram"></i></a>
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
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-instagram"></i></a>
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
                            <img class="img-fluid" src="img/veloz.png" alt="" style="height: 175px;width: 400px">
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
                            <img class="img-fluid" src="img/xenia.jpg" alt="" style="height: 175px;width: 400px">
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
                            <img class="img-fluid" src="img/brio.jpeg" alt="" style="height: 175px;width: 400px">
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
                            <img class="img-fluid" src="img/ignis.jpeg" alt="" style="height: 175px;width: 400px">
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
                            <img class="img-fluid" src="img/march.jpg" alt="" style="height: 175px;width: 400px">
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
                            <img class="img-fluid" src="img/mobilio.jpg" alt="" style="height: 175px;width: 400px">
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
                            <img class="img-fluid" src="img/sigra.jpg" alt="" style="height: 175px;width: 400px">
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

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer my-6 mb-0 py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Kantor</h4>
                    <h2 class="text-primary mb-4"><i class="fa text-white me-2"></i>Mobilan</h2>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Komplek Agung Citra Sari Blok E 20, Batam Kota, Batam</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+0811 222 877</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>admin@mobilan.com</p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <h4 class="text-light mb-4">Konten</h4>
                    <a class="btn btn-link" href="#tentang-kami">Tentang Kami</a>
                    <a class="btn btn-link" href="#kursus">Kursus</a>
                    <a class="btn btn-link" href="#tutor">Tutor</a>
                    <a class="btn btn-link" href="#mobil">Mobil</a>
                    <a class="btn btn-link" href="#booking">Booking</a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Langganan Email</h4>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control p-3 border-0" placeholder="Email Anda">
                            <button class="btn btn-primary">Langganan</button>
                        </div>
                    </form>
                    <h6 class="text-white mt-4 mb-3">Media Sosial Kami</h6>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright text-light py-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">2023 PT Mobilan Solusi Indonesia</a>. All Right Reserved.
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js?v4')}}"></script>
</body>

</html>
