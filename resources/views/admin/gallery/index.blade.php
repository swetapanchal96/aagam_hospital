@extends('layouts.app')

@section('title', 'Gallery List')

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

                                            <h5 class="card-title mb-0">Add Gallery </h5>

                                        </div>



                                        <div class="live-preview">

                                            <form method="POST" action="{{ route('gallery.store') }}"

                                                autocomplete="off" id="uploadForm"  enctype="multipart/form-data">

                                                @csrf



                                                <div class="modal-body">

                                                    <div class="mb-3 form-group">

                                                        <span style="color:red;">*</span>Category

                                                        <select class="form-control" name="service" required autofocus>

                                                            <option value="">Select Category</option>

                                                            @foreach($service as $v)

                                                            <option value="{{ $v->category_id  }}">{{ $v->category_name }}</option>

                                                            @endforeach

                                                        </select>

                                                    </div>

                                                    <div class="mb-3 form-group">

                                                        <span style="color:red;">*</span>Photo

                                                        <input type="file" class="form-control" name="strPhoto" id="strPhoto"

                                                             autocomplete="off" onchange="return validateFile()"

                                                            required autofocus>

                                                        @error('strPhoto')

                                                        <span class="text-danger">{{ $message }}</span>

                                                    @enderror

                                                    </div>



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

                                            <h5 class="card-title mb-0">Gallery List</h5>

                                        </div>

                                        

                                        <table id="scroll-horizontal" class="table nowrap align-middle mt-3"

                                            style="width:100%">

                                            <thead>

                                                <tr class="text-center">

                                                    <th >No</th>

                                                    <th >Category</th>

                                                    <th >Photo</th>

                                                    <th >Action</th>

                                                </tr>

                                            </thead>

                                            <tbody>

                                                <?php $i = 1; ?>

                                                @foreach ($datas as $data)

                                                    <tr class="text-center">

                                                        <td>{{ $i + $datas->perPage() * ($datas->currentPage() - 1) }}

                                                        </td>

                                                        <td>{{$data->serviceName}}</td>

                                                        <td>

                                                            <a href="{{ asset('/Gallery/').'/'.$data->strPhoto }}"

                                                                target="_blank" class="mx-1">

                                                                <img src="{{ asset('/Gallery/').'/'.$data->strPhoto }}" alt="" width="50px" height="50px">

                                                            </a>

                                                        </td>

                                                        

                                                        <td>

                                                            <div class="gap-2">

                                                                <a class="mx-1" title="Edit" href="#"

                                                                    onclick="getEditData(<?= $data->galleryId ?>)"

                                                                    data-bs-toggle="modal" data-bs-target="#showModal">

                                                                    <i class="far fa-edit"></i>

                                                                </a>





                                                                <a class="mx-1" href="#" data-bs-toggle="modal"

                                                                    title="Delete" data-bs-target="#deleteRecordModal"

                                                                    onclick="deleteData(<?= $data->galleryId  ?>);">

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

                                <h5 class="modal-title" id="exampleModalLabel">Edit Gallery</h5>

                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"

                                    id="close-modal"></button>

                            </div>

                            <form method="POST" action="{{ route('gallery.update') }}" autocomplete="off"

                                enctype="multipart/form-data">

                                @csrf

                                <input type="hidden" name="id" id="galleryid" value="">



                                <div class="modal-body">



                                    <div class="mb-3">

                                        <span style="color:red;">*</span>Category

                                        <select class="form-control" name="service" id="EditService">

                                            <option selected disabled value="">Select Category</option>



                                        </select>



                                    </div>

                                    <div class="mb-3">

                                        <span style="color:red;"></span>Photo

                                        <input type="file" id="editImage" name="photo" class="form-control"  onchange="return editvalidateFile()" accept="image/*">

                                        <input type="hidden" name="hiddenImage" id="hiddenImage"  class="form-control">

                                        <p id="error" style="color:red"></p>

                                        <img src="" width="50px" height="50px" id="editphoto">

                                        

                                        <div id="error"></div>

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

                <!--Edit Modal End -->







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

                                        action="{{ route('gallery.delete') }}">

                                        @csrf

                                        @method('DELETE')

                                        <input type="hidden" name="galleryId" id="deleteid" value="">



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

            var url = "{{ route('gallery.edit', ':id') }}";

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

                        $("#EditService").empty();



                        var jsonString = JSON.stringify(data);

                         var dataget = jQuery.parseJSON(jsonString);

                         $.each(dataget.services,function(key,value)

                        {

                            if(value.id == dataget.gallery.serviceId)

                            {

                                $('#EditService').append('<option value="' + value.category_id + '" selected>' + value.category_name + '</option>');

                            } else {

                                $('#EditService').append('<option value="' + value.category_id + '">' + value.category_name + '</option>');

                            }

                        });

                        if(dataget.gallery.strPhoto == null)

                        {

                            var imageUrl="https://www.aagamhospital.com/assets/images/noImage.png";

                        }else{



                            var imageUrl="https://www.aagamhospital.com/Gallery/"+dataget.gallery.strPhoto;

                        }

                        $('#galleryid').val(id);

                        $("#hiddenImage").val(dataget.gallery.strPhoto);

                         $('#editphoto').attr('src', imageUrl);



                    }

                });

            }

        }



          function validateFile() {

            var allowedExtension = ['jpeg', 'jpg', 'png', 'webp'];

            var fileExtension = document.getElementById('strPhoto').value.split('.').pop().toLowerCase();

            var isValidFile = false;

            var image = document.getElementById('strPhoto').value;



            for (var index in allowedExtension) {



                if (fileExtension === allowedExtension[index]) {

                    isValidFile = true;

                    break;

                }

            }

            if (image != "") {

                if (!isValidFile) {

                    alert('Allowed Extensions are : *.' + allowedExtension.join(', *.'));

                    $('#strPhoto').val("")

                }

                return isValidFile;

            }



            return true;

        }

          function editvalidateFile() {

            var allowedExtension = ['jpeg', 'jpg', 'png', 'webp'];

            var fileExtension = document.getElementById('editImage').value.split('.').pop().toLowerCase();

            var isValidFile = false;

            var image = document.getElementById('editImage').value;



            for (var index in allowedExtension) {



                if (fileExtension === allowedExtension[index]) {

                    isValidFile = true;

                    break;

                }

            }

            if (image != "") {

                if (!isValidFile) {

                    alert('Allowed Extensions are : *.' + allowedExtension.join(', *.'));

                    $('#editImage').val("")

                }

                return isValidFile;

            }



            return true;

        }



    </script>



    <script>

        function deleteData(id) {

            $("#deleteid").val(id);

        }

    </script>





@endsection

