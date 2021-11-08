@extends('template.main')

@section('content')
<form action="/student/hasil">
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Essai</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"> 1. apa yang dimaksud tumbuhan?</textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">jawaban</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
  </div>

  <br>
  <input type="submit" value="Submit">

</form>

@endsection
