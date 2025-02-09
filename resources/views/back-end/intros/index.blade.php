@extends('back-end.layout')

@section('title', 'Intro Management')

@section('content')
<div class="container-fluid py-4">
    <a href="{{ route('intros.create') }}" class="btn btn-primary mb-3">Create New Intro</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Intro Management</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($intros as $intro)
                                <tr>
                                    <td>{{ $intro->id }}</td>
                                    <td>
                                        @if($intro->image)
                                            <img src="{{ asset('storage/' . $intro->image) }}" alt="{{ $intro->title }}" width="150">
                                        @endif
                                    </td>
                                    <td>{{ $intro->title }}</td>
                                    <td>{{ $intro->description }}</td>
                                    <td>
                                        <a href="{{ route('intros.edit', $intro->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('intros.destroy', $intro->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $intros->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
