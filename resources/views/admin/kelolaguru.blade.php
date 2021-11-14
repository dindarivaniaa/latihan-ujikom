@extends('template.main')

@section('content')
{{-- <table class="table">
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
</table> --}}

<div class="container-fluid mt--6">
  <div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="col-lg-6 col-5 card-header border-0">
          <h2 class="mb-3">Kelola Guru</h2>
          <a href="{{url('admin/tambahguru')}}" class="btn btn-sm btn-neutral">Tambah Guru</a>
        </div>
        <div class="col-lg-6 col-5 text-right">
          </div>
        <!-- Light table -->
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col" class="sort" data-sort="name">Pengajar</th>
                <th scope="col" class="sort" data-sort="budget">Mata Pelajaran</th>
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
                      <span class="name mb-0 text-sm">Raynaldi syaputra nonci</span>
                    </div>
                  </div>
                </th>
                <td class="budget">
                  PBO
                </td>
                <td>
                  <span class="badge badge-dot mr-4">

                    <span class="status"></span>
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
                      <span class="name mb-0 text-sm">Siti Saadah</span>
                    </div>
                  </div>
                </th>
                <td class="budget">
                  PKN
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
                {{-- <td class="text-right">
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
                </td> --}}
              </tr>
              <tr>
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <div class="media-body">
                      <span class="name mb-0 text-sm">Leni</span>
                    </div>
                  </div>
                </th>
                <td class="budget">
                  B Indonesia
                </td>
                <td>
                  <span class="badge badge-dot mr-4">

                  </span>
                </td>
                <td>
                  <span class="text-muted"></span>
                </td>
                <td>
                  <button type="button" class="btn btn-primary">edit</button>
                  <button type="button" class="btn btn-danger">hapus</button>
                </td>
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
                      <span class="name mb-0 text-sm">Dede Suryana</span>
                    </div>
                  </div>
                </th>
                <td class="budget">
                  Basdat
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
                        <span class="name mb-0 text-sm">Essa</span>
                      </div>
                    </div>
                  </th>
                  <td class="budget">
                    B Inggris
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
