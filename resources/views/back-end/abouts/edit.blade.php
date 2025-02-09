@extends('back-end.layout')

@section('title', 'Edit About Section')

@section('content')
<div class="container-fluid py-4">
   <div class="row justify-content-center">
     <div class="col-12 col-md-8">
       <div class="card mb-4">
         <div class="card-header pb-0">
           <h6>Edit About Section</h6>
         </div>
         <div class="card-body px-4 pt-4">
            @if(session('success'))
              <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if($errors->any())
              <div class="alert alert-danger">
                 <ul>
                   @foreach($errors->all() as $error)
                     <li>{{ $error }}</li>
                   @endforeach
                 </ul>
              </div>
            @endif
            <form action="{{ route('abouts.update', $about->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="mb-3">
                <label for="article" class="form-label">Article</label>
                <textarea name="article" id="article" class="form-control" rows="6" required>{{ old('article', $about->article) }}</textarea>
              </div>
              <div class="mb-3">
                <label for="service_list_left" class="form-label">Quick List of Services (Left Column)</label>
                <textarea name="service_list_left" id="service_list_left" class="form-control" rows="4" required>{{ old('service_list_left', $about->service_list_left) }}</textarea>
              </div>
              <div class="mb-3">
                <label for="service_list_right" class="form-label">Quick List of Services (Right Column)</label>
                <textarea name="service_list_right" id="service_list_right" class="form-control" rows="4" required>{{ old('service_list_right', $about->service_list_right) }}</textarea>
              </div>
              <div class="mb-3">
                <label for="image" class="form-label">About Image</label>
                <input type="file" name="image" id="image" class="form-control">
                @if($about->image)
                  <small>Current Image: <a href="{{ asset('storage/' . $about->image) }}" target="_blank">View</a></small>
                @endif
              </div>
              <button type="submit" class="btn btn-primary">Update About Section</button>
            </form>
         </div>
       </div>
     </div>
   </div>
</div>
@endsection
