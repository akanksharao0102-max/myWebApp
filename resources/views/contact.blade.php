@extends('layouts.app')
@section('title','Contact Us')

@section('content')
<div class="page-header">
    <h1>Contact Us</h1>
</div>

<div class="form-box">
    <form action="{{ url('/contact') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" placeholder="Your Message" required></textarea>
        <button type="submit">Send Message</button>
    </form>
</div>
@endsection
