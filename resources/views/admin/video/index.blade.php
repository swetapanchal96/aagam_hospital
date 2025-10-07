@extends('layouts.app')

@section('title', 'Banner List')

@section('content')



    <div class="main-content">

        <div class="page-content">

            <div class="container-fluid">



                {{-- Alert Messages --}}

                @include('common.alert')



                <div class="row">

                    <div class="col-lg-12">



                        <div class="card">



                            <div class="card-body">

                                <div class="row">



                                    <div class="col-lg-5">



                                        <div class="d-flex justify-content-between card-header">

                                            <h5 class="card-title mb-0">Add Video </h5>

                                        </div>



                                        <div class="live-preview">

                                          

                                            <form action="{{ route('video.store') }}" id="uploadVideoForm"  method="POST" enctype="multipart/form-data">

                                                @csrf

                                                <div class="mb-3 ">

                                                        <span style="color:red;">*</span>Category

                                                        <select class="form-control" name="category_id" required autofocus>
                                                            <option value="">Select Category</option>
                                                            @foreach($categories as $v)
                                                                <option value="{{ $v->category_id }}">{{ $v->category_name }}</option>
                                                            @endforeach
                                                        </select>


                                                    </div>



                                                <div class="mb-3">

                                                        <span style="color:red;">*</span>Video

                                                        <input type="text" name="video"  id="videoFile" class="form-control" autocomplete="off"  placeholder="Enter URL" required autofocus >

                                                        @error('video')

                                                            <span class="text-danger">{{ $message }}</span>

                                                        @enderror

                                                        <p style="color: red;" class="videoErr"></p> 

                                                    </div>



                                                <div class="modal-footer">

                                                    <div class="hstack gap-2 justify-content-end">

                                                        <button type="submit" class="btn btn-primary mx-2"

                                                            id="add-btn">Submit</button>

                                                    </div>

                                                </div>

                                            </form>

                                        </div>

                                    </div>



                                    <div class="col-lg-1">

                                    </div>



                                    <div class="col-lg-5">

                                        <div class="d-flex justify-content-between card-header">

                                            <h5 class="card-title mb-0">Video List</h5>

                                        </div>

                                        

                                        <table id="scroll-horizontal" class="table nowrap align-middle mt-3"

                                            style="width:100%">

                                            <thead>

                                                <tr class="text-center">

                                                    <th >No</th>

                                                    <th >Category</th>

                                                    <th >Video</th>

                                                    <th >Action</th>

                                                </tr>

                                            </thead>

                                            <tbody>

                                                <?php $i = 1; ?>

                                                @foreach ($datas as $data)

                                                    <tr class="text-center">

                                                        <td>{{ $i + $datas->perPage() * ($datas->currentPage() - 1) }}

                                                        </td>

                                                         <td>{{ $data->categoryName }}</td>



                                                         <td>{{$data->video}}</td>

                                                        <td>

                                                            <div class="gap-2">

                                                                <a class="mx-1" title="Edit" href="#"

                                                                    onclick="getEditData(<?= $data->videoId ?>)"

                                                                    data-bs-toggle="modal" data-bs-target="#showModal">

                                                                    <i class="far fa-edit"></i>

                                                                </a>



                                                                <a class="mx-1" href="#" data-bs-toggle="modal"

                                                                    title="Delete" data-bs-target="#deleteRecordModal"

                                                                    onclick="deleteData(<?= $data->videoId ?>);">

                                                                    <i class="fa fa-trash" aria-hidden="true"></i>

                                                                </a>



                                                            </div>

                                                        </td>

                                                    </tr>

                                                    <?php $i++; ?>

                                                @endforeach

                                            </tbody>

                                        </table>

                                        <div class="d-flex justify-content-center mt-3">

                                            {{ $datas->links() }}

                                        </div>

                                    </div>



                                </div>

                            </div>



                        </div>





                    </div>

                </div>



                 <!--Edit Modal Start-->

                <div class="modal fade flip" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel"

                    aria-hidden="true">

                    <div class="modal-dialog">

                        <div class="modal-content">

                            <div class="modal-header bg-light p-3">

                                <h5 class="modal-title" id="exampleModalLabel">Edit Video</h5>

                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"

                                    id="close-modal"></button>

                            </div>

                            <form method="POST" action="{{ route('video.update') }}" autocomplete="off"

                                enctype="multipart/form-data">

                                @csrf

                                <input type="hidden" name="id" id="galleryid" value="">



                                <div class="modal-body">



                                    <div class="mb-3">

                                        <span style="color:red;">*</span>Category

                                        <select class="form-control" name="category_id" id="EditCategory" required>
                                            <option selected disabled value="">Select Category</option>
                                        </select>




                                    </div>

                                    <div class="mb-3">

                                        <span style="color:red;"></span>Video

                                        <input type="text" id="hiddenVideo" name="video" class="form-control" required>



                                         @error('video')

                                            <span class="text-danger">{{ $message }}</span>

                                        @enderror



                                    </div>

                                </div>

                                <div class="modal-footer">

                                    <div class="hstack gap-2 justify-content-end">

                                        <button type="submit" class="btn btn-primary mx-2"

                                            id="add-btn">Update</button>

                                        <button type="button" class="btn btn-primary mx-2"

                                            data-bs-dismiss="modal">Cancel</button>

                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>



                



                <!--Delete Modal Start -->

                <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">

                    <div class="modal-dialog modal-dialog-centered">

                        <div class="modal-content">

                            <div class="modal-header">

                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"

                                    id="btn-close"></button>

                            </div>

                            <div class="modal-body">

                                <div class="mt-2 text-center">

                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"

                                        colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px">

                                    </lord-icon>

                                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">

                                        <h4>Are you Sure ?</h4>

                                        <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this Record

                                            ?</p>

                                    </div>

                                </div>

                                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">

                                    <a class="btn btn-primary mx-2" href="{{ route('logout') }}"

                                        onclick="event.preventDefault(); document.getElementById('user-delete-form').submit();">

                                        Yes,

                                        Delete It!

                                    </a>

                                    <button type="button" class="btn w-sm btn-primary mx-2"

                                        data-bs-dismiss="modal">Close</button>

                                    <form id="user-delete-form" method="POST"

                                        action="{{ route('video.delete') }}">

                                        @csrf

                                        @method('DELETE')

                                        <input type="hidden" name="videoId" id="deleteid" value="">



                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!--Delete modal End -->



            </div>

        </div>

    </div>

@endsection



@section('scripts')

    <script>

         

        function getEditData(id) 

        {

            var url = "{{ route('video.edit', ':id') }}";

            url = url.replace(":id", id);

            if (id) {

                $.ajax({

                    url: url,

                    type: 'GET',

                    dataType: 'json',

                    data: {

                        id,

                        id

                    },

                    success: function(data) 

                    {

                        $("#EditCategory").empty();

                            var jsonString = JSON.stringify(data);
                            var dataget = jQuery.parseJSON(jsonString);

                            $.each(dataget.categories, function(key, value) {
                                if (value.category_id == dataget.video.category_id) {
                                    $('#EditCategory').append('<option value="' + value.category_id + '" selected>' + value.category_name + '</option>');
                                } else {
                                    $('#EditCategory').append('<option value="' + value.category_id + '">' + value.category_name + '</option>');
                                }
                            });

                            $('#galleryid').val(id);
                            $("#hiddenVideo").val(dataget.video.video);





                    }

                });

            }

        }

    </script>



    <script>

        function deleteData(id) {

            $("#deleteid").val(id);

        }

    </script>





@endsection

