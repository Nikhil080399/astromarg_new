@extends('admin.index1')

@section('content')
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
            data-scroll="false">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
                    </ol>
                    <h6 class="font-weight-bolder text-white mb-0">Solar Pump Products</h6>
                </nav>
                {{-- half-nav  --}}
                @include('admin.half_nav')
                {{-- half-nav  --}}
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">


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

                            <h6>Solar Pump Products</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <form class="px-5" action="solar_pump_products" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="d-flex">
                                    <div class="mb-3 mx-3 w-50">
                                        <label for="title" class="form-label">Product Name</label>
                                        <input type="text" class="form-control" name="title" id="title">
                                    </div>

                                    <div class="mb-3 mx-3 w-50">
                                        <label for="type" class="form-label">Product Type</label>
                                        {{-- <input type="text" class="form-control" name="type" id="type"> --}}
                                        <select class="form-select" id="ptype" name="type"
                                            aria-label="Default select example" required>
                                            <option value="Ac">Ac</option>
                                            <option value="Dc">Dc</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="mb-3 mx-3 w-50">
                                        <label for="card_image" class="form-label">Card Image</label>
                                        <input type="file" class="form-control" name="card_image" id="card_image">
                                    </div>

                                    <div class="mb-3 mx-3 w-50">
                                        <label for="banner_image" class="form-label">Banner Image</label>
                                        <input type="file" class="form-control" name="banner_image" id="banner_image">
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="mb-3 mx-3 w-50">
                                        <label for="solar_module" class="form-label">Solar Module</label>
                                        <input type="number" class="form-control" name="solar_module" id="solar_module">
                                    </div>

                                    <div class="mb-3 mx-3 w-50">
                                        <label for="dynamic_pump_head" class="form-label">Dynamic Pump Head</label>
                                        <input type="number" class="form-control" name="dynamic_pump_head"
                                            id="dynamic_pump_head">
                                    </div>

                                    <div class="mb-3 mx-3 w-50">
                                        <label for="water_discharge" class="form-label">Water Discharge</label>
                                        <input type="number" class="form-control" name="water_discharge"
                                            id="water_discharge">
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <div class="mb-3 mx-3 w-100">
                                        <label for="features" class="form-label">Features</label>
                                        <textarea style="max-width: 100%" type="text" class="form-control" name="features" id="features" cols="120"
                                            rows="4" required></textarea>
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <div class="mb-3 mx-3 w-100">
                                        <label for="components" class="form-label">Components</label>
                                        <textarea style="max-width: 100%" type="text" class="form-control" name="components" id="components" cols="120"
                                            rows="4" required></textarea>
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <div class="mb-3 mx-3 w-100">
                                        <label for="benefits" class="form-label">Benefits</label>
                                        <textarea style="max-width: 100%" type="text" class="form-control" name="benefits" id="benefits"
                                            cols="120" rows="4" required></textarea>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary mx-auto w-100">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- table  -->
            <div class="row my-4" style="--bs-gutter-x: -0.5rem!important;">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Solar Pump Products</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0 px-4">
                                <table class="table align-items-center mb-0" id="myTable5">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                S.No.</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Name</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Type</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Module</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Dynamic Pump Head</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Water Discharge</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Features</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Components</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Benefits</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Card Image</th>

                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Banner Image</th>

                                            <th class="text-secondary opacity-7">Edit</th>
                                            <th class="text-secondary opacity-7">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $a = 1; ?>
                                        @foreach ($pumps as $item)
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <?php echo $a++; ?>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    {!! $item->title !!}
                                                </td>
                                                <td>
                                                    {!! $item->type !!}
                                                </td>
                                                <td>
                                                    {!! $item->solar_module !!}
                                                </td>
                                                <td>
                                                    {!! $item->dynamic_pump_head !!}
                                                </td>
                                                <td>
                                                    {!! $item->water_discharge !!}
                                                </td>
                                                <td>
                                                    {!! $item->features !!}
                                                </td>
                                                <td>
                                                    {!! $item->components !!}
                                                </td>
                                                <td>
                                                    {!! $item->benefits !!}
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <img src="{{ asset('storage/images/' . $item->card_image) }}"
                                                        width="100px"alt="photo">
                                                </td>

                                                <td class="align-middle text-center text-sm">
                                                    <img src="{{ asset('storage/images/' . $item->banner_image) }}"
                                                        width="100px"alt="photo">
                                                </td>

                                                <td class="align-middle">
                                                    <a href="{{ url('solarPump/edit/' . $item->id) }}" <span
                                                        class="badge badge-sm bg-gradient-info">Edit</span></a>
                                                </td>

                                                <td class="align-middle">
                                                    <a href="{{ url('solarPump/delete/' . $item->id) }}"
                                                        onclick="return confirm('Are you sure you want to delete this call Product?')"><span
                                                            class="badge badge-sm bg-gradient-danger">Delete</span></a>
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
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable5').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Set the duration (in milliseconds) for the success message to be displayed
            var duration = 5000; // 5 seconds

            // Fade out the success message after the specified duration
            $('#success-message,#error-message').delay(duration).fadeOut();
        });
    </script>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('features');
        CKEDITOR.replace('components');
        CKEDITOR.replace('benefits');
    </script>
@endsection
