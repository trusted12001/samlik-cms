@extends('back-end.layout')

@section('title', 'Edit Slider')

@section('content')
<div class="container-fluid py-4">
  <div class="row justify-content-center">
      <div class="col-12 col-md-8">
          <div class="card mb-4">
              <div class="card-header pb-0">
                  <h6>Edit Slider</h6>
              </div>
              <div class="card-body px-4 pt-4">
                  @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                  @endif

                  @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                          @foreach ($errors->all() as $error)
                             <li>{{ $error }}</li>
                          @endforeach
                        </ul>
                    </div>
                  @endif

                  <form action="{{ route('sliders.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                     @csrf
                     @method('PUT')
                     <div class="mb-3">
                        <label for="title" class="form-label">Main Caption</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $slider->title) }}" required>
                     </div>
                     <div class="mb-3">
                        <label for="description" class="form-label">Sub Caption</label>
                        <textarea name="description" id="description" class="form-control" required>{{ old('description', $slider->description) }}</textarea>
                     </div>
                     <div class="mb-3">
                        <label for="image" class="form-label">Slider Image (1540 x 580 px, JPG)</label>
                        <input type="file" name="image" id="image" class="form-control">
                        @if($slider->image)
                           <small>Current Image: <a href="{{ asset('storage/' . $slider->image) }}" target="_blank">View</a></small>
                        @endif
                     </div>
                     <button type="submit" class="btn btn-primary">Update Slider</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
