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
        <div class="tulis_dashboard"><h3>Pengelolaan Sampah</h3></div>
        <hr>
        <button type="button" class=" btn-info btn btn-sm" onclick="location.href='/management'">Input Data</button>
        <button type="button" class="btn btn-info btn-sm" onclick="location.href='/management_history'">Data Barang</button>
        <form class="text-left border border-light p-5" action="../add/sampah" method="POST">
            <!-- Name -->
            <div class="col-md-12">
                <label>Kegiatan</label>
                <select name="kegiatan" class="browser-default custom-select mb-4">
                    <option value="" disabled selected>Choose your option</option>
                    <option value="Buka Puasa(Takjil)">Buka Puasa(Takjil)</option>
                    <option value="Buka Puasa(Makan Besar)">Buka Puasa(Makan Besar)</option>
                    <option value="Buka Puasa(Minuman">Buka Puasa(Minuman)</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
                <label>Tanggal</label>
                <input type="date" name="date" id="defaultContactFormDate" class="form-control mb-4">

                <label>Jumlah Pengguna</label>
                <input type="number" name="jumlah" id="defaultContactFormNumber" class="form-control mb-4" placeholder="Jumlah dalam satuan kg">

                <!-- Send button -->
                <button class="btn btn-info btn-block" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>

<script>
$(document).ready(function () {

$('#sidebarCollapse').on('click', function () {
    $('#sidebar').toggleClass('active');
});

});
</script>

</body>

</html>