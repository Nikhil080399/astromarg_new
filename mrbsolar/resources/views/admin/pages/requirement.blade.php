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
                    <h6 class="font-weight-bolder text-white mb-0">Buy Requirement</h6>
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
                    </div>
                </div>
            </div>

            <!-- table  -->
            <div class="row my-4" style="--bs-gutter-x: -0.5rem!important;">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Buy Requirement</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0 px-4">
                                <table class="table align-items-center mb-0" id="myTable5">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                S.No.</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Product</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Quantity</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Piece</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Number</th>
                                            <th class="text-secondary opacity-7">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $a = 1; ?>
                                        @foreach ($requirement as $item)
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <?php echo $a++; ?>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    {!! $item->product !!}
                                                </td>
                                                <td>
                                                    {!! $item->quantity !!}
                                                </td>
                                                <td>
                                                    {!! $item->piece !!}
                                                </td>
                                                <td>
                                                    {!! $item->number !!}
                                                </td>
                                                <td class="align-middle">
                                                    <a href="{{ route('requirement_delete', ['rquirement' => $item->id]) }}"
                                                        onclick="return confirm('Are you sure you want to delete this Inquery')">
                                                        <span class="badge badge-sm bg-gradient-danger">Delete</span>
                                                    </a>
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
        CKEDITOR.replace('points');
    </script>
@endsection
