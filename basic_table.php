<?php
	$con = new mysqli("localhost","root","4","aplikasi_pemilihan_lahan_obat");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Creative - Bootstrap Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.html" class="logo">Penentuan Lahan <span class="lite">Tanaman Obat</span></a>
      <!--logo end-->

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar-mini4.jpg">
                            </span>
                            <span class="username">Victor Siginting</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li>
                <a href="login.html"><i class="icon_key_alt"></i> Log Out</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu">
          <li class="active">
              <a class="" href="index.php">
                    <i class="icon_house_alt"></i>
                    <span>Dashboard</span>
              </a>
          </li>
          
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Tables</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="basic_table.php">Table Target</a></li>
              <!-- <li><a class="" href="basic_table_prediksi.html">Table Prediksi</a></li> -->
              <li><a class="" href="tablePilihanUser.php">Table Data Lahan</a></li>
            </ul>
          </li>
        </ul>
          <!-- sidebar menu end-->
        </div>
      </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>

        <a href="formTarget.php">
          <button>Isi Target</button>
        </a>
        
        <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading">
                Table Target Jahe
              </header>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Aspek</th>
                    <th>Kriteria</th>
                    <th>Target</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td rowspan="3">Jarak</td>
                    <td>Jarak Lahan dengan petani</td>
                    <td>501-1000</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <!-- <td>Jacob</td> -->
                    <td>Jarak lahan dengan pasar</td>
                    <td> < 500 </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <!-- <td>Larry</td> -->
                    <td>Jarak lahan dengan pemukiman</td>
                    <td> 2000 < </td>
                  </tr>
                  <tr>
                      <td>4</td>
                      <td rowspan="4">Lokasi</td>
                      <td>Luas Tanah</td>
                      <td>11-50m2</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <!-- <td>Jacob</td> -->
                      <td>Ketinggian Lingkungan</td>
                      <td>100-250</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <!-- <td>Larry</td> -->
                      <td>Jenis Tanah</td>
                      <td>Lempung</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <!-- <td>Larry</td> -->
                        <td>Harga Tanah</td>
                        <td> < 5jt</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td rowspan="3">Iklim</td>
                        <td>Panas</td>
                        <td> 20-30 C </td>
                      </tr>
                      <tr>
                        <td>9</td>
                        <!-- <td>Jacob</td> -->
                        <td>Dingin</td>
                        <td> 15-20 C </td>
                      </tr>
                      <tr>
                        <td>10</td>
                        <!-- <td>Larry</td> -->
                        <td>Curah Hujan</td>
                        <td>Sedang</td>
                    </tr>
                </tbody>
              </table>
              <!-- <div class="panel-body">
                  <a href="basic_table_prediksi.html">
                      <button type="button" class="btn btn-primary btn-lg btn-block">Result</button>
                  </a>
                </div> -->
              
            </section>
          </div>

          <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading">
                Fuzzy Keanggotaan Target Jahe
              </header>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Id Sub Kriteria</th>
                    <th>Nama Sub Kriteria</th>
                    <th>Bobot</th>
                    <th>Fuzzy</th>

                  </tr>
                </thead>
                <tbody>
                <?php
                    $A1 = 4;
                    $A2 = 4;
                    $A3 = 4;

                    $B1 = 4;
                    $B2 = 5;
                    $B3 = 3;
                    $B4 = 4;

                    $C1 = 3;
                    $C2 = 3;
                    $C3 = 3;

                    $sql="SELECT options_kriteria.bobot, target_lahan.id_sub_kriteria, sub_kriteria.nama_sub_kriteria
                          FROM target_lahan 
                          INNER JOIN sub_kriteria ON sub_kriteria.id_sub_kriteria = target_lahan.id_sub_kriteria                          
                          INNER JOIN options_kriteria ON options_kriteria.id_options = target_lahan.id_options
                          ";
                    $hasil = mysqli_query($con, $sql);
                    $no = 1;
                    while($row= mysqli_fetch_assoc($hasil))
                      {
                        if ($row['id_sub_kriteria'] == 1 || $row['id_sub_kriteria'] == 2 || $row['id_sub_kriteria'] == 3 || $row['id_sub_kriteria'] == 4 || $row['id_sub_kriteria'] == 7 ) {
                            $max = $A1;
                        }elseif ($row['id_sub_kriteria'] == 5) {
                            $max = $B2;
                        }else{
                            $max = $C1;
                        }
                        $fuzzy = ($row['bobot']-1)/($max-1);
                      //   echo '('.$row['id_sub_kriteria'].')'.$row['nama_sub_kriteria']. ' = ' .$row['bobot'].' = '.$fuzzy.'<br>';
                      // }
                  ?>
                      <tr>
                        <td> <?= $no ?> </td>
                        <td> <?= $row['id_sub_kriteria'] ?> </td>
                        <td> <?= $row['nama_sub_kriteria'] ?> </td>
                        <td> <?= $row['bobot'] ?> </td>
                        <td> <?= $fuzzy ?> </td>
                        
                      </tr>
                  <?php
                      $no++;
                      }
                    ?>
                   </tbody>
              </table>

            </section>
          </div>

        </div>

      </section>
      
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
