@extends('layouts.app')
@section('title', 'Appointment Master')

@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            {{-- Alert Messages --}}
            @include('common.alert')

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="card-title mb-0">Appointment List</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive scrollbar">
                            <table class="table table-bordered table-striped fs--1 mb-0 text-center">
                                <thead class="bg-200 text-900">
                                    <tr>
                                        <th>Sr No</th>
                                        <th>Service</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Appointment Date</th>
                                        <!-- <th>Status</th> -->
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @forelse ($appointments as $index => $item)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $item->category_name ?? '-' }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td>{{ \Carbon\Carbon::parse($item->appointment_date)->format('d-m-Y') }}</td>
                                                    <!-- <td class="text-center">
                                                    <button type="button" class="btn btn-link"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#statusModal"
                                                        onclick="openStatusModal({{ $item->appointment_id }}, {{ $item->status }})">
                                                        {{ $item->status == 0 ? 'Pending' : ($item->status == 1 ? 'Approved' : 'Rejected') }}
                                                    </button>
                                                </td> -->

                                            <td>
                                                <a href="#" title="Delete"
                                                data-bs-toggle="modal"
                                                data-bs-target="#deleteRecordModal"
                                                onclick="deleteData({{ $item->appointment_id }});">
                                                <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                                                </a>
                                            
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">No appointments found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex justify-content-center mt-3">
                            {{-- Pagination (if using pagination) --}}
                            {{-- {{ $appointments->links() }} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>


<!-- Status Modal -->
<div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="statusModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
            <form action="{{ route('appointment.status') }}" method="post">
            @csrf
            <input type="hidden" name="id" id="appointment_id" value="">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Change Appointment Status</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="newStatus">Update Status:</label>
                        <select class="form-control" name="newStatus" id="newStatus" onchange="toggleRejectedComments()">
                            <option value="1">Approved</option>
                            <option value="2">Rejected</option>
                        </select>
                    </div>

                    <div class="form-group rejectedComments" id="rejectedCommentBox" style="display:none;">
                        <label for="rejectedComments">Rejected Comments:</label>
                        <textarea class="form-control" name="rejectedComments" rows="3"></textarea>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save Changes</button>
                </div>
            </div>
        </form>
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
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this record?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <a class="btn btn-danger"
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('appointment-delete-form').submit();">
                        Yes, Delete It!
                    </a>
                    <form id="appointment-delete-form" method="POST" action="{{ route('appointment.delete') }}">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="id" id="deleteid" value="">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Delete Modal End -->

@endsection

@section('scripts')

<script>
    function deleteData(id) {
    document.getElementById('deleteid').value = id;
}
</script>

<script>
    function openStatusModal(id, status) {
        document.getElementById('appointment_id').value = id;
        document.getElementById('newStatus').value = status;

        toggleRejectedComments(); // Show/hide comment box on open
    }

    function toggleRejectedComments() {
        const selected = document.getElementById('newStatus').value;
        const box = document.getElementById('rejectedCommentBox');
        box.style.display = (selected == 2) ? 'block' : 'none';
    }
</script>42
@section('scripts')
