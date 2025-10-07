@extends('layouts.app')

@section('title', isset($faq) ? 'Edit FAQ' : 'Add FAQ')

@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            @include('common.alert')

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <!-- Card Header -->
                        <div class="card-header">
                            <h5 class="card-title mb-0">{{ isset($faq) ? 'Edit FAQ for ' . $service->serviceName : 'Add FAQ for ' . $service->serviceName }}</h5>
                        </div>

                        <!-- Card Body -->
                        <div class="card-body">
                            <form action="{{ isset($faq) ? route('admin.services.faqs.update', $faq->faq_id) : route('admin.services.faqs.store', $service->serviceId) }}" 
                                  method="POST">
                                @csrf
                                @if(isset($faq))
                                    @method('PUT')
                                @endif

                                <!-- Question -->
                                <div class="mb-3">
                                    <label for="question" class="form-label">Question <span class="text-danger">*</span></label>
                                    <input type="text" name="question" id="question"
                                           class="form-control @error('question') is-invalid @enderror"
                                           value="{{ old('question', $faq->question ?? '') }}" required>
                                    @error('question')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Answer -->
                                <div class="mb-3">
                                    <label for="answer" class="form-label">Answer <span class="text-danger">*</span></label>
                                    <textarea name="answer" id="answer" rows="5"
                                              class="form-control @error('answer') is-invalid @enderror" required>{{ old('answer', $faq->answer ?? '') }}</textarea>
                                    @error('answer')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>


                                <!-- Buttons -->
                                <div class="mt-4">
                                    <button type="submit" class="btn btn-success">
                                        {{ isset($faq) ? 'Update' : 'Save' }}
                                    </button>
                                    @if(!isset($faq))
                                    <button type="reset" class="btn btn-secondary">Clear</button>
                                    @else
                                    <a href="{{ route('admin.services.faqs.index', $service->serviceId) }}" class="btn btn-danger">Cancel</a>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('answer', {
        height: 200,
        removeButtons: 'PasteFromWord'
    });
</script>
@endsection

