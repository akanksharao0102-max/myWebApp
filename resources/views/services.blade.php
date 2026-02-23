@extends('layouts.app')
@section('title', 'Our Services')

@section('content')

<section class="services-hero">
    <h1>Our Services</h1>
    <p>Providing modern web solutions to help your business grow online.</p>
</section>

<section class="services-grid">
    <div class="service-box">
        <img src="{{ asset('images/service1.jpg') }}" alt="Web Development">
        <h3>Web Development</h3>
        <p>Building modern, responsive, and scalable web applications.</p>
    </div>
    <div class="service-box">
        <img src="{{ asset('images/service2.jpg') }}" alt="UI/UX Design">
        <h3>UI/UX Design</h3>
        <p>Creating intuitive and attractive designs for apps and websites.</p>
    </div>
    <div class="service-box">
        <img src="{{ asset('images/service3.jpg') }}" alt="SEO">
        <h3>SEO & Marketing</h3>
        <p>Optimizing your website to rank higher and attract more users.</p>
    </div>
    <div class="service-box">
        <img src="{{ asset('images/service4.jpg') }}" alt="Maintenance">
        <h3>Maintenance</h3>
        <p>Reliable support and maintenance for your web applications.</p>
    </div>
    <div class="service-box">
        <img src="{{ asset('images/service5.jpg') }}" alt="Hosting">
        <h3>Hosting</h3>
        <p>Secure and fast hosting for your websites and applications.</p>
    </div>
    <div class="service-box">
        <img src="{{ asset('images/service6.jpg') }}" alt="Support">
        <h3>Support</h3>
        <p>24/7 support to help your business run smoothly online.</p>
    </div>
</section>

@endsection
