@php
    $no = 1;
    $s1 = ['nama' => 'Fawwas', 'nilai' => '85'];
    $s2 = ['nama' => 'Bedu', 'nilai' => '90'];
    $s3 = ['nama' => 'Siti', 'nilai' => '80'];
    $s4 = ['nama' => 'Udin', 'nilai' => '95'];
    $s5 = ['nama' => 'Moki', 'nilai' => '75'];
    
    $judul = ['No', 'Nama', 'Keterangan'];
    $siswa = [$s1, $s2, $s3, $s4, $s5];
@endphp

<table border="1" align="center" cellpadding="10">
    <thead>
        <tr>
            @foreach ($judul as $jdl)
                <th>{{ $jdl }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($siswa as $sis)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $sis['nama'] }}</td>
                <td>
                    @if ($sis['nilai'] >= 60)
                        Lulus
                    @else
                        Gagal
                    @endif
                </td>
            </tr>
        @endforeach
</table>
