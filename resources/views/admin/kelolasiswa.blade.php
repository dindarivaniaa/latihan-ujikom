@extends('template.main')

@section('content')

<div class="container-fluid mt--6">
  <div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
          <h2 class="mb-3">Kelola Siswa</h2>
          <a href="{{url('admin/tambahsiswa')}}" class="btn btn-sm btn-neutral">Tambah Akun Siswa</a>
          <a href="{{url('admin/tambahsiswa2')}}" class="btn btn-sm btn-neutral">Tambah Siswa</a>
        </div>

        <!-- Light table -->
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col" class="sort" data-sort="name">Nama</th>
                <th scope="col" class="sort" data-sort="budget">Nis</th>
                <th scope="col">Gender</th>
                <th scope="col" class="sort" data-sort="completion">action</th>
                <th scope="col"></th>
              </tr>
            </thead>
        <tbody>
            <tr>
                @foreach ($data as $dt )

                <tr>
                    <td>{{$dt->name}}</td>
                    <td>{{$dt->NIS}}</td>
                    <td>{{$dt->gender}}</td>
                    <td>
                        <button type="button" class="btn btn-primary"> <i class="fas fa-user-edit"></i></button>
                        <a class="btn btn-danger" href="/admin/hapussiswa/{{ $dt->nomor }}" role="button"><i class="fas fa-trash"></i></a>
                    </td>
                    </td>
                </tr>

                @endforeach
            </tr>
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
