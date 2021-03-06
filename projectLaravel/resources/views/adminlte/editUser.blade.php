<!DOCTYPE html>
<html lang="en">
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

.button {
  background-color: #4CAF50;
  width: 250px;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button_green {
  background-color: white;
  color: black;
  border: 2px solid #00FA3E;
}

.button_green:hover {
  background-color: #7D8A07;
  color: white;
}

.button_red {
  background-color: white;
  color: black;
  border: 2px solid #FF0101;
}

.button_red:hover {
  background-color: #C23C07;
  color: white;
}
</style>
<body>
<div class="container">

    {!! Form::open(['url' => '/updateUser/'.$user->id, 'method' => 'POST']) !!}
    {{ Form::token() }}

<table id="customers">
  <tr>
    <th></th>
    <th></th>
  </tr>
  <tr>
    <td>{{Form::label('id', 'ID')}}</td>
    <td>{{Form::label('id', Auth::user()->id, ['class' => 'form-control'])}}</td>
  </tr>
  <tr>
    <td>{{Form::label('name', 'Imie i Nazwisko')}}</td>
    <td>{{Form::text('name', Auth::user()->name, ['class' => 'form-control'])}}</td>
  </tr>
  <tr>
    <td>{{Form::label('email', 'Adres e-mail')}}</td>
    <td>{{Form::text('email', Auth::user()->email, ['class' => 'form-control'])}}</td>
  </tr>
  <tr>
    <td>{{Form::label('account_number', 'Numer konta')}}</td>
    <td>{{Form::text('account_number', Auth::user()->account_number, ['class' => 'form-control'])}}</td>
  </tr>
  <tr>
    <td>{{Form::label('user_id', 'IDK użytkownika')}}</td>
    <td>{{Form::text('user_id', Auth::user()->user_id, ['class' => 'form-control'])}}</td>
  </tr>
  <tr>
    <td>{{Form::label('password', 'Hasło')}}</td>
    <td>{{Form::text('password', Auth::user()->password, ['class' => 'form-control'])}}</td>
  </tr>
  <tr>
    <td>{{Form::label('saldo', 'Stan konta')}}</td>
    <td>{{Form::text('saldo', Auth::user()->saldo, ['class' => 'form-control'])}}</td>
  </tr>
</table>

<div>
{{Form::submit('Submit', ['class' => 'button button_green'])}}
{!!Form::close() !!}
<a href="/home"><button class="button button_red">Cancel</button></a>
</div>
<div><td>
  <button class="button" onclick="accountNumberGenerator()">Generuj numer konta</button></td>
  <label type="text" id="numer_konta">
</div>
<div>
  <td><button class="button" onclick="idkGenerator()">Generuj numer IDK</button>
  <label type="text" id="numer_idk"></td>

</div>

<script>
function accountNumberGenerator()
{
	var temp="";
	for(var i=1;i<=22;i++)
	{
		temp+=Math.floor(Math.random() * 10);
	}
  document.getElementById("numer_konta").innerHTML = temp;
}

function idkGenerator()
{
	var temp="";
	for(var i=1; i<=8; i++)
	{
		temp+=Math.floor(Math.random() * 10);
	}
  document.getElementById("numer_idk").innerHTML = temp;
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