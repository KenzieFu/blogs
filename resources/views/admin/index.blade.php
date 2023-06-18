@extends('admin.layouts.adminpanel')
@section('admincontent')
<main class="content">
    <h3>Selamat Datang di Halaman Admin, {{ auth()->user()->name }}!</h3>
</main>
@endsection
