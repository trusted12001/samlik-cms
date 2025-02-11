@extends('back-end.layout')

@section('title', 'Skill Management')

@section('content')
<div class="container-fluid py-4">
    <a href="{{ route('skills.create') }}" class="btn btn-primary mb-3">Create New Skill</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="row">
      <div class="col-12">
         <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Skill Management</h6>
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
                        @foreach($skills as $skill)
                        <tr>
                           <td>{{ $skill->id }}</td>
                           <td>
                              @if($skill->icon)
                                  <img src="{{ asset('storage/' . $skill->icon) }}" alt="{{ $skill->title }}" width="100">
                              @endif
                           </td>
                           <td>{{ $skill->title }}</td>
                           <td>{{ \Illuminate\Support\Str::limit($skill->description, 50) }}</td>
                           <td>
                              <a href="{{ route('skills.edit', $skill->id) }}" class="btn btn-sm btn-warning">Edit</a>
                              <form action="{{ route('skills.destroy', $skill->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Delete this skill?');">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                              </form>
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
                  {{ $skills->links() }}
               </div>
            </div>
         </div>
      </div>
    </div>
</div>
@endsection
