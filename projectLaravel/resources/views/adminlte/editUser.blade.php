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
@include('layouts.scripts')
</body>
</html>