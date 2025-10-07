@extends('layouts.app')
@section('title', 'Testimonial List')
@section('content')

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                {{-- Alert Messages --}}
                @include('common.alert')

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="d-flex justify-content-between card-header">
                                <h5 class="card-title mb-0">Testimonial List</h5>
                                <a data-bs-toggle="modal" data-bs-target="#AddModal" class="btn btn-sm btn-primary">
                                    <i data-feather="plus"></i> Add New
                                </a>
                            </div>
                            <div class="card-body">
                                <?php //echo date('ymd');
                                ?>
                                <table id="scroll-horizontal" class="table nowrap align-middle" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th width="1%">No</th>
                                            <th width="2%"> Category Name</th>
                                            <th width="2%"> Name</th>
                                            <th width="2%"> Photo</th>
                                            <th width="5%">Description</th>
                                            <th width="1%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        @foreach ($Testimonial as $testimonial)
                                            <tr>
                                                <td>{{ $i + $Testimonial->perPage() * ($Testimonial->currentPage() - 1) }}
                                                </td>
                                                <td>{{$testimonial->category_name}}</td>
                                                <td>{{ $testimonial->name }}</td>
                                                <td> @if($testimonial->photo == '')
                                                    <img src="{{ asset('assets/images/noImage.png')}}" width="50px" height="50px">
                                                    @else
                                                        <img src="{{ asset('/Testimonial/').'/'.$testimonial->photo}}" width="50px" height="50px" >
                                                    @endif
                                                </td>
                                                <td>{{ Str::limit($testimonial->description, 200, '....') }}</td>

                                                <td>
                                                    <div class="gap-2">
                                                        <a class="mx-1" title="Edit" href="#"
                                                            onclick="getEditData(<?= $testimonial->id ?>)"
                                                            data-bs-toggle="modal" data-bs-target="#showModal">
                                                            <i class="far fa-edit"></i>
                                                        </a>

                                                        <a class="" href="#" data-bs-toggle="modal"
                                                            title="Delete" data-bs-target="#deleteRecordModal"
                                                            onclick="deleteData(<?= $testimonial->id ?>);">
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
                                    {{ $Testimonial->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Add Modal Start-->
                <div class="modal fade flip" id="AddModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header bg-light p-3">
                                <h5 class="modal-title" id="exampleModalLabel">Add Testimonial</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                    id="close-modal"></button>
                            </div>
                            <form method="POST" action="{{ route('testimonial.store') }}" autocomplete="off"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="modal-body">
                                    <div class="mb-3 form-group">
                                        <label for="category" class="form-label">
                                            <span style="color:red;">*</span>Category
                                        </label>
                                        <select class="form-control" name="category" required autofocus>
                                            <option value="">Select Category</option>
                                            @foreach($categories as $v)
                                                <option value="{{ $v->category_id }}">{{ $v->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <span style="color:red;">*</span>Name
                                        <input type="text" class="form-control" name="name" placeholder="Enter Name"
                                            maxlength="100" autocomplete="off" required>
                                    </div>
                                    <div class="mt-4 mb-3">
                                        <span style="color:red;">*</span>Photo
                                        <input type="file" class="form-control" name="photo" id="strPhoto" onchange="return validateFile()" required>
                                    </div>
                                    <div class="mb-3">
                                        <span style="color:red;">*</span>Description
                                        <textarea class="form-control" name="description" cols="30" rows="10" required></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="hstack gap-2 justify-content-end">
                                        <button type="submit" class="btn btn-primary mx-2" id="add-btn">Submit</button>
                                        <button type="button" class="btn btn-primary mx-2"
                                            data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--Add Modal End -->

                <!--Edit Modal Start-->
                <div class="modal fade flip" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header bg-light p-3">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Testimonial</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                    id="close-modal"></button>
                            </div>
                            <form method="POST" action="{{ route('testimonial.update') }}" autocomplete="off"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" id="testimonialid" value="">

                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="EditCategory" class="form-label">
                                            <span style="color:red;">*</span>Category
                                        </label>
                                        <select class="form-control" name="category" id="EditCategory">
                                            <option selected disabled value="">Select Category</option>
                                            @foreach ($categories as $cat)
                                                <option value="{{ $cat->category_id }}">
                                                    {{ $cat->category_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- <div class="mb-3">
                                        <span style="color:red;">*</span>Service
                                        <select class="form-control" name="service" id="EditService">
                                            <option selected disabled value="">Select Service</option>
                                        </select>
                                    </div> -->
                                    <div class="mb-3">
                                        <span style="color:red;">*</span>Name
                                        <input type="text" class="form-control" name="name" id="Editname"
                                            placeholder="Enter Name" maxlength="100" autocomplete="off" required>
                                    </div>
                                    <div class="mb-3">
                                        <span style="color:red;"></span>Photo
                                        <input type="file" id="editImage" name="photo" class="form-control"  onchange="return editvalidateFile()" accept="image/*">
                                        <input type="hidden" name="hiddenImage" id="hiddenImage"  class="form-control">
                                        <p id="error" style="color:red"></p>
                                        <img src="" width="50px" height="50px" id="editphoto">
                                        
                                        <div id="error"></div>
                                    </div>
                                    <div class="mb-3">
                                        <span style="color:red;">*</span>Description
                                        <textarea class="form-control" name="description" id="Editdescription" cols="30" rows="10" required></textarea>
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
                                        action="{{ route('testimonial.delete') }}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" id="deleteid" value="">

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
        function getEditData(id) {
            var url = "{{ route('testimonial.edit', ':id') }}";
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
                         console.log(data);
                       $('#EditCategory').empty();
                        $.each(dataget.categories, function (key, value) {
                            if (value.category_id == dataget.testimonial.category_id) {
                                $('#EditCategory').append('<option value="' + value.category_id + '" selected>' + value.category_name + '</option>');
                            } else {
                                $('#EditCategory').append('<option value="' + value.category_id + '">' + value.category_name + '</option>');
                            }
                        });

                        
                        if(dataget.testimonial.photo == null)
                        {
                            var imageUrl="./assets/images/noImage.png";
                        }else{

                            var imageUrl="/Testimonial/"+dataget.testimonial.photo;
                        }


                        $("#Editname").val(dataget.testimonial.name);
                        $("#Editdescription").val(dataget.testimonial.description);
                        $('#testimonialid').val(id);
                        $("#hiddenImage").val(dataget.testimonial.photo);
                        $('#editphoto').attr('src', imageUrl);

                    }
                });
            }
        }
    </script>

    <script>
        function deleteData(id) {
            $("#deleteid").val(id);
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
            if (image != "") 
            {
                if (!isValidFile) {
                    alert('Allowed Extensions are : *.' + allowedExtension.join(', *.'));
                    $('#editImage').val("")
                }
                return isValidFile;
            }

            return true;
        }
    </script>

@endsection
