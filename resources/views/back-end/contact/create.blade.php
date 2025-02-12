@extends('back-end.layout')

@section('title', 'Create Contact Information')

@section('content')
<div class="container-fluid py-4">
   <div class="row justify-content-center">
      <div class="col-12 col-md-8">
         <div class="card mb-4">
            <div class="card-header pb-0">
               <h6>Create Contact Information</h6>
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
               <form action="{{ route('contact.store') }}" method="POST">
                  @csrf
                  <div class="mb-3">
                     <label for="address" class="form-label">Address</label>
                     <textarea name="address" id="address" class="form-control" rows="3" required></textarea>
                  </div>
                  <div class="mb-3">
                     <label for="website" class="form-label">Website</label>
                     <input type="text" name="website" id="website" class="form-control" required>
                  </div>
                  <div class="mb-3">
                     <label for="phone" class="form-label">Phone</label>
                     <input type="text" name="phone" id="phone" class="form-control" required>
                  </div>
                  <div class="mb-3">
                     <label for="email" class="form-label">Email</label>
                     <input type="email" name="email" id="email" class="form-control" required>
                  </div>
                  <div class="mb-3">
                     <label for="map" class="form-label">Map Embed Code (optional)</label>
                     <textarea name="map" id="map" class="form-control" rows="3"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Create Contact Information</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
