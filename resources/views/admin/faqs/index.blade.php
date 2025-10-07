@extends('layouts.app')

@section('title', 'FAQs for ' . $service->serviceName)

@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            @include('common.alert')

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <!-- Card Header -->
                       <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">FAQs for {{ $service->serviceName }}</h5>
                            <div class="d-flex gap-2">
                                <a href="{{ route('admin.services.faqs.create', $service->serviceId) }}" class="btn btn-primary">
                                    <i class="fas fa-plus"></i> Add FAQ
                                </a>
                                <a href="{{ route('services.index') }}" class="btn btn-primary">
                                    <i class="fas fa-arrow-left"></i> Back
                                </a>
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Sr No</th>
                                            <th>Question</th>
                                            <th>Answer (Preview)</th>
                                            <th style="width: 200px;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($faqs as $faq)
                                            <tr>
                                                <td>{{ $loop->iteration + ($faqs->firstItem() - 1) }}</td>
                                                <td>{{ $faq->question }}</td>
                                                <td>{{ \Illuminate\Support\Str::limit(strip_tags($faq->answer), 100, '...') }}</td>
                                                <td>
                                                    <a href="{{ route('admin.services.faqs.edit', $faq->faq_id) }}" class="btn btn-sm btn-warning">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('admin.services.faqs.destroy', $faq->faq_id) }}" method="POST" style="display:inline;">
                                                        @csrf @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this FAQ?')">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="text-center text-muted">No FAQs found.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-end mt-3">
                                {{ $faqs->links() }}
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
