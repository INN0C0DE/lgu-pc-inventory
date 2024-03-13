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
        overflow:unset !important;
        }
        .backBTN {
            display: none !important;
        }
}

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <div class="title-nav p-3">
        {{-- <a class=" navbar-brand mb-0 h1 p-2" href="{{ route("inventory.index") }}"> --}}
            {{-- PC Inventory  --}}
        {{-- </a> --}}

        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        <span class="navbar-toggler-icon"></span>
        </button>



        {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>
        </ul> --}}
        {{-- <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}
        </div>
    </div>
    </nav>



    <!-- container-fluid for contents-->
    <!-- vh-100 is for full height -->
    <div class=" container-fluid p-0">
        <div class=" row g-1">
            {{-- <div class="col-lg-2">
                <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark vh-100">
                    <a href="{{ route('inventory.index') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <svg class="bi me-1 d-none d-md-block" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                        <span class="fs-4">
                            <img src="{{ asset('images/pc_logo2-CENTER.png') }}" alt="PC LOGO" class="img-fluid" style="max-width: 200px; height: auto;">
                        </span>
                    </a>

                    <hr>
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link {{ request()->routeIs('inventory.index') ? 'active' : 'text-white' }}" href="{{ route('inventory.index') }}">
                            <i class="bi bi-table ms-3 me-1"></i>
                            <span>Home</span>
                        </a>
                        <a class="nav-link {{ request()->routeIs('inventory.create') ? 'active' : 'text-white' }}" href="{{ route('inventory.create') }}">
                            <i class="bi bi-file-earmark-plus-fill ms-3 me-1"></i>
                            <span>Add Inventory</span>
                        </a>
                    </div>
                </div>
            </div> --}}

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
                                    <i class="bi bi-table ms-3 me-1"></i>
                                    <span>Home</span>
                                </a>
                                <a class="nav-link {{ request()->routeIs('inventory.create') ? 'active' : 'text-white' }}" href="{{ route('inventory.create') }}">
                                    <i class="bi bi-file-earmark-plus-fill ms-3 me-1"></i>
                                    <span>Add Inventory</span>
                                </a>
                                <a class="nav-link {{ request()->routeIs('inventory.print') ? 'active' : 'text-white' }}" href="{{ route('inventory.print') }}">
                                    <i class="bi bi-printer-fill ms-3 me-1"></i>
                                    <span>Print Inventory</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Regular Sidebar for Desktop View -->
            <div class="sidebars col-lg-2 d-none d-lg-block ">
                <div class=" p-3 text-white bg-dark vh-100 ">
                    {{-- d-flex flex-column flex-shrink-0 was removed. --}}
                    <a href="{{ route('inventory.index') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <svg class="bi me-1 d-none d-md-block" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                        <span class="fs-4">
                            <img src="{{ asset('images/pc_logo2-CENTER.png') }}" alt="PC LOGO" class="img-fluid" style="max-width: 200px; height: auto;">
                        </span>
                    </a>

                    <hr>
                    <div class="nav flex-column nav-pills me-3 " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link {{ request()->routeIs('inventory.index') ? 'active' : 'text-white' }}" href="{{ route('inventory.index') }}">
                            <i class="bi bi-table ms-3 me-1"></i>
                            <span>Home</span>
                        </a>
                        <a class="nav-link {{ request()->routeIs('inventory.create') ? 'active' : 'text-white' }}" href="{{ route('inventory.create') }}">
                            <i class="bi bi-file-earmark-plus-fill ms-3 me-1"></i>
                            <span>Add Inventory</span>
                        </a>
                        <a class="nav-link {{ request()->routeIs('inventory.print') ? 'active' : 'text-white' }}" href="{{ route('inventory.print') }}">
                            <i class="bi bi-printer-fill ms-3 me-1"></i>
                            <span>Print Inventory</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-10 p-5">
                @yield('content')
            </div>
        </div>
    </div>

    <footer>
        <div class="footer container-fluid bg-dark text-white">
            <div class="row">
                <div class="col-md-12 p-2">
                    <p class="text-center">All rights reserved</p>
                </div>
            </div>
        </div>
    </footer>

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

        @if (Session::has('success'))
        <script>
            swal("Success", "{{ Session::get('success') }}", "success",
            {
                button: true,
                button: "OK",
            });
        </script>
        @endif

        {{-- @if (Session::has('welcome'))
        <script>
            Swal.fire({
            title: "Custom width, padding, color, background.",
            width: 600,
            padding: "3em",
            color: "#716add",
            background: "#fff url(/images/trees.png)",
            backdrop: `
                rgba(0,0,123,0.4)
                url("/images/nyan-cat.gif")
                left top
                no-repeat
            `
            });
        </script>
        @endif --}}
      {{-- <script type="text/javascript">
        @if (Session::has('flash_error'))
          const toast = new bootstrap.Toast(document.getElementById('flash_error'))
          toast.show()

        @elseif (Session::has('flash_message'))
          const toast = new bootstrap.Toast(document.getElementById('flash_message'))
          toast.show()

        @elseif (Session::has('flash_success'))
          const toast = new bootstrap.Toast(document.getElementById('flash_success'))
          toast.show()

        @endif
    </script> --}}


        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/2.0.1/js/dataTables.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <script>
            let table = new DataTable('#inventory_table');
        </script>
</body>
</html>
