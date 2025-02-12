@extends('back-end.layout')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid py-4">
  <div class="row">
    <!-- Total Users Card -->
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Users</p>
                <h5 class="font-weight-bolder">{{ $usersCount }}</h5>
                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">Updated</span></p>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                <i class="ni ni-single-02 text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
          <div class="mt-3 text-center">
            <a href="{{ route('users.index') }}" class="btn btn-sm btn-outline-primary">Manage Users</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Total Projects Card -->
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Projects</p>
                <h5 class="font-weight-bolder">{{ $projectsCount }}</h5>
                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">Updated</span></p>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-info shadow-info text-center rounded-circle">
                <i class="ni ni-folder-17 text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
          <div class="mt-3 text-center">
            <a href="{{ route('projects.index') }}" class="btn btn-sm btn-outline-primary">Manage Projects</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Total Services Card -->
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Services</p>
                <h5 class="font-weight-bolder">{{ $servicesCount }}</h5>
                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">Updated</span></p>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                <i class="ni ni-settings-gear-65 text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
          <div class="mt-3 text-center">
            <a href="{{ route('services.index') }}" class="btn btn-sm btn-outline-primary">Manage Services</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Total Clients Card -->
    <div class="col-xl-3 col-sm-6">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Clients</p>
                <h5 class="font-weight-bolder">{{ $clientsCount }}</h5>
                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">Updated</span></p>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                <i class="ni ni-briefcase-24 text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
          <div class="mt-3 text-center">
            <a href="{{ route('clients.index') }}" class="btn btn-sm btn-outline-primary">Manage Clients</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Additional Row -->
  <div class="row mt-4">
    <!-- Total Sliders Card -->
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Sliders</p>
                <h5 class="font-weight-bolder">{{ $slidersCount }}</h5>
                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">Updated</span></p>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                <i class="ni ni-image text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
          <div class="mt-3 text-center">
            <a href="{{ route('sliders.index') }}" class="btn btn-sm btn-outline-primary">Manage Sliders</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Total Intros Card -->
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Intros</p>
                <h5 class="font-weight-bolder">{{ $introsCount }}</h5>
                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">Updated</span></p>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-info shadow-info text-center rounded-circle">
                <i class="ni ni-archive-2 text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
          <div class="mt-3 text-center">
            <a href="{{ route('intros.index') }}" class="btn btn-sm btn-outline-primary">Manage Intros</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Total Skills Card -->
    <div class="col-xl-3 col-sm-6">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Skills</p>
                <h5 class="font-weight-bolder">{{ $skillsCount }}</h5>
                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">Updated</span></p>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-secondary shadow-secondary text-center rounded-circle">
                <i class="ni ni-app text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
          <div class="mt-3 text-center">
            <a href="{{ route('skills.index') }}" class="btn btn-sm btn-outline-primary">Manage Skills</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
