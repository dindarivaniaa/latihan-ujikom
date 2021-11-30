@extends('template.main')

@section('content')

         <!-- Input groups -->
         <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <h3 class="mb-0">Tambah Siswa</h3>
            </div>
            <!-- Card body -->
            <div class="card-body">

                <form method="POST" action="addsiswa">
                    @csrf

                  <div class="form-group">

                  <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                      </div>
                      <input id="NIS" type="text" class="form-control @error('NIS') is-invalid @enderror" name="NIS" value="{{ old('NIS') }}" required placeholder="NIS" autocomplete="NIS">

                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>

                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative mb-4">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      <input id="gender" type="text" class="form-control @error('gender') is-invalid @enderror" placeholder="gender" name="gender" required autocomplete="gender">

                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>

                    <div class="form-group">
                        <div class="input-group input-group-merge input-group-alternative mb-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                          </div>
                          <input id="TTL" type="text" class="form-control @error('TTL') is-invalid @enderror" placeholder="TTL" name="TTL" required autocomplete="TTL">

                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>

                        <div class="form-group">
                            <div class="input-group input-group-merge input-group-alternative mb-4">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                              </div>
                              <input id="agama" type="text" class="form-control @error('agama') is-invalid @enderror" placeholder="agama" name="agama" required autocomplete="agama">

                              @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>

                  <div class="row my-4">
                    <div class="col-12">
                      <div class="custom-control custom-control-alternative custom-checkbox">
                        <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                      </div>
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-4">Tambahkan</button>
                  </div>
                </form>
            </div>
          </div>

@endsection
