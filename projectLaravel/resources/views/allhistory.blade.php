<!DOCTYPE html>
<html lang="en">
@include('layouts.head');
<head>
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

.button_grey {
  background-color: white;
  color: black;
  border: 2px solid #768A99;
}

.button_grey:hover {
  background-color: #66899E;
  color: white;
}

</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
@include('layouts.navbar');
@include('layouts.mainsidebar');
<div class="content-wrapper">
<section class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="card">

<h1>Historia</h1>

<div class="container">

<table id="customers">
@foreach($data as $item)
    <tr>
        <th>Rodzaj transakcji</th>
        <th>Lokalizacja</th>
        <th>Kwota</th>
        <th>Data</th>
    </tr>
    <tr>
        <td>{{$item->transaction_type}}</td>
        <td>{{$item->localization}} </td>
        <td>{{$item->quote}}zł</td>
        <td>{{$item->created_at}}</td>
    </tr>
@endforeach
</table>
<a href="/home"><button class="button button_grey">Powrót</button></a>

<div class="container">

{{$data->links()}}

    </div>
    <aside class="control-sidebar control-sidebar-dark"></aside>
</div>
</body>
</html>
