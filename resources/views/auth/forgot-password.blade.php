@extends('back-end.auth-layout')

@section('title', 'Forgot Password')

@section('content')
<div class="container py-4">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-4">
      <div class="card shadow">
        <div class="card-header text-center bg-primary text-white">
          <h4 class="mb-0">Forgot Password</h4>
        </div>
        <div class="card-body">
          @if(session('status'))
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
          @endif

          {{-- Display Validation Errors --}}
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul class="mb-0">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label">Email Address</label>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                     name="email" value="{{ old('email') }}" required autofocus>
              @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary w-100">Send Password Reset Link</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
