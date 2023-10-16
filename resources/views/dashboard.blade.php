@extends('master')
@section('konten')
    <h4>Selamat Datang <b>{{Auth::user()->name}}</b>,
    Anda Login sebagai <b>{{Auth::user()->role}}</b>.
    <li><a href="/index">kembali</a></li>
    </h4>
@endsection