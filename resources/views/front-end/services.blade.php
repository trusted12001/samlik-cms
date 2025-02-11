@extends('front-end.layout')

@section('title', 'Our Services')

@section('content')
<section class="services-list">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="heading-line wow fadeInLeft" data-wow-duration="0.3s" data-wow-delay="0.3s">
                    Our Services
                </h3>
            </div>
            @foreach($services as $service)
            <div class="col-sm-6 col-md-3">
                <div class="services-box wow fadeInLeft" data-wow-duration="0.4s" data-wow-delay="0.4s">
                    <div class="diamond hvr-wobble-horizontal">
                        <div class="icons">
                            <img src="{{ asset('storage/' . $service->icon) }}" alt="{{ $service->title }}">
                            <p>{{ strtoupper($service->title) }}</p>
                        </div>
                    </div>
                    <p>{{ $service->description }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="skills">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <h3 class="heading-line wow fadeInLeft" data-wow-duration="0.3s" data-wow-delay="0.3s">
                    Skills and Experiences
                </h3>
                <div class="row">
                    @foreach($skills as $skill)
                    <div class="col-sm-4 col-md-4">
                        <div class="skill-box wow bounceIn" data-wow-duration="0.3s" data-wow-delay="0.3s">
                            <div class="icon">
                                <img src="{{ asset('storage/' . $skill->icon) }}" alt="{{ $skill->title }}">
                            </div>
                            <h4>{{ $skill->title }}</h4>
                            <p>{{ $skill->description }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
