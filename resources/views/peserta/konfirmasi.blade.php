@extends('app')

@section('meta')
<meta name="csrf-token" content="{{ csrf_token() }}" />

@endsection

@section('title')

@endsection

@section('content')

Halaman konfirmasi
<br/>

{!! Form::open(
    array(
        'url' => 'konfirmasi',
        'class' => 'form',
        'novalidate' => 'novalidate',
        'class' => 'form-horizontal',
        'id' => 'form-konfirmasi',
        'files' => true)) !!}

<div class="form-group">
    {!! Form::label('kode_tiket', 'Kode Tiket', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-6">
    {!! Form::text('kode_tiket', null, array('placeholder'=>'Kode Tiketmu', 'class' => 'form-control', 'required' => 'true', 'id' => 'input-cek-kode')) !!}
    <div id="pesan-cek-kode">
    </div>
  </div>
  <div class="col-md-3">
      <button id="cek-kode" type="button" class="btn btn-primary cek-kode">Cek Kode</button>
  </div>
</div>


<div class="form-group">
    {!! Form::label('gambar_bukti','Upload bukti transfer', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-6">
      {!! Form::file('image', null, array('required' => 'true')) !!}
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
    {!! Form::submit('Konfirmasi', array('class' => 'btn btn-raised btn-info')) !!}
  </div>
</div>
{!! Form::close() !!}
</div>

@section('footer')
<script type="text/javascript">
$(document).ready(function(){
  $.ajaxSetup({
  	headers: {
  		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  	        }
  });

  function cekkode(){

          var datanya = $("#input-cek-kode").val();
          var route = "http://localhost:8000/cek-kode";

       $.ajax({
         url: route,
         type: 'POST',
         dataType: 'json',

         data:  {kode: datanya},
         success: function (data) {

            if(data['sukses'] === 0)
            {
              var pesan = $("<p style='color:red;'></p>").text(data['pesan']);
               $("#pesan-cek-kode").empty();
               $("#pesan-cek-kode").append(pesan);

            } else
            {
               var pesan = $("<p style='color:green;'></p>").text(data['pesan'] + data['nama'] + " ?");
               $("#pesan-cek-kode").empty();
               $("#pesan-cek-kode").append(pesan);

            }

         },
         error:function(data){
              console.log('konek error');
         }
        });
    }


  $('#cek-kode').focusout(function(){
    cekkode();
  });
  $('#cek-kode').blur(function(){
    cekkode();
  });
  $('#atas_nama').focus(function(){
    cekkode();
  });


  $('#cek-kode').click(function(){
      cekkode();
    });
});
</script>

@endsection
@endsection