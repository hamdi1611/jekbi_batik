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
        <div class="tulis_dashboard"><h3>Dashboard</h3></div>
        <div class="tulis_listbarang"><h5>List Barang</h5></div>
        <div class="container py-1">
            <div class="card ">
                <div class="row ">
                    <div class="col-md-1 align-items-center">
                        <img src="assets/images/kursi.jpg" class="w-100">
                    </div>
                    <div class="col-md-11 align-items-center">
                        <div class="card-block row">
                        <p class="col-md-3 " >Kursi Putar</p>
                        <p class="col-md-2 ">28/10/19</p>
                        <p class="col-md-2 ">20/10/22</p>
                        <p class="col-md-2 ">Digunakan</p>
                        <p class="col-md-2 ">Publik</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-1">
            <div class="card ">
                <div class="row ">
                    <div class="col-md-1 align-items-center">
                        <img src="assets/images/kursi.jpg" class="w-100">
                    </div>
                    <div class="col-md-11 align-items-center">
                        <div class="card-block row">
                        <p class="col-md-3 " >Kursi Putar</p>
                        <p class="col-md-2 ">28/10/19</p>
                        <p class="col-md-2 ">20/10/22</p>
                        <p class="col-md-2 ">Digunakan</p>
                        <p class="col-md-2 ">Publik</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-1">
            <div class="card ">
                <div class="row ">
                    <div class="col-md-1 align-items-center">
                        <img src="assets/images/kursi.jpg" class="w-100">
                    </div>
                    <div class="col-md-11 align-items-center">
                        <div class="card-block row">
                        <p class="col-md-3 " >Kursi Putar</p>
                        <p class="col-md-2 ">28/10/19</p>
                        <p class="col-md-2 ">20/10/22</p>
                        <p class="col-md-2 ">Digunakan</p>
                        <p class="col-md-2 ">Publik</p>
                        </div>
                    </div>
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