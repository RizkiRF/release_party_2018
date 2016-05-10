@extends('app-dashboard')

@section('header')
    <style type="text/css">
        .reveal-menu-hidden{
            top: 0;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css"
          xmlns="http://www.w3.org/1999/html">
@endsection



@section('content')
    <div class="container" style="margin-top: 75px;">
        @if(Session::has('pesan'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <span class="glyphicon glyphicon-ok"></span> <em> {!! session('pesan') !!}</em></div>
        @endif

        <table id="example" class="table table-striped " width="100%" cellspacing="0" >
            <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Atas Nama</th>
                <th>Status</th>
                <th><center>Aksi</center></th>
            </tr>
            </thead>
            <tbody>
            <?php $no = 1 ?>
            @foreach($konfirmasis as $konfirmasi)
                <tr>

                    <td>{{$no}}</td>
                    <td><a href="{{ url('/peserta/konfirmasi/edit') . "/" . $konfirmasi->id }}">{{$konfirmasi->nama}}</a> </td>
                    <td>{{ $konfirmasi->atas_nama_pengirim }}</td>
                    <td>
                    @if($konfirmasi->sudah_masuk == 0)
                        <span style="color:red;font-weight: bold;">Belum di cek</span>
                    @else
                        <span style="color:limegreen;">Terverifikasi</span>
                    @endif
                    </td>


                    <td><a href="{{ url('/peserta/konfirmasi/delete/'.$konfirmasi->id) }}">Delete</a> |
                        <a href="{{ url('/peserta/konfirmasi/edit/'.$konfirmasi->id) }}">Edit</a></td>

                    </td>
                </tr>
                <?php $no++ ?>
            @endforeach

            </tbody>
        </table>
            {{--{!! $pesertas->render() !!}--}}
    </div>
@endsection


@section('footer')
    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "order": [[ 0, "desc" ]]
            });
        } );
    </script>

@endsection
