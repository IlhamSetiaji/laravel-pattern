@extends('layouts.app')
@section('content')
    <div class="container">
        @include('layouts.alert')
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-sm-6">
                    <h1 class="mb-0 pb-0 display-4" id="title">Data Buku</h1>
                    <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                        <ul class="breadcrumb pt-0">
                            <li class="breadcrumb-item"><a href="Dashboards.Default.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="Dashboards.html">Dashboards</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Title End -->

                <!-- Top Buttons Start -->
                <div class="col-12 col-sm-6 d-flex align-items-start justify-content-end">
                    <!-- Tour Button Start -->
                    <button type="button" class="btn btn-outline-primary btn-icon btn-icon-end w-100 w-sm-auto"
                    data-bs-toggle="modal" data-bs-target="#createData">
                        <span>Create</span>
                        <i data-acorn-icon="flag"></i>
                    </button>
                    <!-- Tour Button End -->
                </div>
                <!-- Top Buttons End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <div class="row">
            <div class="col-12 col-xl-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Author</th>
                            <th scope="col">Publisher</th>
                            <th scope="col">Price</th>
                            <th scope="col">Published At</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                            <tr>
                                <th scope="row">{{ $book->id }}</th>
                                <td>{{ $book->title }}</td>
                                <td>{{ $book->user->name }}</td>
                                <td>{{ $book->publisher }}</td>
                                <td>{{ $book->price }}</td>
                                <td>{{ $book->published_at }}</td>
                                <td><button type="button" class="btn btn-outline-warning btn-icon btn-icon-end w-100 w-sm-auto"
                                    data-bs-toggle="modal" data-bs-target="#updateData{{ $book->id }}">Edit
                                    </button></td>
                                <td><a href="{{ url('books/'.$book->id.'/delete') }}" class="btn btn-danger">Delete</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@push('modals')
    @include('books.modals.create')
    @include('books.modals.update')
@endpush
