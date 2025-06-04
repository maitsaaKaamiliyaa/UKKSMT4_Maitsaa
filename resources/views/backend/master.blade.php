<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap Gallery - Nyke Admin Template</title>

    <!-- Meta -->
    <meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="assets/images/favicon.svg" />

    @include('include.styledash')
</head>

<body>
    <!-- Page wrapper start -->
    <div class="page-wrapper">

        <!-- Main container start -->
        <div class="main-container">

            
                    @php
                        $employee = null;
                        $people = null;

                        if (
                            auth()->check() &&
                            auth()->user()->userReference &&
                            auth()->user()->userReference->reference
                        ) {
                            $employee = auth()->user()->userReference->reference;
                            $employee->load('people');
                            $people = $employee->people;
                        }
                    @endphp
            @if (auth()->user()->userReference->reference_type != 'App\Models\Student')
                <!-- Sidebar wrapper start -->
                <nav id="sidebar" class="sidebar-wrapper">

                    <!-- App brand starts -->
                    <div class="app-brand px-3 py-3 d-flex align-items-center">
                        <a href="index.html">
                            <img src="assets/images/logo.svg" class="logo" alt="Bootstrap Gallery" />
                        </a>
                    </div>
                    <!-- App brand ends -->

                    <!-- Sidebar profile starts -->
                    <div class="sidebar-user-profile">
                        <img src="assets/images/user.png" class="profile-thumb rounded-2 p-2 d-lg-flex d-none"
                            alt="Bootstrap Gallery" />
                        <h5 class="profile-name lh-lg mt-2 text-truncate">{{ $people->name }}</h5>
                    </div>
                    <!-- Sidebar profile ends -->

                    <!-- Sidebar menu starts -->
                    <div class="sidebarMenuScroll">
                        <ul class="sidebar-menu">
                            <li class="active current-page">
                                <a href="/dashboard">
                                    <i class="bi bi-bar-chart-line"></i>
                                    <span class="menu-text">Analytics</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="#!">
                                    <i class="bi bi-columns-gap"></i>
                                    <span class="menu-text">Master</span>
                                </a>
                                <ul class="treeview-menu">
                                    <li>
                                        <a href="/dashboard/form">Form</a>
                                    </li>
                                    <li>
                                        <a href="/dashboard/invoice">Invoice</a>
                                    </li>
                                    <li>
                                        <a href="/dashboard/table">Data Table</a>
                                    </li>
                                    <li>
                                        <a href="/dashboard/blank">Blank Page</a>
                                    </li>
                                    <li>
                                        <a href="/dashboard/login">Login Form</a>
                                    </li>
                                    <li>
                                        <a href="/dashboard/register">Register</a>
                                    </li>
                                    <li>
                                        <a href="/dashboard/modal">Modal</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#!">
                                    <i class="bi bi-person-square"></i>
                                    <span class="menu-text">Human Resorces</span>
                                </a>
                                <ul class="treeview-menu">
                                    <li>
                                        <a href="/dashboard/student">Student</a>
                                    </li>
                                    <li>
                                        <a href="/dashboard/employee">Employee</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#!">
                                    <i class="bi bi-clipboard-data"></i>
                                    <span class="menu-text">Store Management</span>
                                </a>
                                <ul class="treeview-menu">
                                    <li>
                                        <a href="{{ route('room_management.room.index') }}">Room</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('product_management.product.index') }}">Product</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar menu ends -->

                </nav>
            @else
                <nav id="sidebar" class="sidebar-wrapper">

                    <!-- App brand starts -->
                    <div class="app-brand px-3 py-3 d-flex align-items-center">
                        <a href="index.html">
                            <img src="assets/images/logo.svg" class="logo" alt="Bootstrap Gallery" />
                        </a>
                    </div>
                    <!-- App brand ends -->

                    <!-- Sidebar profile starts -->
                    <div class="sidebar-user-profile">
                        <img src="assets/images/user.png" class="profile-thumb rounded-2 p-2 d-lg-flex d-none"
                            alt="Bootstrap Gallery" />
                        <h5 class="profile-name lh-lg mt-2 text-truncate">{{ $people->name }}</h5>
                        <h5 class="profile-name lh-lg mt-2 text-truncate">Rp
                            {{ number_format(auth()->user()->userReference->reference->saldo->saldo ?? 0, 0, ',', '.') }}
                        </h5>
                    </div>
                    <!-- Sidebar profile ends -->

                    <!-- Sidebar menu starts -->
                    <div class="sidebarMenuScroll">
                        <ul class="sidebar-menu">
                            <li class="active current-page">
                                <a href="/dashboard">
                                    <i class="bi bi-bar-chart-line"></i>
                                    <span class="menu-text">Analytics</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="#!">
                                    <i class="bi bi-columns-gap"></i>
                                    <span class="menu-text">Order Here</span>
                                </a>
                                <ul class="treeview-menu">
                                    <li>
                                        <a href="{{ route('order.index') }}">Order</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('order.history') }}">History Pembelian</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar menu ends -->

                </nav>
            @endif
            <!-- Sidebar wrapper end -->

            <!-- App container starts -->
            <div class="app-container">

                <!-- nav -->
                @include('layouts.assets.nav')
                <!-- end nav -->

                <!-- content -->
                @yield('content')
                <!-- content end -->
            </div>
            <!-- App container ends -->

        </div>
        <!-- Main container end -->

    </div>
    <!-- Page wrapper end -->

    @include('include.scriptdash')
</body>

</html>
