@extends('admin.index')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <h6 class="mb-0 text-uppercase">Video</h6>
            <hr />

            <div class="card">
                <div class="card-body">
                    <div class="p-4 border rounded">
                        <form class="row g-3" method="POST" action="insert_video" enctype="multipart/form-data">
                            @csrf
                            <div class="col-6">
                                <label for="video" class="form-label">YouTube Video Link</label>
                                <input type="text" class="form-control" name="video" id="video">
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary mx-auto ms-3">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

              <!-- table  -->
              <div class="row my-4" style="--bs-gutter-x: -0.5rem!important;">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Video's</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0 px-4">
                                <table class="table align-items-center mb-0" id="myTable5">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                S.No.</th>
                                            <th
                                                class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Video</th>
                                            <th class="text-secondary opacity-7">Update</th>
                                            <th class="text-secondary opacity-7">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $a = 1; ?>
                                        @foreach ($video as $item)
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <?php echo $a++; ?>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <div class="embed-responsive embed-responsive-16by9">
                                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $item->video }}"
                                                            allowfullscreen></iframe>
                                                    </div>
                                                </td>

                                                <td class="align-middle">
                                                    <a href="{{ url('video/edit/' . $item->id) }}">
                                                        <span class="btn btn-success">Update</span></a>
                                                </td>

                                                <td class="align-middle">
                                                    <a href="{{ url('video/delete/' . $item->id) }}"
                                                        onclick="return confirm('Are you sure you want to delete this video?')">
                                                        <span class="btn btn-danger">Delete</span></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end table  -->




        </div>
    </div>
@endsection
