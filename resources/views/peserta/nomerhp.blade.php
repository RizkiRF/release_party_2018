<h1>Semua</h1>
@foreach($pesertas as $peserta)
    {{ $peserta->no_hp . ',' }}
    <br>
    @endforeach

<br>
<h1>Belum Lunas</h1>
@foreach($pesertabelumlunas as $peserta)
    {{ $peserta->no_hp . ',' }}
    <br>
@endforeach

<br>
<h1>Lunas</h1>
@foreach($pesertalunas as $peserta)
    {{ $peserta->no_hp . ',' }}
    <br>
@endforeach