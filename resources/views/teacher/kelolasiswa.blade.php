@extends('teacher.master')

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
    <tr>
      <th scope="row">1</th>
      <td>1920.10.36</td>
      <td>Luqman</td>
      <td><button type="button" class="btn btn-warning">Edit</button>
      <button type="button" class="btn btn-danger">Delete</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>1920.10.35</td>
      <td>Rehan</td>
      <td><button type="button" class="btn btn-warning">Edit</button>
      <button type="button" class="btn btn-danger">Delete</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>1920.10.34</td>
      <td>Yunita</td>
      <td><button type="button" class="btn btn-warning">Edit</button>
      <button type="button" class="btn btn-danger">Delete</button></td>
    </tr>
     <tr>
      <th scope="row">4</th>
      <td>1920.10.33</td>
      <td>Dinda</td>
      <td><button type="button" class="btn btn-warning">Edit</button>
      <button type="button" class="btn btn-danger">Delete</button></td>
    </tr>
  </tbody>
</table>

@endsection
