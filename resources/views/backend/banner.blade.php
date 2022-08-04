@extends('layouts.base')
@section('content')
<div id="data_add" class="client_added">
    <form action="{{route('admin.addBanner')}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="added_header mb-2">
                <h4>Banner Add</h1>
                <i onclick="addData()" class="fas fa-times pointer"></i>
            </div>
            <div class="single_input mb-1">
                <label for="banner_name" class="mb-3">Banner Name</label>
                <input class="form-control" type="text" name="banner_name" placeholder="Enter Banner name">
            </div>
            <div class="single_input mb-1">
                <label for="banner" class="mb-3">Banner Name</label>
                <input class="form-control" type="file" name="banner">
            </div>

            <div class="row single_input d-flex align-items-center justify-content-between">
                <button class="btn btn-success">Submit</button>
                {{-- <button class="btn btn-danger" onclick="addData()">Cancel</button> --}}
            </div>
    </form>
</div>
<div class="table_data">
    <div class="d-flex align-items-center justify-content-between mb-3">
        <h4 class="mb-0 ">Banner</h4>
        <div class="d-flex align-items-center">
            <button class="me-1"><i class="fa fa-upload me-1"></i> Import Banner</button>
        <button onclick="addData()"><i class="fa me-1 fa-user-plus"></i> Add Banner</button>
        </div>
    </div>
    <div class="d-flex align-items-center justify-content-between mb-3">
        <select class="select" name="" id="">
            <option value="10">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
        </select>
        <div class="search">
            <input placeholder="Search" type="text" name="" id="">
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-hover table-borderless text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Banner</th>
                    <th>Action</th>
                </tr>
            </thead>
                <tbody>
                    @foreach ($banner as $key=>$banners)
                    <tr>
                        <td>1</td>
                        <td>{{$banners->banner_name}}</td>
                        <td>
                            <div class="payment_profile">
                                <img src="{{asset('/uploads/banner_image/'.$banners->banner)}}" alt="">
                            </div>
                        </td>
                        <td>
                            <div class="action">
                                {{-- <i onclick="getAllData({{ $banners->id }})" data-bs-toggle="modal" href="#editBanner" role="button" class="fa fa-pencil"></i> --}}
                                <i onclick="getAllData({{ $banners->id }})" class="fa fa-pencil"></i>
                            <i onclick="deleteAlert()" class="fa fa-times"></i>
                            </div>
                        </td>
                    </tr>

                     {{-- Banner Edit Modal Start --}}
                     <div class="modal fade" id="editBanner" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalToggleLabel">Edit Category</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                             <form method="post" action="{{route('admin.updateBanner', $banners->id)}}" enctype="multipart/form-data">
                              @csrf
                                  <input type="hidden" id="banner_id" name="banner_id">

                                  <div class="single_input">
                                          <label for="banner_name">Banner Name</label>
                                          <input class="form-control" type="text" name="banner_name" id="banner_name" placeholder="Enter banner name">
                                    </div>

                                    <div class="single_input">
                                        <label for="banner">Banner Image</label>
                                        <input class="form-control" type="file" name="banner" id="banner">
                                  </div>
                                </div>


                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-success">Submit</button>
                            </div>

                            </form>

                          </div>
                        </div>
                  </div>
                  {{-- Banner Edit Modal End --}}

                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="9">
                            <div class="d-flex justify-content-between">
                                <div class="pagination">
                                    <a class="disabled" href="#"><i class="fa fa-angle-left"></i></a>
                                    <a class="active" href="#">1</a>
                                    <a href="#">2</a>
                                    <a href="#">3</a>
                                    <a href="#">4</a>
                                    <a href="#">5</a>
                                    <a href="#"><i class="fa fa-angle-right"></i></a>
                                </div>
                                <div class="total me-3">
                                    <p>Total: <span>5</span></p>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tfoot>
        </table>
    </div>
</div>
@endsection
@section('footer.js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    function getAllData(id){
        var bannerId = id;
        // alert(bannerId);
        $('#editBanner').modal('show');
        if(bannerId){
            $.ajax({
                type: 'get',
                url: "/banner-edit/" + bannerId ,

                success: function (response) {
                    // console.log(response);
                    $("#banner_name").val(response.banners.banner_name);
                    $("#banner").val(response.banners.banner);
                }
            });
        }

    }
</script>
@endsection


