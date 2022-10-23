@extends('layout.index')
@section('title')
    <title>Demo | List</title>
@endsection
@section('content')
    <section id="content">
        <!-- NAVBAR -->
        @include('layout.navbar')
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>New</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">New</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">List</a>
                        </li>
                    </ul>
                </div>
                <a href="{{ route('news.create') }}" class="btn-download">
                    <span class="text">Add</span>
                </a>
            </div>
            <form action="">
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
            </form>
            <ul class="box-info">

                <table class="table">

                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tiêu đề</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Nội dung</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($new as $news)
                            <tr>
                                <th scope="row">{{ $news->id }}</th>
                                <td>{{ $news->title }}</td>
                                <td>
                                    <img src="{{ $news->img }}" alt="" width="150px">
                                </td>
                                <td>{!!$news->content!!}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('news.edit',['id' => $news->id]) }}" role="button">Edit</a>
                                    <a class="btn btn-danger" href="{{ route('news.delete', ['id' => $news->id]) }}"
                                        role="button">Delete</a>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>


            </ul>



        </main>
        <!-- MAIN -->
    </section>
@endsection
