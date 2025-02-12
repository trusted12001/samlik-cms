@extends('back-end.layout')

@section('title', 'Edit Client')

@section('content')
<div class="container-fluid py-4">
   <div class="row justify-content-center">
      <div class="col-12 col-md-8">
         <div class="card mb-4">
            <div class="card-header pb-0">
               <h6>Edit Client</h6>
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
               <form action="{{ route('clients.update', $client->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="mb-3">
                     <label for="logo" class="form-label">Client Logo (JPG, JPEG, PNG)</label>
                     <input type="file" name="logo" id="logo" class="form-control">
                     @if($client->logo)
                        <small>Current Logo: <a href="{{ asset('storage/' . $client->logo) }}" target="_blank">View</a></small>
                     @endif
                  </div>
                  <div class="mb-3">
                     <label for="link" class="form-label">Client Link (optional)</label>
                     <input type="url" name="link" id="link" class="form-control" value="{{ old('link', $client->link) }}">
                  </div>
                  <button type="submit" class="btn btn-primary">Update Client</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
