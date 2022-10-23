@extends('layout.index')
@section('title')
    <title>Demo | Edit</title>
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
                    <li><i class='bx bx-chevron-right' ></i></li>
                    <li>
                        <a class="active" href="#">Edit</a>
                    </li>
                </ul>
            </div>
            <a href="#" class="btn-download">
                <span class="text">List</span>
            </a>
        </div>

        <ul class="box-info">

                <form method="POST" action="{{ route('news.update',['id' => $dataEdit->id]) }}" enctype="multipart/form-data">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{session('success')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    @endif
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tiêu đề</label>
                      <input type="text"
                      class="form-control "
                       name="title"
                       value="{{ $dataEdit->title }}"
                       placeholder="Nhập tiêu đề ... ">
                      @error('title')
                      <span class="text-danger">{{ $message }}</span>

                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Nội dung</label>
                        <textarea
                        class="form-control @error('content') is-invalid @enderror"
                        name="content" id="contents" rows="3">
                        {{ $dataEdit->content }}
                    </textarea>
                        @error('content')
                      <span class="text-danger">{{ $message }}</span>

                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Ảnh</label>
                        <input type="file" class="form-control-file @error('img') is-invalid @enderror" name="img" >

                        @error('img')
                      <span class="text-danger">{{ $message }}</span>

                        @enderror
                        <img src="{{ $dataEdit->img }}" alt="" width="150px" style="margin: 10px">

                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                  </form>


        </ul>



    </main>
    <!-- MAIN -->
</section>
@endsection
@section('js')
    <script>CKEDITOR.replace('contents');</script>
@endsection
