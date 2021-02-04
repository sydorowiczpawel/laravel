<!DOCTYPE html>
<html lang="en">
@include('layouts.head');
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
@include('layouts.navbar');
@include('layouts.mainsidebar');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  @include('layouts.contentheader')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        @include('layouts.infoboxes')
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Przelicznik walut</h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <div class="btn-group">
                    <!-- <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-wrench"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                      <a href="#" class="dropdown-item">Action</a>
                      <a href="#" class="dropdown-item">Another action</a>
                      <a href="#" class="dropdown-item">Something else here</a>
                      <a class="dropdown-divider"></a>
                      <a href="#" class="dropdown-item">Separated link</a>
                    </div> -->
                  </div>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                <div>
    </div>
    <form action = "" method = "GET">
    <div>
      <label>Ile PLN chcesz wymienić?</label>
      <input type="number" name="PLN"><br><br>
    </div>
    <div>
    <p>Wybierz walutę
    <select name="waluta">
                <option value="dupa">Waluta</option>
                <option value="dolar amerykański">dolar amerykański</option>
                <option value="euro">euro</option>
                <option value="frank szwajcarski">frank szwajcarski</option>
            </select>
            </p>
            </div>
            <input class="button buttor3" type="submit" value="Oblicz">
    @php
      if(isset($_GET['waluta']) && $_GET['PLN'] >= 0){
        $currency = $_GET['waluta'];
        $amount = $_GET['PLN'];
      } else {
        $currency = "";
        $amount = 0;
      }
    @endphp

    @foreach ($tab[0]['rates'] as $rate)
      @if ($rate['currency'] == $currency)
        <p>Za kwotę {{$amount}} zł można zakupić {{intval($rate['ask'])*$amount/10}}{{$rate['code']}}</p>
        <a class="backhome" href="../kantor" style="text-decoration:none;width:100%;display:inline-block">
            RESET
        </a>
    @endif
    @endforeach
  </form>
                <!-- /.row -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
@include('layouts.footer')
</div>
<!-- ./wrapper -->
@include('layouts.scripts')
</body>
</html>