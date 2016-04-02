@extends('head')

@section('content')
    <div class="head"><i class=" glyphicon glyphicon-list-alt"></i><br> Doscom University
    </div>

    <div class="" style="padding: 50px;">


        <form class="form-horizontal" action="{{ url('daftar')}}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group has-info">
                <label for="inputEmail" class="col-md-2 control-label"><i class="glyphicon glyphicon-user"></i> Nama</label>
                <div class="col-md-9">
                    <input  name="nama" class="form-control" placeholder="Nama" type="text" value="{{ old('nama') }}" required="required">
                </div>
            </div>
            <div class="form-group has-info">
                <label for="inputEmail" class="col-md-2 control-label"><i class="glyphicon glyphicon-envelope"></i> Email</label>
                <div class="col-md-9">
                    <input  name="email" class="form-control" placeholder="Email" type="email" value="{{ old('email') }}" required="required">
                </div>
            </div>
            <div class="form-group has-info">
                <label for="inputEmail" class="col-md-2 control-label"><i class=" glyphicon glyphicon-earphone"></i> No. Hp</label>
                <div class="col-md-9">
                    <input class="form-control" name="nohp" placeholder="No. Hp" type="text" value="{{ old('nohp') }}" required="required">
                </div>
            </div>
            <div class="form-group has-info">
                <label class="col-md-2 control-label"><i class="glyphicon glyphicon-user"></i> Status</label>
                <div class="col-md-9">
                    <select class="form-control" name="status_peserta" required="required">
                        <option >--Pilih--</option>
                        <option value="mahasiswa">Mahasiswa</option>
                        <option value="pelajar">Pelajar</option>
                        <option value="umum">Umum</option>
                    </select>
                </div>
            </div>
            <div class="form-group has-info">
                <label class="col-md-2 control-label"><i class="glyphicon glyphicon-home"></i> Kelas</label>
                <div class="col-md-9">
                    <select name="kelas[]" multiple="multiple"  id="kelas" class="image-picker  show-labels show-html" required="required">
                        <option data-img-src="images/icon/web-development.svg" value="1">  Web Programming  </option>

                        <option data-img-src="images/icon/mobile.png" value="2">  Mobile Programming </option>
                        <option data-img-src="images/icon/jaringan-komputer.png" value="3">  Jaringan </option>
                        <option data-img-src="images/icon/multimedia.png" value="4">  Multimedia</option>
                        <option data-img-src="images/icon/linux.png" value="5">  Linux Fundamental</option>
                    </select>
                    * Kamu bisa mengambil lebih dari satu kelas (:
                </div>
            </div>
            <div class="form-group has-info">
                <label for="textArea" class="col-md-2 control-label"><i class="glyphicon glyphicon-comment"></i>Alasan</label>
                <div class="col-md-9">
                    <textarea class="form-control" placeholder="Alasanmu" name="alasan"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-10 col-md-offset-5">
                    <button type="submit" class="btn btn-raised btn-info"><i class="glyphicon glyphicon-ok"></i> Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
