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
  
    <table id="customers">
    @foreach($records as $record)
      <tr>
        <th>Obciążono rachunek</th>
        <th>IDK użytkownika</th>
        <th>Data operacji</th>
        <th>IDK odbiorcy przelewu</th>
        <th>Rodzaj transakcji</th>
        <th>Lokalizacja</th>
        <th>Tytuł</th>
        <th>Kwota</th>
      </tr>
      <tr>
        <td><label>{{$record->account_number}}</label></td>
        <td><label>{{$record->user_id}}</label></td>
        <td><label>{{$record->data}}</label></td>
        <td><label>{{$record->receiver_idk}}</label></td>
        <td><label>{{$record->transaction}}</label></td>
        <td><label>{{$record->localization}}</label></td>
        <td><label>{{$record->title}}</label></td>
        <td><small>{{$record->quote}}</small></td>
      </tr>
    @endforeach
    </table>



@include('layouts.footer')
@include('layouts.scripts')
</body>
</html>