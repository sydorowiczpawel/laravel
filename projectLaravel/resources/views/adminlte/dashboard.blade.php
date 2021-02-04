<!DOCTYPE html>
<html lang="en">
@include('layouts.head');
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
@include('layouts.navbar');
@include('layouts.mainsidebar');
  <div class="content-wrapper">
    @include('layouts.contentheader')
    <section class="content">
      <div class="container-fluid">
        @include('layouts.infoboxes')
        <h2>Wymagania projektowe</h2>
        <p> - HTML - zrobiony</p>
        <p> - CSS - zrobiony</p>
        <p> - PHP - zrobiony</p>
        <p> - Baza danych - zrobiona</p>
        <p> - Framework Laravel - jest</p>
        <p> - dodawanie nowych klientów - jest</p>
        <p> - uwierzytelnianie - jest</p>
        <p> - przelewy miedzy klientami - ZROBIC</p>
        <p> - historia operacji - jest</p>
        <p> - wyswietlanie nazwy banku do ktorego realizowany jest przelew</p>
        <p> - walidacja danych - jest</p>
        <p> - stan konta</p>
        <p> - karta kredytowa - jest</p>
        <p> - kredyt</p>
        <p> - testowanie - przetestowane</p>
        <p> - zastosowanie systemu kontroli wersji - git - jest git</p>
      </div>
    </section>
  </div>
  @include('layouts.footer');
</div>

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>
</body>
</html>