<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

@include('navbar')

<div class="wrapper">
    @include('sidebar')

    <div class="container-fluid">
        <div class="tulis_dashboard"><h3>Dashboard</h3></div>
        <hr>
        <div class="tulis_listbarang"><h5>List Barang</h5></div>
        @foreach($barangs as $key => $barang)
        <div class="container py-1">
            <div class="card ">
                <div class="row ">
                    <div class="col-md-1 align-items-center">
                        <img src="assets/images/{{ $barang['image'] }}" class="w-100">
                    </div>
                    <div class="col-md-11 align-items-center">
                        <div class="card-block row">
                        <p class="col-md-3 ">{{ $barang['nama'] }}</p>
                        <p class="col-md-2 ">{{ $barang['waktu_beli'] }}</p>
                        <p class="col-md-2 ">{{ $barang['waktu_expired'] }}</p>
                        <p class="col-md-2 ">{{ $barang['status'] }}</p>
                        <p class="col-md-2 ">{{ $barang['kebijakan'] }}</p>
                        <p class="col-md-1 ">{{ $barang['jumlah'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div id="chartContainer" style="height: 300px; width: 98%;">
    </div>



</div>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

<script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {

      title:{
      text: "Pengelolaan Air - per month"
      },
      axisX: {
        valueFormatString: "MMM",
        interval:1,
        intervalType: "month"
      },
      axisY:{
        includeZero: false

      },
      data: [
      {
        type: "line",

        dataPoints: [
        { x: new Date(2012, 00, 1), y: 450 },
        { x: new Date(2012, 01, 1), y: 300},
          { x: new Date(2012, 02, 1), y: 520},
        { x: new Date(2012, 03, 1), y: 460 },
        { x: new Date(2012, 04, 1), y: 450 },
        { x: new Date(2012, 05, 1), y: 500 },
        { x: new Date(2012, 06, 1), y: 2000 },
        { x: new Date(2012, 07, 1), y: 480 },
        { x: new Date(2012, 08, 1), y: 1000},
        { x: new Date(2012, 09, 1), y: 500 },
        { x: new Date(2012, 10, 1), y: 480 },
        { x: new Date(2012, 11, 1), y: 900 }
        ]
      }
      ]
    });

    chart.render();
  }
  </script>

<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

</body>

</html>
