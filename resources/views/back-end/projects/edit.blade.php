@extends('back-end.layout')

@section('title', 'Edit Project')

@section('content')
<div class="container-fluid py-4">
   <div class="row justify-content-center">
      <div class="col-12 col-md-8">
         <div class="card mb-4">
            <div class="card-header pb-0">
               <h6>Edit Project</h6>
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
               <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="mb-3">
                     <label for="title" class="form-label">Title</label>
                     <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $project->title) }}" required>
                  </div>
                  <div class="mb-3">
                     <label for="category" class="form-label">Category</label>
                     <select name="category" id="category" class="form-control" required>
                        <option value="">Select Category</option>
                        <option value="electrical" {{ old('category', $project->category) == 'electrical' ? 'selected' : '' }}>Edlectrical</option>
                        <option value="mechanical" {{ old('category', $project->category) == 'mechanical' ? 'selected' : '' }}>Mechanical</option>
                        <option value="structural" {{ old('category', $project->category) == 'structural' ? 'selected' : '' }}>Structural</option>
                        <option value="facility" {{ old('category', $project->category) == 'facility' ? 'selected' : '' }}>Facility</option>
                     </select>
                  </div>
                  <div class="mb-3">
                     <label for="date" class="form-label">Project Date</label>
                     <input type="date" name="date" id="date" class="form-control" value="{{ old('date', $project->date) }}" required>
                  </div>
                  <div class="mb-3">
                     <label for="full_image" class="form-label">Full Image</label>
                     <input type="file" name="full_image" id="full_image" class="form-control">
                     @if($project->full_image)
                        <small>Current Full Image: <a href="{{ asset('storage/' . $project->full_image) }}" target="_blank">View</a></small>
                     @endif
                  </div>
                  <div class="mb-3">
                     <label for="thumb_image" class="form-label">Thumbnail Image</label>
                     <input type="file" name="thumb_image" id="thumb_image" class="form-control">
                     @if($project->thumb_image)
                        <small>Current Thumbnail: <a href="{{ asset('storage/' . $project->thumb_image) }}" target="_blank">View</a></small>
                     @endif
                  </div>
                  <button type="submit" class="btn btn-primary">Update Project</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
