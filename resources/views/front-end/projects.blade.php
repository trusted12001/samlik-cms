@extends('front-end.layout')

@section('title', 'Our Projects')

@section('content')
<section id="projects">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wow bounceIn" data-wow-duration="0.4s" data-wow-delay="0.4s">
                    <h2 class="heading-bg pull-left">OUR PROJECTS <span class="shape"></span></h2>
                    <ul class="projects-filter pull-right">
                        <li><a class="btn active margin-5" href="#" data-filter="*">All</a></li>
                        <li><a class="btn margin-5" href="#" data-filter=".electrical">ELECTRICAL</a></li>
                        <li><a class="btn margin-5" href="#" data-filter=".mechanical">MECHANICAL</a></li>
                        <li><a class="btn margin-5" href="#" data-filter=".structural">STRUCTURAL</a></li>
                        <li><a class="btn margin-5" href="#" data-filter=".facility">FACILITY</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="projects-grid">
        <ul class="projects-items col-4 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
            @foreach($projects as $project)
            <li class="projects-item {{ $project->category }}">
                <div class="item-main">
                    <div class="projects-image">
                        <a class="preview" title="{{ $project->title }}" href="{{ asset('storage/' . $project->full_image) }}">
                            <img src="{{ asset('storage/' . $project->thumb_image) }}" class="hvr-grow-rotate" alt="{{ $project->title }}" />
                        </a>
                        <div class="overlay">
                            <p>
                                {{ $project->title }}
                                <span class="pull-right">{{ \Carbon\Carbon::parse($project->date)->format('d / m / Y') }}</span>
                            </p>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>

    <div class="container">
        <nav class="text-center">
            {{ $projects->links() }}
        </nav>
    </div>
</section>
@endsection
