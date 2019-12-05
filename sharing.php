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

  <?php include('navbar.php') ?>

<div class="wrapper">
    <?php include('sidebar.php') ?>

    <div class="container-fluid">
        <div class="tulis_dashboard"><h3>Sharing Aset</h3></div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <table class="table table-hover" id="dev-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Foto</th>
                                <th>Jumlah</th>
                                <th>Lokasi</th>
                                <th>Status</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Kilgore</td>
                                <td>Trout</td>
                                <td>kilgore</td>
                                <td>kilgore</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Bob</td>
                                <td>Loblaw</td>
                                <td>boblahblah</td>
                                <td>kilgore</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Holden</td>
                                <td>Caulfield</td>
                                <td>penceyreject</td>
                                <td>kilgore</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Holden</td>
                                <td>Caulfield</td>
                                <td>penceyreject</td>
                                <td>kilgore</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
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