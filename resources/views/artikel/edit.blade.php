@extends('layouts.master')

@section('content')
    <h1 class="py-2 border-bottom border-secondary mb-4">Edit Article</h1>

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-white border">
            <li class="breadcrumb-item active"><a href="/artikel">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Article</li>
        </ol>
    </nav>

    <!-- Form -->
    <div class="card">
        <form action="/artikel/{{$artikel->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="judul">Title:</label>
                    <input type="text" class="form-control" value="{{$artikel->judul}}" placeholder="Add Title" id="judul" name="judul" required>
                </div>
                <div class="form-group">
                    <label for="isi">Article Content:</label>
                    <textarea class="form-control" rows="5" id="isi" name="isi" required>{{$artikel->isi}}</textarea>
                </div>
                <div class="form-group">
                    <label for="slug">Slug:</label>
                    <input type="text" class="form-control" value="{{$artikel->slug}}" placeholder="Add Slug" id="slug" name="slug" required>
                </div>
                <div class="form-group">
                    <label for="tag">Tag:</label>
                    <input type="text" class="form-control" value="{{$artikel->tag}}" placeholder="Add Tag" id="tag" name="tag" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection