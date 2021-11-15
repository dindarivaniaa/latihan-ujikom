@extends('template.main')

@section('content')

<div class="container-fluid mt--6">
  <div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
          <h2 class="mb-3">Kelola Siswa</h2>
          <a href="{{url('teacher/tambahsiswa')}}" class="btn btn-sm btn-neutral">Tambah Siswa</a>
        </div>
        <!-- Light table -->
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col" class="sort" data-sort="name">Nama</th>
                <th scope="col" class="sort" data-sort="budget">Kelas</th>
                <th scope="col" class="sort" data-sort="status"></th>
                <th scope="col"></th>
                <th scope="col" class="sort" data-sort="completion">action</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody class="list">
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <div class="media-body">
                      <span class="name mb-0 text-sm">Dinda Rivani</span>
                    </div>
                  </div>
                </th>
                <td class="budget">
                  XII-RPL
                </td>
                <td>
                  <span class="badge badge-dot mr-4">

                  </span>
                </td>
                <td>
                  <span class="text-muted"></span>
                </td>
                <td><button type="button" class="btn btn-primary">edit</button>
                  <button type="button" class="btn btn-danger">hapus</button></td>
                <td class="text-right">
                  <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <div class="media-body">
                      <span class="name mb-0 text-sm">Muhammad Rayhan</span>
                    </div>
                  </div>
                </th>
                <td class="budget">
                  XII-RPL
                </td>
                <td>
                  <span class="badge badge-dot mr-4">

                  </span>
                </td>
                <td>
                  <span class="text-muted"></span>
                </td>
                <td><button type="button" class="btn btn-primary">edit</button>
                  <button type="button" class="btn btn-danger">hapus</button></td>
                <td class="text-right">
                  <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <div class="media-body">
                      <span class="name mb-0 text-sm">Luqman muhammad syahidan</span>
                    </div>
                  </div>
                </th>
                <td class="budget">
                  XII-RPL
                </td>
                <td>
                  <span class="badge badge-dot mr-4">

                  </span>
                </td>
                <td>
                  <span class="text-muted"></span></span>
                </td>
                <td><button type="button" class="btn btn-primary">edit</button>
                  <button type="button" class="btn btn-danger">hapus</button></td>
                <td class="text-right">
                  <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <div class="media-body">
                      <span class="name mb-0 text-sm">Yunita Rahayu</span>
                    </div>
                  </div>
                </th>
                <td class="budget">
                  XII-RPL
                </td>
                <td>
                  <span class="badge badge-dot mr-4">

                  </span>
                </td>
                <td>
                  <span class="text-muted"></span>
                </td>
                <td><button type="button" class="btn btn-primary">edit</button>
                  <button type="button" class="btn btn-danger">hapus</button></td>
                <td class="text-right">
                  <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <tr>
                  <th scope="row">
                    <div class="media align-items-center">
                      <div class="media-body">
                        <span class="name mb-0 text-sm">Riska Rahmawati</span>
                      </div>
                    </div>
                  </th>
                  <td class="budget">
                    XII-RPL
                  </td>
                  <td>
                    <span class="badge badge-dot mr-4">

                    </span>
                  </td>
                  <td>
                    <span class="text-muted"></span>
                  </td>
                  <td><button type="button" class="btn btn-primary">edit</button>
                    <button type="button" class="btn btn-danger">hapus</button></td>
                  <td class="text-right">
                    <div class="dropdown">
                      <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
            </tbody>
          </table>
        </div>
        <!-- Card footer -->
        <div class="card-footer py-4">
          <nav aria-label="...">
            <ul class="pagination justify-content-end mb-0">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">
                  <i class="fas fa-angle-left"></i>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">
                  <i class="fas fa-angle-right"></i>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>

@endsection
