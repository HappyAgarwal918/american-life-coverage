@extends('layout.master')
@section('title', 'Privacy Center - American Life Insurance')
@section('css')
<link rel="stylesheet" href="{{ asset('asset/css/style2.css')}}">
@endsection
@section('content')
<div class="container content-container">
    <h1 class="op">
        Welcome to the Privacy Center</h1>
    <h1 class="op">
        <p style="margin-bottom: 10px; font-size: 16px; font-weight: 400; text-align: start;">American Life
            Coverage&nbsp;values your trust and respects your privacy. These resources can help you understand how we
            use your personal information and how you can manage your privacy choices.</p>
    </h1>
    <h2 class="op">
        How we protect your privacy:<br></h2>
    <h1 class="op">
        <ul style="margin-bottom: 10px; font-size: 16px; font-weight: 400; text-align: start;">
            <li class="op">
                <a class="op" href="{{ route('privacy_policy')}}">Privacy Policy</a>
                
            </li>
            <li class="op">
                <a class="op" href="{{ route('privacy_disclosure')}}">California Privacy Disclosure</a>
            </li>
            <li class="op">
                <a class="op" href="{{ route('privacy_notice_at_collection')}}">California Notice at Collection</a>
            </li>
            <li class="op">
                <a class="op" href="{{ route('opt_out')}}">California Data Request Form</a>
            </li>
            <li class="op">
                <a class="op" href="{{ route('privacy_notice')}}">U.S. Consumer Privacy Notice</a>
            </li>
        </ul>
    </h1>
</div>
@endsection