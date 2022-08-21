<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="description" content="Menarra Finance Dashboard Page"/>
        <meta name="keywords" content="HTML, CSS, JavaScript, Bootstrap, Chart JS"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="author" content="Rachma | @rachmadzii"/>

        <title>
            {{config('app_name', 'Furniture')}}
        </title>

        <!-- Scrollbar Custom CSS -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css"/>

        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
            crossorigin="anonymous">

        <!-- External CSS -->
        <link
            rel="stylesheet"
            href="{{ asset('/css/styles.css') }}"
            type="text/css"
            media="screen"/>

        <!-- CDN Fontawesome -->
        <script src="https://kit.fontawesome.com/32f82e1dca.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <!-- Nav Sidebar -->
        <nav
            class="sidebar offcanvas-md offcanvas-start"
            data-bs-scroll="true"
            data-bs-backdrop="false">
            <div class="d-flex justify-content-end m-3 d-block d-md-none">
                <button
                    aria-label="Close"
                    data-bs-dismiss="offcanvas"
                    data-bs-target=".sidebar"
                    class="btn p-0 border-0 fs-4">
                    <i class="fas fa-close"></i>
                </button>
            </div>
            <div class="d-flex justify-content-center mt-md-5 mb-5">
                <img src="{{asset('/img/logo.svg')}}" alt="Logo" width="140px" height="40px"/>
            </div>
            <div class="pt-2 d-flex flex-column gap-5">
                <div class="menu p-0">
                    <p>Daily Use</p>
                    <a href="/overview " class="item-menu active">
                        <i class="icon ic-stats"></i>
                        Overview
                    </a>
                    {{-- <a href="/purchase" class="item-menu dropdown">
                        <i class="icon ic-trans"></i>
                        Purchase
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#">Action</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Another action</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                    </a> --}}
                    {{-- <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Dropdown button
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </div> --}}

                      <li class="item-menu dropdown">
                        <i class="icon ic-stats"></i>
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Purchase
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="/purchase">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </li>
                      <li class="item-menu dropdown">
                        <i class="icon ic-msg"></i>
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Product
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="/product">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </li>
                    {{-- <a href="/product" class="item-menu">
                        <i class="icon ic-msg"></i>
                        Product
                    </a> --}}
                    <li class="item-menu dropdown">
                        <i class="icon ic-stats"></i>
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Report
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="/report">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </li>
                    {{-- <a href="/report" class="item-menu">
                        <i class="icon ic-stats"></i>
                        Report
                    </a> --}}
                    <a href="/account" class="item-menu">
                        <i class="icon ic-account"></i>
                        Account
                    </a>
                </div>
                <div class="menu">
                    <p>Others</p>
                    <a href="#" class="item-menu">
                        <i class="icon ic-settings"></i>
                        Settings
                    </a>
                    <a href="#" class="item-menu">
                        <i class="icon ic-help"></i>
                        Help
                    </a>
                    <a href="#" class="item-menu">
                        <i class="icon ic-logout"></i>
                        Logout
                    </a>
                </div>
            </div>
        </nav>

        <!-- Main Content -->

        @yield('content')

        <!-- Bootstrap JS -->
        <script
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
            crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
        <script src="{{ asset('/js/donut_chart.js') }}"></script>
        <script src="{{ asset('/js/line_chart.js') }}"></script>

        <script>
            $(document).ready(function () {
                $('.sidebarCollapseDefault').on('click', function () {
                    $('.sidebar').toggleClass('active');
                    $('.content').toggleClass('active');
                });
            });
        </script>
    </body>
</html>
