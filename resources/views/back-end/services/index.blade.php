@extends('back-end.layout')

@section('title', 'Service Management')

@section('content')
<div class="container-fluid py-4">
    <a href="{{ route('services.create') }}" class="btn btn-primary mb-3">Create New Service</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="row">
      <div class="col-12">
         <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Service Management</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
               <div class="table-responsive p-0">
                  <table class="table align-items-center mb-0">
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th>Icon</th>
                           <th>Title</th>
                           <th>Description</th>
                           <th>Actions</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($services as $service)
                        <tr>
                           <td>{{ $service->id }}</td>
                           <td>
                              @if($service->icon)
                                  <img src="{{ asset('storage/' . $service->icon) }}" alt="{{ $service->title }}" width="100">
                              @endif
                           </td>
                           <td>{{ $service->title }}</td>
                           <td>{{ \Illuminate\Support\Str::limit($service->description, 50) }}</td>
                           <td>
                              <a href="{{ route('services.edit', $service->id) }}" class="btn btn-sm btn-warning">Edit</a>
                              <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Delete this service?');">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                              </form>
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
                  {{ $services->links() }}
               </div>
            </div>
         </div>
      </div>
    </div>
</div>
@endsection
