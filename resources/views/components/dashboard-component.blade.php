<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    {{-- bootstrap cdn --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/dataTables.bootstrap5.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/style.css') }}" />
    <title>Dashboard - Admin</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            text-transform: capitalize;
        }

        section {
            padding: 2rem 9%;
        }
    </style>
</head>

<body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
            </button>
            <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="/">3Beez | Tech</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar"
                aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="topNavBar">
                <form class="d-flex ms-auto my-3 my-lg-0">
                    <div class="input-group">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
                        <button class="btn btn-primary" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link  ms-2" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"><i style="margin-right: .3rem"
                                class="bi bi-person-fill"></i>{{ $data->name }}

                        </a>
                        {{-- <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul> --}}
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="sidebar">
        <div class="offcanvas-body p-0">
            <nav class="navbar-dark">
                <ul class="navbar-nav">
                    <li>
                        <div class="text-muted small fw-bold text-uppercase px-3">
                            CORE
                        </div>
                    </li>
                    <li>
                        <a href="/dashboard-admin" class="nav-link px-3 active">
                            <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="my-4">
                        <hr class="dropdown-divider bg-light" />
                    </li>
                    <li>
                        <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                            Interface
                        </div>
                    </li>
                    @if (Auth::user()->role == 'admin')
                        <li>
                            <a href="admin/showall_team" class="nav-link px-3">
                                <span class="me-2"><i class="bi bi-people-fill"></i></span>
                                <span>Team</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-3">
                                <span class="me-2"><i class="bi bi-bootstrap-fill"></i></span>
                                <span>Blogs</span>
                            </a>
                        </li>
                    @endif
                    <li>
                        <a href="/user_profile" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-person-fill"></i></span>
                            <span>profile</span>
                        </a>
                    </li>
                    <li class="my-4">
                        <hr class="dropdown-divider bg-light" />
                    </li>
                    <li>
                        <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                            Operations
                        </div>
                    </li>
                    <li>
                        <a href="/logout" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-backspace-fill"></i></span>
                            <span>Logout</span>
                        </a>
                    </li>
                    <li>
                        <a href="/" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-box-arrow-left"></i></span>
                            <span>Back</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <section>

        @yield('dashboard')

    </section>


    <script src="{{ asset('assets/dashboard/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="{{ asset('assets/dashboard/js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/script.js') }}"></script>
</body>

</html>
