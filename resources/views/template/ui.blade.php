<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC Inventory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
    <script src="https://kit.fontawesome.com/d4078fb8b7.js" crossorigin="anonymous"></script>
    <style>
        /* Custom CSS to adjust margin-left of label */
        label[for="dt-length-0"] {
            margin-left: 10px; /* Adjust the margin as per your requirement */
            position: relative;
        }

        @media print {
            .navbar,
            .printBTN,
            .sidebars,
            .footer {
                display: none !important;
            }
            .tbPrint {
                overflow: unset !important;
            }
            .backBTN {
                display: none !important;
            }
        }

        a {
        color: inherit !important;
        text-decoration: none !important;
        }

        /* Ensure the sidebar and footer occupy full height */
        html, body {
            height: 100%;
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Ensure wrapper takes at least full viewport height */
        }

        .container-fluid {
            padding-right: 0; /* Remove right padding */
            padding-left: 0; /* Remove left padding */
        }

        .row {
            margin-right: 0; /* Remove right margin */
            margin-left: 0; /* Remove left margin */
            flex-grow: 1; /* Allow row to grow and fill remaining space */
        }

        .footer {
            margin-top: auto; /* Push footer to the bottom */
            width: 100%; /* Ensure footer spans the entire width */
        }






    </style>
</head>
<body>
    <div class="wrapper">
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container-fluid">
                <div class="title-nav p-3"></div>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <!-- container-fluid for contents-->
        <!-- vh-100 is for full height -->
        <div class="container-fluid p-0">
            <div class="row g-1">

                <!-- Offcanvas Sidebar for Mobile View -->
                <div class="sidebars d-lg-none">
                    <!-- Button trigger offcanvas -->
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-body bg-dark">
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="d-flex flex-column flex-shrink-0 p-3 text-white vh-100">
                                <a href="{{ route('inventory.index') }}" class="d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                                    <svg class="bi me-1 d-none d-md-block" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                                    <span class="fs-4">
                                        <img src="{{ asset('images/pc_logo2-CENTER.png') }}" alt="PC LOGO" class="img-fluid" style="max-width: 200px; height: auto;">
                                    </span>
                                </a>

                                <hr>
                                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link {{ request()->routeIs('inventory.index') ? 'active' : 'text-white' }}" href="{{ route('inventory.index') }}">
                                        <i class="fa-solid fa-table-list ms-3 me-1"></i>
                                        <span>Home </span>
                                    </a>
                                    <a class="nav-link {{ request()->routeIs('inventory.create') ? 'active' : 'text-white' }}" href="{{ route('inventory.create') }}">
                                        <i class="fa-solid fa-file-circle-plus ms-3 me-1"></i>
                                        <span>Add Inventory</span>
                                    </a>
                                    <a class="nav-link {{ request()->routeIs('inventory.print') ? 'active' : 'text-white' }}" href="{{ route('inventory.print') }}">
                                        <i class="bi bi-printer-fill ms-3 me-1"></i>
                                        <span>Print Inventory</span>
                                    </a>
                                    <a class="nav-link {{ request()->routeIs('profile.edit') ? 'active' : 'text-white' }}" href="{{ route('profile.edit') }}">
                                        <i class="bi bi-person-circle ms-3 me-1"></i>
                                        <span>Profile</span>
                                    </a>
                                    <hr>
                                    {{-- Logout function --}}
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf <!-- Add CSRF token for Laravel -->
                                    </form>
                                    <a class="nav-link text-white" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fa-solid fa-power-off ms-3 me-1"></i>
                                        <span>Logout</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Regular Sidebar for Desktop View -->
                <div class="sidebars col-lg-2 d-none d-lg-block bg-dark text-white">
                    <div class="p-3 text-white">
                        <a href="{{ route('inventory.index') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                            <svg class="bi me-1 d-none d-md-block" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                            <span class="fs-4">
                                <img src="{{ asset('images/pc_logo2-CENTER.png') }}" alt="PC LOGO" class="img-fluid" style="max-width: 200px; height: auto;">
                            </span>
                        </a>

                        <hr>
                        <div class="nav flex-column nav-pills me-3 " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link {{ request()->routeIs('inventory.index') ? 'active' : 'text-white' }}" href="{{ route('inventory.index') }}">
                                <i class="fa-solid fa-table-list ms-3 me-1"></i>
                                <span>Home </span>
                            </a>
                            <a class="nav-link {{ request()->routeIs('inventory.create') ? 'active' : 'text-white' }}" href="{{ route('inventory.create') }}">
                                <i class="fa-solid fa-file-circle-plus ms-3 me-1"></i>
                                <span>Add Inventory</span>
                            </a>
                            <a class="nav-link {{ request()->routeIs('inventory.print') ? 'active' : 'text-white' }}" href="{{ route('inventory.print') }}">
                                <i class="bi bi-printer-fill ms-3 me-1"></i>
                                <span>Print Inventory</span>
                            </a>
                            <a class="nav-link {{ request()->routeIs('profile.edit') ? 'active' : 'text-white' }}" href="{{ route('profile.edit') }}">
                                <i class="bi bi-person-circle ms-3 me-1"></i>
                                <span>Profile</span>
                            </a>
                            <hr>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf <!-- Add CSRF token for Laravel -->
                            </form>
                            <a class="nav-link text-white" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa-solid fa-power-off ms-3 me-1"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-10 p-5 min-vh-100">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <footer class="footer mt-auto">
        <div class="container-fluid bg-dark text-white">
            <div class="row">
                <div class="col-md-12 p-2">
                    <p class="text-center">All rights reserved © 2024</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Your toast containers and scripts here -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="flash_error" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header bg-danger text-white">
            <strong class="me-auto">Error</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            {{ Session::get('flash_error') }}
          </div>
        </div>
      </div>

      <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="flash_success" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header bg-success text-white">
            <strong class="me-auto">Success</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            {{ Session::get('flash_success') }}
          </div>
        </div>
      </div>

      <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="flash_message" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header bg-info text-dark">
            <strong class="me-auto">Information</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            {{ Session::get('flash_message') }}
          </div>
        </div>
      </div>

    <!-- Your JavaScript libraries and scripts here -->
    @if (Session::has('success'))
        <script>
            swal("Success", "{{ Session::get('success') }}", "success",
            {
                button: true,
                button: "OK",
            });
        </script>
        @endif


        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/2.0.1/js/dataTables.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <script>
            let table = new DataTable('#inventory_table');
        </script>
</body>
</html>
