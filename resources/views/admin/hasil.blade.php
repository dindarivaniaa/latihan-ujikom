@extends('template.main')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nomor</th>
      <th scope="col">Nama</th>
      <th scope="col">Hasil Ujian</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
     <tr>
      <th scope="row">1</th>
      <td>Dinda</td>
      <td>99</td>
      <td><button type="button" class="btn btn-danger">Delete</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Yunita</td>
      <td>95</td>
      <td><button type="button" class="btn btn-danger">Delete</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Luqman</td>
      <td>90</td>
      <td><button type="button" class="btn btn-danger">Delete</button></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Rehan</td>
      <td>90</td>
      <td><button type="button" class="btn btn-danger">Delete</button></td>
    </tr>
  </tbody>
</table>

@endsection
