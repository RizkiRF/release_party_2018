@extends('app')

@section('title')
Cetak / Unduh - Tiket Berhasil
@endsection

@section('content')

Halaman Tiket
@if($status == 1)
<h3>Kode cocok dan sudah melunasi pembayaran, cukup tunjukan QR-code ini untuk saat masuk acara nanti.</h3>
 <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(300)->generate($kode_tiket_qr_code)) !!} ">

 <h2>{{ $kode_tiket_qr_code }}</h2>

 <button onclick="unduh()">Download</button>
 @else
 <h3> Bayar dulu bosku!</h3>
 bla bla ...
 @endif
@endsection


@section('footer')
<script src="http://danml.com/js/download.js"></script>
<script type="text/javascript">

function unduh(){
  download("data:image/png;base64,{!! base64_encode(QrCode::format('png')->size(300)->generate($kode_tiket_qr_code)) !!} ", "QR-Code-Release-Party-TeaLinuxOS-8.png", "image/png");
}
</script>

@endsection
