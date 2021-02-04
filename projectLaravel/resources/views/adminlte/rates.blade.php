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
        @include('layouts.infoboxes')
        <!-- Tabela z kursami walut -->
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              @include('layouts.cardheader')
              <div class="card-body">
                <div class="row">
                  <div class="table">
                    <table>
                      <tr>
                        <th>Waluta</th>
                        <th>Skup</th>
                        <th>Sprzedaż</th>
                      </tr>
                      @foreach ($tab[0]['rates'] as $rate)
                        @if ($rate['code'] == 'EUR' || $rate['code'] =='USD' || $rate['code']=='CHF')
                          <tr>
                              <td> {{$rate['code']}} </td>
                              <td> {{ $rate['bid']}}</td>
                              <td> {{$rate['ask'] }}</td>
                          </tr>
                        @endif
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
              <aside class="control-sidebar control-sidebar-dark"></aside>
  @include('layouts.footer')
</div>
@include('layouts.scripts')
</body>
</html>