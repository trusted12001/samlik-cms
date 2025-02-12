@extends('back-end.layout')

@section('title', 'Project Management')

@section('content')
<div class="container-fluid py-4">
    <a href="{{ route('projects.create') }}" class="btn btn-primary mb-3">Create New Project</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="row">
      <div class="col-12">
         <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Project Management</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
               <div class="table-responsive p-0">
                  <table class="table align-items-center mb-0">
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th>Title</th>
                           <th>Category</th>
                           <th>Date</th>
                           <th>Full Image</th>
                           <th>Thumb Image</th>
                           <th>Actions</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($projects as $project)
                        <tr>
                           <td>{{ $project->id }}</td>
                           <td>{{ $project->title }}</td>
                           <td>{{ $project->category }}</td>
                           <td>{{ \Carbon\Carbon::parse($project->date)->format('d/m/Y') }}</td>
                           <td>
                              @if($project->full_image)
                                  <img src="{{ asset('storage/' . $project->full_image) }}" alt="{{ $project->title }}" width="100">
                              @endif
                           </td>
                           <td>
                              @if($project->thumb_image)
                                  <img src="{{ asset('storage/' . $project->thumb_image) }}" alt="{{ $project->title }}" width="100">
                              @endif
                           </td>
                           <td>
                              <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-sm btn-warning">Edit</a>
                              <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Delete this project?');">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                              </form>
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
                  {{ $projects->links() }}
               </div>
            </div>
         </div>
      </div>
    </div>
</div>
@endsection
