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

        <div class="row">
            <div class="col-md-6">
                <h5 class="text-center">Detail konfirmasi</h5>


                <form class="form-horizontal" action="{{ url('/peserta/konfirmasi/edit')}}" method="post">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="konfirmasi_id" value="{{ $konfirmasi->id }}{{ old('peserta') }}">
                    <div class="form-group has-info">
                        <label for="inputEmail" class="col-md-4 control-label">Nama peserta</label>
                        <div class="col-md-8    ">
                            <input  name="nama" class="form-control" placeholder="Nama" type="text" value="@if(!old('nama')){{$konfirmasi->nama}}@endif{{ old('nama') }}" required="required">
                        </div>
                    </div>


                    <div class="form-group has-info">
                        <label for="inputEmail" class="col-md-4 control-label">Atas nama pengirim</label>
                        <div class="col-md-8">
                            <input  name="atas_nama" class="form-control" placeholder="Atas Nama Pengirim" type="text" value="@if(!old('atas_nama_pengirim')){{$konfirmasi->atas_nama_pengirim}}@endif{{ old('atas_nama_pengirim') }}" required="required">
                        </div>
                    </div>

                    <div class="form-group has-info">
                        <label class="col-md-4 control-label">Sudah masuk ?</label>
                        <div class="col-md-8">
                            <select class="form-control" name="sudah_masuk" required="required">
                                <option value="">--Pilih--</option>
                                <option value="0"{{$konfirmasi->sudah_masuk =='0'? "selected" : ""}}>Belum di cek</option>
                                <option value="1"{{$konfirmasi->sudah_masuk =='1'? "selected" : ""}}>Terverifikasi</option>

                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-5">
                            <button type="submit" class="btn btn-primary">Perbaharui</button>
                            <a href="{{  url('peserta/konfirmasi/delete/'.$konfirmasi->id.'?_token='.csrf_token()) }}" class="btn btn-danger">Hapus</a>

                        </div>
                    </div>

                </form>
            </div>
            <div class="col-md-6 text-center">
                <h5>Bukti transfer</h5>
                <img class="img-responsive" src="{{ asset('images/uploads/') . "/" . $konfirmasi->upload_bukti }}"/>
                <br>
                <a class="btn btn-success" target="_blank" href="{{ asset('images/uploads/') . "/" . $konfirmasi->upload_bukti }}">Lihat detail</a>
            </div>
        </div>

    </div>

@endsection
