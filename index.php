<?php include 'corona.php'; ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/styleIndex.css">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <title>EduCovid</title>
</head>

<body>
    <!-- kepala -->
    <header>
        <div class="scrollUp" onclick="scrollToUp();"></div>
        <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top">
            <div class="container navs">
                <a class="navbar-brand" href="#"><span id="ju1">Edu</span><span id="ju2">covid</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav ms-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link active" href="#pengertian"><i class="fas fa-file-alt"></i>&nbsp;&nbsp;Pengertian</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#gejala"><i class="fas fa-virus"></i>&nbsp;&nbsp;Gejala</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#panduan"><i class="fas fa-book"></i>&nbsp;&nbsp;Panduan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#data"><i class="fas fa-chart-bar"></i>&nbsp;&nbsp;Data</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#hubungi"><i class="far fa-address-book"></i>&nbsp;&nbsp;Kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="jumbo" id="jumbo">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h1>Halo!</h1>
                        <h1>Selamat Datang di</h1>
                        <h1 class="covid"><span id="ju1">Edu</span><span id="ju2">Covid</span></h1>
                        <p>Marilah bersatu untuk memutus</p>
                        <p class="paragraf">mata rantai penyebaran Covid-19</p>
                        <p class="paragraf">dengan mematuhi protokol kesehatan</p>
                        <p class="paragraf"><i><b>#PakaiMasker #Dirumahaja</b></i></p>
                    </div>
                    <div class="col-6">
                        <img src="./assets/img/masker.png" width="400">
                    </div>
                </div>
            </div>
        </section>
        <section class="pengertian" id="pengertian">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <br><br><br><br>
                        <h2 class="text-center"><span class="judul">Pengertian Covid</span></h2>
                        <p class="kalimat" style="margin-top: 15px;">
                            Virus Corona atau severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2) adalah virus yang menyerang sistem pernapasan. Penyakit karena infeksi virus ini disebut COVID-19. Virus Corona bisa menyebabkan gangguan ringan pada sistem pernapasan, infeksi
                            paru-paru yang berat, hingga kematian. Severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2) yang lebih dikenal dengan nama virus Corona adalah jenis baru dari coronavirus yang menular ke manusia. Virus ini bisa menyerang
                            siapa saja, seperti lansia (golongan usia lanjut), orang dewasa, anak-anak, dan bayi, termasuk ibu hamil dan ibu menyusui.
                        </p>
                        <span>sumber : <a href="https://id.wikipedia.org/wiki/Koronavirus">wikipedia</a></span>
                    </div>
                </div>
            </div>
        </section>
        <section class="gejala" id="gejala">
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <br><br><br>
                        <h2><span class="judul" style="margin-top: 15px;">Gejala Covid</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h3>01</h3>
                        <h4>Demam</h4>
                        <img src="assets/img/orang demam.png" alt="orang demam">
                        <p class="kalimat">
                            Demam merupakan urutan pertama gejala terinfeksi virus corona yang diderita sebagian besar pasien Covid-19. Ada kecenderungan pasien mengalami demam selama beberapa hari setelah terkena virus.
                        </p>

                    </div>
                    <div class="col-md-6">
                        <h3>02</h3>
                        <h4>Batuk</h4>
                        <img src="assets/img/orang batuk.png" alt="oramg batuk">
                        <p class="kalimat">
                            Tidak semua batuk adalah gejala Covid-19. Batuk yang ditimbulkan akibat Covid-19 biasanya bersifat kering. Hal ini dikarenakan infeksi virus menyebar ke dalam tubuh melalui hidung atau mulut, sehingga gejala kedua yang dapat menyebabkan timbulnya penyakit
                            ini adalah batuk.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h3>03</h3>
                        <h4>Kehilangan rasa dan bau</h4>
                        <img src="assets/img/orang tidak berasa.png" alt="">
                        <p class="kalimat" s>
                            Urutan gejala terinfeksi virus corona selanjutnya adalah hilangnya kemampuan indera perasa dan penciuman. Gejala Covid-19 ini telah dilaporkan sebagai salah satu tanda awal penyakit Covid-19. Sama seperti gejala batuk, karena infeksi menyebar ke tubuh
                            melalui hidup dan mulut, maka kemungkinan besar akan memengaruhi indera penciuman dan perasa.
                        </p>

                    </div>
                    <div class="col-md-6">
                        <h3>04</h3>
                        <h4>Sakit tenggorokan, sakit kepala, nyeri otot</h4>
                        <img src="assets/img/sakit kepala.png" alt="orang sakit kepala">
                        <p class="kalimat">
                            Urutan gejala terinfeksi virus corona berikutnya berupa nyeri otot, sakit tenggorokan dan sakit kepala. Urutan gejala Covid-19 ini terjadi saat virus telah masuk ke dalam tubuh manusia dan mulai berkembang biak. Pada tingkat yang lebih parah, virus dapat
                            menyebabkan peradangan, sehingga menyebabkan rasa sakit.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3>05</h3>
                        <h4>Diare</h4>
                        <!-- <img src="" alt=""> -->
                        <p class="kalimat">
                            Infeksi virus juga mempengaruhi sistem pencernaan dan usus. Hal ini menyebabkan penderita mengalami diare. Diare yang disebabkan karena Covid-19 serta gejala lainnya, dapat mengonfirmasi bahwa seseorang telah terinfeksi virus. Apabila seseorang mengalami
                            serangkaian gejala semacam ini, maka harus menjalani tes lebih awal.
                        </p>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section class="panduan" id="panduan">
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <h3 class="text-center"><span class="judul">Panduan Protokol Kesehatan </span></h3>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-6 description description-1">
                        <img src="./assets/img/pakai_masker.png" class="image">
                        <h2>01</h2>
                        <h4>Pakai Masker</h4>
                        <p>Selalu menggunakan masker ketika bepergian</p>
                    </div>
                    <div class="col-md-6 description description-2">
                        <img src="./assets/img/cuci_tangan.png" class="image">
                        <h2>02</h2>
                        <h4>Mencuci Tangan</h4>
                        <p>Selalu mencuci tangan dengan sabun</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 description description-3">
                        <img src="./assets/img/hand_sanitizer.png" class="image">
                        <h2>03</h2>
                        <h4>Membawa Hand Sanitizer</h4>
                        <p>Selalu membawa hand sanitizer ketika bepergian</p>
                    </div>
                    <div class="col-md-6 description description-4 mr-md-auto">
                        <img src="./assets/img/social_distancing.png" class="image">
                        <h2>04</h2>
                        <h4>Menjaga Jarak</h4>
                        <p>Selalu menjaga jarak dan menghindari kerumunan orang</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="data text-center" id="data">
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col">
                    <h3 class="text-center"><span class="judul">Data </span></h3>
                </div>
                <h3 style="margin-top: 20px;">Data Covid Di Indonesia</h3>
                <div class="col-md-4" style="background-color: #fd7e14;">
                    <h4>Positif</h4>
                    <i class="fas fa-frown-open"></i>
                    <p><?= $positif;?> ORANG</p>
                </div>
                <div class="col-md-4 bg-danger">
                    <h4>Meninggal</h4>
                    <i class="fas fa-dizzy"></i>
                    <p><?= $meninggal;?> ORANG</p>
                </div>
                <div class="col-md-4 bg-success">
                    <h4>Sembuh</h4>
                    <i class="fas fa-smile-beam"></i>
                    <p><?= $sembuh;?> ORANG</p>
                </div>
            </div>

            <div class="row">
                <h3 style="margin-top: 20px;">Data Covid Di Global</h3>
                <div class="col-md-4" style="background-color: #fd7e14;">
                    <h4>Positif</h4>
                    <i class="fas fa-frown-open"></i>
                    <p><?= $jumlah_positif;?> ORANG</p>
                </div>
                <div class="col-md-4 bg-danger">
                    <h4>Meninggal</h4>
                    <i class="fas fa-dizzy"></i>
                    <p><?= $jumlah_meninggal;?> ORANG</p>
                </div>
                <div class="col-md-4 bg-success">
                    <h4>Sembuh</h4>
                    <i class="fas fa-smile-beam"></i>
                    <p><?= $jumlah_sembuh;?> ORANG</p>
                    <H1>
                        
                    </H1>
                </div>
            </div>
        </div>
    </section>
        <section class="hubungi" id="hubungi">
            <div class="container text-center">
                <div class="row">
                    <h2><span class="judul" style="margin-top: 35px;">Kontak</span></h2>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="name" class="h4">Masukkan nama anda </label>
                        <input type="text" class="form-control" id="name" placeholder="Masukan Nama anda ..." required>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="email" class="h4">Masukkan Email anda </label>
                        <input type="email" class="form-control" id="email" placeholder="Masukan Email anda ..." required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message" class="h4 ">Masukkan komentar anda </label>
                    <textarea id="message" class="form-control" rows="5" placeholder="Masukan Komentar anda ..." required></textarea>
                </div>
                <br>
                <button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right ">Kirim</button>
            </div>
        </section>
    </main>
    <br><br>
    <footer class="bg-light text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;" href="#!" role="button"><i class="fab fa-facebook-f"></i
            ></a>

                <!-- Twitter -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee;" href="#!" role="button"><i class="fab fa-twitter"></i
            ></a>

                <!-- Instagram -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;" href="#!" role="button"><i class="fab fa-instagram"></i
            ></a>
                <!-- Github -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #333333;" href="https://github.com/anriansihotang/anriansihotang.github.io" role="button"><i class="fab fa-github"></i
            ></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            <h4><i class="far fa-copyright"></i>&nbsp;Copyright 2021</h4>
        </div>
        <!-- Copyright -->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript">
        window.addEventListener('scroll', function() {
            var scroll = document.querySelector('.scrollUp');
            scroll.classList.toggle("active", window.scrollY > 500)
        })

        function scrollToUp() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            })
        }
    </script>
</body>

</html>