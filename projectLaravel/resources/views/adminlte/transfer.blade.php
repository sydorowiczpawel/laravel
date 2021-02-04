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
        <h3>Przelew do odbiorcy krajowego</h3>
        <p></p>
      </div>

<div class="container">
@include('inc.messages')

    {!! Form::open(['url' => '/transfer/store', 'method' => 'POST']) !!}
    {{ Form::token() }}
    <div>
        {{Form::label('contractor', 'Nadawca')}}
        {{Form::text('contractor', Auth::user()->name, ['class' => 'form-control'])}}

        <!-- {{Form::text(Auth::user()->name, '', ['class' => 'form-control'])}} -->
    </div>
    <div>
        {{Form::label('name', 'Imie i nazwisko obiorcy')}}
        {{Form::text('name', '', ['class' => 'form-control'])}}
    </div>
    <div>
        {{Form::label('address', 'Adres odbiorcy')}}
        {{Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'Opcjonalnie'])}}
    </div>
    <div>
        {{Form::label('account', 'Numer konta odbiorcy')}}
        {{Form::text('account', '', ['class' => 'form-control'])}}
    </div>
    <div>
        {{Form::label('title', 'Tytuł przelewu')}}
        {{Form::text('title', '', ['class' => 'form-control'])}}
    </div>
    <div>
        {{Form::label('quote', 'Kwota')}}
        {{Form::text('quote', '', ['class' => 'form-control'])}}
    </div>
    <div>
        {{Form::submit('Zatwierdź', ['class' => 'button button1'])}}
        {{Form::button('Anuluj', ['class' => 'button button1'])}}

    </div>
    {!!Form::close() !!}
    </>
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