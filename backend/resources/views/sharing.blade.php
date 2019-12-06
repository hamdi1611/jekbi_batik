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
        <div class="row">
            <div class="col-md-6">
                <div class="tulis_dashboard"><h3>Sharing Aset</h3></div>
            </div>
            <div class="col-md-6">
                <!-- Search form -->
                <div class="md-form mt-2">
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                </div>
            </div>
        </div><hr>
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
                                <th>Pinjam</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($barangs as $key => $barang)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $barang['nama'] }}</td>
                                <td><img src="assets/images/{{ $barang['image'] }}" height="30" width="30"></td>
                                <td>{{ $barang['jumlah'] }}</td>
                                <td>{{ $barang['lokasi'] }}</td>
                                <td>{{ $barang['status'] }}</td>
                                <td>{{ $barang['harga'] }}</td>
                                <td><button type="button" class=" btn-info btn btn-sm" onclick="location.href='../pinjam'">Pinjam</button></th>
                            </tr>
                            @endforeach
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