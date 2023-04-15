@extends('layouts.default')

@section('content')

    <div class="page-heading">
        <div class="page-title">
            <h3>Dashboard</h3>
        </div>

    </div>
    <section class="section">
        <div class="row mt-5">
            <p class="text-subtitle text-muted">Penghasilan dan Omset</p>
            <div class="col-12 col-lg-6">
                <div class="card m-0 p-3">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <img src="{{ asset('images/assets/icon-2.png') }}" alt="">
                        </div>
                        <div class="ms-3">
                            <small>Penghasilan Bersih Hari Ini</small>
                            <h4 class="m-0">1.000.000</h4>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-12 col-lg-6">
                <div class="card m-0 p-3">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <img src="{{ asset('images/assets/icon-1.png') }}" alt="">
                        </div>
                        <div class="ms-3">
                            <small>Omset Hari Ini</small>
                            <h4 class="m-0">1.600.000</h4>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="row mt-3">
            <p class="text-subtitle text-muted">Member</p>
            <div class="col-12 col-lg-4">
                <div class="card m-0 p-3">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <img src="{{ asset('images/assets/icon-3.png') }}" alt="">
                        </div>
                        <div class="ms-3">
                            <small>Total Member</small>
                            <h4 class="m-0">100</h4>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-12 col-lg-4">
                <div class="card m-0 p-3">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <img src="{{ asset('images/assets/icon-4.png') }}" alt="">
                        </div>
                        <div class="ms-3">
                            <small>Total Saldo Member</small>
                            <h4 class="m-0">100.000.000</h4>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-12 col-lg-4">
                <div class="card m-0 p-3">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <img src="{{ asset('images/assets/icon-5.png') }}" alt="">
                        </div>
                        <div class="ms-3">
                            <small>Saldo Digiflazz</small>
                            <h4 class="m-0">100.000.000</h4>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="row mt-3">
            <p class="text-subtitle text-muted">Transaksi</p>
            <div class="col-12 col-lg-3">
                <div class="card m-0 p-3">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <img src="{{ asset('images/assets/icon-6.png') }}" alt="">
                        </div>
                        <div class="ms-3">
                            <small>Total Top Up Hari Ini</small>
                            <h4 class="m-0">10</h4>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-12 col-lg-3">
                <div class="card m-0 p-3">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <img src="{{ asset('images/assets/icon-7.png') }}" alt="">
                        </div>
                        <div class="ms-3">
                            <small>Transaksi Pending Hari Ini</small>
                            <h4 class="m-0">6</h4>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-12 col-lg-3">
                <div class="card m-0 p-3">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <img src="{{ asset('images/assets/icon-8.png') }}" alt="">
                        </div>
                        <div class="ms-3">
                            <small>Transaksi Sukses Hari Ini</small>
                            <h4 class="m-0">3</h4>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-12 col-lg-3">
                <div class="card m-0 p-3">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <img src="{{ asset('images/assets/icon-9.png') }}" alt="">
                        </div>
                        <div class="ms-3">
                            <small>Transaksi Gagal Hari Ini</small>
                            <h4 class="m-0">1</h4>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12 col-lg-7">
                <div class="card p-3 m-0">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="card-header p-0">
                            Transaksi Terakhir
                        </div>
                        <div>
                            <a href=""  class="d-flex">
                                <i class="me-1 bi bi-arrow-clockwise"></i>
                                Refresh
                            </a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="text-uppercase">
    
                                <th>tanggal</th>
                                <th>waktu</th>
                                <th>nama</th>
                                <th>produk</th>
                                <th>nominal</th>
    
    
                            </thead>
                            <tbody>
    
                                <tr>
                                    <th>10/04/2023</th>
                                    <td>20:14</td>
                                    <td>Bessie Cooper</td>
                                    <td>Pulsa</td>
                                    <td>100.000</td>
    
                                </tr>
                                <tr>
                                    <th>10/04/2023</th>
                                    <td>20:14</td>
                                    <td>Bessie Cooper</td>
                                    <td>Pulsa</td>
                                    <td>100.000</td>
    
                                </tr>
                                <tr>
                                    <th>10/04/2023</th>
                                    <td>20:14</td>
                                    <td>Bessie Cooper</td>
                                    <td>Pulsa</td>
                                    <td>100.000</td>
    
                                </tr>
                                <tr>
                                    <th>10/04/2023</th>
                                    <td>20:14</td>
                                    <td>Bessie Cooper</td>
                                    <td>Pulsa</td>
                                    <td>100.000</td>
    
                                </tr>
    
                            </tbody>
                        </table>

                    </div>

                    <a href="" class="w-25 btn btn-primary">Lihat Semua</a>
                </div>
            </div>
            <div class="col-12 col-lg-5">
                <div class="card p-3 m-0">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="card-header p-0">
                            Transaksi Terakhir
                        </div>
                        <div>
                            <a href=""  class="d-flex">
                                <i class="me-1 bi bi-arrow-clockwise"></i>
                                Refresh
                            </a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="text-uppercase">
    
                                <th>tanggal</th>
                                <th>waktu</th>
                                <th>nama</th>
                                <th>produk</th>
                                <th>nominal</th>
    
    
                            </thead>
                            <tbody>
    
                                <tr>
                                    <th>10/04/2023</th>
                                    <td>20:14</td>
                                    <td>Bessie Cooper</td>
                                    <td>Pulsa</td>
                                    <td>100.000</td>
    
                                </tr>
                                <tr>
                                    <th>10/04/2023</th>
                                    <td>20:14</td>
                                    <td>Bessie Cooper</td>
                                    <td>Pulsa</td>
                                    <td>100.000</td>
    
                                </tr>
                                <tr>
                                    <th>10/04/2023</th>
                                    <td>20:14</td>
                                    <td>Bessie Cooper</td>
                                    <td>Pulsa</td>
                                    <td>100.000</td>
    
                                </tr>
                                <tr>
                                    <th>10/04/2023</th>
                                    <td>20:14</td>
                                    <td>Bessie Cooper</td>
                                    <td>Pulsa</td>
                                    <td>100.000</td>
    
                                </tr>
    
                            </tbody>
                        </table>

                    </div>

                    <a href="" class="w-25 btn btn-primary">Lihat Semua</a>
                </div>
            </div>
        </div>
    </section>
@stop
