@extends('front-end.layout')

@section('title', 'Welcome to Samlik Engineering')

@section('content')
    <section id="slider">
        <div id="rev_slider_13_1_wrapper" class="rev_slider_wrapper fullscreen-container">
            <div id="rev_slider_13_1" class="rev_slider fullscreenbanner" style="display:none;">
                <ul>
                    @foreach($sliders as $slider)
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1500"
                        data-thumb="{{ asset('storage/' . $slider->image) }}"
                        data-delay="13000" data-saveperformance="off" data-title="{{ $slider->title }}">
                        <img src="{{ asset('storage/' . $slider->image) }}" alt="{{ $slider->title }}"
                             data-bgposition="left center" data-kenburns="on" data-duration="14000"
                             data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="130"
                             data-bgpositionend="right center">
                        <div class="caption sfl h2" data-x="40" data-y="200" data-speed="700" data-start="1700" data-easing="easeOutBack">
                            <h2>{{ $slider->title }}</h2>
                        </div>
                        <div class="caption sfl p" data-x="40" data-y="260" data-speed="500" data-start="1900" data-easing="easeOutBack">
                            {{ $slider->description }}
                        </div>
                        <div class="caption sfl" data-x="40" data-y="325" data-speed="300" data-start="2000">
                            <div class="btn-group">
                                <a href="#" class="btn hvr-bounce-to-right slide-btn">VIEW PORTFOLIO</a>
                                <a href="#" class="btn slide-btn arrow"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>


<!-- Dynamic About Section -->
<section class="about">
    <div class="container">
        <div class="row">
            <div class="about-grid">
                <!-- Left Column: "Who we are" (Article 0) -->
                <div class="col-md-6 wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.4s">
                    <div class="thumbnail">
                        <img src="{{ asset('storage/' . $intro[0]->image) }}" class="img-responsive hvr-glow" alt="{{ $intro[0]->title }}">
                        <div class="caption">
                            <h4 class="heading-line">{{ $intro[0]->title }}</h4>
                            <p>{{ $intro[0]->description }}</p>
                        </div>
                    </div>
                </div>
                <!-- Right Column: Tabbed Articles (Articles 1, 2, 3) -->
                <div class="col-md-6 wow fadeInDown" data-wow-duration="0.4s" data-wow-delay="0.4s">
                    <div role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">
                                    {{ $intro[1]->title }}
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">
                                    {{ $intro[2]->title }}
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">
                                    {{ $intro[3]->title }}
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="tab1">
                                <h4>{{ $intro[1]->title }}</h4>
                                <p>{{ $intro[1]->description }}</p>
                                <img src="{{ asset('storage/' . $intro[1]->image) }}" class="img-responsive hvr-glow" alt="{{ $intro[1]->title }}">
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab2">
                                <h4>{{ $intro[2]->title }}</h4>
                                <p>{{ $intro[2]->description }}</p>
                                <img src="{{ asset('storage/' . $intro[2]->image) }}" class="img-responsive hvr-glow" alt="{{ $intro[2]->title }}">
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab3">
                                <h4>{{ $intro[3]->title }}</h4>
                                <p>{{ $intro[3]->description }}</p>
                                <img src="{{ asset('storage/' . $intro[3]->image) }}" class="img-responsive hvr-glow" alt="{{ $intro[3]->title }}">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Right Column -->
            </div>
        </div>
    </div>
</section>
    <!-- Additional sections for content, portfolio, etc. -->
@endsection
