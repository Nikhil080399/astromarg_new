@extends('admin.index')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <h6 class="mb-0 text-uppercase">Blog</h6>
            <hr />


            <!-- add product -->
            <div class="row my-4">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            @if (session('success'))
                                <div class="alert alert-success text-white" id="success-message">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger text-white" id="error-message">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <h6>Blog</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <form class="px-5" action="{{ route('blog.update', ['id' => $blog->id]) }}" method="POST"
                                enctype="multipart/form-data">

                                @csrf
                                <div class="d-flex">
                                    <div class="mb-3 mx-3 w-50">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" class="form-control" name="image" id="image"
                                            value="{{ $blog->image }}">
                                        <img src="{{ asset($blog->image) }}" class="pt-2" alt="..."
                                            style="width: 100px!important;height:100px;">
                                    </div>
                                    <div class="mb-3 mx-3 w-50">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control" name="title" id="title"
                                            value="{{ $blog->title }}">
                                    </div>
                                    <div class="mb-3 mx-3 w-50">
                                        <label for="date" class="form-label">Date</label>
                                        <input type="text" class="form-control" name="date" id="date"
                                            value="{{ $blog->date }}">
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="mb-3 mx-3 w-100">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea style="max-width: 100%" type="text" class="form-control" name="description" id="description" cols="120"
                                            rows="4" required>{{ $blog->description }}</textarea>
                                    </div>
                                </div>
                                <div class="pe-7 text-end">
                                    <button type="submit" class="btn btn-primary me-2">Update</button>
                                    <a href="{{ Route('blog') }}">
                                        <button type="button" class="btn btn-dark">Back</button>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>


    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('discription');
    </script>

@endsection
