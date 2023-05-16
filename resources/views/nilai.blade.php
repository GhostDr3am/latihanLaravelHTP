@php
    $nama = "Dedi Supriadi";
    $nilai = 95.00;
@endphp
{{-- Struktur kendali if  --}}
@if ($nilai >= 60 )
@php
    $ket = "Lulus";
@endphp
@else
@php
    $ket = "Gagal";
@endphp
@endif
<h3>Siswa yang bernama {{$nama}} dengan nilai {{$nilai}} Dinyatakan {{$ket}}</h3>
