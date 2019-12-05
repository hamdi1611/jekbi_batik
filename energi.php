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

</head>

<body>

  <?php include('navbar.php') ?>

<div class="wrapper">
    <?php include('sidebar.php') ?>

    <div class="container-fluid">
        <div class="tulis_dashboard"><h3>Pengolahan Energi</h3></div>
        <div class="row col-md-12">
            <div class="col-md-3">
                <div class="tulis_listbarang"><h5><a href="energi.php">Input Data Penggunaan Energi</a></h5></div>
            </div>
            <div class="col-md-3">
                <div class="tulis_listbarang"><h5><a href="energi_history.php">History</a></h5></div>
            </div>
        </div>
        <div class="container py-1">
        <form method="POST" action="index.php">
            <label for="kegiatan">Kegiatan</label>
            <select name="Alat" required>
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Lampu Kecil</option>
                <option value="2">Lampu Besar</option>
                <option value="3">Kipas Angin</option>
                <option value="3">AC</option>
                <option value="3">Sound System</option>
            </select>
            <br>
            <label for="jumlah">Lama Pemakaian</label>
            <input type="number" name="jumlah" value="number">
            <br>
            <label for="total">Total Penggunaan</label>
            <input type="number" disabled name="total" value="total">
            <br>
            <input type="submit" value="Submit">
        </form>
        </div>
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