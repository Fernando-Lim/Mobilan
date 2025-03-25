<!DOCTYPE html>
<html lang="en" id="top">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <title>Mobilan - Sekolah Mengendarai</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/mobilan.png') }}" rel="shortcut icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-secondary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0">Mobilan</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="#top" class="nav-item nav-link active">Beranda</a>
                <a href="#tentang-kami" class="nav-item nav-link">Tentang Kami</a>
                <a href="#kursus" class="nav-item nav-link">kursus</a>
                <a href="#tutor" class="nav-item nav-link">Tutor</a>
                <a href="#mobil" class="nav-item nav-link">Mobil</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    @yield('content')


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer my-6 mb-0 py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Kantor</h4>
                    <h2 class="text-primary mb-4"><i class="fa text-white me-2"></i>Mobilan</h2>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Komplek Agung Citra Sari Blok E 20, Batam
                        Kota, Batam</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+0811 222 877</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>admin@mobilan.com</p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <h4 class="text-light mb-4">Konten</h4>
                    <a class="btn btn-link" href="#tentang-kami">Tentang Kami</a>
                    <a class="btn btn-link" href="#kursus">Kursus</a>
                    <a class="btn btn-link" href="#booking">Booking</a>
                    <a class="btn btn-link" href="#tutor">Tutor</a>
                    <a class="btn btn-link" href="#mobil">Mobil</a>
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
                        <a class="btn btn-square btn-outline-light me-1" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light me-0" href=""><i
                                class="fab fa-linkedin-in"></i></a>
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
                    &copy; <a href="">2025 PT Mobilan Solusi Indonesia</a>. All Right Reserved.
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#top" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js?v4') }}"></script>

    <script>
        document.querySelectorAll('.navbar-nav a, .btn-link, .btn').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const navLinks = document.querySelectorAll(".navbar-nav a");

            // Function to determine the appropriate threshold based on screen width
            function getThreshold() {
                return window.innerWidth <= 768 ? 0.1 : 0.3; // Adjust 768 to your mobile breakpoint
            }

            // IntersectionObserver options
            const observerOptions = {
                root: null,
                threshold: getThreshold()
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    // When a section is in view, remove active class from all nav links,
                    // then add active to the link corresponding to the section's id.
                    if (entry.isIntersecting) {
                        navLinks.forEach(link => link.classList.remove("active"));
                        const activeLink = document.querySelector(
                            `.navbar-nav a[href="#${entry.target.id}"]`);
                        if (activeLink) {
                            activeLink.classList.add("active");
                        }
                    }
                });
            }, observerOptions);

            // Observe all sections except the one with id "top"
            navLinks.forEach(link => {
                const targetId = link.getAttribute("href").substring(1);
                if (targetId !== "top") {
                    const targetSection = document.getElementById(targetId);
                    if (targetSection) {
                        observer.observe(targetSection);
                    }
                }
            });

            // Special handling for "Beranda" (#top)
            window.addEventListener("scroll", () => {
                if (window.scrollY < 100) { // Adjust threshold as needed
                    navLinks.forEach(link => link.classList.remove("active"));
                    const topLink = document.querySelector(`.navbar-nav a[href="#top"]`);
                    if (topLink) {
                        topLink.classList.add("active");
                    }
                }
            });
        });
    </script>

    <script>
        function sendEmail(event) {
            event.preventDefault(); // Prevents default form submission

            // Get form values
            let name = document.getElementById("gname").value.trim();
            let email = document.getElementById("gmail").value.trim();
            let type = document.getElementById("type").value;
            let car = document.getElementById("car").value;
            let message = document.getElementById("message").value.trim();

            // Ensure all fields are filled
            if (!name || !email || !type || !car || !message) {
                alert("Harap isi semua form sebelum mengirim email.");
                return;
            }

            // Format email
            let subject = encodeURIComponent("Permintaan Informasi Kursus Mengemudi");
            let body = encodeURIComponent(
                `Nama: ${name}\nEmail: ${email}\nTipe Kursus: ${type}\nMobil: ${car}\nPesan:\n${message}`
            );

            // Open default email app
            window.location.href = `mailto:info@example.com?subject=${subject}&body=${body}`;
        }
    </script>





</body>

</html>
