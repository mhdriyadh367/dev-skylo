@extends('layouts.default')

@section('content')

    <div class="page-heading">
        <div class="page-title">
            <h3>User</h3>
        </div>
    </div>

    <section class="section">
        <div class="row mt-5">
            <div class="col-12 col-md-12">
                <div class="card p-3 m-0">
                    <div class="d-flex justify-content-between mb-4 position-relative">
                        <div>Total 200 data</div>
                        <div class="d-flex">
                            <div>
                                <fieldset class="form-group">
                                    <select class="form-select" id="basicSelect">
                                        <option>10</option>
                                        <option>5</option>
                                        <option>2</option>
                                    </select>
                                </fieldset>
                            </div>

                            <div class="ms-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="basicInput" placeholder="Cari...">
                                </div>
                            </div>

                            <div class="ms-3">

                                <div class="me-1 mb-1 d-inline-block">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#xlarge">
                                        Tambah
                                    </button>

                                    @include('pages.manage.user.create')
                                </div>
                            </div>


                        </div>
                    </div>
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>ROLE</th>
                                <th>NAMA</th>
                                <th>EMAIL</th>
                                <th>USERNAME</th>
                                <th>NOMOR HP</th>
                                <th>KOTA / KAB.</th>
                                <th>STATUS</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Admin</td>
                                <td>Jerome Bell</td>
                                <td>jerome@gmail.com</td>
                                <td>jerome1</td>
                                <td>081234567890</td>
                                <td>Yogyakarta</td>
                                <td>
                                    <span class="badge bg-success">Berhasil</span>
                                </td>
                                <td>


                                    <div class="me-1 mb-1 d-inline-block">
                                        <!-- Button trigger for Extra Large  modal -->
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#detail">
                                            <i class="bi bi-eye text-secondary"></i> </a>
                                        <!--Extra Large Modal -->
                                        <div class="modal fade text-left w-100" id="detail" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel16" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel16"
                                                            style="font-weight: 700;
                                                    font-size: 21px;
                                                    line-height: 29px;">
                                                            Detail Role</h4>
                                                        <button type="button" class="close text-secondary "
                                                            data-bs-dismiss="modal" aria-label="Close">
                                                            X
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="col-12">
                                                            Nama Role
                                                        </div>
                                                        <div class="form-group position-relative has-icon-left mb-4">
                                                            <input type="text"
                                                                class="form-control form-control-md text-white"
                                                                name="text" placeholder="Nama Role">
                                                            <div class="form-control-icon">
                                                                <i class="bi bi-person-circle"></i>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="modal-body border-top">
                                                        <div class="col-12">
                                                            Akses
                                                        </div>

                                                        <table class="table table-striped" id="table1">
                                                            <thead>
                                                                <tr>
                                                                    <th>MENU</th>
                                                                    <th>SUB MENU</th>

                                                                    <th>CREATE</th>
                                                                    <th>READ</th>
                                                                    <th>UPDATE</th>
                                                                    <th>DELETE</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Dashboard</td>
                                                                    <td>Dashboard</td>

                                                                    <td>
                                                                        <div class="form-check">
                                                                            <div class="checkbox">
                                                                                <input type="checkbox" id="checkbox1"
                                                                                    class="form-check-input">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <div class="checkbox">
                                                                                <input type="checkbox" id="checkbox1"
                                                                                    class="form-check-input">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <div class="checkbox">
                                                                                <input type="checkbox" id="checkbox1"
                                                                                    class="form-check-input">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <div class="checkbox">
                                                                                <input type="checkbox" id="checkbox1"
                                                                                    class="form-check-input">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                            </tbody>
                                                        </table>

                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Batalkan</span>
                                                        </button>
                                                        <button type="button" class="btn btn-primary ms-1"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-check d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Simpan</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <a href="#"><i class="bi bi-pencil text-secondary ms-3"></i></a>
                                    <a href="#"><i class="bi bi-trash text-secondary ms-3"></i></a>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@stop
