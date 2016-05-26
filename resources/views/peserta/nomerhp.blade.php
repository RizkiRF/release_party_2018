<h1>Belum Lunas</h1>
<table>
    <thead>
    <td>Nama</td>
    <td>Instansi</td>
    <td>Nomor HP</td>
    </thead>
    @foreach($pesertabelumlunas as $peserta)

        <tr>
            <td>{{ $peserta->nama }}</td>
            <td>{{ $peserta->instansi }}</td>
            <td>{{ $peserta->no_hp }}</td>
        </tr>
    @endforeach

</table>

<h1>Semua</h1>
@foreach($pesertas as $peserta)
    {{ $peserta->no_hp . ',' }}
    <br>
    @endforeach

<br>


<h1>SImple Version - Belum Lunas</h1>
@foreach($pesertabelumlunas as $peserta)
    {{ $peserta->no_hp . ',' }}
    <br>
@endforeach

<br>
<h1>Lunas</h1>
@foreach($pesertalunas as $peserta)
    {{ $peserta->no_hp . "," }}
    <br>
@endforeach