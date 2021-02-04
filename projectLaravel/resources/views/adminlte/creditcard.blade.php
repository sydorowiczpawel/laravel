<!DOCTYPE html>
<html lang="en">
@include('layouts.head');
<head>
<style>
.panel {
  width: 600px;
  margin: 0 auto;
  margin-bottom: 50px;
  text-align: center;
}
.card {
  font: 16px/1.5 'Helvetica Neue', Helvetica, sans-serif;
  position: relative;
  display: inline-block;
  vertical-align: middle;
  width: 425px;
  height: 270px;
  text-align: left;
  padding: 30px;
  margin-bottom: 50px;
  color: #fff;
  border-radius: 20px;
  box-sizing: border-box;
  background: url() no-repeat 0 0 #141819;
}
  .card__number {
    font-size: 30px;
    padding: 90px 0 15px;
    text-align: center;
  }

  .card__expiry-date {
    font-size: 14px;
    padding-bottom: 20px;
    text-align: center;
  }

  .card__owner {
    text-align: left;
  }

  .card__logo {
    position: absolute;
    right: 20px;
    bottom: 20px;
  }

  .card__strip {
    background: #000;
    height: 50px;
    margin-bottom: 30px;
  }

  .card__signature {
    float: left;
    width: 65%;
    height: 40px;
    margin-left: 10px;
    background: #999;
  }

  .card__ccv {
    float: left;
    margin-top: 5px;
    padding: 7px;
    background: #fff;
    color: #111;
    line-height: 1;
  }

  .card--front {
    font-size: 16px;
    font-family: 'Source Code Pro';
    text-shadow: 0 1px 1px rgba(0, 0, 0, .6);
  }

  .card--back {
    padding-left: 0;
    padding-right: 0;
    text-align: left;
  }
</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
@include('layouts.navbar');
@include('layouts.mainsidebar');
  <div class="content-wrapper">
    @include('layouts.contentheader')
    <section class="content">
    <div class="panel">
  <div class="card card--front">
    <div class="card__number" id="numerki">4111 1111 1111 1111</div>
    <div class="card__expiry-date" id="data">10/17</div>
    <div class="card__owner">{{ Auth::user()->name}}</div>
    <div class="card__logo"><i class="fas fa-piggy-bank fa-flip-horizontal"></i><span> NBKP</span></div>
  </div>
  <button id="clickme" onclick="generujLiczby()">Generuj</button>
  <div class="card card--back">
    <div class="card__strip"></div>
    <div class="card__signature"></div>
    <div class="card__ccv" id="cvc">303</div>
  </div>
  <button id="clickme" onclick="generujCVC()">Generuj</button>
</div>
    </section>
  </div>
  @include('layouts.footer');
</div>

<script>
function generujLiczby()
{
	var temp="";
	for(var i=1;i<=16;i++)
	{
		temp+=Math.floor(Math.random() * 10); 
		if(i%4==0)
		{
			temp+=" ";
		}
	}
  document.getElementById("numerki").innerHTML = temp;
  
  	var temp="";
	var temp2=0;
	for(var i=0;i<2;i++)
	{
		temp2+=Math.floor(Math.random() * 10);
		if(i<1)
		{
			if(temp2<10)
			{
				temp+="0"+temp2+"/";
			}
			else
			{
				temp+=temp2+"/";
			}
		}
		if(i>=1)
		{
			if(temp2<10)
			{
				temp+="0"+temp2;
			}
			else
			{
				temp+=temp2;
			}
		}			
	}
  document.getElementById("data").innerHTML = temp;
}

function generujCVC()
{
	var temp="";
	for(var i=0;i<3;i++)
	{
		temp+=Math.floor(Math.random() * 10); 
	}
  document.getElementById("cvc").innerHTML = temp;
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