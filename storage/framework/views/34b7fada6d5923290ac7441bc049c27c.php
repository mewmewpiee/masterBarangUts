<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
    <style>
        .profile-img {
            width: 10%;
        }

        .content-img {
            width: 400px;
            height: 180px;
            margin-left: 50px;
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-black">
        <div class="container">
            <a href="/" class="navbar-brand mb-0 h1">
                <img class="img-fluid me-2" src="<?php echo e(Vite::asset('resources/images/logo-white.svg')); ?>" alt="logo" style="width: 40px;"> Binchilin
            </a>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">
                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="/" class="nav-link active">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('items.index')); ?>" class="nav-link">Items List</a></li>
                </ul>
                <hr class="d-lg-none text-white-50">
            </div>
        </div>
    </nav>

    <section class="py-5 bg-image-full">
        <div class="text-center my-5">
            <img class="img-fluid rounded-circle mb-4 profile-img" src="<?php echo e(Vite::asset('resources/images/main.jpg')); ?>" alt="..." />
            <h1 class="text-dark fs-3 fw-bolder">Novan Ardani Agustian</h1>
            <p class="text-dark-50 mb-0">
                Mahasiswa Sistem Informasi 2020 Institut Teknologi Telkom Surabaya
            </p>
        </div>
    </section>

    <section class="py-5 bg-dark">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h2 class="text-white">Profil</h2><br>
                    <p class="lead text-white">Mahasiswa S1 Sistem Informasi Fakultas
                        Fakultas Teknologi Informasi dan Bisnis (FTIB)
                        IT Telkom Surabaya yang tertarik dan memiliki
                        minat tinggi dalam dunia Teknologi Informasi dan Bisnis.
                    </p>
                    <p class=" lead text-white">Saya termotivasi untuk mencoba hal baru dan
                        menantang diri sendiri untuk keluar dari zona
                        nyaman untuk meningkatkan skill, critical
                        thinking, kolaborasi, public speaking, dan
                        problem solving.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light mt-5">
        <div class="container py-5 px-4 justify-content-center">
            <div class="row">
                <div class="col-md-5 order-md-2 text-center my-5">
                    <h2>Kontak</h2><br>
                    <h5 class="lead text-dark"><b>novan.ardani.20@student.is.ittelkom-sby.ac.id</b></h5>
                    <p class="lead text-dark">+62-8953-9273-4889</p>
                    <p class="lead text-dark">Ds. Jampirogo, Kec. Sooko, Kabupaten
                        Mojokerto, Jawa Timur 61361</p>
                </div>
                <div class="col-md-7 order-md-1 text-center my-5">
                    <h2>Biodata Mahasiswa</h2><br>

                    <p class="lead text-dark">
                        <b>Nama</b>	:	NOVAN ARDANI AGUSTIAN
                    </p>
                    <p class="lead text-dark">
                        <b>Jenis Kelamin</b>	:	Laki-Laki
                    </p>
                    <p class="lead text-dark">
                        <b>Perguruan Tinggi</b>	:	Institut Teknologi Telkom Surabaya
                    </p>
                    <p class="lead text-dark">
                        <b>Program Studi</b>	:	Sistem Informasi
                    </p>
                    <p class="lead text-dark">
                        <b>Jenjang</b>	:	S1
                    </p>
                    <p class="lead text-dark">
                        <b>Nomor Induk Mahasiswa</b>	:	1204200082
                    </p>
                    <p class="lead text-dark">
                        <b>Semester Awal</b>	:	Ganjil 2020
                    </p>
                    <p class="lead text-dark">
                        <b>Status Awal Mahasiswa</b>	:	Peserta didik baru
                    </p>
                    <p class="lead text-dark">
                        <b>Status Mahasiswa Saat ini</b>	:	Belum Lulus
                    </p>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-4 bg-black">
        <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Saya Anime</p></div>
    </footer>

    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>

</body>

</html>
<?php /**PATH E:\framework-uts\masterBarangUts\resources\views/welcome.blade.php ENDPATH**/ ?>