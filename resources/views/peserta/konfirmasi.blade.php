@extends('app')

@section('meta')
{{--<meta name="csrf-token" content="{{ csrf_token() }}" />--}}

@endsection
@section('header')
    <style type="text/css">
        .reveal-menu-hidden{
            top: 0;
        }
        /* Custom, iPhone Retina */
        @media only screen and (min-width : 320px) {

        }

        /* Extra Small Devices, Phones */
        @media only screen and (min-width : 480px) {

        }

        /* Small Devices, Tablets */
        @media only screen and (min-width : 768px) {

        }
        @media only screen and (max-width : 992px) {
            .cek-kode{
                margin-top: 20px;
            }
        }

        /* Small Devices, Tablets */
        @media only screen and (max-width : 768px) {
            .cek-kode{
                margin-top: 20px;
            }
        }

        /* Extra Small Devices, Phones */
        @media only screen and (max-width : 480px) {
            .cek-kode{
                margin-top: 20px;
            }
        }

        /* Custom, iPhone Retina */
        @media only screen and (max-width : 320px) {
            .cek-kode{
                margin-top: 20px;
            }
        }

    </style>
@endsection

@section('content')
    <div class="container" style="margin-top: 125px;">
<br/>

{!! Form::open(
    array(
        'url' => 'konfirmasi',
        'class' => 'form',

        'class' => 'form-horizontal',
        'id' => 'form-konfirmasi',
        'files' => true)) !!}

<div class="form-group">
    {!! Form::label('nama', 'Nama mu', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-6">
    {!! Form::text('nama', null, array('placeholder'=>'Nama mu', 'class' => 'form-control', 'required' => 'true', )) !!}

  </div>

</div>

<div class="form-group">
    {!! Form::label('gambar_bukti','Upload bukti transfer', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-6">
      {!! Form::file('image', array('required' => 'true') ) !!}
  </div>
</div>

<div class="form-group">
    {!! Form::label('atas_nama', 'Atas nama pengirim', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-6">
    {!! Form::text('atas_nama', null, array('placeholder'=>'Atas nama pengirim rekening yang kamu gunakan', 'class' => 'form-control', 'required' => 'true')) !!}
  </div>
</div>

<div class="form-group">
  <div class="col-md-12 col-md-offset-3">
    {!! Form::submit('Konfirmasi', array('class' => 'btn btn btn-success')) !!}
  </div>
</div>
{!! Form::close() !!}
</div>
    </div>
@endsection


@section('footer')
{{--<script type="text/javascript">--}}
{{--$(document).ready(function(){--}}
  {{--$.ajaxSetup({--}}
  	{{--headers: {--}}
  		{{--'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
  	        {{--}--}}
  {{--});--}}

  {{--function cekkode(){--}}

          {{--var datanya = $("#input-cek-kode").val();--}}
          {{--var route = "http://localhost:8000/cek-kode";--}}

       {{--$.ajax({--}}
         {{--url: route,--}}
         {{--type: 'POST',--}}
         {{--dataType: 'json',--}}

         {{--data:  {kode: datanya},--}}
         {{--success: function (data) {--}}

            {{--if(data['sukses'] === 0)--}}
            {{--{--}}
              {{--var pesan = $("<p style='color:red;'></p>").text(data['pesan']);--}}
               {{--$("#pesan-cek-kode").empty();--}}
               {{--$("#pesan-cek-kode").append(pesan);--}}

            {{--} else--}}
            {{--{--}}
               {{--var pesan = $("<p style='color:green;'></p>").text(data['pesan'] + data['nama'] + " ?");--}}
               {{--$("#pesan-cek-kode").empty();--}}
               {{--$("#pesan-cek-kode").append(pesan);--}}

            {{--}--}}

         {{--},--}}
         {{--error:function(data){--}}
              {{--console.log('konek error');--}}
         {{--}--}}
        {{--});--}}
    {{--}--}}


  {{--$('#cek-kode').focusout(function(){--}}
    {{--cekkode();--}}
  {{--});--}}
  {{--$('#cek-kode').blur(function(){--}}
    {{--cekkode();--}}
  {{--});--}}
  {{--$('#atas_nama').focus(function(){--}}
    {{--cekkode();--}}
  {{--});--}}


  {{--$('#cek-kode').click(function(){--}}
      {{--cekkode();--}}
    {{--});--}}
{{--});--}}
{{--</script>--}}

@endsection

