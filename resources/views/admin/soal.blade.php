@extends('template.main')

@section('content')

<form action="/admin/hasil">
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Essai</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">jawaban</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
  </div>

  <br>
  <input type="submit" value="Submit">

</form>

{{-- <table class="table">
  <thead>
    <tr>
      <th scope="col">Nomor</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td></td>
      <td></td>
      <td><button type="button" class="btn btn-warning">Edit</button>
      <button type="button" class="btn btn-danger">Delete</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td></td>
      <td></td>
      <td><button type="button" class="btn btn-warning">Edit</button>
      <button type="button" class="btn btn-danger">Delete</button></td>
    </tr>
  </tbody>
</table> --}}
@endsection
