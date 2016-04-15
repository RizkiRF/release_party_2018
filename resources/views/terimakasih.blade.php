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
    <div class="col-md-4 text-center">
        <a href="#"><img src="{{asset ('images/tealinux-line-icon.png')}}" alt="Logo Tealinux Line Icon"></a>
        <h3>{{ $kode_tiket }}</h3>
        <h6>Kode tiketmu</h6>
    </div>
    <div class="col-md-8">
        <h2>Terimakasih telah mendaftar, {{ $namapeserta }}</h2>
        <h5>Selanjutnya, segera lakukan pembayaran.</h5>


    </div>
</div>
    <div class="row">
        <div class="col-md-12">
            <h6>Kamu dapat melakukan pembayaran dengan dua cara :</h6> <br>

        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <ul>
                <li>Datang langsung ke stand / camp kami di Gedung D Lantai 1 Universitas Dian Nuswantoro</li>


            </ul>
        </div>
        <div class="col-md-6">
            <li>Melakukan pendaftaran secara Online lalu melakukan pembayaran via rekening bank. (Nomer rekening dan prosedur lengkap telah kami kirim ke email anda : {{ $email }})</li>
            <ul>
                <li>Lakukan pembayaran ke nomer rekening kami</li>
                <li>Konfirmasi pembayaran mu ke <a href="#">halaman konfirmasi </a> / kirim sms dengan format "Nama Peserta Nama bank pengirim Atas nama pengirim" </li>
                <li>Tunggu maximal 1 x 24 Jam, untuk kami melakukan pengecekan lalu kami akan menghubungimu ( :</li>
            </ul>
        </div>
    </div>

<br/>

</div>
@endsection
