@extends('back-end.layout')

@section('title', 'About Management')

@section('content')
<div class="container-fluid py-4">
    <a href="{{ route('abouts.create') }}" class="btn btn-primary mb-3">Create New About Section</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>About Management</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Article</th>
                                    <th>Service List (Left)</th>
                                    <th>Service List (Right)</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($abouts as $about)
                                <tr>
                                    <td>{{ $about->id }}</td>
                                    <td>
                                        @if($about->image)
                                            <img src="{{ asset('storage/' . $about->image) }}" alt="About Image" width="150">
                                        @endif
                                    </td>
                                    <td>{{ \Illuminate\Support\Str::limit($about->article, 50) }}</td>
                                    <td>{{ \Illuminate\Support\Str::limit($about->service_list_left, 30) }}</td>
                                    <td>{{ \Illuminate\Support\Str::limit($about->service_list_right, 30) }}</td>
                                    <td>
                                        <a href="{{ route('abouts.edit', $about->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('abouts.destroy', $about->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Delete this about section?');">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $abouts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
