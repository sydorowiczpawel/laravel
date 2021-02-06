<!DOCTYPE html>
<html lang="en">
<!-- @include('layouts.head'); -->
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
        <!-- <h3><label>{{ Auth::user()->name}}</label></h3> -->
        <!-- <h3>e-mail: <label>{{ Auth::user()->email}}</label></h3> -->
        @foreach($records as $record)
      <div>
        <div>
          <h3>{{$record->name}}</h3>
        </div>
        <div>
          <p>Adres e-mail: {{$record->email}} </p>
        </div>
        <div>
          <p>IDK: {{$record->user_id}}</p>
        </div>
        <div>
          <p>Numer konta: {{$record->account_number}}</p>
          <button id="clickme" onclick="accountNumberGenerator()">Generuj</button>
          <div class="card__number" id="numerki">Skorzystaj z generatora, aby utworzyć nowy numer konta</div>
        </div>
      </div>
    @endforeach

    <div class="container">
@include('inc.messages')

    {!! Form::open(['url' => '/mypage/store', 'method' => 'POST']) !!}
    {{ Form::token() }}
    <div>
        {{Form::label('name', 'Imie i Nazwisko')}}
        {{Form::text('name', Auth::user()->name, ['class' => 'form-control'])}}
    </div>
    <div>
        {{Form::label('email', 'Adres e-mail')}}
        {{Form::text('email', Auth::user()->email, ['class' => 'form-control'])}}
    </div>
    <div>
        {{Form::label('account_number', 'Numer konta')}}
        {{Form::text('account_number', '', ['class' => 'form-control'])}}
    </div>
    <div>
        {{Form::label('user_id', 'IDK użytkownika')}}
        {{Form::text('user_id', '', ['class' => 'form-control'])}}
    </div>
    <div>
        {{Form::label('password', 'Hasło')}}
        {{Form::text('password', Auth::user()->password, ['class' => 'form-control'])}}
    </div>
        {{Form::submit('Zatwierdź', ['class' => 'button button1'])}}
        {{Form::button('Anuluj', ['class' => 'button button1'])}}

    </div>
    {!!Form::close() !!}
    </>
</div>
        
              <aside class="control-sidebar control-sidebar-dark"></aside>
  @include('layouts.footer')
</div>

<script>
function accountNumberGenerator()
{
	var temp="";
	for(var i=1;i<=22;i++)
	{
		temp+=Math.floor(Math.random() * 10);
		if(i == 2 || i == 6|| i == 10|| i == 14|| i == 18)
		{
			temp+=" ";
    }
	}
  document.getElementById("numerki").innerHTML = temp;
}
</script>

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