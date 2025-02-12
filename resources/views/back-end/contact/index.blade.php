@extends('back-end.layout')

@section('title', 'Contact Information Management')

@section('content')
<div class="container-fluid py-4">
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($contactInfo)
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Contact Information</h6>
            </div>
            <div class="card-body">
                <p><strong>Address:</strong> {{ $contactInfo->address }}</p>
                <p><strong>Website:</strong> <a href="{{ $contactInfo->website }}">{{ $contactInfo->website }}</a></p>
                <p><strong>Phone:</strong> {{ $contactInfo->phone }}</p>
                <p><strong>Email:</strong> {{ $contactInfo->email }}</p>
                @if($contactInfo->map)
                    <p><strong>Map Embed:</strong></p>
                    <div>{!! $contactInfo->map !!}</div>
                @endif
                <a href="{{ route('contact.edit', $contactInfo->id) }}" class="btn btn-warning">Edit Contact Information</a>
            </div>
        </div>
    @else
        <a href="{{ route('contact.create') }}" class="btn btn-primary">Create Contact Information</a>
    @endif
</div>
@endsection
