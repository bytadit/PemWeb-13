@extends('dashboard.layouts.main')

@section('title')
    Halaman Utama
@endsection

@section('container')
    <div class="card">
        <div class="card-body">
            Halo {{auth()->user()->name}}
        </div>
    </div>
@endsection
