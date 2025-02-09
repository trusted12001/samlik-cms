@extends('front-end.layout')

@section('title', 'About Our Company')

@section('content')
<section class="about">
    <div class="container">
        <div class="row">
            <!-- Section Header -->
            <div class="col-md-12">
                <h3 class="heading-line wow fadeInLeft" data-wow-duration="0.3s" data-wow-delay="0.3s">
                    About Our Company
                </h3>
            </div>
            <!-- Left Column: About Image and Quick Service Lists -->
            <div class="col-md-6 wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.4s">
                <div class="about-grid">
                    <img src="{{ asset('storage/' . $about->image) }}" class="img-responsive hvr-glow" alt="About Image">
                    <br/><br/>
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <ul class="list-unstyled check-list">
                                @foreach(explode("\n", $about->service_list_left) as $service)
                                    @if(trim($service))
                                        <li><i class="fa fa-check"></i> {{ trim($service) }}</li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <ul class="list-unstyled check-list">
                                @foreach(explode("\n", $about->service_list_right) as $service)
                                    @if(trim($service))
                                        <li><i class="fa fa-check"></i> {{ trim($service) }}</li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Column: About Article -->
            <div class="col-md-6 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.5s">
                {!! nl2br(e($about->article)) !!}
            </div>
        </div>
    </div>
</section>
@endsection
