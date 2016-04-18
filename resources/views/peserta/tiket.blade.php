@extends('app')

@section('header')
    <style type="text/css">
        .reveal-menu-hidden{
            top: 0;
        }
    </style>
@endsection

@section('content')
<div class="container" style="margin-top: 125px;">
<h3 class="text-center">Tiket</h3>
    <br>
@if(Session::has('sukses'))
    <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <span class="glyphicon glyphicon-ok"></span><em> {!! session('sukses') !!}</em></div>
@endif
@if(Session::has('gagal'))
    <div class="alert alert-danger alert-dismissible" role="alert">
       <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <span class="glyphicon glyphicon-remove"></span><em> {!! session('gagal') !!}</em></div>
@endif


{!! Form::open(
    array(
        'url' => 'tiket',
        'class' => 'form',
        'novalidate' => 'novalidate',
        'class' => 'form-horizontal',
        'id' => 'form-konfirmasi',
        )) !!}

<div class="form-group">
    {!! Form::label('kode_tiket', 'Kode Tiket', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-6">
    {!! Form::text('kode_tiket', null, array('placeholder'=>'Kode Tiketmu', 'class' => 'form-control', 'required' => 'true', 'id' => 'input-cek-kode', 'onKeyUP' => 'this.value = this.value.toUpperCase()')) !!}
    <div id="pesan-cek-kode">
    </div>
  </div>

</div>

<div class="form-group">
  <div class="col-md-12 col-md-offset-3">
    {!! Form::submit('Dapatkan Tiket', array('class' => 'btn btn-success')) !!}
  </div>
</div>
{!! Form::close() !!}
    </div>
@endsection

@section('footer')
    <script>
        $('input[type=text]').val (function () {
            return this.value.toUpperCase();
        })
    </script>
    @endsection