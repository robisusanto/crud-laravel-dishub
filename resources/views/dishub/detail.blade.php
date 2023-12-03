<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah-kendaraan</title>
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('assets/auth/css/detail.css')}}" type="text/css">
  </head>
  <body>
    <div class="container">
      <div class="judul">
          <h4>DETAIL DATA KENDARAAN</h4>
      </div>
      <div class="wrapper">
        <div class="w-50% mx-auto border p-3">
          <form action="" method="get">
            <h5>PEMEGANG KENDARAAN</h5>
            <label for="nama" class="form-label">Nama Pemilik Kendaraaan</label>
            <input type="text" class="form-control form-style" id="nama" name="nama" value="{{ $data->pemilik->nama }}" disabled>

            <label for="jabatan" class="form-label">Jabatan Pemilik</label>
            <input type="text" class="form-control form-style" id="jabatan" name="jabatan" value="{{ $data->pemilik->jabatan }}"disabled>

            <label for="stnk" class="form-label">Masa STNK Kendaraan</label>
            <input type="date" class="form-control form-style" id="stnk" name="stnk" value="{{ $data->pemilik->masa_stnk }}" disabled>

            <label for="pajak" class="form-label">Masa Pajak Kendaraan</label>
            <input type="date" class="form-control form-style" id="pajak" name="pajak" value="{{ $data->pemilik->masa_pajak }}" disabled>


            <label for="kondisi" class="form-label">Kondisi Kendaraaan</label>
            <input type="text" class="form-control form-style" id="kondisi" name="kondisi" value="{{ $data->pemilik->kondisi }}" disabled>

            <h5>NOMOR KENDARAAN</h5>
            <label for="bpkb" class="form-label">Nomor BPKB</label>
            <input type="text" name="bpkb" class="form-control form-style" id="bpkb" value="{{ $data->noker->bpkb }}" disabled>

            <label for="polisi" class="form-label">Nomor Polisi</label>
            <input type="text" name="plat" class="form-control form-style" id="polisi" value="{{ $data->noker->plat }}" disabled>

            <label for="rangka" class="form-label">Nomor Rangka</label>
            <input type="text" name="rangka" class="form-control form-style" id="rangka" value="{{ $data->noker->rangka }}" disabled>

            <label for="mesin" class="form-label">Nomer Mesin</label>
            <input type="text" name="mesin" class="form-control form-style" id="mesin" value="{{ $data->noker->mesin }}" disabled>

            <h5>SPESIFIKASI KENDARAAN</h5>
            <label for="merk" class="form-label">Merk Kendaraaan</label>
            <input type="text" class="form-control form-style" id="merk" name="merk" value="{{ $data->merk }}" disabled>

            <label for="type" class="form-label">Type Kendaraaan</label>
            <input type="text" class="form-control form-style" id="type" name="type" value="{{ $data->type }}" disabled>

            <label for="jenis" class="form-label">Jenis Kendaraaan</label>
            <input type="text" class="form-control form-style" id="jenis" name="jenis" value="{{ $data->jenis }}" disabled>

            <label for="model" class="form-label">Model Kendaraan</label>
            <input type="text" class="form-control form-style" id="model" name="model" value="{{ $data->model }}" disabled>   
            
            <h5>SERVICE KENDARAAN</h5>
            {{-- <label for="merk" class="form-label">Plat Kendaraaan</label> --}}
            {{-- <input type="text" class="form-control form-style" id="merk" name="merk" value="{{ $data->pemilik->nama }}" disabled> --}}

            <label for="type" class="form-label">Terakhir Service</label>
            <input type="date" class="form-control form-style" id="type" name="type" value="{{ $data->service->tanggal_terakhir }}" disabled>

            <label for="jenis" class="form-label">Jarak Tempuh</label>
            <input type="text" class="form-control form-style" id="jenis" name="jenis" value="{{ $data->service->jarak_tempuh }}" disabled>
            
            <label for="model" class="form-label">Biaya Service</label>
            <input type="text" class="form-control form-style" id="model" name="model" value="{{ $data->service->biaya }}" disabled>   

            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" disabled  cols="30" rows="5">{{$data->service->description}}</textarea>
           </form>

          <form action="{{ route('destroy', $data->id) }}" method="post">
            @method('DELETE')
            @csrf
            <a href="{{ route('spesifikasi') }}" class="btn btn-primary mt-3">Home</a>
            <a href="{{ route('edit',$data->id) }}" class="btn btn-success mt-3">Edit Data</a>
            <button type="submit" class="btn btn-danger mt-3">Delete</button>
         </form>
        </div>
    </div>
  </body>
</html>
