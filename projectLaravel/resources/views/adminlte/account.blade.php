<!DOCTYPE html>
<html lang="en">
@include('layouts.head');
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
@include('layouts.navbar');
@include('layouts.mainsidebar');
<div class="content-wrapper">
    <section class="content">
    <div class="container-fluid">

    <h1>{{ Auth::user()->name}}</h1>
        @foreach($ballances as $ballance)
@foreach($details as $detail)

    <div>
        <h3 >Numer konta {{$detail->controll_number}} {{$detail->bank_id}} {{$ballance->account_number}}</h3>
        <h2 >Saldo {{$ballance->ballance}}</h2>
    </div>
    @endforeach
    @endforeach

    <a href="/history"><button type="button" data-toggle="collapse">Historia</button></a>
    <a href="/home"><button type="button" data-toggle="collapse">Powrót</button></a>
    
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
