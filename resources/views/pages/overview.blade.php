@extends('layout.app')

@section('app_name', 'Overview')
@section('content')
<main class="content">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <div>
                <button
                    class="sidebarCollapseDefault btn p-0 border-0 d-none d-md-block"
                    aria-label="Hamburger Button">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <button
                    data-bs-toggle="offcanvas"
                    data-bs-target=".sidebar"
                    aria-controls="sidebar"
                    aria-label="Hamburger Button"
                    class="sidebarCollapseMobile btn p-0 border-0 d-block d-md-none">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
            <div class="d-flex align-items-center justify-content-end gap-4">
                <input
                    type="text"
                    placeholder="Search report or product"
                    class="search form-control"/>
                <button
                    class="btn btn-search d-flex justify-content-center align-items-center p-0"
                    type="button">
                    <img src="{{asset('/img/ic_search.svg')}}" width="20px" height="20px"/>
                </button>
                <img src=" {{asset('/img/avatar.jpg')}}" alt="Photo Profile" class="avatar"/>
            </div>
        </div>
    </nav>
    <section class="p-3">
        <header>
            <h3>Overview</h3>
            <p>Manage data for growth</p>
        </header>
        <div class="information d-flex flex-column gap-5">
            <div class="row px-1 mb-2 gap-5">
                <div class="col-xl-4 col-12 card debit">
                    <img src="{{asset('/img/ic_card.svg')}} " alt="Debit" width="54px"/>
                    <p class="number">•••• &nbsp;&nbsp; 2208 &nbsp;&nbsp; 1996</p>
                    <div>
                        <p class="fw-semibold m-0">Shayna Qowy</p>
                        <p class="fw-light m-0">20/24</p>
                    </div>
                </div>
                <div class="col-xl-4 col-12 card balance">
                    <p>My Balance</p>
                    <h2>$90,500,000</h2>
                    <div>
                        <p class="m-0 fw-bold">+22%</p>
                    </div>
                </div>
                <div class="col-xl-4 col-12 card donut-chart m-lg-0 p-2">
                    <div>
                        <canvas id="chart-budget" style="height: 226px; width: 100%"></canvas>
                    </div>
                </div>
            </div>
            <div class="row px-1 d-flex justify-content-between">
                <div class="col-xl-6 col-12 p-0 mb-5 mb-xl-0 revenue">
                    <h5>Revenue Past 6 Months</h5>
                    <div>
                        <canvas id="chart-revenue" width="100%"></canvas>
                    </div>
                </div>
                <div class="col-xl-6 col-12 p-0 ps-xl-4 transaction">
                    <h5>Latest Transactions</h5>
                    <div class="d-flex flex-column gap-4">
                        <div class="d-flex flex-row gap-3">
                            <div class="icon-history">
                                <img src=" {{asset('/img/ic_spotify.svg')}}" width="32" height="32"/>
                            </div>
                            <div class="trans-history flex-fill">
                                <div>
                                    <p class="m-0 title">Spotify</p>
                                    <p class="m-0 date">12 Jan</p>
                                </div>
                                <p class="m-0 outcome">- $20,000</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row gap-3">
                            <div class="icon-history">
                                <img src="{{asset('/img/ic_receive_act.svg')}}" width="32" height="32"/>
                            </div>
                            <div class="trans-history flex-fill">
                                <div>
                                    <p class="m-0 title">Top Up BCA</p>
                                    <p class="m-0 date">12 Jan</p>
                                </div>
                                <p class="m-0 income">+ $120,000</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row gap-3">
                            <div class="icon-history">
                                <img src="{{asset('/img/ic_send_act.svg')}}" width="32" height="32"/>
                            </div>
                            <div class="trans-history flex-fill">
                                <div>
                                    <p class="title m-0">Send to @anggapro</p>
                                    <p class="date m-0">12 Jan</p>
                                </div>
                                <p class="outcome m-0">- $6,000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
