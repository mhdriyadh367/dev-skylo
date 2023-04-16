@php
$segments = request()->segments();
@endphp

<div class="sidebar-wrapper active">
    <div class="sidebar-header position-relative">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="{{ route('dashboard') }}"><img src="{{ asset('images/assets/logo-skylo.png') }}" alt="Logo"
                        srcset="" /></a>
            </div>
            <div class="theme-toggle d-flex gap-2 align-items-center mt-2" id="toggle-dark">
            </div>
            <div class="sidebar-toggler x">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu Utama</li>

            <li class="sidebar-item {{ last($segments) == 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}" class="sidebar-link">
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item {{ last($segments) == 'top-up' ? 'active' : '' }}">
                <a href="{{ route('top-up') }}" class="sidebar-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-database-fill-check" viewBox="0 0 16 16">
                        <path
                            d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM8 1c-1.573 0-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4s.875 1.755 1.904 2.223C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777C13.125 5.755 14 5.007 14 4s-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1Z" />
                        <path
                            d="M2 7v-.839c.457.432 1.004.751 1.49.972C4.722 7.693 6.318 8 8 8s3.278-.307 4.51-.867c.486-.22 1.033-.54 1.49-.972V7c0 .424-.155.802-.411 1.133a4.51 4.51 0 0 0-4.815 1.843A12.31 12.31 0 0 1 8 10c-1.573 0-3.022-.289-4.096-.777C2.875 8.755 2 8.007 2 7Zm6.257 3.998L8 11c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V10c0 1.007.875 1.755 1.904 2.223C4.978 12.711 6.427 13 8 13h.027a4.552 4.552 0 0 1 .23-2.002Zm-.002 3L8 14c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V13c0 1.007.875 1.755 1.904 2.223C4.978 15.711 6.427 16 8 16c.536 0 1.058-.034 1.555-.097a4.507 4.507 0 0 1-1.3-1.905Z" />
                    </svg>
                    <span>Top Up</span>
                </a>
            </li>
            <li class="sidebar-item {{ last($segments) == 'pbob' ? 'active' : '' }}">
                <a href="{{ route('pbob') }}" class="sidebar-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                        <path
                            d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z" />
                    </svg>
                    <span>PBOB</span>
                </a>
            </li>
            <li class="sidebar-item {{ last($segments) == 'transaksi' ? 'active' : '' }}">
                <a href="{{ route('transaksi') }}" class="sidebar-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-bag-check-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                    </svg>
                    <span>Transaksi</span>
                </a>
            </li>

            <li class="sidebar-title">Pengaturan</li>

            <li class="sidebar-item {{ last($segments) == 'role' ? 'active' : '' }} has-sub">
                <a href="#" class="sidebar-link">
                    <i class="bi bi-person-workspace"></i>
                    <span>Manage</span>
                </a>
                <ul class="submenu">
                    <li class="submenu-item  {{ last($segments) == 'role' ? 'active' : '' }}">
                        <a href="#">Role Access</a>
                    </li>
                    <li class="submenu-item">
                        <a href="component-badge.html">User</a>
                    </li>
                    <li class="submenu-item">
                        <a href="component-badge.html">Produk</a>
                    </li>
                    <li class="submenu-item">
                        <a href="component-badge.html">IP Block</a>
                    </li>

                </ul>
            </li>

            <li class="sidebar-item">
                <a href="index.html" class="sidebar-link">
                    <i class="bi bi-people-fill"></i>
                    <span>Master Data</span>
                </a>
            </li>
        </ul>
    </div>
</div>