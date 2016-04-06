@extends('app')

@section('title')

@endsection

@section('content')

    Homepage RP
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
            <label for="inputEmail" class="col-md-2 control-label"><i class="glyphicon glyphicon-user"></i> Nama</label>
            <div class="col-md-9">
                <input  name="nama" class="form-control" placeholder="Nama" type="text" value="@if(!old('nama')){{$peserta->nama}}@endif{{ old('nama') }}" required="required">
            </div>
        </div>

        <div class="form-group has-info">
            <label for="inputEmail" class="col-md-2 control-label"><i class=" glyphicon glyphicon-earphone"></i> No. Hp</label>
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

        <div class="form-group">
        <label  class="col-md-2 control-label">Status Email</label>
        <div class="col-md-9">
            <select class="form-control" name="email_terkirim" required="required">

                <option value="0" {{ $peserta->email_terkirim == 0 ? "selected" : "" }} >Belum Dikirim</option>
                <option value="1" {{ $peserta->email_terkirim == 1 ? "selected" : "" }} >Sudah Dikirim</option>

            </select>

        </div>
        </div>

        <div class="form-group">
        <label  class="col-md-2 control-label">Status Sms</label>
        <div class="col-md-9">
            <select class="form-control" name="sms_terkirim" required="required">
                <option >--Pilih--</option>
                <option value="0" {{ $peserta->sms_terkirim == 0 ? "selected" : "" }} >Belum Dikirim</option>
                <option value="1" {{ $peserta->sms_terkirim == 1 ? "selected" : "" }} >Sudah Dikirim</option>

            </select>

        </div>
        </div>

        <div class="form-group">
            <div class="col-md-10 col-md-offset-5">
                <button type="submit" class="btn btn-primary">Perbaharui</button>
                <a href="{{  url('peserta/delete/'.$peserta->id.'?_token='.csrf_token()) }}" class="btn btn-danger">Hapus</a>

            </div>
        </div>

    </form>

@endsection
