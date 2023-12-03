<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SPESIFIKASI KENDARAAN</title>
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('assets/auth/css/spesifikasi-kendaraan.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('font/css/all.css')}}">
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  </head>
  <body>

    <section id="menu">
      <div class="logo">
        <h2>DATA KENDARAAN</h2>
      </div>
      <div class="items">
        <li><i class="fa-sharp fa-solid fa-toolbox"></i><a href="{{ route('spesifikasi') }}">SPESIFIKASI KENDARAAN</a></li>
        <li><i class="fa-sharp fa-solid fa-user"></i><a href="{{ route('pemilik') }}">PEMILIK KENDARAAN</a></li>
        <li><i class="fa-sharp fa-solid fa-car"></i><a href="{{ route('nomor') }}">NOMOR KENDARAAN</a></li>
        <li><i class="fa-sharp fa-solid fa-screwdriver-wrench"></i><a href="{{ route('service') }}">SERVICE KENDARAAN</a></li>
        <li><i class="fa-sharp fa-solid fa-right-from-bracket"></i><a href="{{ route('signout') }}">LOGOUT</a></li>
      </div>
    </section>
    
    <div class="container">
      <div class="wrapper">
        <div class="bungkus">
          <h3>SPESIFIKASI KENDARAAN</h3>
          <a href="{{ route('create') }}">
            <button type="button" class="btn btn-primary mb-2">+ Tambah Data</button>
          </a>
          <table class="table table-striped">
            <thead class="table-dark">
              <th>No</th>
              <th>Merk</th>
              <th>Type</th>
              <th>Jenis</th>
              <th>Model</th>
              <th>Aksi</th>
            </thead>

            <tbody>
              @php
                $count = 0;
              @endphp
                @foreach($data as $data)
                @php
                    $count+=1;
                @endphp
                <tr>
                    <td>{{$count}}</td>
                    <td>{{$data->merk}}</td>
                    <td>{{$data->type}}</td>
                    <td>{{$data->jenis}}</td>
                    <td>{{$data->model}}</td>
                    <td>
                      <a href="{{ route('detail',$data->id) }}">
                        <button type="button" class="btn btn-primary">Detail</button>
                      </a>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
