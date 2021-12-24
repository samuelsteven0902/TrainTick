<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>TrainTick | Pemesanan Tiket</title>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm ">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="<?= base_url() ?>/img/logo_kai.jpeg" alt="" width="30" height="24" class="d-inline-block align-text-top">
        TrainTic
      </a>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <div class="container mb-5 mt-3 bg-light border border-primary p-3 border-4">
    <div class="row ">
      <div class="col-6 ">
        <h2>Pemesanan Tiket Kereta Api</h2>
        <p>Selasa, 07 Desember 2021</p>
      </div>
    </div>
    <div class="row">
      <div class="col-5">
        <p>Stasiun asal :</p>
        <select class="form-select form-select-lg mb-3" aria-label="Default select example">
          <option selected disabled>Pilih Kota</option>
          <option value="1">Solo</option>
          <option value="2">Jogja</option>
          <option value="3">Kaliurang</option>
        </select>
      </div>

      <div class="col-5">
        <p>Stasiun Tujuan :</p>
        <select class="form-select form-select-lg mb-3" aria-label="Default select example">
          <option selected disabled>Pilih Kota</option>
          <option value="1">Solo</option>
          <option value="2">Jogja</option>
          <option value="3">Kaliurang</option>
        </select>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-3">
        <p>Tanggal Keberangkatan</p>
        <input type="date" id="birthdaytime" name="birthdaytime" class="form-control mb-4">
      </div>

      <br>

      <div class="col-3">
        <p>Jumlah Penumpang</p>
        <input type="number" id="quantity" name="quantity" min="1" max="5" class="form-control " value="0">
      </div>
    </div>
    <a href="cari" class="btn btn-danger  m-2">Cari dan Pesan Tiket</a>


  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>