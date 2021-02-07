<!DOCTYPE html>
<html lang="en">
<!-- @include('layouts.head'); -->
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
@include('layouts.navbar');
@include('layouts.mainsidebar');

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

    <div class="container">
    <form method="POST" action="{{url('/updateUser/'.$user->id) }}">
        @csrf
        <div>
            <label>Name</label>
            <input type="text" name="name" value="{{old('name')?? $user->name }}" class="form-control" placeholder="Imie i nazwisko">
        </div>
        <div>
            <label>email</label>
            <input type="text" name="email" value="{{old('email')?? $user->email }}" class="form-control" placeholder="email">
        </div>
        <div>
            <label>Password</label>
            <input type="text" name="password" value="{{old('password')?? $user->password }}" class="form-control" placeholder="Hasło">
        </div>
        <button>Submit</button>
    </form>
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