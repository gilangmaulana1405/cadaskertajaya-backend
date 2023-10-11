<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Cadaskertajaya</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{asset('assets/vendor/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/vertical-layout-light/style.css') }}">
    <link href="https://karawangkab.go.id/sites/default/files/krw-icon.png" rel="shortcut icon">

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
</head>

<body>
    @include('sweetalert::alert')

    <div class="container-scroller">
        @include('admin.layouts.nav')
        <div class="container-fluid page-body-wrapper">
            @include('admin.layouts.sidebar')
            @yield('contentAdmin')
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{ asset('assets/vendor/js/vendor.bundle.base.js') }}"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/js/template.js') }}"></script>
    <script src="{{ asset('assets/js/settings.js') }}"></script>
    <script src="{{ asset('assets/js/todolist.js') }}"></script>
    <script src="{{ asset('assets/js/Chart.roundedBarCharts.js') }}"></script>

    <!-- membuat inputan max 16,4,2 angka untuk field NIK ,Tahun Usaha,Umur -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let inputNIK = document.querySelectorAll('.nik');
            let inputTahunUsaha = document.querySelectorAll('.tahunUsaha');
            let inputUmur = document.querySelectorAll('.umur');

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

    <!-- delete -->
    <script>
        $(document).on('click', '.delete-confirm-sku', function(e) {
            e.preventDefault();
            var id = $(this).data('id');

            Swal.fire({
                title: 'Anda yakin ingin menghapus data ini?'
                , text: "Tindakan ini tidak dapat dibatalkan!"
                , icon: 'warning'
                , showCancelButton: true
                , confirmButtonColor: '#3085d6'
                , cancelButtonColor: '#d33'
                , confirmButtonText: 'Ya, Hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Lakukan permintaan AJAX untuk menghapus data
                    $.ajax({
                        type: "DELETE"
                        , url: '/admin/sku/' + id, // Ganti dengan URL yang sesuai
                        data: {
                            "_token": "{{ csrf_token() }}"
                        }
                        , success: function(data) {
                            if (data.success) {
                                Swal.fire(
                                    'Terhapus!'
                                    , 'Data telah berhasil dihapus.'
                                    , 'success'
                                ).then(function() {
                                    location.reload();
                                });
                            } else {
                                Swal.fire(
                                    'Gagal!'
                                    , 'Terjadi kesalahan saat menghapus data.'
                                    , 'error'
                                );
                            }
                        }
                    });
                }
            });
        });

        $(document).on('click', '.delete-confirm-skm', function(e) {
            e.preventDefault();
            var id = $(this).data('id');

            Swal.fire({
                title: 'Anda yakin ingin menghapus data ini?'
                , text: "Tindakan ini tidak dapat dibatalkan!"
                , icon: 'warning'
                , showCancelButton: true
                , confirmButtonColor: '#3085d6'
                , cancelButtonColor: '#d33'
                , confirmButtonText: 'Ya, Hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Lakukan permintaan AJAX untuk menghapus data
                    $.ajax({
                        type: "DELETE"
                        , url: '/admin/skm/' + id, // Ganti dengan URL yang sesuai
                        data: {
                            "_token": "{{ csrf_token() }}"
                        }
                        , success: function(data) {
                            if (data.success) {
                                Swal.fire(
                                    'Terhapus!'
                                    , 'Data telah berhasil dihapus.'
                                    , 'success'
                                ).then(function() {
                                    location.reload();
                                });
                            } else {
                                Swal.fire(
                                    'Gagal!'
                                    , 'Terjadi kesalahan saat menghapus data.'
                                    , 'error'
                                );
                            }
                        }
                    });
                }
            });
        });

        $(document).on('click', '.delete-confirm-skdDomisili', function(e) {

            e.preventDefault();
            var id = $(this).data('id');

            Swal.fire({
                title: 'Anda yakin ingin menghapus data ini?'
                , text: "Tindakan ini tidak dapat dibatalkan!"
                , icon: 'warning'
                , showCancelButton: true
                , confirmButtonColor: '#3085d6'
                , cancelButtonColor: '#d33'
                , confirmButtonText: 'Ya, Hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Lakukan permintaan AJAX untuk menghapus data
                    $.ajax({
                        type: "DELETE"
                        , url: '/admin/skdDomisili/' + id, // Ganti dengan URL yang sesuai
                        data: {
                            "_token": "{{ csrf_token() }}"
                        }
                        , success: function(data) {
                            if (data.success) {
                                Swal.fire(
                                    'Terhapus!'
                                    , 'Data telah berhasil dihapus.'
                                    , 'success'
                                ).then(function() {
                                    location.reload();
                                });
                            } else {
                                Swal.fire(
                                    'Gagal!'
                                    , 'Terjadi kesalahan saat menghapus data.'
                                    , 'error'
                                );
                            }
                        }
                    });
                }
            });
        });
        $(document).on('click', '.delete-confirm-skdBelumMenikah', function(e) {
            e.preventDefault();
            var id = $(this).data('id');

            Swal.fire({
                title: 'Anda yakin ingin menghapus data ini?'
                , text: "Tindakan ini tidak dapat dibatalkan!"
                , icon: 'warning'
                , showCancelButton: true
                , confirmButtonColor: '#3085d6'
                , cancelButtonColor: '#d33'
                , confirmButtonText: 'Ya, Hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Lakukan permintaan AJAX untuk menghapus data
                    $.ajax({
                        type: "DELETE"
                        , url: '/admin/skdBelumMenikah/' + id, // Ganti dengan URL yang sesuai
                        data: {
                            "_token": "{{ csrf_token() }}"
                        }
                        , success: function(data) {
                            if (data.success) {
                                Swal.fire(
                                    'Terhapus!'
                                    , 'Data telah berhasil dihapus.'
                                    , 'success'
                                ).then(function() {
                                    location.reload();
                                });
                            } else {
                                Swal.fire(
                                    'Gagal!'
                                    , 'Terjadi kesalahan saat menghapus data.'
                                    , 'error'
                                );
                            }
                        }
                    });
                }
            });
        });

    </script>

</body>

</html>
