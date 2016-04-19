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
   <h4><span style="color:#4EAE49;">{{ $nama }}</span> , untuk mendapatkan tiket, kamu harus melakukan pembayaran terlebih dahulu ( :</h4>
   <h6>Segera lakukan pembayaran sebelum slot terisi penuh.</h6>
         <div class="row">
             <div class="col-md-12">
                 <h6>Kamu dapat melakukan pembayaran dengan dua cara :</h6> <br>

             </div>
         </div>
         <div class="row">
             <div class="col-md-6 text-center" style="margin-bottom: 30px;">
                 <img src="{{asset ('images/cod.png')}}" alt="COD">
                 <h5>COD</h5>
                 Kamu dapat membayar secara langsung di Stand Pendaftaran kami atau Camp Doscom di gedung D lantai 1, <br><b>Universitas Dian Nuswantoro, Semarang</b>
                 <br/>
                 <br>
                 <a target="_blank" href="https://www.google.co.id/maps/place/Kantin+Udinus/@-6.980809,110.4071595,17z/data=!3m1!4b1!4m2!3m1!1s0x2e708b4c1c405183:0x3943842b992e87fb?hl=id" class="btn btn-outline" role="button">Buka Google Maps</a>
                 <br>
             </div>
             <div class="col-md-6 ">
                 <div class="text-center">
                     <img src="{{asset ('images/atm.png')}}" alt="COD">
                     <h5>Transver via Bank</h5>
                 </div>

                 Melakukan pendaftaran secara Online lalu melakukan pembayaran via rekening bank. (Nomer rekening dan prosedur lengkap telah kami kirim ke email anda : <b>{{ $email }}</b>)
                 <ol>
                     <li>Lakukan pembayaran ke nomer rekening kami</li>
                     <li>Konfirmasi pembayaran mu dengan salah satu metode ini :
                         <ul>
                             <li>Mengunggah bukti transfer he <a href="{{ url('/konfirmasi') }}">halaman konfirmasi </a> , atau </li>
                             <li>Kirim sms dengan format "Nama Peserta &#60;spasi&#62; Nama bank pengirim &#60;spasi&#62; Atas nama pengirim" , atau</li>
                             <li>Langsung hubungi kami, Salamuddin - <b>0896 7565 7864 </b> / Email : <a href="mailto:sekretariat@doscom.org?Subject=Release%20Party" target="_top">sekretariat@doscom.org</a></li>
                         </ul>
                     </li>
                     <li>Tunggu maximal 1 x 24 Jam, untuk kami melakukan pengecekan lalu kami akan menghubungimu ( :</li>
                 </ol>
             </div>
         </div>
  @endif
 </div>
</div>

@endsection


@section('footer')
<script src="http://danml.com/js/download.js"></script>
<script type="text/javascript">

function unduh(){
  download("data:image/png;base64,{!! base64_encode(QrCode::format('png')->errorCorrection('H')->size(300)->generate($kode_tiket_qr_code)) !!} ", "QR-Code-Release-Party-TeaLinuxOS-8.png " , "image/png");
}
</script>
 </div>

@endsection
