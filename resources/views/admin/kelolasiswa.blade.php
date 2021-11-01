@extends('template.main')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nis</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($siswa as $s)
    <tr>
      <th scope="row">1</th>
      <td>{{ $s->nis }}</td>
      <td>{{ $s->nama }}</td>
      <td><td><a href="/admin/editkelolaguruview/{{ $s->id }}" class="btn btn-success btn-lg">Edit</a>
        <a href="" class="btn btn-danger btn-lg">Delete</a></td></td>
    </tr>

  </tbody>
      @endforeach
</table>

@endsection
