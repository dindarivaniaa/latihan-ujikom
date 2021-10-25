@extends('template.main')

@section('content')

@hasrole('admin')

<h1>Anda login sebagai admin</h1>

@endhasrole

@hasrole('teacher')

<h1>Anda login sebagai guru</h1>

@endhasrole

@hasrole('student')

<h1>Anda login sebagai siswa</h1>

@endhasrole

@endsection
