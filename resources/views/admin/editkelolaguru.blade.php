@extends('template.main')

@section('content')
@foreach($guru as $g)
<form action="/admin/editkelolaguru" method="post">
    {{ csrf_field()}}
    <input type="hidden" name="id" value="{{ $g->id }}">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama"value="{{$g->nama}}">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Mata Pelajaran</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="mapel"value="{{$g->mapel}}">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <button type="submit" class="btn btn-warning">Kembali</button>
  </form>
  @endforeach

  @endsection
