@extends('layouts.master')

@section('content')
    <div class="row py-2 border-bottom border-secondary mb-4">
        <div class="col">
            <h1>List Of Articles</h1>
        </div>
        <div class="col">
            <a href="artikel/create" class="btn btn-outline-success float-right"><span class="fa fa-plus mr-2"></span>Add Article</a>
        </div>
    </div>
    
    <div class="row">
        @foreach($artikel as $key => $artikel2)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        {{$artikel2->judul}} 
                        <a href="/artikel/{{$artikel2->id}}/show" class="btn btn-outline-info btn-sm float-right"><span class="fa fa-info mr-2"></span>Show</a>
                    </h5>
                    <p class="card-text">{{$artikel2->isi}}</p>
                    <form action="/artikel/{{$artikel2->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-sm float-right"><span class="fa fa-trash-o mr-2"></span>Delete</button>
                    </form>
                    <a href="/artikel/{{$artikel2->id}}/edit" class="btn btn-outline-primary btn-sm float-right mr-2"><span class="fa fa-pencil-square-o mr-2"></span>Edit</a>
                    <p>{{\Carbon\Carbon::parse($artikel2->created_at)->diffForHumans()}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row d-flex">
        <div class="col d-flex justify-content-center"><button onclick="sweet()" class="btn btn-primary">Sweet Alert</button></div>
    </div>
@endsection

@push('scripts')
    <script>
        function sweet() {
            Swal.fire({
                title: 'Berhasil!',
                text: 'Memasangkan script sweet alert',
                icon: 'success',
                confirmButtonText: 'Cool'
            })
        }
    </script>
@endpush