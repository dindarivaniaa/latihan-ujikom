@extends('template.main')

@section('content')

<div class="container-fluid mt--6">
    <div class="row">
      <div class="col">
        <div class="card">
          <!-- Card header -->
          <div class="card-header border-0">
            <h3 class="mb-0"><center>Profile</center></h3>
            <br>
            <div class="btn-group pull-right" style="margin-top:-4px;">
              <button type="button" class="btn btn-primary"> <i class="fas fa-user-edit"></i></button>
            </div>
          </div>

          <div class="panel-body">
              <div class="table-responsive">
                  <table class="table">
                      <tbody>
                            <tr>
                              <th bgcolor="#FBFBFB" width="25%" style="border-top: 0px;">NIS</th>
                              <td style="border-top: 0px;">1920.10.075</td>
                              <td rowspan="5" width="15%" style="border-top: 0px;">
                                  <img style="width:113px;" class="img-polaroid" src="{{asset('assets/img/procwe.png')}}">
                              </td>
                          </tr>
                          <tr>
                              <th bgcolor="#FBFBFB">Nama</th>
                              <td>Yunita Rahayu</td>
                          </tr>
                          <tr>
                              <th bgcolor="#FBFBFB">Jenis Kelamin</th>
                              <td>Perempuan</td>
                          </tr>
                          <tr>
                              <th bgcolor="#FBFBFB">Tahun Masuk</th>
                              <td colspan="2">2019</td>
                          </tr>
                          <tr>
                              <th bgcolor="#FBFBFB">Tempat Lahir</th>
                              <td>Bandung</td>
                          </tr>
                          <tr>
                              <th bgcolor="#FBFBFB">Tanggal Lahir</th>
                              <td>26 Juli 2003</td>
                          </tr>
                          <tr>
                              <th bgcolor="#FBFBFB">Agama</th>
                              <td colspan="2">ISLAM</td>
                          </tr>
                          <tr>
                              <th bgcolor="#FBFBFB">Alamat</th>
                              <td colspan="2">kp ciawitali girang</td>
                          </tr>
                          <tr>
                              <th bgcolor="#FBFBFB">Status</th>
                              <td colspan="2">
                                 Aktif
                             </td>
                          </tr>
                      </tbody>
                  </table>
              </div>
        </div>

        <br>
        <div class="row-fluid">
          <div class="span6">
              <div class="panel panel-default" id="riwayat-kelas">
                  <div class="panel-heading">
                    <h3 class="mb-0"><center>Riwayat Kelas</center></h3>
                  </div>
                  <div class="panel-body">
                      <table class="table table-striped">
                      <thead>
                          <tr>
                              <th width="5%">No</th>
                              <th>Kelas</th>
                              <th>Aktif</th>
                          </tr>
                      </thead>
                      <tbody>
                         <tr>
                              <td>1.</td>
                              <td>
                                  KELAS XII - RPL
                              </td>
                              <td>
                                  <i class="icon icon-ok"></i>
                              </td>
                          </tr>
                     </tbody>
                    </table>
                  </div>
              </div>
          </div>
          <div class="span6">
              <div class="panel panel-default" id="akun">
                  <div class="panel-heading">
                    <h3 class="mb-0"><center>Akun Login</center></h3>
                    <div class="btn-group pull-right" style="margin-top:-4px;">
                      <button type="button" class="btn btn-primary"> <i class="fas fa-user-edit"></i></button>
                    </div>
                  </div>

                  <br>
                  <div class="panel-body">
                      <table class="table">
                          <tbody>
                              <tr>
                                  <th width="30%" bgcolor="#FBFBFB" style="border-top: 0px;">Username</th>
                                  <td style="border-top: 0px;">
                                      Yunitarhy@gmail.com
                                  </td>
                              </tr>
                              <tr>
                                  <th bgcolor="#FBFBFB">Password</th>
                                  <td>
                                      *********
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>

@endsection
