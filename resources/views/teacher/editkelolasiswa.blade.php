@extends('template.main')

@section('content')
@foreach($siswa as $s)
<form action="/teacher/editkelolasiswa" method="post">
    {{ csrf_field()}}
    <input type="hidden" name="id" value="{{ $s->id }}">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nis</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nis"value="{{$s->nis}}">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Nama</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="nama"value="{{$s->nama}}">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <button type="submit" class="btn btn-warning">Kembali</button>
  </form>
  @endforeach

  @endsection
