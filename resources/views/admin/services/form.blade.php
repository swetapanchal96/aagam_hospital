@extends('layouts.app')

@section('title', isset($service) ? 'Edit Service' : 'Add Service')

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
                            <h5 class="card-title mb-0">{{ isset($service) ? 'Edit Service' : 'Add New Service' }}</h5>
                        </div>

                        <!-- Card Body -->
                        <div class="card-body">
                            <form action="{{ isset($service) ? route('services.update', $service->serviceId) : route('services.store') }}" 
                                  method="POST" enctype="multipart/form-data">
                                @csrf
                                @if(isset($service))
                                    @method('PUT')
                                @endif

                                <div class="row">
                                    <!-- Service Name -->
                                    <div class="col-md-6 mb-3">
                                        <label for="serviceName" class="form-label">Service Name <span class="text-danger">*</span></label>
                                        <input type="text" name="serviceName" id="serviceName"
                                               class="form-control @error('serviceName') is-invalid @enderror"
                                               value="{{ old('serviceName', $service->serviceName ?? '') }}" required>
                                        @error('serviceName')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Category -->
                                    <div class="col-md-6 mb-3">
                                        <label for="category_id" class="form-label">Category <span class="text-danger">*</span></label>
                                        <select name="category_id" id="category_id"
                                                class="form-control @error('category_id') is-invalid @enderror" required>
                                            <option value="">-- Select Category --</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->category_id }}"
                                                    {{ old('category_id', $service->category_id ?? '') == $category->category_id ? 'selected' : '' }}>
                                                    {{ $category->category_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Meta Title -->
                                    <div class="col-md-6 mb-3">
                                        <label for="metaTitle" class="form-label">Meta Title <span class="text-danger">*</span></label>
                                        <input type="text" name="metaTitle" id="metaTitle"
                                               class="form-control @error('metaTitle') is-invalid @enderror"
                                               value="{{ old('metaTitle', $service->metaTitle ?? '') }}" required>
                                        @error('metaTitle')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Meta Keyword -->
                                    <div class="col-md-6 mb-3">
                                        <label for="metaKeyword" class="form-label">Meta Keywords</label>
                                        <input type="text" name="metaKeyword" id="metaKeyword"
                                               class="form-control @error('metaKeyword') is-invalid @enderror"
                                               value="{{ old('metaKeyword', $service->metaKeyword ?? '') }}">
                                        @error('metaKeyword')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Meta Description -->
                                    <div class="col-md-12 mb-3">
                                        <label for="metaDescription" class="form-label">Meta Description</label>
                                        <textarea name="metaDescription" id="metaDescription"
                                                  class="form-control @error('metaDescription') is-invalid @enderror"
                                                  rows="3">{{ old('metaDescription', $service->metaDescription ?? '') }}</textarea>
                                        @error('metaDescription')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Image Upload -->
                                    <div class="col-md-6 mb-3">
                                        <label for="serviceImage" class="form-label">Service Image</label>
                                        <input type="file" name="serviceImage" id="serviceImage"
                                               class="form-control @error('serviceImage') is-invalid @enderror">
                                        @if(isset($service) && !empty($service->serviceImage))
                                            <div class="mt-2">
                                                <img src="{{ !empty($service->serviceImage) 
                                                        ? asset('Services/' . $service->serviceImage) 
                                                        : asset('assets/images/noImage.png') }}" 
                                                        alt="Service Image" width="80" height="80" class="img-thumbnail">
                                            </div>
                                        @endif
                                        @error('serviceImage')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Service Description (CKEditor) -->
                                    <div class="col-md-12 mb-3">
                                        <label for="serviceDescription" class="form-label">Service Description <span class="text-danger">*</span></label>
                                        <textarea name="serviceDescription" id="serviceDescription"
                                                  class="form-control @error('serviceDescription') is-invalid @enderror"
                                                  rows="6" required>{{ old('serviceDescription', $service->serviceDescription ?? '') }}</textarea>
                                        @error('serviceDescription')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    
                                </div>

                                <!-- Buttons -->
                                <div class="mt-4">
                                    <button type="submit" class="btn btn-success">
                                        {{ isset($service) ? 'Update' : 'Save' }}
                                    </button>
                                    @if(!isset($service))
                                    <button type="reset" class="btn btn-secondary">Clear</button>
                                    @else
                                    <a href="{{ route('services.index') }}" class="btn btn-danger">Cancel</a>
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
    CKEDITOR.replace('serviceDescription', {
        height: 200,
        removeButtons: 'PasteFromWord'
    });
</script>
@endsection
