@extends('app')

@section('title')
    Jumlah Peserta
@endsection

@section('content')

    <div class="row text-center">
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-9 text-left">
                    <h4>Jumlah Peserta Bayar</h4>
                </div>
                <div class="col-md-3">
                    <h4>{{ $jumlahpesertabayar}}</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-9 text-left">
                    <h4>Total Pemasukan</h4>
                </div>
                <div class="col-md-3">
                    <h4>{{ $totalharga}}</h4>
                </div>
            </div>
        </div>
    </div>
    @foreach($pesertas as $peserta)
    <div class="row text-center">
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-9 text-left">
                    <h4>Jumlah Peserta</h4>
                </div>
                <div class="col-md-3">
                    <h4>{{ count($peserta)}}</h4>
                </div>
            </div>
        </div>
    </div>
    @endforeach




@endsection