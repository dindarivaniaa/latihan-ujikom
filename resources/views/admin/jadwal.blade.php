@extends('admin.master')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nomor</th>
      <th scope="col">Mata Pelajaran</th>
      <th scope="col">Jam</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>PKN</td>
      <td>08:00-09:00</td>
      <td><button type="button" class="btn btn-primary">Update</button>
      <button type="button" class="btn btn-danger">Delete</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Matematika</td>
      <td>09:00-10:00</td>
      <td><button type="button" class="btn btn-primary">UPDATE</button>
      <button type="button" class="btn btn-danger">Delete</button></td>
    </tr>
  </tbody>
</table>
@endsection
