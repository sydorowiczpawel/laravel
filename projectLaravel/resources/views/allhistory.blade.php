<!DOCTYPE html>
<html lang="en">
@include('layouts.head');
<head>
<style>
.page-item{
    
}
</style>
</head>
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
        <div class="row">
            <div class="col-md-12">
            <div class="card">
<h1>Historia</h1>

<div class="container">
@foreach($data as $item)
        <h3>{{$item->transaction}} {{$item->cuote}}zł</h3>
        <small>Lokalizacja: {{$item->localization}} </small>
        <small>data: {{$item->created_at}}</small>
        </a>
      
@endforeach
<br>
{{$data->links()}}

    </div>
    <aside class="control-sidebar control-sidebar-dark"></aside>
</div>
</body>
</html>
