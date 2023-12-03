<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah-kendaraan</title>
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('assets/auth/css/tambah.css')}}" type="text/css">
  </head>
  <body>
    <div class="container">
      <div class="judul">
          <h4>TAMBAH KENDARAAN</h4>
      </div>

      <div class="wrapper">
        <div class="w-50% mx-auto border p-3">
          <form action="{{ route('store') }}" method="post">
            @csrf
            <h5>PEMEGANG KENDARAAN</h5>
            <label class="form-style" for="nama">Nama Pemilik Kendaraaan</label>
            <input autocomplete="off" type="text" class="form-control form-style text-capitalize" id="nama" name="nama" required>
            
            <label class="form-style" for="jabatan">Jabatan Pemilik</label>
            <input autocomplete="off" type="text" class="form-control form-style text-capitalize" id="jabatan" name="jabatan" required>
            
            <label class="form-style" for="date">Masa STNK Kendaraan</label>
            <input autocomplete="off" type="date" class="form-control form-style" id="date" name="stnk" required>

            <label class="form-style" for="pajak">Masa Pajak Kendaraan</label>
            <input autocomplete="off" type="date" class="form-control form-style" id="date" name="pajak" required>

            <label class="form-style" for="kondisi">Kondisi Kendaraaan</label>
            <input autocomplete="off" type="text" class="form-control form-style text-uppercase" id="kondisi" name="kondisi" required>

            <h5>NOMOR KENDARAAN</h5>
            <label class="form-style" for="nomor">Nomor BPKB</label>
            <input autocomplete="off" type="text" class="form-control form-style text-uppercase" id="nomor" name="bpkb" required>

            <label class="form-style" for="plat">Nomor Polisi</label>
            <input autocomplete="off" type="text" class="form-control form-style text-uppercase" id="plat" name="plat" required>

            <label class="form-style" for="rangka">Nomor Rangka</label>
            <input autocomplete="off" type="text" class="form-control form-style text-uppercase" id="rangka" name="rangka" required>

            <label class="form-style" for="mesin">Nomer Mesin</label>
            <input autocomplete="off" type="text" class="form-control form-style text-uppercase" id="mesin" name="mesin" required>

            <h5>SPESIFIKASI KENDARAAN</h5>
            <label class="form-style" for="merk">Merk Kendaraaan</label>
            <input autocomplete="off" type="text" class="form-control form-style text-capitalize" id="merk" name="merk" required>

            <label class="form-style" for="type">Type Kendaraaan</label>
            <input autocomplete="off" type="text" class="form-control form-style text-capitalize" id="type" name="type" required>

            <label class="form-style" for="jenis">Jenis Kendaraaan</label>
            <input autocomplete="off" type="text" class="form-control form-style text-capitalize" id="jenis" name="jenis" required>

            <label class="form-style" for="model">Model Kendaraan</label>
            <input autocomplete="off" type="text" class="form-control form-style text-capitalize" id="model" name="model" required>

            <h5>SERVICE KENDARAAN</h5>
            <label class="form-style" for="date" class="form-label">Terakhir Service</label>
            <input autocomplete="off" type="date" class="form-control form-style" id="date" name="tanggal_terakhir"  required>

            <label class="form-style" for="jarak_tempuh" class="form-label">Jarak Tempuh</label>
            <input autocomplete="off" type="text" class="form-control form-style text-capitalize" id="jarak_tempuh" name="jarak_tempuh" placeholder="10.000 km"  required>
            
            <label class="form-style" for="biaya" class="form-label">Biaya</label>
            <input autocomplete="off" cols="30" rows="5" type="text" class="form-control form-style text-capitalize" id="biaya" name="biaya" placeholder="Rp 10.000"  required>   

            <label class="form-style" for="description" class="form-label">Deskripsi</label>
            <textarea class="form-control form-style text-capitalize" name="description" id="description" cols="30" rows="5" required></textarea>

            <a href="{{ url()->previous() }}" class="btn btn-primary mt-3">Back</a>
            <a href="{{ route('spesifikasi') }}" class="btn btn-warning mt-3">Home</a>
            <button type="submit" class="btn btn-success mt-3">Tambah</button>
          </form>
        </div>
    </div>
  </body>
</html>
