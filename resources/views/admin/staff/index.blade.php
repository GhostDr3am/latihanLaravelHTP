@extends('admin.layout.appadmin')
@section('content')
<tbody>
    @php
    $no = 1;
    @endphp
    @foreach ($ar_staff as $row)
    <table border="1" callpadding="10">
        <tr>
            <td>{{$no++}}</td>
            <td>{{$row->nip}}</td>
            <td>{{$row->nama}}</td>
            <td>{{$row->gender}}</td>
            <td>{{$row->alamat}}</td>
        </tr>
    </table>



    @endforeach
</tbody>
@endsection
