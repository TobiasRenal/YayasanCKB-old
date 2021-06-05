<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Yayasan CKB</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('argon') }}/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="/">PKBM CKB</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Profile
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="/sejarah">Latar Belakang & Sejarah</a></li>
                                <li><a class="dropdown-item" href="#">Personalia</a></li>
                                <li><a class="dropdown-item" href="#">Kurikulum</a></li>
                            </ul>
                            </li>
                        </ul>
                        </div>
                        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Layanan
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Kesetaraan</a></li>
                                <li><a class="dropdown-item" href="/inggris">Kursus Bahasa Inggris</a></li>
                                <li><a class="dropdown-item" href="#">Kursus Komputer</a></li>
                                <li><a class="dropdown-item" href="#">Kursus Musik</a></li>
                                <li><a class="dropdown-item" href="#">Kober Cahaya Bintang</a></li>
                                <li><a class="dropdown-item" href="#">Taekwondo</a></li>
                                <li><a class="dropdown-item" href="#">Karate INKAI</a></li>
                            </ul>
                            </li>
                        </ul>
                        </div>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Pendaftaran</a></li>
                        <li class="nav-item"><a class="nav-link" href="/contact">Kontak</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Administrator</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <!-- <header class="masthead">
            
        </header> -->
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Kursus Komputer</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <p class="mb-4">
                    PKBM Cahaya Kahuripan Bangsa menyelenggarakan kursus komputer administrasi perkantoran. 
                    Dengan mengikuti kursus komputer di PKBM CKB, Anda dapat menggunakan aplikasi office untuk membuat berbagai laporan, perhitungan dengan rumus-rumus, 
                    menyiapkan penampilan presentasi, mengirim surat elektronik, mengakses internet, dan menggunakan aplikasi Google dengan G Suite for Education.
                </p>
                <h2 class="mb-4">
                    Keahlian apa yang akan saya kuasai?
                </h2>
                <p class="mb-4">
                    Ada tiga tingkatan kursus komputer administrasi perkantoran PKBM CKB:
                </p>
                <p class="mb-4">
                    <ol>
                        <li>
                            Dasar untuk mereka yang sama sekali belum pernah menggunakan komputer atau mereka yang pernah menggunakan komputer namun belum begitu terbiasa. 
                            Lulusan tingkat Dasar diharapkan sudah mengenal komputer dan bisa mengerjakan pekerjaan perkantoran sederhana.
                            
                        </li>
                        </br>
                        <li>
                            Menengah untuk mereka yang biasa menggunakan komputer namun belum mengenal semua fitur office secara detail dan mengerjakan pekerjaan yang sifatnya kompleks. 
                            Lulusan tingkat Menengah diharapkan sudah mampu menggunakan aplikasi Office untuk melakukan pekerjaan-pekerjaan rutinan sederhana maupun yang lebih rumit.
                            
                        </li>
                        </br>
                        <li>
                            Mahir untuk mereka yang sudah mahir menggunakan aplikasi Office namun belum mengenal fitur-fitur dan keterampilan khusus untuk menyempurnakan 
                            penguasaan keterampilan Office Anda. Lulusan tingkat Mahir diharapkan mampu menyelesaikan permasalahan-permasalahan dan tantangan-tantangan yang berkaitan 
                            dengan administrasi yang sifatnya bukan suatu hal yang rutin (misalnya, mengerjakan makalah penelitian, menerjemahkan dokumen, menyusun daftar indeks, 
                            dan lainnya) dan menyusun sendiri serta menerapkan langkah-langkah penyelesaiannya dengan terampil dan cepat.
                            
                        </li>
                        </br>
                    </ol> 
                </p>
                <p class="mb-4">
                    Ada beberapa aplikasi yang diajarkan pada kursus komputer aplikasi perkantoran PKBM CKB.
                </p>
                <h3 class="mb-4">
                    Microsoft Office Word
                </h3>
            </div>
        </section>
        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{ asset('argon') }}/img/portfolio/fullsize/kesetaraan.jpg" title="Project Name">
                            <img class="img-fluid" src="{{ asset('argon') }}/img/portfolio/thumbnails/kesetaraan.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Program</div>
                                <div class="project-name">Kesetaraan</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{ asset('argon') }}/img/portfolio/fullsize/kursusinggris.jpg" title="Project Name">
                            <img class="img-fluid" src="{{ asset('argon') }}/img/portfolio/thumbnails/kursusinggris.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Program</div>
                                <div class="project-name">Kursus Bahasa Inggris</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{ asset('argon') }}/img/portfolio/fullsize/kelaskomputer.jpg" title="Project Name">
                            <img class="img-fluid" src="{{ asset('argon') }}/img/portfolio/thumbnails/kelaskomputer.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Program</div>
                                <div class="project-name">Kursus Komputer</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{ asset('argon') }}/img/portfolio/fullsize/musik.jpg" title="Project Name">
                            <img class="img-fluid" src="{{ asset('argon') }}/img/portfolio/thumbnails/musik.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Program</div>
                                <div class="project-name">Kursus Musik</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{ asset('argon') }}/img/portfolio/fullsize/paud.jpg" title="Project Name">
                            <img class="img-fluid" src="{{ asset('argon') }}/img/portfolio/thumbnails/paud.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Program</div>
                                <div class="project-name">Kober Cahaya Bintang</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{ asset('argon') }}/img/portfolio/fullsize/taekwondo.jpg" title="Project Name">
                            <img class="img-fluid" src="{{ asset('argon') }}/img/portfolio/thumbnails/taekwondo.jpg" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">Program</div>
                                <div class="project-name">Taekwondo</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-3">
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{ asset('argon') }}/img/portfolio/fullsize/karate.jpg" title="Project Name">
                            <img class="img-fluid" src="{{ asset('argon') }}/img/portfolio/thumbnails/karate.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Program</div>
                                <div class="project-name">Karate INKAI</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to action-->
        <section class="page-section bg-dark text-white">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
                <a class="btn btn-light btn-xl" href="https://startbootstrap.com/theme/creative/">Download Now!</a>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2021 - Yayasan Cahaya Kahuripan Bangsa</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('argon') }}/js/scripts.js"></script>
    </body>
</html>