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


    <section class="about">
        <div class="container">
                <div class="row">
                    <div class="about-grid">
                        <div class="col-md-6 wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.4s">
                            <div class="thumbnail">
                             <img src="{{asset('constrion/assets/images/intro.jpg')}}" class="img-responsive hvr-glow" alt="about-3">
                              <div class="caption">
                                <h4 class="heading-line">Who we are</h4>
                                <p>Samlik Engineering Services Ltd. was established as a fully indigenous company with a core focus on providing comprehensive consultancy services across various stages of project implementation within the following key engineering fields:</p>

                              </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInDown" data-wow-duration="0.4s" data-wow-delay="0.4s">
                        <div role="tabpanel">

                          <!-- Nav tabs -->
                          <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#architecture" aria-controls="architecture" role="tab" data-toggle="tab">ELECTRICAL</a></li>
                            <li role="presentation"><a href="#conception" aria-controls="conception" role="tab" data-toggle="tab">Mechanical</a></li>
                            <li role="presentation"><a href="#rebuilding" aria-controls="rebuilding" role="tab" data-toggle="tab">Facility </a></li>
                          </ul>

                          <!-- Tab panes -->
                          <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="architecture">
                                <h4>Electrical Engineering</h4>
                                <p>Samlik Engineering Services specializes in comprehensive electrical solutions, encompassing Uninterrupted Power Supply Systems (UPS), rural and urban electrification projects, electrical lighting and power design and installation, and the analysis of electrical distribution networks and loads.</p>
                                <img src="{{asset('constrion/assets/images/intro_electrical.jpg')}}" class="img-responsive hvr-glow" alt="about-3">
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="conception">
                                <h4>Mechanical Engineering</h4>
                                <p>Samlik Engineering Services offers a wide range of mechanical engineering solutions, including general plumbing, water supply systems, sewage treatment, HVAC, fire safety, and lift systems. We are committed to delivering innovative and efficient mechanical engineering solutions for diverse projects.</p>
                                <img src="{{asset('constrion/assets/images/intro_mechanical.jpg')}}" class="img-responsive hvr-glow" alt="about-3">
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="rebuilding">
                                <h4>Facility & Project Management</h4>
                                <p>Samlik Engineering Services provides comprehensive project management solutions, including contract preparation, Bill of Quantities (BOQ) preparation, project monitoring, and feasibility studies. We ensure the successful and efficient execution of projects from inception to completion.</p>
                                <img src="{{asset('constrion/assets/images/intro_facility.jpg')}}" class="img-responsive hvr-glow" alt="about-3">
                            </div>
                          </div>

                        </div>
                    </div>
                    </div>
                </div>
        </div>
    </section>


    <!-- Additional sections for content, portfolio, etc. -->
@endsection
