@extends('layouts.admin')
@section('content')
<div class="section-body">
    {{-- SECTION 01 --}}
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="card-statistic-5">
                    <div class="info-box7-block">
                        <div class="row ">
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                <div class="banner-img">
                                    <img src="{{asset('assets/img/banner/1.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                <h6 class="m-b-20 text-right">Jumlah Majalah / Buku</h6>
                                <h4 class="text-right"><span>{{$data['majalah']}}</span>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="card-statistic-5">
                    <div class="info-box7-block">
                        <div class="row ">
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                <div class="banner-img">
                                    <img src="{{asset('assets/img/banner/2.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                <h6 class="m-b-20 text-right">Jumlah Video</h6>
                                <h4 class="text-right"><span>{{$data['video']}}</span>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="card-statistic-5">
                    <div class="info-box7-block">
                        <div class="row ">
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                <div class="banner-img">
                                    <img src="{{asset('assets/img/banner/3.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                <h6 class="m-b-20 text-right">Jumlah Komik</h6>
                                <h4 class="text-right"><span>{{$data['komik']}}</span>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="card-statistic-5">
                    <div class="info-box7-block">
                        <div class="row ">
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                <div class="banner-img">
                                    <img src="{{asset('assets/img/banner/4.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                <h6 class="m-b-20 text-right">Pengunjung Hari ini</h6>
                                <h4 class="text-right"><span>{{$data['viewer']}}</span>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- END SECTION 01 --}}

    {{-- SECTION 02 --}}
    <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-12 ">
            <div class="card">
                <div class="card-header">
                    <h4>Analytic Pengunjung Website Pertanggal</h4>
                </div>
                <div class="card-body">
                    <div id="analisicontent"></div>
                </div>
            </div>
        </div>
    </div>
    {{-- END SECTION 02 --}}

    {{-- SECTION 03 --}}
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-6">
            <div class="card">
                <div class="card-header">
                    <h4>Viewer Berdasarkan Device</h4>
                </div>
                <div class="card-body">
                    <div class="recent-report__chart">
                        <div id="deviceChart" style="height:200px"></div>
                    </div>
                </div>
            </div>
        </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-6">
            <div class="card">
                <div class="card-header">
                    <h4>Viewer Berdasarkan Konten</h4>
                </div>
                <div class="card-body">
                    <div class="recent-report__chart">
                        <div id="pieChart" style="height:200px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- END SECTION 03 --}}
</div>
@endsection

@section('scripts')

<script src="{{asset('assets/bundles/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/bundles/amcharts4/core.js')}}"></script>
<script src="{{asset('assets/bundles/amcharts4/charts.js')}}"></script>
<script src="{{asset('assets/bundles/amcharts4/animated.js')}}"></script>
<!-- Page Specific JS File -->
<script src="{{asset('js/bycontent.js')}}"></script>

@endsection
