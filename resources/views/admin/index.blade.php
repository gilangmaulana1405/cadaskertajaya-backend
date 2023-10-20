@extends('admin.layouts.main')

@section('contentAdmin')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Welcome Admin</h3>
                        <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="justify-content-end d-flex">
                            <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                <button class="btn btn-sm btn-light bg-white" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <i class="mdi mdi-calendar"></i> Hari ini ({{ $date }})
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card tale-bg">
                    <div class="card-people mt-auto">
                        <img src="{{ asset('assets/img/people.svg') }}" alt="people">
                        <div class="weather-info">
                            <div class="d-flex">
                                <div>
                                    <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                                </div>
                                <div class="ml-2">
                                    <h4 class="location font-weight-normal">Telagasari</h4>
                                    <h6 class="font-weight-normal">Karawang</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
                <div class="row">
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-tale">
                            <div class="card-body">
                                <p class="mb-4">SKU Masuk Hari Ini</p>
                                <p class="fs-30 mb-2">{{ $countSKUToday }}</p>
                                <p>Total SKU {{$countSKU}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-dark-blue">
                            <div class="card-body">
                                <p class="mb-4">SKM Masuk Hari Ini</p>
                                <p class="fs-30 mb-2">{{$countSKMToday}}</p>
                                <p>Total SKU {{$countSKM}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                        <div class="card card-light-blue">
                            <div class="card-body">
                                <p class="mb-4">SK Domisili Masuk Hari Ini</p>
                                <p class="fs-30 mb-2">{{$countSKDDomisiliToday}}</p>
                                <p>Total SKU {{$countSKDDomisili}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 stretch-card transparent">
                        <div class="card card-light-danger">
                            <div class="card-body">
                                <p class="mb-4">SK Belum Menikah Masuk Hari Ini</p>
                                <p class="fs-30 mb-2">{{$countSKDBelumMenikahToday}}</p>
                                <p>Total SKU {{$countSKDBelumMenikah}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card position-relative">
                    <div class="card-body">
                        <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2" data-ride="carousel">
                            <div class="row">
                                <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                                    <div class="ml-xl-4 mt-3">
                                        <p class="card-title">Detailed Reports</p>
                                        <h1 class="text-primary">Surat</h1>
                                        <h3 class="font-weight-500 mb-xl-4 text-primary">
                                            Administrasi</h3>
                                        <p class="mb-2 mb-xl-0">The total number of sessions within
                                            the date range. It is the period time a user is actively
                                            engaged with your website, page or app, etc</p>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xl-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive mb-3 mb-md-0 mt-3">
                                                <table class="table table-borderless report-table">
                                                    <tr>
                                                        <td class="text-muted">SKU</td>
                                                        <td class="w-100 px-0">
                                                            <div class="progress progress-md mx-4">
                                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-weight-bold mb-0">{{ $countSKU }}
                                                            </h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">SKM</td>
                                                        <td class="w-100 px-0">
                                                            <div class="progress progress-md mx-4">
                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-weight-bold mb-0">{{ $countSKM }}
                                                            </h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">SKTM</td>
                                                        <td class="w-100 px-0">
                                                            <div class="progress progress-md mx-4">
                                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-weight-bold mb-0">{{ $countSKTM }}
                                                            </h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">SKD Domisili</td>
                                                        <td class="w-100 px-0">
                                                            <div class="progress progress-md mx-4">
                                                                <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-weight-bold mb-0">{{ $countSKDDomisili }}
                                                            </h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">SKD Belum Menikah
                                                        </td>
                                                        <td class="w-100 px-0">
                                                            <div class="progress progress-md mx-4">
                                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-weight-bold mb-0">{{ $countSKDBelumMenikah }}
                                                            </h5>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.
                Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin
                    template</a> from BootstrapDash. All rights reserved.</span>

        </div>
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a href="https://www.themewagon.com/" target="_blank">Themewagon</a></span>
        </div>
    </footer>
    <!-- partial -->
</div>

@endsection
