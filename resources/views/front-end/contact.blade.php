@extends('front-end.layout')

@section('title', 'Contact Us')

@section('content')
<section class="contact">
    <div class="container">
        <div class="row">
            <!-- Contact Form -->
            <div class="col-md-8">
                <h3 class="heading-line wow fadeInLeft" data-wow-duration="0.3s" data-wow-delay="0.3s">
                    Contact Us
                </h3>
                <p>Fill out all required fields to send a message. Please don't spam, thank you!</p>
                <div class="reg-form box">
                    <div id="message"></div>
                    <form method="post" id="contact-form" class="wow fadeInLeft" data-wow-duration="0.4s" data-wow-delay="0.4s">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="yourname" id="yourname" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="youremail" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="number" class="form-control" id="budget" name="budget" placeholder="Budget 50 000">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="number" class="form-control" id="priority" name="priority" placeholder="Priority medium">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" rows="3" name="message" placeholder="Your Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn main-btn hvr-bounce-to-right pull-right">SEND MESSAGE</button>
                    </form>
                </div>
            </div>
            <!-- Contact Information -->
            <aside class="col-md-4">
                <h3 class="heading-line wow fadeInLeft" data-wow-duration="0.3s" data-wow-delay="0.3s">Contact Information</h3>
                @if(isset($contactInfo))
                <ul class="list-unstyled contact-list yellow wow fadeInRight" data-wow-duration="0.4s" data-wow-delay="0.4s">
                    <li class="address">{{ $contactInfo->address }}</li>
                    <li class="address"><a href="{{ $contactInfo->website }}">{{ $contactInfo->website }}</a></li>
                    <li class="address"><a href="tel:{{ $contactInfo->phone }}">{{ $contactInfo->phone }}</a></li>
                    <li class="address"><a href="mailto:{{ $contactInfo->email }}">{{ $contactInfo->email }}</a></li>
                </ul>
                @else
                    <p>No contact information available.</p>
                @endif
            </aside>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="map">
    <div id="contact_map" class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
        {!! isset($contactInfo) && $contactInfo->map ? $contactInfo->map : '' !!}
    </div>
</section>

<!-- Client Carousel -->
<section class="bottom-line carousel">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="client-carousel" class="owl-carousel">
                    @foreach($clients as $client)
                        <div class="item">
                            <a href="{{ $client->link ?? '#' }}"><img src="{{ asset('storage/' . $client->logo) }}" alt="Client"></a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
