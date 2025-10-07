@extends('layouts.app')
@section('title', 'FAQ List')
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
                                <h5 class="card-title mb-0">FAQ List</h5>
                                <a data-bs-toggle="modal" data-bs-target="#AddModal" class="btn btn-sm btn-primary">
                                    <i data-feather="plus"></i> Add New
                                </a>
                            </div>
                            <div class="card-body">
                                <table id="scroll-horizontal" class="table nowrap align-middle" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th width="10%">No</th>
                                            <th width="10%"> Service Name</th>
                                            <th width="20%">Question</th>
                                            <th width="30%">Answer</th>
                                            <th width="10%">Created Date</th>
                                            <th width="10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        @foreach ($Faq as $faq)
                                            <tr>
                                                <td class="text-center">{{ $i + $Faq->perPage() * ($Faq->currentPage() - 1) }}
                                                </td>
                                                <td>{{$faq->serviceName}}</td>
                                                <td>{{ Str::limit($faq->question, 50, '....') }}</td>
                                                <td>{{ Str::limit($faq->answer, 80, '....') }}</td>
                                                <td class="text-center">{{ date('d-m-Y',strtotime($faq->created_at)) }}</td>

                                                <td class="text-center">
                                                    <div class="gap-2">
                                                         <a class="mx-1"  href="#" data-bs-toggle="modal" data-bs-target="#viewModal_{{$faq->faqid}}" title="View"><i class="fa fa-eye" aria-hidden="true"></i>
                                                            </a>
                                                        <a class="mx-1" title="Edit" href="#"
                                                            onclick="getEditData(<?= $faq->faqid ?>)" data-bs-toggle="modal"
                                                            data-bs-target="#showModal">
                                                            <i class="far fa-edit"></i>
                                                        </a>

                                                        <a class="" href="#" data-bs-toggle="modal"
                                                            title="Delete" data-bs-target="#deleteRecordModal"
                                                            onclick="deleteData(<?= $faq->faqid ?>);">
                                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                                        </a>

                                                    </div>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                    <div class="modal fade flip" id="viewModal_{{$faq->faqid}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header bg-light p-3">
                                                    <h5 class="modal-title" id="exampleModalLabel">{{ $faq->question }}</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                                        id="close-modal"></button>
                                                </div>

                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <p >{{$faq->answer}}</p>
                                                            
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center mt-3">
                                    {{ $Faq->links() }}
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
                                <h5 class="modal-title" id="exampleModalLabel">Add FAQ</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                    id="close-modal"></button>
                            </div>
                            <form method="POST" action="{{ route('faq.store') }}" autocomplete="off"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="modal-body">
                                    <div class="mb-3 form-group">
                                        <span style="color:red;">*</span>Service
                                        <select class="form-control" name="service" required autofocus>
                                            <option value="">Select Service</option>
                                            @foreach($service as $v)
                                            <option value="{{ $v->id }}">{{ $v->serviceName }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <span style="color:red;">*</span>Question
                                        <input type="text" class="form-control" name="question" placeholder="Enter Question" maxlength="100" 
                                            autocomplete="off" required>
                                    </div>

                                    <div class="mb-3">
                                        <span style="color:red;">*</span>Answer
                                        <textarea class="form-control" name="answer" cols="30" rows="10" placeholder="Enter Answer" required></textarea>
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
                                <h5 class="modal-title" id="exampleModalLabel">Edit FAQ</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                    id="close-modal"></button>
                            </div>
                            <form method="POST" action="{{ route('faq.update') }}" autocomplete="off"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="faqid" id="faqid" value="">

                                <div class="modal-body">
                                    <div class="mb-3">
                                        <span style="color:red;">*</span>Service
                                        <select class="form-control" name="service" id="EditService">
                                            <option selected disabled value="">Select Service</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <span style="color:red;">*</span>Question
                                        <input type="text" class="form-control" name="question" id="Editquestion"
                                            placeholder="Enter Question" maxlength="100" autocomplete="off" required>
                                    </div>

                                    <div class="mb-3">
                                        <span style="color:red;">*</span>Answer
                                        <textarea class="form-control" name="answer" id="Editanswer" placeholder="Enter Answer" cols="30" rows="10" required></textarea>
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
                                    <form id="user-delete-form" method="POST" action="{{ route('faq.delete') }}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="faqid" id="deleteid" value="">

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
            var url = "{{ route('faq.edit', ':id') }}";
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
                    success: function(data) {
                        // $("#Editquestion").val(obj.question);
                        // $("#Editanswer").val(obj.answer);
                        // $('#faqid').val(id);
                        
                        
                        //new code start
                        var jsonString = JSON.stringify(data);
                         var dataget = jQuery.parseJSON(jsonString);
                         console.log(dataget.services);

                         $.each(dataget.services,function(key,value)
                        {
                            if(value.id == dataget.faq.serviceId)
                            {
                                $('#EditService').append('<option value="' + value.id + '" selected>' + value.serviceName + '</option>');
                            } else {
                                $('#EditService').append('<option value="' + value.id + '">' + value.serviceName + '</option>');
                            }
                        });
                        
                        $("#Editquestion").val(dataget.faq.question);
                        $("#Editanswer").val(dataget.faq.answer);
                        $('#faqid').val(id);


                        //new code end
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
