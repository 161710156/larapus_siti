@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="{{ url('/home') }}">Dashboard</a></li>|
                <li><a href="{{ url('/admin/books') }}">Buku</a></li>|
                <li class="active">Ubah buku</li>
            </ul>
            <div class="card">
                <div class="card-header">
                    Ubah buku
                </div>

                <div class="card-body">
                    {!! Form::model($book, ['url'=> route('books.update', $book->id),
                    'method' => 'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
                    @include('books._form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection