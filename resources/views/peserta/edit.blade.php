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

    <br/>
    @if(Session::has('pesan'))
        <div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <span class="glyphicon glyphicon-ok"></span><em> {!! session('pesan') !!}</em></div>
    @endif


    <form class="form-horizontal" action="{{ url('/peserta/edit')}}" method="post">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="peserta_id" value="{{ $peserta->id }}{{ old('peserta') }}">
        <div class="form-group has-info">
            <label for="inputNama" class="col-md-2 control-label"><i class="glyphicon glyphicon-user"></i> Nama</label>
            <div class="col-md-9">
                <input  name="nama" class="form-control" placeholder="Nama" type="text" value="@if(!old('nama')){{$peserta->nama}}@endif{{ old('nama') }}" required="required">
            </div>
        </div>

        <div class="form-group has-info">
            <label for="inputNo_hp" class="col-md-2 control-label"><i class=" glyphicon glyphicon-earphone"></i> No. Hp</label>
            <div class="col-md-9">
                <input class="form-control" name="no_hp" placeholder="No. Hp" type="text" value="@if(!old('no_hp')){{$peserta->no_hp}}@endif{{ old('no_hp') }}" required="required">
            </div>
        </div>
        <div class="form-group has-info">
            <label for="inputEmail" class="col-md-2 control-label"><i class="glyphicon glyphicon-envelope"></i> Email</label>
            <div class="col-md-9">
                <input  name="email" class="form-control" placeholder="Email" type="email" value="@if(!old('email')){{$peserta->email}}@endif{{ old('email') }}" required="required">
            </div>
        </div>

        <div class="form-group has-info">
            <label class="col-md-2 control-label"><i class="glyphicon glyphicon-user"></i> Status</label>
            <div class="col-md-9">
                <select class="form-control" name="status" required="required">

                    <option value="mahasiswa" {{$peserta->status =='mahasiswa'? "selected" :""}}>Mahasiswa</option>
                    <option value="pelajar "{{$peserta->status =='pelajar'? "selected" :""}}>Pelajar</option>
                    <option value="umum" {{ $peserta->status == 'umum' ? "selected" : "" }}>Umum</option>
                </select>
            </div>
        </div>
        <div class="form-group has-info">
            <label for="inputInstansi" class="col-md-2 control-label"><i class="glyphicon glyphicon-envelope"></i> Instansi</label>
            <div class="col-md-9">
                <input  name="instansi" class="form-control" placeholder="Email" type="text" value="@if(!old('instansi')){{$peserta->instansi}}@endif{{ old('instansi') }}" required="required">
            </div>
        </div>
        <div class="form-group has-info">
            <label class="col-md-2 control-label"><i class="glyphicon glyphicon-user"></i> DVD</label>
            <div class="col-md-9">
                <select class="form-control" name="dvd" required="required">
                    <option >--Pilih--</option>
                    <option value="32"{{$peserta->dvd =='32'? "selected" : ""}}>32 Bit</option>
                    <option value="64"{{$peserta->dvd =='64'? "selected" : ""}}>64 Bit</option>

                </select>
            </div>
        </div>

        <div class="form-group">
            <label  class="col-md-2 control-label">Status Bayar</label>
            <div class="col-md-9">
                <select class="form-control" name="status_bayar" required="required">

                    <option value="0" {{ $peserta->status_bayar == 0 ? "selected" : "" }} >Belum Lunas</option>
                    <option value="1" {{ $peserta->status_bayar == 1 ? "selected" : "" }} >Sudah Lunas</option>

                </select>

            </div>
        </div>
        @if($peserta->status_bayar == 1)
        <div class="form-group">
        <label  class="col-md-2 control-label">Status Email Lunas</label>
        <div class="col-md-9">

            @if($peserta->email_terkirim == 0)
                <a href="{{ url('peserta/kirim-email-lunas/'. $peserta->id) }}" class="btn btn-success" role="button">Kirim Email Pelunasan</a>

            @else
                Email Pelunasan Terkirim

            @endif


        </div>
        </div>
        @endif
        @if($peserta->status_bayar == 1)
        <div class="form-group">
        <label  class="col-md-2 control-label">Status Sms Lunas</label>
        <div class="col-md-9">
            @if($peserta->sms_terkirim == 0)
                <p>Kirim ke : {{ $peserta->no_hp }}</p>
                <p>Pesan : </p>
                <p>Terimakasih, {{ $peserta->nama }}. kami dari Doscom selaku penyelenggara Seminar Nasional Release Party TeaLinux OS {{getenv('TEALINUXOS_VERSION')}}. Pembayaran kamu telah telah kami terima, saat acara nanti cukup tunjukan QR-Code yg telah kami kirim ke email mu. Terimakasih.</p>
                <a href="{{ url('peserta/kirim-sms-lunas/'. $peserta->id) }}" class="btn btn-success" role="button">Sudah Kirim SMS - Manual :D</a>
            @else
                SMS Pelunasan Terkirim
            @endif

        </div>
        </div>
        @endif
        <br>
        <div class="form-group">
            <div class="col-md-10 col-md-offset-5">
                <button type="submit" class="btn btn-primary btn-lg">Perbaharui</button>
                <a href="{{  url('peserta/delete/'.$peserta->id.'?_token='.csrf_token()) }}" class="btn btn-danger btn-lg">Hapus</a>

            </div>
        </div>

    </form>
    </div>

@endsection
