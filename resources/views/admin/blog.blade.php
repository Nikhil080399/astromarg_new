@extends('admin.index')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <h6 class="mb-0 text-uppercase">Blog</h6>
            <hr />

            <div class="card">
                <div class="card-body">
                    <div class="p-4 border rounded">
                        <form class="row g-3" method="POST" action="store_blog" enctype="multipart/form-data">
                            @csrf
                            <div class="col-6">
                                <label for="" class="form-label">Image</label>

                                <input type="file" class="form-control" id="inputGroupFile01" name="image">
                            </div>

                            <div class="col-6">
                                <label for="" class="form-label">Blog Title</label>
                                <input type="text" class="form-control" id="" value="" name="title">
                            </div>

                            <div class="col-12">
                                <label for="discription" class="form-label">Description</label>
                                <textarea style="max-width: 100%" type="text" class="form-control" name="description" id="discription" cols="120"
                                    rows="4" required></textarea>
                            </div>

                            <div class="col">
                                <label for="" class="form-label">Date</label>
                               <input type="date" name="date">
                            </div>

                       

                            <div class="col">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
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
                                    Image</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Title</th>
                               
                                <th
                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Discription
                                </th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Date
                                </th>

                                <th class="text-center text-secondary opacity-7">Update</th>
                                <th class="text-center text-secondary opacity-7">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $a = 1; ?>
                            @foreach ($blog as $item)
                                <tr class="text-center">
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <?php echo $a++; ?>
                                            </div>
                                        </div>
                                    </td>
                                    <td >
                                        <img src="{{ asset($item->image) }}"
                                        width="100px"alt="photo">
                                    </td>
                                    
                                    <td>
                                        <div>
                                           <p>{{$item->title}}</p>
                                        </div>
                                    </td>

                                    <td  style="max-width: 100px;overflow-x: auto;">
                                        <div>
                                            <p>{{$item->description}}</p>

                                        </div>
                                    </td>

                                    <td>
                                        <div>
                                           <p>{{$item->date}}</p>
                                        </div>
                                    </td>
                                    
                                 
                                  
                                    <td class="align-middle">
                                        <a href="{{ url('Blog/edit/' . $item->id) }}"> <span
                                            class="btn btn-success">Update</span></a>
                                    </td>

                                    <td class="align-middle">
                                        <a href="{{ url('Blog/delete/' . $item->id) }}"
                                            onclick="return confirm('Are you sure you want to delete this Blog?')"><span
                                                class="btn btn-danger">Delete</span></a>
                                    </td>

                                    
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
</script>
@endsection
