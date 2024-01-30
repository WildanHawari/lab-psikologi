<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Asisten dan Programmer Lab Psikologi Gunadarma</title>
    <link type="image/png"
        href="https://fpsi.gunadarma.ac.id/psikologi/wp-content/uploads/2023/05/Logo_Gunadarma-removebg-preview-1-1.png"
        rel="apple-touch-icon" />
    <link type="image/png"
        href="https://fpsi.gunadarma.ac.id/psikologi/wp-content/uploads/2023/05/Logo_Gunadarma-removebg-preview-1-1.png"
        rel="icon" />
    {{-- bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- font awesome --}}
    <script src="https://kit.fontawesome.com/fbba1bc2d7.js" crossorigin="anonymous"></script>
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    {{-- css js --}}
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/javascript.js"></script>
</head>

<body>
    <!-- Annpuncement -->
    <nav class="announcement-bar navbar bg-body-tertiary">
        <div class="container-fluid text-center justify-content-center">
            <span class="navbar-text">
                <?= $announcement ?>
            </span>
            <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover ps-2"
                href="{{ $link_announcement }}">
                daftar di sini <i class="bi bi-arrow-right align-middle" aria-hidden="true"></i>
            </a>
        </div>
    </nav>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top" id="main-nav">
        <div class="container">
            <a class="navbar-brand fw-bold" href="">
                <img src="https://i.ibb.co/pbWvbQj/Gunadarma.png" alt="Logo" width="50" height="50"
                    class="d-inline-block align-text-middle">
                Laboratorium Psikologi
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation"
                style="box-shadow: none">
                <i class="fa-solid fa-bars fa-lg"></i>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <img src="https://i.ibb.co/pbWvbQj/Gunadarma.png" alt="Logo" width="70" height="70"
                        class="offcanvas-title" id="offcanvasNavbarLabel">
                    <h5 class="offcanvas-title fw-bolder" id="offcanvasNavbarLabel">Laboratorium Psikologi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"
                        style="box-shadow: none"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tentang">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Jadwal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Persyaratan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kontak</a>
                        </li>
                    </ul>
                    <br>
                    <div class="d-grid gap-1 d-md-flex">
                        <button class="btn btn-outline-primary me-md-2 fw-semibold px-3 rounded-1"
                            type="button">Masuk</button>
                        <button class="btn btn-primary fw-semibold px-3 rounded-1" type="button">Daftar</button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- beranda -->
    <div class="container mt-5 py-3 pb-lg-5 mb-lg-5 pt-lg-5">
        <div class="row gx-5 flex-lg-row-reverse">
            <div class="col-6 col-md-4 mb-4 mx-auto">
                <img src="<?= $image ?>" class="d-block mx-lg-auto img-fluid rounded-circle rounded-top-0"
                    alt="image" width="700" height="500" loading="lazy" style="margin-top: -25px">
            </div>
            <div class="col-lg-8 mb-3">
                <h1 class="fw-bolder">PENERIMAAN ASISTEN DAN PROGRAMMER BARU LABORATORIUM PSIKOLOGI <?= $tahun ?></h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque accusantium molestiae expedita omnis
                    officia a aspernatur tempore voluptas adipisci alias minima dolorem, consequatur porro
                    reprehenderit, dolorum, tenetur ea optio velit!</p>
                <div class="text-center text-lg-start">
                    <a class="btn btn-primary mt-2 fw-semibold rounded-1 py-2 px-3 icon-link icon-link-hover align-items-center justify-content-center align-self-center"
                        href="#" role="button">Daftar Sekarang
                        <i class="bi bi-arrow-right align-middle" aria-hidden="true" style="margin-top: -5px"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Tentang -->
    <div class="mt-lg-5 pt-lg-5" id="tentang">
        <div class="bg-body-secondary p-5">
            <div class="container">
                <h2 class="fw-bolder mb-4">Tentang Laboratorium Psikologi</h2>
                <p>Program Studi (Prodi) Psikologi S1 Universitas Gunadarma memberikan pengetahuan dan ketrampilan
                    psikologi
                    secara umum disertai dengan pendekatan interdisipliner, khususnya teknologi informasi, guna
                    menghasilkan
                    sarjana psikologi yang memiliki kemampuan intelektual dan keterampilan yang memadai dalam bidang
                    psikologi serta peka terhadap analisis perilaku manusia yang tidak dapat lepas dari peran teknologi
                    dalam kehidupannya sehingga memiliki daya saing dan kemampuan adaptif untuk melanjutkan pendidikan
                    profesi maupun berkarir dalam berbagai bidang yang berkaitan dengan perilaku manusia.</p>
            </div>
        </div>
    </div>

    {{-- Jadwal --}}
    <div class="container px-4 py-5">
        <h2 class="fw-bolder text-center">Jadwal Pendaftaran dan Pelaksanaan</h2>
        <p class="text-center">Catat jadwal pendaftaran dan pelaksanaan calon asisten dan programmer laboratorium
            psikologi.
            daftar segera jangan sampai ketinggalan!
        </p>
        <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
            <div class="col d-flex flex-column align-items-center gap-2">
                <div class="text-center">
                    <img src="https://i.ibb.co/qFQ1339/human-ilustrator.png" class="rounded" alt="image">
                </div>
            </div>

            <div class="col">
                <div class="row row-cols-1 row-cols-sm-2 g-4">
                    <div class="col d-flex flex-column gap-2">
                        <div class="feature-icon-small d-inline-flex fs-4 rounded-3 flex-shrink-0 me-3">
                            <i class="bi bi-calendar-week text-bg-primary py-2 px-3 rounded-3"></i>
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Pembukaan Pendaftaran</h4>
                        <p class="text-body-secondary">1 Januari 2024</p>
                    </div>

                    <div class="col d-flex flex-column gap-2">
                        <div class="feature-icon-small d-inline-flex fs-4 rounded-3 flex-shrink-0 me-3">
                            <i class="bi bi-card-heading text-bg-primary py-2 px-3 rounded-3"></i>
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Gelombang Pendaftaran</h4>
                        <p class="text-body-secondary">Gelombong 1</p>
                    </div>

                    <div class="col d-flex flex-column gap-2">
                        <div class="feature-icon-small d-inline-flex fs-4 rounded-3 flex-shrink-0 me-3">
                            <i class="bi bi-calendar-x text-bg-primary py-2 px-3 rounded-3"></i>
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Penutupan Pendaftaran</h4>
                        <p class="text-body-secondary">13 Januari 2024</p>
                    </div>

                    <div class="col d-flex flex-column gap-2">
                        <div class="feature-icon-small d-inline-flex fs-4 rounded-3 flex-shrink-0 me-3">
                            <i class="bi bi-diagram-3 text-bg-primary py-2 px-3 rounded-3"></i>
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Technical Meeting</h4>
                        <p class="text-body-secondary">17 Januari 2024
                        </p>
                    </div>

                    <div class="col d-flex flex-column gap-2">
                        <div class="feature-icon-small d-inline-flex fs-4 rounded-3 flex-shrink-0 me-3">
                            <i class="bi bi-display text-bg-primary py-2 px-3 rounded-3"></i>
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Pelaksanaan Seleksi</h4>
                        <p class="text-body-secondary">1 Februari 2024
                        </p>
                    </div>

                    <div class="col d-flex flex-column gap-2">
                        <div class="feature-icon-small d-inline-flex fs-4 rounded-3 flex-shrink-0 me-3">
                            <i class="bi bi-megaphone text-bg-primary py-2 px-3 rounded-3"></i>
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Pengumuman Hasil</h4>
                        <p class="text-body-secondary">7 Februari 2024
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>




    {{-- gsap animation --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    {{-- bootstrap js --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
