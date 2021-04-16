@extends('layouts.master')
@yield('content')
<title>PPDB</title>
<div class="col-xs-12 col-sm-12 col-md-12 text-left">
<a href="{{ route('daftarsiswa') }}" class="btn btn-success">Daftar Baru !</a>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-left">
<a href="{{ route('home') }}" class="btn btn-success">Login</a>
</div>