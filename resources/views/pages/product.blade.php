@extends('layout.app')

@section('app_name', 'Product')
@section('content')
<main class="content">
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
</section>
</main>
@endsection
