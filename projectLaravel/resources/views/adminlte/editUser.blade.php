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
  background-color: #4CAF50; /* Green */
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
    <td id="numer_konta">{{Form::text('account_number', '', ['class' => 'form-control'])}}</td>
  </tr>
  <tr>
    <td>{{Form::label('user_id', 'IDK użytkownika')}}</td>
    <td id="numer_idk">{{Form::text('user_id', '', ['class' => 'form-control'])}}</td>
  </tr>
  <tr>
    <td>{{Form::label('password', 'Hasło')}}</td>
    <td>{{Form::text('password', Auth::user()->password, ['class' => 'form-control'])}}</td>
  </tr>
</table>

{{Form::hidden('_method', 'PUT')}}
{{Form::submit('Submit', ['class' => 'button button_green'])}}
{!!Form::close() !!}
<a href="#"><button class="button button_red">Cancel</button></a>
<td><button class="button" onclick="accountNumberGenerator()">Generuj numer konta</button></td>
<td><button class="button" onclick="idkGenerator()">Generuj numer IDK</button></td>


<script>
function accountNumberGenerator()
{
	var temp="";
	for(var i=1;i<=22;i++)
	{
		temp+=Math.floor(Math.random() * 10);
	// 	if(i == 2 || i == 6|| i == 10|| i == 14|| i == 18)
	// 	{
	// 		temp+=" ";
    // }
	}
  document.getElementById("numer_konta").innerHTML = temp;
}

function idkGenerator()
{
	var temp="";
	for(var i=1; i<=8; i++)
	{
		temp+=Math.floor(Math.random() * 10);
	// 	if(i == 3 || i == 5)
	// 	{
	// 		temp+=" ";
    // }
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