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
        <div class="row">
            <div class="col-md-12">
            <div class="card">
<h1>Kreator ręcznego wprowadzania historii konta</h1>

<div class="container">
@include('inc.messages')

    {!! Form::open(['url' => '/history/store', 'method' => 'POST']) !!}
    {{ Form::token() }}
    <div>
        {{Form::label('transaction', 'Rodzaj transakcji')}}
        {{Form::text('transaction', '', ['class' => 'form-control', 'placeholder' => 'Rodzaj transakcji'])}}
    </div>
    <div>
        {{Form::label('localization', 'Lokalizacja')}}
        {{Form::text('localization', '', ['class' => 'form-control', 'placeholder' => 'Lokalizacja'])}}
    </div>
    <div>
        {{Form::label('cuote', 'Kwota')}}
        {{Form::text('cuote', '', ['class' => 'form-control', 'placeholder' => 'Kwota'])}}
    </div>
    <div>
        {{Form::submit('Zatwierdź', ['class' => 'button button1'])}}
    </div>
    {!!Form::close() !!}
    </>
</div>
    </div>
    <aside class="control-sidebar control-sidebar-dark"></aside>
</div>
</body>
</html>
