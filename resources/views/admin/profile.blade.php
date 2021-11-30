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
                       <th bgcolor="#FBFBFB" width="25%" style="border-top: 0px;">NIP</th>
                       <td style="border-top: 0px;"></td>
                       <td rowspan="5" width="15%" style="border-top: 0px;">
                           <img style="width:113px;" class="img-polaroid" src="{{asset('assets/img/procwo.png')}}"  >
                       </td>
                   </tr>
                   <tr>
                       <th bgcolor="#FBFBFB">Nama</th>
                       <td>Drs. Dedi Hidayat, M.Mpd</td>
                   </tr>
                   <tr>
                       <th bgcolor="#FBFBFB">Jenis Kelamin</th>
                       <td>Laki-laki</td>
                   </tr>
                   <tr>
                       <th bgcolor="#FBFBFB">Tempat Lahir</th>
                       <td>Bandung</td>
                   </tr>
                   <tr>
                       <th bgcolor="#FBFBFB">Tanggal Lahir</th>
                       <td>23 Oktober 1963</td>
                   </tr>
                   <tr>
                       <th bgcolor="#FBFBFB">Alamat</th>
                       <td colspan="2">Katapang</td>
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
  </div>


@endsection
