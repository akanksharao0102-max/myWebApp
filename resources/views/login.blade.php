@extends('layouts.app')
@section('title','Login')

@section('content')
<div class="form-box">
    <h2 style="text-align:center;margin-bottom:20px;">Login</h2>
    @if(session('error'))
        <p style="color:red;text-align:center;">{{ session('error') }}</p>
    @endif
    <form method="POST" action="{{ route('login.submit') }}">
        @csrf
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</div>
@endsection
