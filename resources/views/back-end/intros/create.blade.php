@extends('back-end.layout')

@section('title', 'Create Intro')

@section('content')
<div class="container-fluid py-4">
   <div class="row justify-content-center">
     <div class="col-12 col-md-8">
       <div class="card mb-4">
         <div class="card-header pb-0">
           <h6>Create Intro</h6>
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
            <form action="{{ route('intros.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
              </div>
              <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
              </div>
              <div class="mb-3">
                <label for="image" class="form-label">Image (570 x 250 px, JPG)</label>
                <input type="file" name="image" id="image" class="form-control" required>
              </div>
              <button type="submit" class="btn btn-primary">Create Intro</button>
            </form>
         </div>
       </div>
     </div>
   </div>
</div>
@endsection
