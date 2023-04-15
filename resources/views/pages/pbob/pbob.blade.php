@extends('layouts.default')

@section('content')

    <div class="page-heading">
        <div class="page-title">
            <h3>PPOB</h3>
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

                                   @include('pages.pbob.create')
                                </div>
                            </div>


                        </div>
                    </div>
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>TANGGAL</th>
                                <th>WAKTU</th>
                                <th>KODE TRANSAKSI</th>
                                <th>TIPE PRODUK</th>
                                <th>NAMA PRODUK</th>
                                <th>NOMINAL</th>
                                <th>SELLER</th>
                                <th>STATUS</th>
                                <th>KETERANGAN</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>10/04/2023</td>
                                <td>20:14</td>
                                <td>20:14</td>
                                <td>Prabayar</td>
                                <td>Pulsa</td>
                                <td>100.000</td>
                                <td>Bessie Cooper</td>

                                <td>
                                    <span class="badge bg-warning">Menunggu</span>
                                </td>
                                <td>10/04/2023</td>
                                <td>


                                    <div class="me-1 mb-1 d-inline-block">
                                        <!-- Button trigger for Extra Large  modal -->
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#detail">
                                            <i class="bi bi-eye text-secondary"></i> </a>



                                        <!--Extra Large Modal -->
                                        <div class="modal fade text-left w-100" id="detail" tabindex="-1"
                                            role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel16"
                                                            style="font-weight: 700;
                                                        font-size: 21px;
                                                        line-height: 29px;">
                                                            Detail Top Up</h4>
                                                        <button type="button" class="close text-secondary "
                                                            data-bs-dismiss="modal" aria-label="Close">
                                                            X
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="text-white"
                                                            style="font-weight: 700;
                                                        font-size: 21px;
                                                        line-height: 29px;">
                                                            Segera Selesaikan Pembayaranmu!</div>
                                                        <div class="text-white mb-3"
                                                            style="font-weight: 400;
                                                        font-size: 15px;
                                                        line-height: 20px;">
                                                            Pastikan melakukan transfer ke rekening tersebut dengan
                                                            jumlah nominal yang sesuai hingga 3 kode unik terakhir</div>

                                                        <div class="d-flex align-items-center mt-4">
                                                            <div
                                                                style="font-weight: 600;
                                                            font-size: 15px;
                                                            line-height: 20px; color: #C2C2D9;">
                                                                Sisa Waktu : <strong class="text-white"
                                                                    style="font-weight: 700; font-size: 21px; line-height: 29px;">04</strong>
                                                                <small
                                                                    style="font-weight: 600;
                                                                    font-size: 15px;
                                                                    line-height: 20px; color: #C2C2D9;">Jam</small>
                                                                <strong class="text-white"
                                                                    style="font-weight: 700; font-size: 21px; line-height: 29px;">02</strong>
                                                                <small
                                                                    style="font-weight: 600;
                                                                    font-size: 15px;
                                                                    line-height: 20px; color: #C2C2D9;">Jam</small>
                                                                <strong class="text-white"
                                                                    style="font-weight: 700; font-size: 21px; line-height: 29px;">27</strong>
                                                                <small
                                                                    style="font-weight: 600;
                                                                font-size: 15px;
                                                                line-height: 20px; color: #C2C2D9;">
                                                                    Jam</small>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center mt-2">
                                                            <div
                                                                style="font-weight: 600;
                                                            font-size: 15px;
                                                            line-height: 20px; color: #C2C2D9;">
                                                                Sebelum : <small class="text-white"
                                                                    style="font-weight: 600;
                                                            font-size: 15px;
                                                            line-height: 20px; color: #C2C2D9;">Selasa,
                                                                    11 April 2023 - 22:53</small>
                                                            </div>
                                                        </div>

                                                        <div class="row mt-4 ">
                                                            <div class="col-md-6">
                                                                <div class="card m-0 p-3 "
                                                                    style="background-color: #35354F">
                                                                    <div class="mb-2"
                                                                        style="font-weight: 600;
                                                                    font-size: 15px;
                                                                    line-height: 20px; color: #C2C2D9;">
                                                                        Rekening</div>
                                                                    <div
                                                                        class="d-flex justify-content-between align-items-center">
                                                                        <div class="d-flex justify-start">
                                                                            <div class="d-flex justify-content-center align-items-center"
                                                                                style="width: 92px; height: 54px; background-color: #fff; border-radius: 4px;">
                                                                                <svg width="64" height="22"
                                                                                    viewBox="0 0 64 22" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <g
                                                                                        clip-path="url(#clip0_4306_8212)">
                                                                                        <path
                                                                                            d="M9.43004 16.1939C9.43004 15.3948 9.43871 13.2587 9.41901 12.9955C9.43619 9.81693 7.12434 7.57475 5.66382 7.74954C4.65319 7.83722 3.80621 8.24917 3.35144 9.43426C2.92994 10.5387 3.30677 12.0078 4.70817 12.3525C6.20666 12.7227 7.08167 13.0307 7.71492 13.4653C8.49084 13.9973 9.12427 15.0137 9.14108 16.1952"
                                                                                            fill="#0060AF" />
                                                                                        <path
                                                                                            d="M10.0284 21.0256C7.38615 21.0256 4.6707 20.3751 1.95887 19.0884L1.89233 19.0557L1.86051 18.9879C0.643556 16.4199 0 13.6112 0 10.8633C0 8.11947 0.617155 5.43097 1.83501 2.86648L1.86846 2.79833L1.93627 2.76435C4.44485 1.57637 7.14348 0.974609 9.95964 0.974609C12.583 0.974609 15.3847 1.64452 18.0606 2.91529L18.1293 2.94583L18.1609 3.01525C19.4012 5.63053 20.0553 8.43851 20.0553 11.1409C20.0553 13.8329 19.4273 16.5237 18.1855 19.1374L18.1528 19.206L18.0837 19.2379C15.6135 20.4069 12.8277 21.0256 10.0284 21.0256ZM2.20986 18.7362C4.84429 19.975 7.47168 20.6006 10.0284 20.6006C12.7393 20.6006 15.4354 20.0083 17.8353 18.8854C19.0275 16.3527 19.6318 13.7461 19.6318 11.1409C19.6318 8.52528 19.0011 5.80443 17.808 3.26615C15.2112 2.04581 12.4991 1.39868 9.95964 1.39868C7.23317 1.39868 4.61989 1.97676 2.18708 3.1172C1.01931 5.60287 0.424939 8.20749 0.424939 10.8633C0.424939 13.5241 1.04264 16.2461 2.20986 18.7362Z"
                                                                                            fill="#0060AF" />
                                                                                        <path
                                                                                            d="M8.80399 16.1952C8.80888 15.1708 8.23693 14.265 7.4894 13.7782C6.82632 13.348 5.93612 13.0653 4.50001 12.7012C4.05608 12.5877 3.59172 12.3356 3.44797 12.0142C3.06769 12.3972 2.99862 13.2583 3.06552 13.7616C3.14328 14.344 3.82408 15.3039 4.84918 15.3415C5.47519 15.3666 6.26666 15.2068 6.64621 15.1262C7.30098 14.9848 8.33693 15.3948 8.50184 16.194"
                                                                                            fill="#0060AF" />
                                                                                        <path
                                                                                            d="M9.95965 2.7959C8.22156 2.7959 6.72018 3.94176 6.7256 5.92455C6.73103 7.59192 8.07238 8.48452 8.55103 9.12208C9.27432 10.0828 9.66581 11.22 9.7065 12.96C9.73814 14.3449 9.73651 15.7123 9.74356 16.197H10.1273C10.1206 15.6899 10.1032 14.2382 10.1231 12.9172C10.1491 11.1766 10.5547 10.0828 11.2784 9.12208C11.7612 8.48452 13.1015 7.59192 13.1044 5.92455C13.1109 3.94176 11.6104 2.7959 9.87375 2.7959"
                                                                                            fill="#0060AF" />
                                                                                        <path
                                                                                            d="M10.401 16.1939C10.401 15.3948 10.392 13.2587 10.4113 12.9955C10.3943 9.81693 12.7047 7.57475 14.1665 7.74954C15.1772 7.83722 16.0232 8.24917 16.4793 9.43426C16.9004 10.5387 16.5214 12.0078 15.1216 12.3525C13.6224 12.7227 12.7485 13.0307 12.1136 13.4653C11.3386 13.9973 10.7495 15.0137 10.7314 16.1952"
                                                                                            fill="#0060AF" />
                                                                                        <path
                                                                                            d="M11.0269 16.1952C11.0215 15.1708 11.5932 14.265 12.3386 13.7782C13.0044 13.348 13.8957 13.0653 15.3305 12.7012C15.7753 12.5877 16.2392 12.3356 16.3804 12.0142C16.7625 12.3972 16.8314 13.2583 16.7645 13.7616C16.6851 14.344 16.0061 15.3039 14.9828 15.3415C14.357 15.3666 13.5613 15.2068 13.1834 15.1262C12.5312 14.9848 11.4923 15.3948 11.3267 16.194"
                                                                                            fill="#0060AF" />
                                                                                        <path
                                                                                            d="M11.5627 19.5024L11.3403 17.88L11.8772 17.7987C12.0079 17.7808 12.1671 17.8036 12.2307 17.8855C12.3011 17.971 12.3226 18.0416 12.3361 18.1537C12.3564 18.2924 12.3162 18.4527 12.16 18.5326V18.5375C12.3345 18.5375 12.4399 18.6627 12.4705 18.8742C12.475 18.9189 12.4882 19.0268 12.475 19.1168C12.4396 19.331 12.3117 19.3999 12.096 19.4301L11.5627 19.5024ZM11.9083 19.2119C11.972 19.2028 12.0365 19.1994 12.087 19.1672C12.1642 19.1168 12.1571 19.0089 12.1464 18.9288C12.1195 18.7528 12.0736 18.6859 11.8868 18.7135L11.7694 18.7316L11.8437 19.2209L11.9083 19.2119ZM11.7958 18.4623C11.8669 18.4507 11.9633 18.4422 12.0034 18.3748C12.0244 18.3298 12.0513 18.294 12.0336 18.1938C12.0117 18.0751 11.9723 18.0015 11.8215 18.0301L11.681 18.0527L11.7363 18.4684"
                                                                                            fill="#0060AF" />
                                                                                        <path
                                                                                            d="M13.8882 18.5267C13.8924 18.5569 13.8973 18.5905 13.8991 18.6207C13.9425 18.9166 13.8882 19.1615 13.5555 19.2289C13.0637 19.3237 12.9695 19.0182 12.8829 18.5905L12.8367 18.3591C12.7689 17.9498 12.7398 17.64 13.2194 17.5446C13.4897 17.4952 13.6684 17.6028 13.7427 17.8718C13.7542 17.9119 13.7687 17.9517 13.7741 17.992L13.4799 18.0527C13.4459 17.9517 13.4009 17.7711 13.2686 17.7863C13.0309 17.8148 13.1094 18.1104 13.1338 18.2338L13.2223 18.678C13.2488 18.8123 13.3016 19.0268 13.5072 18.9854C13.6741 18.952 13.6014 18.6921 13.5866 18.5856"
                                                                                            fill="#0060AF" />
                                                                                        <path
                                                                                            d="M14.3606 19.0175L14.2588 17.3386L14.6541 17.218L15.4828 18.6782L15.1716 18.7713L14.9752 18.4002L14.6297 18.504L14.6743 18.9259L14.3606 19.0175ZM14.6007 18.2328L14.8504 18.1605L14.5188 17.4812"
                                                                                            fill="#0060AF" />
                                                                                        <path
                                                                                            d="M4.59729 17.7481C4.72098 17.3523 4.83183 17.0609 5.30378 17.1903C5.55639 17.2608 5.71298 17.3721 5.70557 17.6655C5.70435 17.7308 5.68278 17.7973 5.66868 17.8618L5.37484 17.7807C5.41336 17.6187 5.43777 17.4902 5.23814 17.4287C5.0074 17.3655 4.95117 17.6451 4.91934 17.7658L4.79982 18.206C4.76185 18.3367 4.71628 18.5527 4.91934 18.6084C5.08715 18.6536 5.18895 18.4889 5.24971 18.2485L5.04411 18.1941L5.11518 17.9394L5.59852 18.0948L5.36905 18.9432L5.14664 18.8828L5.19673 18.7035H5.19039C5.08805 18.8501 4.9631 18.8654 4.8537 18.8445C4.37036 18.7138 4.42081 18.398 4.53617 17.9761"
                                                                                            fill="#0060AF" />
                                                                                        <path
                                                                                            d="M6.39656 18.4646L6.25099 19.1548L5.92334 19.0839L6.27251 17.4724L6.83108 17.5986C7.15801 17.6691 7.25674 17.8146 7.21045 18.1141C7.18405 18.286 7.09924 18.4713 6.8922 18.4563L6.89003 18.4535C7.06507 18.5148 7.07989 18.603 7.04934 18.7556C7.03614 18.8204 6.94518 19.2143 7.00793 19.278L7.0101 19.3262L6.67105 19.2378C6.65694 19.1287 6.70486 18.9323 6.72385 18.8237C6.74302 18.7275 6.77358 18.592 6.67593 18.541C6.59944 18.5003 6.57105 18.5023 6.48462 18.4824L6.39656 18.4646ZM6.45243 18.215L6.67304 18.2745C6.80703 18.2938 6.88153 18.2244 6.90793 18.0626C6.9318 17.9142 6.90088 17.8562 6.78063 17.8274L6.54411 17.7795"
                                                                                            fill="#0060AF" />
                                                                                        <path
                                                                                            d="M8.49781 17.8326L8.82185 17.8702L8.68225 19.003C8.61444 19.3622 8.47557 19.5193 8.08029 19.4701C7.67813 19.4193 7.58266 19.2362 7.60707 18.8741L7.74757 17.7422L8.07414 17.7796L7.934 18.8862C7.91917 19.0064 7.89132 19.1845 8.10524 19.206C8.29492 19.2205 8.33796 19.0948 8.3593 18.9387"
                                                                                            fill="#0060AF" />
                                                                                        <path
                                                                                            d="M9.1792 19.5321L9.27666 17.9121L9.89924 17.9391C10.1934 17.9535 10.2705 18.1937 10.2613 18.423C10.2528 18.5623 10.2092 18.718 10.0877 18.8024C9.98803 18.8741 9.86 18.8911 9.7412 18.8853L9.53832 18.8741L9.49781 19.553L9.1792 19.5321ZM9.54754 18.627L9.71245 18.6362C9.84644 18.6411 9.93523 18.5882 9.9468 18.3915C9.95331 18.2026 9.88188 18.1706 9.70829 18.163L9.57756 18.1585"
                                                                                            fill="#0060AF" />
                                                                                        <path
                                                                                            d="M53.0895 4.36169L50.6151 8.85131C49.6812 8.09319 48.5407 7.53517 47.0856 7.53517C43.6422 7.53517 42.2435 10.1011 42.2435 11.9086C42.2435 13.2502 43.1223 15.2297 46.1862 15.2297C47.4722 15.2297 49.3005 14.3353 49.8267 13.9284L47.3794 19.1371C46.2129 19.3698 45.8298 19.514 44.8423 19.5446C39.3584 19.7082 37.1424 16.3405 37.144 12.8993C37.1477 8.35023 41.1936 2.81779 47.9008 2.81779C48.3118 2.81779 48.8145 2.95987 49.2443 3.11732L49.6786 2.56201"
                                                                                            fill="#0060AF" />
                                                                                        <path
                                                                                            d="M63.2992 2.70264L63.9999 19.0205H58.7853L58.7822 16.2219H55.2265L54.0562 19.0205H48.4009L54.3133 7.36815L52.9801 7.35947L55.5133 2.70264H63.2992ZM58.7484 7.69461L56.738 12.4409H58.809"
                                                                                            fill="#0060AF" />
                                                                                        <path
                                                                                            d="M33.8517 2.70272C36.434 2.71718 37.8933 4.11846 37.8933 6.14265C37.8933 8.00867 36.3543 9.66049 34.6649 10.5146C36.4042 11.1538 36.5547 12.7228 36.5547 13.8329C36.5547 16.5147 33.8627 19.0206 30.3636 19.0206H22.7324L25.7092 7.53055L24.4864 7.5235L26.986 2.70272C26.986 2.70272 31.7518 2.68825 33.8517 2.70272ZM31.3182 9.31866C31.8523 9.31866 32.7955 9.18345 33.0313 8.15002C33.2897 7.02821 32.4046 6.99802 31.98 6.99802L30.4629 6.99138L29.9338 9.31871L31.3182 9.31866ZM29.1732 12.2022L28.4747 14.884H30.2611C30.9639 14.884 31.9218 14.5353 32.1565 13.6626C32.3883 12.7873 31.7187 12.2022 31.0183 12.2022"
                                                                                            fill="#0060AF" />
                                                                                    </g>
                                                                                    <defs>
                                                                                        <clipPath id="clip0_4306_8212">
                                                                                            <rect width="64"
                                                                                                height="20.051"
                                                                                                fill="white"
                                                                                                transform="translate(0 0.974609)" />
                                                                                        </clipPath>
                                                                                    </defs>
                                                                                </svg>
                                                                            </div>
                                                                            <div
                                                                                class="d-flex flex-column text-white ms-3">
                                                                                <div
                                                                                    style="font-weight: 700;
                                                                                font-size: 21px;
                                                                                line-height: 29px;">
                                                                                    1234567890</div>
                                                                                <div
                                                                                    style="font-weight: 500;
                                                                                font-size: 17px;
                                                                                line-height: 23px;
                                                                                color: #FFFFFF;">
                                                                                    (Skylo Mobile)</div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="w-auto h-auto ps-2 pe-2 pt-1 pb-1 border rounded d-flex align-items-center">
                                                                            <div>
                                                                                <svg width="13" height="16"
                                                                                    viewBox="0 0 13 16" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M11 0H4C2.89543 0 2 0.89543 2 2C0.895431 2 0 2.89543 0 4V14C0 15.1046 0.895431 16 2 16H9C10.1046 16 11 15.1046 11 14C12.1046 14 13 13.1046 13 12V2C13 0.89543 12.1046 0 11 0ZM11 13V4C11 2.89543 10.1046 2 9 2H3C3 1.44772 3.44772 1 4 1H11C11.5523 1 12 1.44772 12 2V12C12 12.5523 11.5523 13 11 13ZM1 4C1 3.44772 1.44772 3 2 3H9C9.55228 3 10 3.44772 10 4V14C10 14.5523 9.55229 15 9 15H2C1.44772 15 1 14.5523 1 14V4Z"
                                                                                        fill="#7C8DB5" />
                                                                                </svg>

                                                                            </div>
                                                                            <div class="ms-2">
                                                                                Salin
                                                                            </div>
                                                                        </div>
                                                                    </div>





                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card m-0 p-3 "
                                                                    style="background-color: #35354F">
                                                                    <div class="mb-2"
                                                                        style="font-weight: 600;
                                                              font-size: 15px;
                                                              line-height: 20px; color: #C2C2D9;">
                                                                        Nominal Transfer</div>
                                                                    <div
                                                                        class="d-flex justify-content-between align-items-center">
                                                                        <div class="d-flex justify-start">

                                                                            <div class="d-flex flex-column text-white">
                                                                                <div
                                                                                    style="font-weight: 700;
                                                                          font-size: 21px;
                                                                          line-height: 29px;">
                                                                                    Rp 100.<small
                                                                                        style="font-weight: 700;
                                                                                    font-size: 21px;
                                                                                    line-height: 29px; color: #F3A32B;">123</small>
                                                                                </div>
                                                                                <div
                                                                                    style="font-weight: 400;
                                                                          font-size: 15px;
                                                                          line-height: 20px; color: #C2C2D9;">
                                                                                    (Top Up : Rp 100.000)</div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="w-auto h-auto ps-2 pe-2 pt-1 pb-1 border rounded d-flex align-items-center">
                                                                            <div>
                                                                                <svg width="13" height="16"
                                                                                    viewBox="0 0 13 16" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M11 0H4C2.89543 0 2 0.89543 2 2C0.895431 2 0 2.89543 0 4V14C0 15.1046 0.895431 16 2 16H9C10.1046 16 11 15.1046 11 14C12.1046 14 13 13.1046 13 12V2C13 0.89543 12.1046 0 11 0ZM11 13V4C11 2.89543 10.1046 2 9 2H3C3 1.44772 3.44772 1 4 1H11C11.5523 1 12 1.44772 12 2V12C12 12.5523 11.5523 13 11 13ZM1 4C1 3.44772 1.44772 3 2 3H9C9.55228 3 10 3.44772 10 4V14C10 14.5523 9.55229 15 9 15H2C1.44772 15 1 14.5523 1 14V4Z"
                                                                                        fill="#7C8DB5" />
                                                                                </svg>

                                                                            </div>
                                                                            <div class="ms-2">
                                                                                Salin
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="mt-4 mb-1"
                                                                style="font-weight: 600;
                                                            font-size: 15px;
                                                            line-height: 20px; color: #C2C2D9;">
                                                                Upload Bukti Bayar</div>
                                                            <div class="row mb-3">
                                                                <div class="col-lg-12">
                                                                    <div class="card m-0 p-0 bg-white d-flex justify-content-center align-items-center"
                                                                        style="height: 64px;">
                                                                        <div
                                                                            style="font-weight: 400;
                                                                        font-size: 15px;
                                                                        line-height: 20px;">
                                                                            Drag & Drop your files here or Browse
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Kembali</span>
                                                        </button>
                                                        <button type="button" class="btn btn-primary ms-1"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-check d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Kirim</span>
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
