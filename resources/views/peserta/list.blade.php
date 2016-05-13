@extends('app')

@section('header')
    <style type="text/css">
        .reveal-menu-hidden{
            top: 0;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css"
          xmlns="http://www.w3.org/1999/html">
@endsection

@section('title')
Table Peserta
@endsection

@section('content')
    <br>
    <br>
    <div class="container" style="margin-top: 75px;">
        @if(Session::has('pesan'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <span class="glyphicon glyphicon-ok"></span> <em> {!! session('pesan') !!}</em></div>
        @endif

        <table id="example" class="table table-striped " width="100%" cellspacing="0" >
            <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>

                <th>Instansi</th>

                <th>Status Bayar</th>

            </tr>
            </thead>
            <tbody>
            <?php $no = 1 ?>
            @foreach($pesertas as $peserta)
                <tr>

                    <td>{{$no}}</td>
                    <td>{{$peserta->nama}}</td>

                    <td>{{$peserta->instansi}}</td>

                    <td>
                    @if($peserta->status_bayar == 0)
                        <span style="color:red;font-weight: bold;">Belum Lunas</span>
                    @else
                        <span style="color:limegreen;">Lunas</span>
                    @endif
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
            $('#example').DataTable();


        });
    </script>

@endsection
