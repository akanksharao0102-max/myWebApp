@extends('layouts.app')
@section('title', 'Home')

@section('content')

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1>Welcome to My WebApp</h1>
        <p>Your one-stop solution for IT Services and Web Applications</p>
        <a href="#services" class="btn-primary">Our Services</a>
    </div>
</section>
<!-- Services Section -->
<section id="services" style="padding:50px 0; background:#fff;">
    <h2 style="text-align:center; margin-bottom:40px;">Our Services</h2>
    <div class="services-grid" style="display:flex; flex-wrap:wrap; justify-content:center; gap:30px;">
        <div class="service-box" style="width:250px; text-align:center; border:1px solid #ddd; padding:20px; border-radius:8px;">
            <img src="{{ asset('images/web.png') }}" alt="Service 1" style="width:100%; height:150px; object-fit:cover; border-radius:5px;">
            <h3>Web Development</h3>
            <p>Modern websites built with Laravel, PHP, JS.</p>
        </div>
        <div class="service-box" style="width:250px; text-align:center; border:1px solid #ddd; padding:20px; border-radius:8px;">
            <img src="{{ asset('images/img1.jpg') }}" alt="Service 2" style="width:100%; height:150px; object-fit:cover; border-radius:5px;">
            <h3>UI/UX Design</h3>
            <p>Clean and intuitive designs for apps & websites.</p>
        </div>
        <div class="service-box" style="width:250px; text-align:center; border:1px solid #ddd; padding:20px; border-radius:8px;">
            <img src="{{ asset('images/img2.jpg') }}" alt="Service 3" style="width:100%; height:150px; object-fit:cover; border-radius:5px;">
            <h3>SEO & Marketing</h3>
            <p>Boost your website’s reach and search rankings.</p>
        </div>
        <div class="service-box" style="width:250px; text-align:center; border:1px solid #ddd; padding:20px; border-radius:8px;">
            <img src="{{ asset('images/img3.webp') }}" alt="Service 4" style="width:100%; height:150px; object-fit:cover; border-radius:5px;">
            <h3>Maintenance</h3>
            <p>Reliable website maintenance and updates.</p>
        </div>
        <div class="service-box" style="width:250px; text-align:center; border:1px solid #ddd; padding:20px; border-radius:8px;">
            <img src="{{ asset('images/img4.jpg') }}" alt="Service 5" style="width:100%; height:150px; object-fit:cover; border-radius:5px;">
            <h3>Hosting</h3>
            <p>Fast & secure hosting services for your apps.</p>
        </div>
        <div class="service-box" style="width:250px; text-align:center; border:1px solid #ddd; padding:20px; border-radius:8px;">
            <img src="{{ asset('images/img6.jpg') }}" alt="Service 6" style="width:100%; height:150px; object-fit:cover; border-radius:5px;">
            <h3>Support</h3>
            <p>24/7 technical support for your websites/apps.</p>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" style="padding:50px; background:#f5f5f5;">
    <h2 style="text-align:center; margin-bottom:40px;">About Us</h2>
    <p style="max-width:800px; margin:0 auto; text-align:center;">
        We are a team of passionate developers, designers, and marketers committed to delivering high-quality web solutions. Our mission is to help businesses grow online with professional web applications, creative designs, and reliable support.
    </p>
</section>

@endsection
