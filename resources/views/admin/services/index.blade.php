@extends('layouts.app')

@section('title', 'Service Master')

@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            @include('common.alert') {{-- Success/Error messages --}}

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <!-- Card Header -->
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Service Master</h5>
                            <a href="{{ route('services.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Add Service
                            </a>
                        </div>

                        <!-- Card Body -->
                        <div class="card-body">
                            <!-- Search -->
                            <form method="GET" action="{{ route('services.index') }}" class="mb-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="text" name="search" class="form-control" placeholder="Search by Service Name"
                                            value="{{ request('search') }}">
                                    </div>
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </div>
                            </form>

                            <!-- Services Table -->
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th style="width: 50px;">Sr No</th>
                                            <th>Service Name</th>
                                            <th>Category</th>
                                            <th>Image</th>
                                            <th style="width: 220px;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($services as $service)
                                            <tr>
                                                <td>{{ $loop->iteration + ($services->firstItem() - 1) }}</td>
                                                <td>{{ $service->serviceName }}</td>
                                                <td>{{ $service->category->category_name ?? 'N/A' }}</td>
                                                <td>                                                    
                                                    <img src="{{ !empty($service->serviceImage) 
                                                        ? asset('Services/' . $service->serviceImage) 
                                                        : asset('assets/images/noImage.png') }}" 
                                                        alt="Service Image" width="80" height="80" class="img-thumbnail">

                                                
                                                </td>
                                                <td>
                                                    <a href="{{ route('services.edit', $service->serviceId) }}" class="btn btn-sm btn-warning">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="{{ route('admin.services.faqs.index', $service->serviceId) }}" class="btn btn-sm btn-info">
                                                        <i class="fas fa-question-circle"></i> FAQs
                                                    </a>
                                                    <form action="{{ route('services.destroy', $service->serviceId) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this service?')">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center text-muted">No services found.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>

                            <!-- Pagination -->
                            <div class="d-flex justify-content-end mt-3">
                                {{ $services->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- container-fluid -->
    </div> <!-- page-content -->
</div>
@endsection
