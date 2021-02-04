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
        <h3><label>{{ Auth::user()->name}}</label></h3>
        <h3>e-mail: <label>{{ Auth::user()->email}}</label></h3>
        
        <!-- <h3>zmień hasło: <input type="text"></input></h3>
        <button><a href="/home">Zapisz</a></button>
        <button>Anuluj</button> -->
        
              <aside class="control-sidebar control-sidebar-dark"></aside>
  @include('layouts.footer')
</div>
@include('layouts.scripts')
</body>
</html>