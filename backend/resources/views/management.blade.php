<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Eco-Langgar</title>

  <!-- Bootstrap core CSS -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  <!-- Custom styles for this template -->
  <link href="assets/css/sidebar.css" rel="stylesheet">
  <link href="assets/css/air_history.css" rel="stylesheet">

</head>

<body>

  @include('navbar')

<div class="wrapper">
    @include('sidebar')

    <div class="container-fluid">
        <div class="tulis_dashboard"><h3>Manajemen Aset</h3></div>
        <hr>
        <button type="button" class=" btn-info btn btn-sm" onclick="location.href='/management'">Input Data</button>
        <button type="button" class="btn btn-info btn-sm" onclick="location.href='/management_history'">Data Barang</button>
        <form class="text-left border border-light p-5" action="../add/management" method="POST">
            <!-- Name -->
            <div class="col-md-12">
                <label>Nama Barang</label>
                <input name="nama" type="text" id="defaultContactFormName" class="form-control mb-2">
                <label>Jumlah Barang</label>
                <input name="jumlah" type="number" id="defaultContactFormNumber" class="form-control mb-2">
                <label>Tanggal Pembelian</label>
                <input name="waktu_beli" type="date" id="defaultContactFormDate" class="form-control mb-2" name="awal">
                <label>Tanggal Kadaluarsa</label>
                <input name="waktu_expired" type="date" id="defaultContactFormDate" class="form-control mb-2" name="akhir">
                <label>Status</label>
                <select name="status" class="browser-default custom-select mb-2">
                    <option value="" disabled>Choose option</option>
                    <option value="1">Digunakan</option>
                    <option value="2">Dipinjam</option>
                    <option value="3">Digudang</option>
                </select>
                <label>Harga</label>
                <input name="harga" type="number" id="defaultContactFormNumber" class="form-control mb-2">
                <label>Kebijakan</label>
                <select name="kebijakan" class="browser-default custom-select mb-4">
                    <option value="" disabled>Choose option</option>
                    <option value="1">Private</option>
                    <option value="2">Public</option>
                </select>
                <!-- Send button -->
                <button class="btn btn-info btn-block" type="submit">Submit</button>
            </div>
        </form>
    </div>

</div>

</body>

</html>