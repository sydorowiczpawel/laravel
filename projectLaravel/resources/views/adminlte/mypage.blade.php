<!DOCTYPE html>
<html lang="en">
@include('layouts.head');
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
@include('layouts.navbar');
@include('layouts.mainsidebar');

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
      <div>
        <div>
          <h3>{{ Auth::user()->name}}</h3>
        </div>
        <div>
          <p>Adres e-mail: {{ Auth::user()->email}} </p>
        </div>
        <div>
        <p>Numer konta: {{ Auth::user()->account_number}} </p>
        </div>
        <div>
        <p>Numer IDK: {{ Auth::user()->user_id}} </p>
        </div>
        <div>
        <p>Saldo: {{ Auth::user()->saldo}} </p>
        </div>
        <div>
          <h3>Drogi użytkowniku, aby w pełni korzystać z funkcjonalności NBKP musisz posiadać indywidualny nr IDK oraz konta bankowego.</h3>
          <h3>Aby je wygenerować skorzystaj z kreatora. Możesz również edytować tam podstawowe dane.</h3>
        </div>
        <div class="info-box mb-3">
          <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-bars"></i></span>
        @foreach($users as $user)
          <a href="/editUser/{{$user->id}}" class="nav-link">
        @endforeach
            <div class="info-box-content">
          <span class="info-box-text">Kreator</span>
        </div></a>
      </div>
    </div>
  </div>
  <aside class="control-sidebar control-sidebar-dark"></aside>
  @include('layouts.footer')
@include('layouts.scripts')

</div>
</body>
</html>