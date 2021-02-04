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
        <div class="col-12 col-sm-6 col-md-3">
  </div>
  <div class="info-box mb-3">
    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
    <a href="/addHistory" class="nav-link">
      <div class="info-box-content">
        <span class="info-box-text">Dodaj</span>
      </div>
    </a>
  </div>
  <div>
    <a href="/history/{{$record->id}}">
    <h3>Data: {{$record->created_at}}</h3>
    <h3>Rodzaj transakcji: {{$record->transaction}}</h3>
    <small>Lokalizacja: {{$record->localization}}, </small>
    <small>kwota: {{$record->cuote}}.</small>
    </a>
      </div>


@include('layouts.footer')
@include('layouts.scripts')
</body>
</html>