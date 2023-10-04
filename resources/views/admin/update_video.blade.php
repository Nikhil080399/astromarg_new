@extends('admin.index')

@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <h6 class="mb-0 text-uppercase">Blog</h6>
        <hr />

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

                        <h6>Video Gallery</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <form class="px-5" action="{{ route('video.update', ['id' => $video->id]) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="d-flex">
                                <div class="mb-3 mx-3 w-50">
                                    <label for="video" class="form-label">Video</label>
                                    <input type="text" class="form-control" name="video" id="video"
                                        value="{{ $video->video }}">
                                </div>
                            </div>
                            <div class="pe-7 text-end">
                                <button type="submit" class="btn btn-primary me-2">Update</button>
                                <a href="{{ Route('video') }}">
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


@endsection
