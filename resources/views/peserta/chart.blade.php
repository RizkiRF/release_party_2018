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
            <div id="peserta" style="width:100%; height:400px;"></div>
        </div>
        <div class="row">
            <div class="col-md-6 text-center">
                <h3>Total Peserta Mendaftar</h3>
                <div id="peserta" style="width:100%; height:400px;"></div>
            </div>
</div>

@endsection

@section('footer')
        <script src="http://code.highcharts.com/highcharts.js"></script>
    <script>
        $( document ).ready(function() {

            $('#peserta').highcharts(
                {!! json_encode($graph) !!}
            );
            $('#container').highcharts(
                    {!! json_encode($graph) !!}
            );
        });


    </script>
    @endsection