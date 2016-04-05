@extends('app')

@section('title')
Table Peserta
@endsection

@section('content')

    <table class="table table-striped " width="100%" cellspacing="0" >
        <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>No Hp</th>
            <th>Email</th>
            <th>Kode Tiket</th>
            <th>Status</th>
            <th>DVD</th>
            <th>Status Bayar</th>
            <th>Email Terkirim</th>
            <th>Sms Terkirim</th>
            <th><center>Aksi</center></th>
        </tr>
        </thead>
        <tbody>
        @foreach($pesertas as $peserta)
            <tr>

                <td>{{$peserta->id}}</td>
                <td>{{$peserta->nama}}</td>
                <td>{{$peserta->no_hp}}</td>
                <td>{{$peserta->email}}</td>
                <td>{{$peserta->kode_tiket}}</td>
                <td>{{$peserta->status}}</td>
                <td>{{$peserta->dvd}}</td>
                <td>{{$peserta->status_bayar}}</td>
                <td>{{$peserta->email_terkirim}}</td>
                <td>{{$peserta->sms_terkirim}}</td>
                <td>
                <td><a href="{{ url('/peserta/delete/'.$peserta->id) }}">Delete</a>
                    <a href="{{ url('/peserta/edit/'.$peserta->id) }}">Edit</a></td>

                </td>
            </tr>
        @endforeach

        </tbody>
    </table>







@endsection