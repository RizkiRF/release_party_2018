@extends('app')

@section('content-homepage')



    <div class="container" id="daftar">
        <div class="section-title">
            <h5>Ini cuma buat internal!</h5>
            {{--<p>Jadi saksi perayaan di rilisnya TeaLinuxOS versi terbaru.</p>--}}
            <h6>Jangan di bagiin ke orang lain.</h6>
        </div>
        <div class="contact-form bottom-space-xl wow fadeInUp">
            <form action="{{ url('terimakasih')}}" id="" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap Anda ( pastikan benar karena akan kami cetak di sertifikat )"  value="{{ old('nama') }}"required>
                        </div>
                        <div class="form-group">
                            <label>Nomor HP</label>
                            <input type="text" class="form-control" name="no_hp" value="{{ old('no_hp') }}" placeholder="Nomor HP yang dapat dihubungi" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Alamat Email" required>
                        </div>

                        <div class="form-group has-info">
                            <label class="">Status</label>

                            <select id="opsi-status" class="form-control" name="status_peserta" required="required">
                                <option value="">-- Pilih --</option>
                                <option value="mahasiswa">Mahasiswa</option>
                                <option value="pelajar">Pelajar</option>
                                <option value="umum">Umum</option>
                            </select>


                        </div>
                        <div class="instansi">

                        </div>

                        <div class="form-group has-info">
                            <label class=""> DVD TeaLinux OS {{getenv('TEALINUXOS_VERSION')}}</label>

                            <select class="form-control" name="dvd" required="required">
                                <option value="">--Pilih--</option>
                                <option value="32">32 Bit</option>
                                <option value="64">64 Bit</option>

                            </select>

                        </div>

                        <div class="text-center top-space">
                            <button type="submit" class="btn btn-success btn-block btn-lg" >Daftar</button>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-572ff5bda2aff3c7"></script>


@endsection

@section('footer')
    <script src="{{asset ('js/plugins/countdown.js')}}"></script>
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
    $('.instansi').append('<div class="form-group"><input id="instansi" class="form-control" name="instansi" type="text" placeholder=" ' + instansi + '"  required /></div>');
  });
</script>
@endsection
