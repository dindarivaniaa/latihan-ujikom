@extends('template.main')

@section('content')

         <!-- Input groups -->
         <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <h3 class="mb-0">Tambah Guru</h3>
            </div>
            <!-- Card body -->
            <div class="card-body">

                <form method="POST" action="addguru">
                    @csrf

                  <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                      </div>
                      <input id="NIP" type="text" class="form-control @error('NIP') is-invalid @enderror" name="NIP" value="{{ old('NIP') }}" required autocomplete="NIP" placeholder="NIP" autofocus>

                      @error('NIP')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                      </div>
                      <input id="gender" type="text" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required placeholder="Gender" autocomplete="gender">

                      @error('gender')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>

                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative mb-4">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                      </div>
                      <input id="TTL" type="text" class="form-control @error('TTL') is-invalid @enderror" placeholder="TTL" name="TTL" required autocomplete="new-password">

                      @error('TTL')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>

                  <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                      </div>
                      <input id="agama" type="text" class="form-control" placeholder="Agama" name="agama" required autocomplete="agama">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                      </div>
                      <input id="mapel" type="text" class="form-control" placeholder="Mapel" name="mapel" required autocomplete="mapel">
                    </div>
                  </div>


                  <div class="row my-4">
                    <div class="col-12">
                      <div class="custom-control custom-control-alternative custom-checkbox">
                        <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                      </div>
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-4">Kirim</button>
                  </div>
                </form>
            </div>
          </div>

@endsection
