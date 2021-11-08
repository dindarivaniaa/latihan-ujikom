@extends('template.main')

@section('content')
{{-- <table class="table">
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
      <td>Luqman</td>
      <td>80</td>
      <td><button type="button" class="btn btn-primary">Edit</button>
      <button type="button" class="btn btn-danger">Delete</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Rehan</td>
      <td>90</td>
      <td><button type="button" class="btn btn-primary">Edit</button>
      <button type="button" class="btn btn-danger">Delete</button></td>
    </tr>
  </tbody>
</table> --}}

<div class="container-fluid mt--6">
  <div class="row">
    <div class="col">
 <div class="card">
  <!-- Card header -->
  <div class="card-header border-0">
    <div class="row">
      <div class="col-6">
        <h3 class="mb-0">Hasil Ujian</h3>
      </div>
    </div>
  </div>
  <!-- Light table -->
  <div class="table-responsive">
    <table class="table align-items-center table-flush">
      <thead class="thead-light">
        <tr>
          <th>Nama</th>
          <th>Pelajaran</th>
          <th>Nilai</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="table-user">
            <b>Yunita Rahayu</b>
          </td>
          <td>
            <span class="text-muted">PBO</span>
          </td>
          <td>
            <a href="#!" class="font-weight-bold">100</a>
          </td>
          <td class="table-actions">
            <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Edit product">
              <i class="fas fa-user-edit"></i>
            </a>
            <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete product">
              <i class="fas fa-trash"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="table-user">
            <b>Yunita Rahayu</b>
          </td>
          <td>
            <span class="text-muted">B Indonesia</span>
          </td>
          <td>
            <a href="#!" class="font-weight-bold">90</a>
          </td>
          <td class="table-actions">
            <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Edit product">
              <i class="fas fa-user-edit"></i>
            </a>
            <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete product">
              <i class="fas fa-trash"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="table-user">
            <b>Yunita Rahayu</b>
          </td>
          <td>
            <span class="text-muted">PKN</span>
          </td>
          <td>
            <a href="#!" class="font-weight-bold">90</a>
          </td>
          <td class="table-actions">
            <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Edit product">
              <i class="fas fa-user-edit"></i>
            </a>
            <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete product">
              <i class="fas fa-trash"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="table-user">
            <b>Yunita Rahayu</b>
          </td>
          <td>
            <span class="text-muted">Basdat</span>
          </td>
          <td>
            <a href="#!" class="font-weight-bold">85</a>
          </td>
          <td class="table-actions">
            <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Edit product">
              <i class="fas fa-user-edit"></i>
            </a>
            <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete product">
              <i class="fas fa-trash"></i>
            </a>
          </td>
        </tr>
        <tr>
          <td class="table-user">
            <b>Yunita Rahayu</b>
          </td>
          <td>
            <span class="text-muted">Inggris</span>
          </td>
          <td>
            <a href="#!" class="font-weight-bold">85</a>
          </td>
          <td class="table-actions">
            <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Edit product">
              <i class="fas fa-user-edit"></i>
            </a>
            <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete product">
              <i class="fas fa-trash"></i>
            </a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

@endsection
