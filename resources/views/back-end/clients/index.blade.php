@extends('back-end.layout')

@section('title', 'Client Management')

@section('content')
<div class="container-fluid py-4">
    <a href="{{ route('clients.create') }}" class="btn btn-primary mb-3">Add New Client</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="row">
      <div class="col-12">
         <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Client Management</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
               <div class="table-responsive p-0">
                  <table class="table align-items-center mb-0">
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th>Logo</th>
                           <th>Link</th>
                           <th>Actions</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($clients as $client)
                        <tr>
                           <td>{{ $client->id }}</td>
                           <td>
                              @if($client->logo)
                                  <img src="{{ asset('storage/' . $client->logo) }}" alt="Client Logo" width="100">
                              @endif
                           </td>
                           <td>{{ $client->link }}</td>
                           <td>
                              <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-sm btn-warning">Edit</a>
                              <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Delete this client?');">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                              </form>
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
                  {{ $clients->links() }}
               </div>
            </div>
         </div>
      </div>
    </div>
</div>
@endsection
