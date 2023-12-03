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
          <h4>EDIT DATA KENDARAAN</h4>
      </div>
      <div class="wrapper">
        <div class="w-50% mx-auto border p-3">

          <form action="{{ route('update',$data->id) }}" method="post" class="form-style">
            @method('PATCH')
            @csrf
              <h5>PEMEGANG KENDARAAN</h5>
                <label for="nama" class="form-label">Nama Pemilik Kendaraaan</label>
                <input autocomplete="off" type="text" class="form-control form-style text-capitalize" id="nama" name="nama" value="{{ $data->pemilik->nama }}" required>

                <label for="jabatan" class="form-label">Jabatan Pemilik</label>
                <input autocomplete="off" type="text" class="form-control form-style text-capitalize" id="jabatan" name="jabatan" value="{{ $data->pemilik->jabatan }}" required>

                <label for="date" class="form-label">Masa STNK Kendaraan</label>
                <div class="col-sm-3">
                  <input autocomplete="off" type="date" class="form-control form-style" id="date" name="stnk" value="{{ $data->pemilik->masa_stnk }}" required>
                </div>

                <label for="date" class="form-label">Masa Pajak Kendaraan</label>
                <div class="col-sm-3">
                  <input autocomplete="off" type="date" class="form-control form-style" id="date" name="pajak" value="{{ $data->pemilik->masa_pajak }}" required>
                </div>


                <label for="kondisi" class="form-label">Kondisi Kendaraaan</label>
                <input autocomplete="off" type="text" class="form-control form-style text-uppercase" id="kondisi" name="kondisi" value="{{ $data->pemilik->kondisi }}" required>

          
              <h5>NOMOR KENDARAAN</h5>
                <label for="bpkb" class="form-label">Nomor BPKB</label>
                <input autocomplete="off" type="text" name="bpkb" class="form-control form-style text-uppercase" id="bpkb" value="{{ $data->noker->bpkb }}" required>

                <label for="polisi" class="form-label">Nomor Polisi</label>
                <input autocomplete="off" type="text" name="plat" class="form-control form-style text-uppercase" id="polisi" value="{{ $data->noker->plat }}" required>

                <label for="rangka" class="form-label">Nomor Rangka</label>
                <input autocomplete="off" type="text" name="rangka" class="form-control form-style text-uppercase" id="rangka" value="{{ $data->noker->rangka }}" required>

                <label for="mesin" class="form-label">Nomer Mesin</label>
                <input autocomplete="off" type="text" name="mesin" class="form-control form-style text-uppercase" id="mesin" value="{{ $data->noker->mesin }}" required>
          
              <h5>SPESIFIKASI KENDARAAN</h5>

                <label for="merk" class="form-label">Merk Kendaraaan</label>
                <input autocomplete="off" type="text" class="form-control form-style text-capitalize" id="merk" name="merk" value="{{ $data->merk }}" required>

                <label for="type" class="form-label">Type Kendaraaan</label>
                <input autocomplete="off" type="text" class="form-control form-style text-capitalize" id="type" name="type" value="{{ $data->type }}" required>

                <label for="jenis" class="form-label">Jenis Kendaraaan</label>
                <input autocomplete="off" type="text" class="form-control form-style text-capitalize" id="jenis" name="jenis" value="{{ $data->jenis }}" required>

                <label for="model" class="form-label">Model Kendaraan</label>
                <input autocomplete="off" type="text" class="form-control form-style text-capitalize" id="model" name="model" value="{{ $data->model }}" required>

                <h5>SERVICE KENDARAAN</h5>
                <label for="date" class="form-label">Terakhir Service</label>
                <div class="col-sm-3">
                  <input autocomplete="off" type="date" class="form-control form-style" id="date" name="tanggal_terakhir" value="{{ $data->service->tanggal_terakhir }}" required>
                </div>
    
                <label for="jarak_tempuh" class="form-label">Jarak Tempuh</label>
                <input autocomplete="off" type="text" class="form-control form-style text-capitalize" id="jarak_tempuh" name="jarak_tempuh" value="{{ $data->service->jarak_tempuh }}" required>
    
                <label for="biaya" class="form-label">Biaya</label>
                <input autocomplete="off" type="text" class="form-control form-style text-capitalize" id="biaya" name="biaya" value="{{ $data->service->biaya }}" required>   
    
                <label for="description" class="form-label">Deskripsi</label>
                <textarea class="form-control form-style text-capitalize" name="description" id="description" cols="30" rows="5" required>{{ $data->service->description }}</textarea>
                <a href="{{ url()->previous() }}" class="btn btn-primary mt-3">Back</a>
                <a href="{{ route('spesifikasi') }}" class="btn btn-warning mt-3">Home</a>
                <button type="submit" class="btn btn-success mt-3">Update</button>          
          </form>
    </div>
  </body>
</html>








