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
    <tr>
      <th scope="row">1</th>
      <td>Leni</td>
      <td>B.Indo</td>
      <td><button type="button" class="btn btn-warning">Edit</button>
      <button type="button" class="btn btn-danger">Delete</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Siti Saadah</td>
      <td>PKN</td>
      <td><button type="button" class="btn btn-warning">Edit</button>
      <button type="button" class="btn btn-danger">Delete</button></td>
    </tr>
  </tbody>
</table>


@endsection
