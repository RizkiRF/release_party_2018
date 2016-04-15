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
<div class="row">
 <div class="col-md-3 text-center">
  <a href="#"><img src="{{asset ('images/tealinux-line-icon.png')}}" alt="Logo Tealinux Line Icon"></a>
 </div>
 <div class="col-md-9">
  @if($status == 1)
   <h4>Kode cocok dan Anda sudah melunasi pembayaran, cukup tunjukan QR-code ini untuk saat masuk acara nanti.</h4>
   <div class="row">
     <div class="col-md-6 text-center">
      <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(300)->generate($kode_tiket_qr_code)) !!} ">
      <h5>{{ $kode_tiket_qr_code }}</h5>
     </div>
     <div class="col-md-6">
     <h6>Atau kamu bisa unduh Qr-code ini, dan tinggal tunjukin saat masuk ke acara nanti, (Tidak perlu di print ya, papperless :D)</h6>
     <br>
      <div class="text-center">
       <button class="btn btn-success \" onclick="unduh()">Download</button>

      </div>
     </div>
   </div>
  @else
   <h4> Untuk mendapatkan tiket, kamu harus melakukan pembayaran terlebih dahulu ( :</h4>
   <h6>Segera lakukan pembayaran sebelum slot terisi penuh.</h6>
  @endif
 </div>
</div>

@endsection


@section('footer')
<script src="http://danml.com/js/download.js"></script>
<script type="text/javascript">

function unduh(){
  download("data:image/png;base64,{!! base64_encode(QrCode::format('png')->size(300)->generate($kode_tiket_qr_code)) !!} ", "QR-Code-Release-Party-TeaLinuxOS-8.png", "image/png");
}
</script>
 </div>

@endsection
