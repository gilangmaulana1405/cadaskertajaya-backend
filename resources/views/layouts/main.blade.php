<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Cadaskertajaya</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="https://karawangkab.go.id/sites/default/files/krw-icon.png" rel="shortcut icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">


    <!-- =======================================================
  * Template Name: Mentor - v4.7.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="navbar navbar-light bg-light">
        <div class="container-fluid">

            <h1>
                <a href="/" class="logo d-flex align-items-center  me-auto me-lg-0">
                    <img src="https://karawangkab.go.id/sites/default/files/krw-icon.png" alt="">
                    Cadaskertajaya</a>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="d-flex">
                <ul>
                    <li><a class="active" href="/">Home</a></li>
                    <li><a href="#profil_desa">Profil Desa</a></li>
                    <li><a href="#Pelayanan">Pelayanan Publik</a></li>
                    <li><a href="#Contant">Kontak Kami</a></li>
                    <li><a href="/admin/login">Login</a></li>
                </ul>
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <h1>Selamat Datang Di<br>Desa Cadaskertajaya</h1>
            <h2>Kecamatan Telagasari, Kabupaten Karawang, Jawa Barat</h2>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        @yield('content')
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="Contant">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 footer-contact">
                        <h2>Cadaskertajaya</h3>
                            <h4>
                                Desa Cadaskertajaya 41381<br />
                                Indonesia <br /><br />
                                <strong>Phone:</strong> +62 896 3737 9535<br />
                                <strong>Email:</strong> desacadaskertajaya10@gmail.com<br />
                            </h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">
            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>KKN UNSIKA FASILKOM 2023</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
                    Designed by <a href="#">KKN Unsika</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>


<!-- Modal SKU -->
<div class="modal fade" id="ModelSKU" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h2>Formulir SKU</h2>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <form action="{{ route('sku.create') }}" method="POST" id="formSKU">
                <div class="modal-body">
                    <p class="statusMsg"></p>
                    @csrf
                    <div>
                        <h4>Data Pemilik Usaha</h4>
                    </div>
                    <div class="form-group">
                        <label for="inputNama">Nama</label>
                        <input type="text" class="form-control alphabet-input" name="nama" id="inputNama" placeholder="Masukan nama" required />
                    </div>
                    <div class="form-group">
                        <label for="inputTtl">Tempat/Tanggal Lahir</label>
                        <input type="text" class="form-control" name="ttl" id="inputTtl" placeholder="cth: Karawang, 01 Januari 2002" required />
                    </div>
                    <div class="form-group">
                        <label for="inputJeniskelamin">Jenis Kelamin</label>
                        <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputAlamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="inputAlamat" placeholder="Masukan alamat" required />
                    </div>
                    <div class="form-group">
                        <label for="inputAgama">Agama</label>
                        <select class="form-select" name="agama">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputStatusperkawinan">Status Perkawinan</label>
                        <select class="form-select" name="status_perkawinan">
                            <option value="Belum Menikah">Belum Menikah</option>
                            <option value="Menikah">Menikah</option>
                            <option value="Cerai">Cerai</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputPekerjaan">Pekerjaan</label>
                        <input type="text" class="form-control alphabet-input" name="pekerjaan" id="inputPekerjaan" placeholder="Cth: Wiraswasta" required />
                    </div>
                    <div class="form-group">
                        <label for="inputKewarganegaraan">Kewarganegaraan</label>
                        <select class="form-select" name="kewarganegaraan">
                            <option value="WNI">WNI</option>
                            <option value="WNA">WNA</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputNik">NIK</label>
                        <input type="text" class="form-control numeric-input nik" name="nik" placeholder="Masukan NIK" required />
                    </div>
                    <div>
                        <br>
                        <h4>Data Usaha</h4>
                    </div>
                    <div class="form-group">
                        <label for="inputTahunUsaha">Tahun Awal Usaha</label>
                        <input type="text" class="form-control numeric-input tahunUsaha" name="tahun_usaha" placeholder="Masukan tahun awal usaha" required />
                    </div>
                    <div class="form-group">
                        <label for="inputNamausaha">Nama Usaha</label>
                        <input type="text" class="form-control" name="nama_usaha" id="inputNamausaha" placeholder="Masukan nama usaha" required />
                    </div>
                    <div class="form-group">
                        <label for="inputJenisusaha">Jenis Usaha</label>
                        <input type="text" class="form-control alphabet-input" name="jenis_usaha" id="inputJenisusaha" placeholder="Masukan jenis usaha" required />
                    </div>
                    <div class="form-group">
                        <label for="inputLokasi">Lokasi Usaha</label>
                        <input type="text" class="form-control" name="lokasi_usaha" id="inputLokasi" placeholder="Masukan lokasi usaha" required />
                    </div>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal SKM -->
<div class="modal fade" id="ModelSKM" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h2>Formulir SKK</h2>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <form action="{{ route('skm.create') }}" method="POST" id="formSKM">
                <div class="modal-body">
                    <p class="statusMsg"></p>
                    @csrf
                    <div>
                        <h4>Yang bertanda tangan dibawah ini, menerangkan bahwa</h4>
                    </div>
                    <div class="form-group">
                        <label for="inputNama">Nama Lengkap</label>
                        <input type="text" class="form-control alphabet-input" name="nama" id="inputNama" placeholder="Masukan nama" required />
                    </div>
                    <div class="form-group">
                        <label for="inputNik">NIK</label>
                        <input type="text" class="form-control numeric-input nik" name="nik" placeholder="Masukan NIK" required />
                    </div>
                    <div class="form-group">
                        <label for="inputUmur">Umur</label>
                        <input type="text" class="form-control numeric-input umur" name="umur" placeholder="Masukan umur" required />
                    </div>
                    <div class="form-group">
                        <label for="inputPekerjaan">Pekerjaan</label>
                        <input type="text" class="form-control alphabet-input" name="pekerjaan" id="inputPekerjaan" placeholder="Cth: Wiraswasta" required />

                    </div>
                    <div class="form-group">
                        <label for="inputAlamat">Alamat KTP</label>
                        <input type="text" class="form-control" name="alamat_ktp" id="inputAlamat" placeholder="Masukan alamat" required />
                    </div>
                    <div>
                        <br>
                        <h4>Telah meninggal dunia pada</h4>
                    </div>
                    <div class="form-group">
                        <label for="inputHari">Hari</label>
                        <select class="form-select" name="hari_kematian">
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jumat">Jumat</option>
                            <option value="Sabtu">Sabtu</option>
                            <option value="Minggu">Minggu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputTanggal">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal_kematian" id="inputTanggal" required />
                    </div>
                    <div class="form-group">
                        <label for="inputPukul">Jam</label>
                        <select class="form-select" name="jam_kematian">
                            <option value="01:00">01:00</option>
                            <option value="02:00">02:00</option>
                            <option value="03:00">03:00</option>
                            <option value="04:00">04:00</option>
                            <option value="05:00">05:00</option>
                            <option value="06:00">06:00</option>
                            <option value="07:00">07:00</option>
                            <option value="08:00">08:00</option>
                            <option value="09:00">09:00</option>
                            <option value="10:00">10:00</option>
                            <option value="11:00">11:00</option>
                            <option value="12:00">12:00</option>
                            <option value="13:00">13:00</option>
                            <option value="14:00">14:00</option>
                            <option value="15:00">15:00</option>
                            <option value="16:00">16:00</option>
                            <option value="17:00">17:00</option>
                            <option value="18:00">18:00</option>
                            <option value="19:00">19:00</option>
                            <option value="20:00">20:00</option>
                            <option value="21:00">21:00</option>
                            <option value="22:00">22:00</option>
                            <option value="23:00">23:00</option>
                            <option value="24:00">24:00</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputTempatkematian">Tempat Kematian</label>
                        <input type="text" class="form-control" name="tempat_kematian" id="inputTempatkematian" placeholder="Masukan tempat kematian" required />
                    </div>
                    <div class="form-group">
                        <label for="inputPenyebabkematian">Penyebab Kematian</label>
                        <input type="text" class="form-control" name="penyebab_kematian" id="inputPenyebabkematian" placeholder="Masukan penyebab kematian" required />
                    </div>
                    <div>
                        <br>
                        <h4>Surat keterangan ini dibuat berdasarkan Keterangan pelapor</h4>
                    </div>
                    <div class="form-group">
                        <label for="inputNama">Nama Lengkap</label>
                        <input type="text" class="form-control alphabet-input" name="nama_pelapor" id="inputNama" placeholder="Masukan nama" required />
                    </div>
                    <div class="form-group">
                        <label for="inputNik">NIK</label>
                        <input type="text" class="form-control nik" name="nik_pelapor" placeholder="Masukan NIK" required />
                    </div>
                    <div class="form-group">
                        <label for="inputUmur">Umur</label>
                        <input type="text" class="form-control numeric-input umur" name="umur_pelapor" placeholder="Masukan umur" required />
                    </div>
                    <div class="form-group">
                        <label for="inputPekerjaan">Pekerjaan</label>
                        <input type="text" class="form-control alphabet-input" id="inputPekerjaan" name="pekerjaan_pelapor" placeholder="Cth: Wiraswasta" required />
                    </div>
                    <div class="form-group">
                        <label for="inputAlamat">Alamat</label>
                        <input type="text" class="form-control" id="inputAlamat" name="alamat_ktp_pelapor" placeholder="Masukan alamat" required />
                    </div>
                    <div class="form-group">
                        <label for="inputHubungan">Hubungan Pelapor Dengan Yang Meninggal Dunia</label>
                        <input type="text" class="form-control" name="status_hubungan" id="inputHubungan" placeholder="Masukan hubungan pelapor dengan yang meninggal dunia" required />
                    </div>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal SKTM -->
<div class="modal fade" id="ModelSKTM" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h2>Formulir SKTM</h2>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="{{ route('sktm.create') }}" method="POST" id="formSKTM">
                    @csrf
                    <p class="statusMsg"></p>
                    <div>
                        <h4>Yang bertanda tangan dibawah ini, menerangkan bahwa:</h4>
                    </div>
                    <div class="form-group">
                        <label for="inputNama">Nama</label>
                        <input type="text" class="form-control alphabet-input" name="nama" id="inputNama" placeholder="Masukan nama" required />
                    </div>
                    <div class="form-group">
                        <label for="inputTtl">Tempat/Tanggal Lahir</label>
                        <input type="text" class="form-control" name="ttl" id="inputTtl" placeholder="cth: Karawang, 01 Januari 2002" required />
                    </div>
                    <div class="form-group">
                        <label for="inputJeniskelamin">Jenis Kelamin</label>
                        <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputAlamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="inputAlamat" placeholder="Masukan alamat" required />
                    </div>
                    <div class="form-group">
                        <label for="inputAgama">Agama</label>
                        <select class="form-select" name="agama">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputStatusperkawinan">Status Perkawinan</label>
                        <select class="form-select" name="status_perkawinan" aria-label="Default select example">
                            <option value="Belum Menikah">Belum Menikah</option>
                            <option value="Menikah">Menikah</option>
                            <option value="Cerai">Cerai</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputPekerjaan">Pekerjaan</label>
                        <input type="text" class="form-control alphabet-input" name="pekerjaan" id="inputPekerjaan" placeholder="Cth: Wiraswasta" required />
                    </div>
                    <div class="form-group">
                        <label for="inputKewarganegaraan">Kewarganegaraan</label>
                        <select class="form-select" name="kewarganegaraan">
                            <option value="WNI">WNI</option>
                            <option value="WNA">WNA</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputNik">NIK</label>
                        <input type="text" class="form-control numeric-input nik" name="nik" placeholder="Masukan NIK" required />
                    </div>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">SUBMIT</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal SK Domisili-->
<div class="modal fade" id="ModelSKdomisili" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h2>Formulir SK Domisili</h2>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form action="{{ route('skddomisili.create') }}" method="POST" id="formSKDDomisili">
                    @csrf
                    <div>
                        <h4>Yang bertanda tangan dibawah ini, menerangkan bahwa:</h4>
                    </div>
                    <div class="form-group">
                        <label for="inputNama">Nama</label>
                        <input type="text" class="form-control alphabet-input" name="nama" id="inputNama" placeholder="Masukan nama" required />
                    </div>
                    <div class="form-group">
                        <label for="inputTtl">Tempat/Tanggal Lahir</label>
                        <input type="text" class="form-control" name="ttl" id="inputTtl" placeholder="Cth: Karawang, 01 Januari 2002" required />
                    </div>
                    <div class="form-group">
                        <label for="inputJeniskelamin">Jenis Kelamin</label>
                        <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputAlamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="inputAlamat" placeholder="Masukan alamat" required />
                    </div>
                    <div class="form-group">
                        <label for="inputAgama">Agama</label>
                        <select class="form-select" name="agama">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputStatusperkawinan">Status Perkawinan</label>
                        <select class="form-select" name="status_perkawinan" aria-label="Default select example">
                            <option value="Belum Menikah">Belum Menikah</option>
                            <option value="Menikah">Menikah</option>
                            <option value="Cerai">Cerai</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputPekerjaan">Pekerjaan</label>
                        <input type="text" class="form-control alphabet-input" name="pekerjaan" id="inputPekerjaan" placeholder="Cth: Wiraswasta" required />
                    </div>
                    <div class="form-group">
                        <label for="inputKewarganegaraan">Kewarganegaraan</label>
                        <select class="form-select" name="kewarganegaraan">
                            <option value="WNI">WNI</option>
                            <option value="WNA">WNA</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputNik">NIK</label>
                        <input type="text" class="form-control numeric-input nik" name="nik" placeholder="Masukan NIK" required />
                    </div>
                    <div class="form-group">
                        <label for="inputStatusperkawinan">Status Kependudukan</label>
                        <select class="form-select" name="status_kependudukan" aria-label="Default select example">
                            <option value="Penduduk Lama">Penduduk Lama</option>
                            <option value="Pendatang">Pendatang</option>
                        </select>
                    </div>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">SUBMIT</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal SKD Belum Menikah -->
<div class="modal fade" id="ModelSKDBelumMenikah" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h2>Formulir SKD Belum Menikah</h2>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="{{ route('skdbelummenikah.create') }}" method="POST" id="formSKDBelumMenikah">
                    @csrf
                    <p class="statusMsg"></p>
                    <div>
                        <h4>Yang bertanda tangan dibawah ini, menerangkan bahwa:</h4>
                    </div>
                    <div class="form-group">
                        <label for="inputNama">Nama</label>
                        <input type="text" class="form-control alphabet-input" name="nama" id="inputNama" placeholder="Masukan nama" required />
                    </div>
                    <div class="form-group">
                        <label for="inputTtl">Tempat/Tanggal Lahir</label>
                        <input type="text" class="form-control" name="ttl" id="inputTtl" placeholder="cth: Karawang, 01 Januari 2002" required />
                    </div>
                    <div class="form-group">
                        <label for="inputJeniskelamin">Jenis Kelamin</label>
                        <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputAlamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="inputAlamat" placeholder="Masukan alamat" required />
                    </div>
                    <div class="form-group">
                        <label for="inputAgama">Agama</label>
                        <select class="form-select" name="agama">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputStatusperkawinan">Status Perkawinan</label>
                        <select class="form-select" name="status_perkawinan" aria-label="Default select example">
                            <option value="Belum Menikah">Belum Menikah</option>
                            <option value="Menikah">Menikah</option>
                            <option value="Cerai">Cerai</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputPekerjaan">Pekerjaan</label>
                        <input type="text" class="form-control alphabet-input" name="pekerjaan" id="inputPekerjaan" placeholder="Cth: Wiraswasta" required />
                    </div>
                    <div class="form-group">
                        <label for="inputKewarganegaraan">Kewarganegaraan</label>
                        <select class="form-select" name="kewarganegaraan">
                            <option value="WNI">WNI</option>
                            <option value="WNA">WNA</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputNik">NIK</label>
                        <input type="text" class="form-control numeric-input nik" name="nik" placeholder="Masukan NIK" required />
                    </div>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">SUBMIT</button>
            </div>
            </form>
        </div>
    </div>
</div>

{{-- Modal Surat Tugas --}}
<div class="modal fade" id="ModelSuratTugas" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h2>Formulir Surat Tugas</h2>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="{{ route('surattugas.create') }}" method="POST" id="formSuratTugas">
                    @csrf
                    <p class="statusMsg"></p>
                    <div>
                        <h4>Yang bertanda tangan dibawah ini, menerangkan bahwa:</h4>
                    </div>
                    <div class="form-group">
                        <label for="inputNama">Nama Mahasiswa</label>
                        <input type="text" class="form-control alphabet-input" name="nama_mhs" id="inputNama" placeholder="Masukan nama" required />
                    </div>

                    <div class="form-group">
                        <label for="inputNpm">NPM</label>
                        <input type="text" class="form-control numeric-input npm" name="npm" placeholder="Masukan NPM" required />
                    </div>

                    <div class="form-group">
                        <label for="inputProgramStudi">Program Studi</label>
                        <input type="text" class="form-control" name="prodi" id="inputProgramStudi" placeholder="Masukan program studi" required />
                    </div>

                    <div class="form-group">
                        <label for="inputNamaDosenPembimbing">Nama Dosen Pembimbing</label>
                        <select class="form-select" name="nama_dospem" aria-label="Default select example">
                            <option value="Agung Susilo">Agung Susilo</option>
                            <option value="Carudin">Carudin</option>
                            <option value="Betha Nurina Sari">Betha Nurina Sari</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="inputJudulSkirpsi">Judul Skirpsi</label>
                        <input type="text" class="form-control alphabet-input" name="judul_skripsi" id="inputJudulSkirpsi" placeholder="Masukan judul skripsi" required />
                    </div>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">SUBMIT</button>
            </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal Peta -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" id="Peta" role="dialog">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h2>Peta Desa</h2>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <section id="about" class="about">
                <div class="container" data-aos="fade-up">

                    <div class="row">
                        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15863.427821601561!2d107.41175541530366!3d-6.282528069528592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69709e8ace7cd5%3A0x9dd546e8a3ddffc0!2sCadaskertajaya%2C%20Telagasari%2C%20Karawang%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1694952257188!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                            <h3>Secara administratif wilayah Desa Cadaskertajaya Kecamatan Telagasari
                                berbatasan dengan </h3>

                            <ul>
                                <li><i class="bi bi-check-circle"></i> Sebelah Utara : Desa Kalijaya.</li>
                                <li><i class="bi bi-check-circle"></i> Sebelah Timur : Desa Kalibuaya dan Desa Talagamulya.</li>
                                <li><i class="bi bi-check-circle"></i> Sebelah Selatan : Desa Cariumulya</li>
                                <li><i class="bi bi-check-circle"></i> Sebelah Barat : Desa Cilewo.</li>
                            </ul>

                            <p>
                                Desa Cadaskertajaya berada di daerah dataran/ pesawahan dengan ketinggian 5 m di atas permukaan laut. Berjarak 3 km dari Kota Kecamatan, 15 km dari Kota Kabupaten, 85 km dari Ibu Kota
                                Provinsi dan 72 km dari Ibu Jakarta.
                            </p>

                        </div>
                    </div>

                </div>
            </section><!-- End About Section -->



        </div>
    </div>
</div>

<!-- Modal Sejarah -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" id="Sejarah" role="dialog">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h2>Sejarah Desa</h2>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <section class="about">
                <div class="gambar-responsif">
                    <img src="assets/img/sejarah.png" class="img-fluid" alt="" />
                </div>
                <div class="container-sejarah">
                    <br>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Desa Cadaskertajaya adalah salah satu Desa dari empat belas desa yang berada di wilayah Kecamatan Telagasari Kabupaten Karawang. Cikal bakal dan awal mula terbentuknya/ berdirinya Desa Cadaskertajaya adalah hasil pemekaran/ pemecahan dari Desa Induk yakni Desa Cilewo pada tanggal 5 Maret 1981.</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pemekaran Desa Induk pada saat pemekaran itu dibagi menjadi 4 (Empat) Desa yakni terdiri dari : Desa Cadaskertajaya, Desa Ciwulan, Desa Pulosari, Desa Linggarsari. Adapun pada saat itu yang memerima penyerahan pemekaran tersebut yakni diserahterimakan kepada Pjs yang bernama M. Sartiming (sebelum adanya Kepala Desa Definitif sampai dengan Pemilihan Kepala Desa).</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pada tanggal 07 Juni 1983 Pjs dijabat oleh Empong Sapilan, dikarenakan saat itu M. Sartiming Mencalonkan sebagai Kepala Desa dan sekaligus sebagai Kepala Desa Terpilih, sehingga sejak tanggal 29 Maret 1984, M. Sartiming menjabat sebagai Kepala Desa Cadaskertajaya Definitif yang pertama terpilih.</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pertimbangan para pemangku pemerintahan dan para tokoh Masyarakat (Para Sesepuh) lintas Kampung yakni Kampung Cicadas, Cilewo dan Panyalinbanyu bahwa penempatan Kantor Desa pada saat itu dipilih yakni Dusun Cicadas Rt. 002/001 dan eksis sampai saat ini. Pemilihan tempat tersebut yang mana mengingat letaknya yang strategis yang berada di tengah-tengah dan juga diapit oleh 2 kampung yakni Kampung Cilewo dan kampung Panyalinbanyu.</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mengingat belum memiliki Nama Desa, maka para Tokoh / Sesepuh Cicadas pada saat itu berembug untuk mencari Nama Desa yang dianggap sesuai dengan kondisi, keadaan dan situasi Desa yang disesuaikan dan mengandung arti tanpa melupakan sejarah Kampung Cicadas. Nama Desa diberi nama “ Cadaskertajaya ” dimana nama tersebut diambil dari :</p>
                    <ul>
                        <li>Kata “Cadas” adalah berasal dari nama kampung Cicadas yang pada saat itu kontur tanah kampung Cicadas pada umumnya merupakan Cadas/Batu.</li>
                        <li>Kata “Kertajaya” berasal dari nama “Mbah Raden Kertajaya” yakni menurut keterangan seseorang yang bisa dan cerita kokolot baheuala (orang tua zaman dulu) bahwa Mbah Raden Kertajaya adalah seorang Raden dan beliau merupakan orang yang pertama kali Bubuka (membuka) Kampung Cicadas dan merupakan karuhun (orang tua yang sudah wafat) pewaris warga asli Cicadas. Konon menurut cerita juga bahwa Mbah Raden Kertajaya beliau enggan disebut Raden yang kemudian katelah (bernama) Uyut SAMIDUN dan sampai sekarang katelah Uyut IDUN, dimana sampai saat ini terdapat makamnya yang berada di tengah-tengah lembur (kampung). Mabah Raden Kertajaya (Uyut Idun) juga sebagai orang yang mempunyai ilmu tinggi dan memiliki parabot (pusaka-pusaka), dimana pusaka-pusakanya ditimbun (dikubur) dalam tanah, yang sampai dengan saat ini timbunan (kuburan) tersebut masih ada berupa makam yang disebut Makam Panjang, yang lokasinya tepat disebelah barat Kantor Desa Cadaskertajaya.</li>
                    </ul>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dari asal kata tersebut dengan mengacu kepada nama kampung dan kejadian sejarah (carita zaman dulu) yang terjadi di sehingga jadilah suatu Nama Desa yakni Desa “CADASKERTAJAYA” dan lokasi desanya berada di Kampung Cicadas.</p>
                </div>
            </section><!-- End About Section -->



        </div>
    </div>
</div>


<!-- Modal VisiMisi -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" id="VisiMisi" role="dialog">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h2>Visi Misi Desa</h2>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <section id="about" class="about">
                <div class="container" data-aos="fade-up">

                    <div class="row">
                        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                            <h3>Visi </h3>

                            <ul>
                                <li><i class="bi bi-check-circle"></i> Menjadi Desa Maju di Segala Bidang</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                            <h3>Misi </h3>

                            <ul>
                                <li><i class="bi bi-check-circle"></i> Peningkatan Bidang Pemerintahan Desa</li>
                                <li><i class="bi bi-check-circle"></i> Peningkatan Bidang Pembangunan Desa</li>
                                <li><i class="bi bi-check-circle"></i> Peningkatan Bidang Pembinaan Masyarakat Desa</li>
                                <li><i class="bi bi-check-circle"></i> Peningkatan Bidang Pemberdayaan Masyarakat Desa</li>
                                <li><i class="bi bi-check-circle"></i> Penanggulangan Bencana, Keadaan Darurat</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </section><!-- End About Section -->



        </div>
    </div>
</div>



<!-- membuat inputan max 16,4,2 angka untuk field NIK ,Tahun Usaha,Umur -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let inputNIK = document.querySelectorAll('.nik');
        let inputTahunUsaha = document.querySelectorAll('.tahunUsaha');
        let inputUmur = document.querySelectorAll('.umur');
        let inputNPM = document.querySelectorAll('.npm');

        inputNIK.forEach(function(input) {
            input.addEventListener("input", function() {
                let inputValue = input.value;

                // Hapus karakter yang tidak valid
                let validValue = inputValue.replace(/[^0-9]/g, '');

                // Batasi panjang string menjadi 16 karakter
                if (validValue.length > 16) {
                    validValue = validValue.slice(0, 16);
                }

                // Setel nilai input dengan string yang sudah valid
                input.value = validValue;

            });
        });

        inputTahunUsaha.forEach(function(input) {
            input.addEventListener("input", function() {
                let inputValue = input.value;

                // Hapus karakter yang tidak valid
                let validValue = inputValue.replace(/[^0-9]/g, '');

                // Batasi panjang string menjadi 4 karakter
                if (validValue.length > 4) {
                    validValue = validValue.slice(0, 4);
                }

                // Setel nilai input dengan string yang sudah valid
                input.value = validValue;

            });
        });

        inputUmur.forEach(function(input) {
            input.addEventListener("input", function() {
                let inputValue = input.value;

                // Hapus karakter yang tidak valid
                let validValue = inputValue.replace(/[^0-9]/g, '');

                // Batasi panjang string menjadi 2 karakter
                if (validValue.length > 2) {
                    validValue = validValue.slice(0, 2);
                }

                // Setel nilai input dengan string yang sudah valid
                input.value = validValue;

            });
        });

        inputNPM.forEach(function(input) {
            input.addEventListener("input", function() {
                let inputValue = input.value;

                // Hapus karakter yang tidak valid
                let validValue = inputValue.replace(/[^0-9]/g, '');

                // Batasi panjang string menjadi 13 karakter
                if (validValue.length > 13) {
                    validValue = validValue.slice(0, 13);
                }

                // Setel nilai input dengan string yang sudah valid
                input.value = validValue;

            });
        });
    });

</script>

<!-- untuk membuat inputan hanya angka -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let inputFields = document.querySelectorAll('.numeric-input');

        inputFields.forEach(function(input) {
            input.addEventListener("input", function() {
                // Hapus karakter selain angka
                this.value = this.value.replace(/\D/g, '');
            });
        });
    });

</script>

<!-- inputan hanya huruf dan spasi -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let inputFields = document.querySelectorAll('.alphabet-input');

        inputFields.forEach(function(input) {
            input.addEventListener("input", function() {
                // Hapus karakter selain angka
                this.value = this.value.replace(/[^a-zA-Z\s]/g, '');
            });
        });
    });

</script>

<!-- untuk membuat sweetalert dan download word otomatis lalu refresh halaman 2 detik -->
<script>
    document.getElementById('formSKU').addEventListener('submit', function(e) {
        e.preventDefault();

        Swal.fire({
            title: 'Success'
            , text: 'Data berhasil ditambahkan, file Word siap untuk diunduh!'
            , icon: 'success'
        , }).then(() => {
            // Setelah pengguna menekan OK, kirimkan formulir
            this.submit();
            $('#ModelSKU').hide();
            setTimeout(function() {
                window.location.reload();
            }, 2000);

        });
    });

    document.getElementById('formSKM').addEventListener('submit', function(e) {
        e.preventDefault();

        Swal.fire({
            title: 'Success'
            , text: 'Data berhasil ditambahkan, file Word siap untuk diunduh!'
            , icon: 'success'
        , }).then(() => {
            // Setelah pengguna menekan OK, kirimkan formulir
            this.submit();
            $('#ModelSKM').hide();
            setTimeout(function() {
                window.location.reload();
            }, 2000);

        });
    });

    document.getElementById('formSKTM').addEventListener('submit', function(e) {
        e.preventDefault();

        Swal.fire({
            title: 'Success'
            , text: 'Data berhasil ditambahkan, file Word siap untuk diunduh!'
            , icon: 'success'
        , }).then(() => {
            // Setelah pengguna menekan OK, kirimkan formulir
            this.submit();
            $('#ModelSKTM').hide();
            setTimeout(function() {
                window.location.reload();
            }, 2000);

        });
    });

    document.getElementById('formSKDDomisili').addEventListener('submit', function(e) {
        e.preventDefault();

        Swal.fire({
            title: 'Success'
            , text: 'Data berhasil ditambahkan, file Word siap untuk diunduh!'
            , icon: 'success'
        , }).then(() => {
            // Setelah pengguna menekan OK, kirimkan formulir
            this.submit();
            $('#ModelSKDDomisili').hide();
            setTimeout(function() {
                window.location.reload();
            }, 2000);

        });
    });

    document.getElementById('formSKDBelumMenikah').addEventListener('submit', function(e) {
        e.preventDefault();

        Swal.fire({
            title: 'Success'
            , text: 'Data berhasil ditambahkan, file Word siap untuk diunduh!'
            , icon: 'success'
        , }).then(() => {
            // Setelah pengguna menekan OK, kirimkan formulir
            this.submit();
            $('#ModelSKDBelumMenikah').hide();
            setTimeout(function() {
                window.location.reload();
            }, 2000);

        });
    });

    document.getElementById('formSuratTugas').addEventListener('submit', function(e) {
        e.preventDefault();

        Swal.fire({
            title: 'Success'
            , text: 'Data berhasil ditambahkan, file Pdf siap untuk diunduh!'
            , icon: 'success'
        , }).then(() => {
            // Setelah pengguna menekan OK, kirimkan formulir
            this.submit();

            $('#ModelSuratTugas').hide();
            setTimeout(function() {
                window.location.reload();
            }, 2000);

        });
    });

</script>

</html>
