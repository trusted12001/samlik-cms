@extends('back-end.layout')

@section('title', 'Create About Section')

@section('content')
<div class="container-fluid py-4">
   <div class="row justify-content-center">
     <div class="col-12 col-md-8">
       <div class="card mb-4">
         <div class="card-header pb-0">
           <h6>Create About Section</h6>
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
            <form action="{{ route('abouts.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="article" class="form-label">Article</label>
                <textarea name="article" id="article" class="form-control" rows="6" required></textarea>
              </div>
              <div class="mb-3">
                <label for="service_list_left" class="form-label">Quick List of Services (Left Column)</label>
                <textarea name="service_list_left" id="service_list_left" class="form-control" rows="4" required placeholder="Enter one service per line"></textarea>
              </div>
              <div class="mb-3">
                <label for="service_list_right" class="form-label">Quick List of Services (Right Column)</label>
                <textarea name="service_list_right" id="service_list_right" class="form-control" rows="4" required placeholder="Enter one service per line"></textarea>
              </div>
              <div class="mb-3">
                <label for="image" class="form-label">About Image</label>
                <input type="file" name="image" id="image" class="form-control" required>
              </div>
              <button type="submit" class="btn btn-primary">Create About Section</button>
            </form>
         </div>
       </div>
     </div>
   </div>
</div>
@endsection
