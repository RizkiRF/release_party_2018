@extends('app')

@section('header')
    <style type="text/css">
        .reveal-menu-hidden{
            top: 0;
        }
        body{
            font-size: 18px;
        }
    </style>
@endsection

@section('content')
<div class="container" style="margin-top: 125px;">
<div class="row">

    <div class="col-md-8">
        <h2>Terimakasih telah mendaftar, <span style="color:#4EAE49;">{{ $namapeserta }}</span></h2>
        <h5>Selanjutnya, segera lakukan pembayaran.</h5>


    </div>
    <div class="col-md-4 text-center">
        {{--<a href="#"><img src="{{asset ('images/tealinux-line-icon.png')}}" alt="Logo Tealinux Line Icon"></a>--}}
        <br>
        <h5 >Kode tiketmu</h5>
        ----------------------
        <h3 style="color:#4EAE49;">{{ $kode_tiket }}</h3>
        ----------------------

    </div>
</div>
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

<br/>

</div>
@endsection
