@extends('back-end.layout')

@section('title', 'Create Project')

@section('content')
<div class="container-fluid py-4">
   <div class="row justify-content-center">
      <div class="col-12 col-md-8">
         <div class="card mb-4">
            <div class="card-header pb-0">
               <h6>Create Project</h6>
            </div>
            <div class="card-body px-4 pt-4">
               @if($errors->any())
                  <div class="alert alert-danger">
                     <ul>
                        @foreach($errors->all() as $error)
                           <li>{{ $error }}</li>
                        @endforeach
                     </ul>
                  </div>
               @endif
               <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                     <label for="title" class="form-label">Title</label>
                     <input type="text" name="title" id="title" class="form-control" required>
                  </div>
                  <div class="mb-3">
                     <label for="category" class="form-label">Category</label>
                     <select name="category" id="category" class="form-control" required>
                        <option value="">Select Category</option>
                        <option value="electrical">Electrical</option>
                        <option value="mechanical">Mechanical</option>
                        <option value="structural">Structural</option>
                        <option value="facility">Facility</option>
                     </select>
                  </div>
                  <div class="mb-3">
                     <label for="date" class="form-label">Project Date</label>
                     <input type="date" name="date" id="date" class="form-control" required>
                  </div>
                  <div class="mb-3">
                     <label for="full_image" class="form-label">Full Image</label>
                     <input type="file" name="full_image" id="full_image" class="form-control" required>
                  </div>
                  <div class="mb-3">
                     <label for="thumb_image" class="form-label">Thumbnail Image</label>
                     <input type="file" name="thumb_image" id="thumb_image" class="form-control" required>
                  </div>
                  <button type="submit" class="btn btn-primary">Create Project</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
