@extends('app')

@section('title')

@endsection

@section('content')

Homepage RP
<br/>


<form class="form-horizontal" action="{{ url('terimakasih')}}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group has-info">
        <label for="inputEmail" class="col-md-2 control-label"><i class="glyphicon glyphicon-user"></i> Nama</label>
        <div class="col-md-9">
            <input  name="nama" class="form-control" placeholder="Nama" type="text" value="{{ old('nama') }}" required="required">
        </div>
    </div>

    <div class="form-group has-info">
        <label for="inputEmail" class="col-md-2 control-label"><i class=" glyphicon glyphicon-earphone"></i> No. Hp</label>
        <div class="col-md-9">
            <input class="form-control" name="no_hp" placeholder="No. Hp" type="text" value="{{ old('no_hp') }}" required="required">
        </div>
    </div>
    <div class="form-group has-info">
        <label for="inputEmail" class="col-md-2 control-label"><i class="glyphicon glyphicon-envelope"></i> Email</label>
        <div class="col-md-9">
            <input  name="email" class="form-control" placeholder="Email" type="email" value="{{ old('email') }}" required="required">
        </div>
    </div>
    <div class="form-group has-info">
        <label class="col-md-2 control-label"><i class="glyphicon glyphicon-user"></i> Status</label>
        <div class="col-md-9">
            <select id="opsi-status" class="form-control" name="status_peserta" required="required">
                <option >-- Pilih --</option>
                <option value="mahasiswa">Mahasiswa</option>
                <option value="pelajar">Pelajar</option>
                <option value="umum">Umum</option>
            </select>
        </div>

    </div>
    <div class="form-group has-info instansi">

    </div>

    <div class="form-group has-info">
        <label class="col-md-2 control-label"><i class="glyphicon glyphicon-user"></i> DVD</label>
        <div class="col-md-9">
            <select class="form-control" name="dvd" required="required">
                <option >--Pilih--</option>
                <option value="32">32 Bit</option>
                <option value="64">64 Bit</option>

            </select>
        </div>
    </div>


    <div class="form-group">
        <div class="col-md-10 col-md-offset-5">
            <button type="submit" class="btn btn-raised btn-info"><i class="glyphicon glyphicon-ok"></i> Submit</button>
        </div>
    </div>
</form>

@endsection

@section('footer')
<script type="text/javascript">
  $('#opsi-status').change(function(){

    if( $(this).val() == 'mahasiswa'){
        var instansi = "Apa nama kampus mu ?";
    } else if($(this).val() == 'pelajar'){
      var instansi = "Apa nama sekolah mu ?";
    } else if($(this).val() == 'umum') {
      var instansi = "Apa nama instansi mu ?";
    } else {
      $('#instansi').remove();
    }


    $('#instansi').remove();
    $('.instansi').append('<div class="col-md-9 col-md-offset-2"><input id="instansi" class="form-control" name="instansi" type="text" placeholder=" ' + instansi + '"  /></div>');
  });
</script>
@endsection
