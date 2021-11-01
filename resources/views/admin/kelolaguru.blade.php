@extends('template.main')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nomor</th>
      <th scope="col">Nama</th>
      <th scope="col">Mata Pelajaran</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($guru as $g)
    <tr>
      <th scope="row">1</th>
      <td>{{ $g->nama }}</td>
      <td>{{ $g->mapel }}</td>
      <td><a href="/admin/editkelolaguruview/{{ $g->id }}" class="btn btn-success btn-lg">Edit</a>
        <a href="" class="btn btn-danger btn-lg">Delete</a></td>
    </tr>
  </tbody>
    @endforeach
</table>


@endsection
