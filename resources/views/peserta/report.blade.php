@extends('app-dashboard')

@section('header')
    <style type="text/css">
        .reveal-menu-hidden{
            top: 0;
        }
    </style>
@endsection
@section('content')
<div class="container" style="margin-top: 75px;">
    <div class="row">
        <div class="col-md-6 text-center">
            <h3>Total Peserta Mendaftar</h3>
            <h1 style="color: #4eae49;">{{ $pesertas }}</h1>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-8">
                    <h3>Membayar</h3>
                </div>
                <div class="col-md-4">
                    <h2>{{ $peserta_lunas }}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <h3><span style="color: #ac2925; ">Belum </span>Membayar</h3>
                </div>
                <div class="col-md-4">
                    <h2>{{ $peserta_belum_lunas }}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 text-center">
            <h3>DVD</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <h4>32 Bit</h4>
                    </div>
                    <div class="row">
                        <h4 style="color: #4eae49; ">{{ $tigadua }}</h4>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <h4>64 Bit</h4>
                    </div>
                    <div class="row">
                        <h4 style="color: #4eae49; ">{{ $enamempat }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection