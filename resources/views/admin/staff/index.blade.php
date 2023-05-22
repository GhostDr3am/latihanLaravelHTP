@extends('admin.layout.appadmin')
@section('content')
<tbody>
    @php
    $no = 1;
    @endphp
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nip</th>
            <th scope="col">Nama</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Alamat</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($ar_staff as $row)
        <tr>
            <th>{{$no++}}</th>
            <td>{{$row->nip}}</td>
            <td>{{$row->nama}}</td>
            <td>{{$row->gender}}</td>
            <td>{{$row->alamat}}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
</tbody>
@endsection
