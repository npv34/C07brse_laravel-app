<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
    />
    <!-- MDB -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css"
        rel="stylesheet"
    />
    <!-- Tailwindcss -->
    <style>
        body {
            background-color: #fbfbfb;
        }
        @media (min-width: 991.98px) {
            main {
                padding-left: 240px;
            }
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            padding: 58px 0 0; /* Height of navbar */
            box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
            width: 240px;
            z-index: 600;
        }

        @media (max-width: 991.98px) {
            .sidebar {
                width: 100%;
            }
        }
        .sidebar .active {
            border-radius: 5px;
            box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
        }

        .sidebar-sticky {
            position: relative;
            top: 0;
            height: calc(100vh - 48px);
            padding-top: 0.5rem;
            overflow-x: hidden;
            overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
        }

        .my-active span{
            background-color: #4171c4 !important;
            color: white !important;
            border-color: #5cb85c !important;
        }
        ul.pager>li {
            display: inline-flex;
            padding: 5px;
        }
    </style>
    <style type="text/css">

    </style>
</head>
<body>
<!--Main Navigation-->
<header>
    <!-- Sidebar -->
    <nav
        id="sidebarMenu"
        class="collapse d-lg-block sidebar collapse bg-white"
    >
        <div class="position-sticky">
            <div class="list-group list-group-flush mx-3 mt-4">
                <a
                    href="{{ route('dashboard') }}"
                    class="list-group-item list-group-item-action py-2 ripple {{ request()->routeIs('dashboard') ? 'active' : 'hidden' }}"
                    aria-current="true"
                >
                    <i class="fas fa-tachometer-alt fa-fw me-3"></i
                    ><span>{{ GoogleTranslate::trans('Main Dashboard', app()->getLocale()) }}</span>
                </a>
                <a
                    href="#"
                    class="list-group-item list-group-item-action py-2 ripple"
                ><i class="fas fa-lock fa-fw me-3"></i><span>{{ GoogleTranslate::trans('Password', app()->getLocale()) }}</span></a
                >
                <a
                    href="#"
                    class="list-group-item list-group-item-action py-2 ripple"
                ><i class="fas fa-chart-line fa-fw me-3"></i
                    ><span>Analytics</span></a
                >

                <a
                    href="{{ route('orders.list') }}"
                    class="list-group-item list-group-item-action py-2 ripple {{ request()->routeIs('orders.*') ? 'active' : 'hidden' }}"
                ><i class="fas fa-chart-bar fa-fw me-3"></i><span>{{ GoogleTranslate::trans('Orders', app()->getLocale()) }}</span></a
                >


                <a
                    href="{{ route('customers.list') }}"
                    class="list-group-item list-group-item-action py-2 ripple {{ request()->routeIs('customers.*') ? 'active' : 'hidden' }}"
                ><i class="fas fa-users fa-fw me-3"></i><span>{{ GoogleTranslate::trans('Customers', app()->getLocale()) }}</span></a
                >

            </div>
        </div>
    </nav>
    <!-- Sidebar -->

    <!-- Navbar -->
    <nav
        id="main-navbar"
        class="navbar navbar-expand-lg navbar-light bg-white fixed-top"
    >
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#sidebarMenu"
                aria-controls="sidebarMenu"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <i class="fas fa-bars"></i>
            </button>

            <!-- Brand -->
            <a class="navbar-brand" href="#">
                <img
                    src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png"
                    height="25"
                    alt=""
                    loading="lazy"
                />
            </a>
            <!-- Search form -->
            <form class="d-none d-md-flex input-group w-auto my-auto">
                <input
                    autocomplete="off"
                    type="search"
                    class="form-control rounded"
                    placeholder='Search (ctrl + "/" to focus)'
                    style="min-width: 225px"
                />
                <span class="input-group-text border-0"
                ><i class="fas fa-search"></i
                    ></span>
            </form>

            <!-- Right links -->
            <ul class="navbar-nav ms-auto d-flex flex-row">
                <!-- Notification dropdown -->
                <li class="nav-item dropdown">
                    <a
                        class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow"
                        href="#"
                        id="navbarDropdownMenuLink"
                        role="button"
                        data-mdb-toggle="dropdown"
                        aria-expanded="false"
                    >
                        <i class="fas fa-bell"></i>
                        <span class="badge rounded-pill badge-notification bg-danger"
                        >1</span
                        >
                    </a>
                    <ul
                        class="dropdown-menu dropdown-menu-end"
                        aria-labelledby="navbarDropdownMenuLink"
                    >
                        <li><a class="dropdown-item" href="#">Some news</a></li>
                        <li><a class="dropdown-item" href="#">Another news</a></li>
                        <li>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </li>
                    </ul>
                </li>

                <!-- Icon -->
                <li class="nav-item">
                    <a class="nav-link me-3 me-lg-0" href="#">
                        <i class="fas fa-fill-drip"></i>
                    </a>
                </li>
                <!-- Icon -->
                <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link" href="#">
                        <i class="fab fa-github"></i>
                    </a>
                </li>

                <!-- Icon dropdown -->
                <li class="nav-item dropdown">
                    <a
                        class="nav-link me-3 me-lg-0 dropdown-toggle "
                        href="#"
                        id="navbarDropdown"
                        role="button"
                        data-mdb-toggle="dropdown"
                        aria-expanded="false"
                    >
                        <i class="fa-solid fa-globe"></i>
                    </a>
                    <ul
                        class="dropdown-menu dropdown-menu-end"
                        aria-labelledby="navbarDropdown"
                    >
                        <li>
                            <a class="dropdown-item" href="{{ route('getLocale', 'en') }}"
                            ><i class="united kingdom flag"></i>English
                                @if(session('language') == 'en')
                                    <i class="fa fa-check text-success ms-2"></i
                                    >
                                @endif

                            </a>
                        </li>
                        <li><hr class="dropdown-divider" /></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('getLocale', 'vi') }}"
                            ><i class="poland flag"></i>Viet Nam
                                @if(session('language') == 'vi')
                                    <i class="fa fa-check text-success ms-2"></i>
                                @endif
                            </a>

                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('getLocale', 'fr') }}"
                            ><i class="poland flag"></i> France
                                @if(session('language') == 'fr')
                                    <i class="fa fa-check text-success ms-2"></i>
                                @endif
                            </a>

                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('getLocale', 'ja') }}"
                            ><i class="poland flag"></i> Japanese
                            @if(session('language') == 'ja')
                                <i class="fa fa-check text-success ms-2"></i>
                                @endif
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Avatar -->
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center"
                        href="#"
                        id="navbarDropdownMenuLink"
                        role="button"
                        data-mdb-toggle="dropdown"
                        aria-expanded="false"
                    >
                        <img
                            src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg"
                            class="rounded-circle"
                            height="22"
                            alt=""
                            loading="lazy"
                        />
                    </a>
                    <ul
                        class="dropdown-menu dropdown-menu-end"
                        aria-labelledby="navbarDropdownMenuLink"
                    >
                        <li><a class="dropdown-item" href="{{ route('profile') }}">My profile</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
</header>
<!--Main Navigation-->

<!--Main layout-->
<main style="margin-top: 58px">
    <div class="container pt-4">
        @yield('content')
    </div>
</main>
<!--Main layout-->
<!-- MDB -->
<script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"
></script>
<script>
    // Graph
    var ctx = document.getElementById("myChart");

    var myChart = new Chart(ctx, {
        type: "line",
        data: {
            labels: [
                "Sunday",
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday",
            ],
            datasets: [
                {
                    data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
                    lineTension: 0,
                    backgroundColor: "transparent",
                    borderColor: "#007bff",
                    borderWidth: 4,
                    pointBackgroundColor: "#007bff",
                },
            ],
        },
        options: {
            scales: {
                yAxes: [
                    {
                        ticks: {
                            beginAtZero: false,
                        },
                    },
                ],
            },
            legend: {
                display: false,
            },
        },
    });
</script>
</body>
</html>
