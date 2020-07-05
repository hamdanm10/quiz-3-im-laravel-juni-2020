@extends('layouts.master')

@section('content')
    <h1 class="py-2 border-bottom border-secondary mb-4">Show Article</h1>

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-white border">
            <li class="breadcrumb-item active"><a href="/artikel">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Show Article</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Judul: {{$artikel->judul}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Slug: {{$artikel->slug}}</h6>
            <p class="card-text">{{$artikel->isi}}</p>
            <a href="#" class="btn btn-success btn-sm">{{$artikel->tag}}</a>
        </div>
    </div>
@endsection