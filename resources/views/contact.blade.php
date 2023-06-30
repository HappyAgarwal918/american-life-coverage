@extends('layout.master')
@section('title', 'Contact Us - American Life Insurance')
@section('css')
<link rel="stylesheet" href="{{ asset('asset/css/style2.css')}}">
@endsection
@section('content')
<div class="container content-container">
    <h3 class="contactpg">Contact Us</h3>
    <h4 class="contactpg">
        Customer Service</h4>
    <p style='font-family: "Inter var", -apple-system, BlinkMacSystemFont, "Helvetica Neue", Helvetica, sans-serif; margin-bottom: 0px;'><a class="op" href="{{ route('contact_form')}}" target="_blank">Send Us A Message</a><br></p>
    <p style='font-family: "Inter var", -apple-system, BlinkMacSystemFont, "Helvetica Neue", Helvetica, sans-serif; margin-bottom: 30px;'><a class="op" href="tel:(833) 625-0148">(833) 625 0148</a></font>
    </p>
    <h4 class="contactpg">Write us</h4>
    <p style="margin-bottom: 3rem; text-align: start;"><span style="font-size: 16px;">113 Cherry St, Seattle,<br>&nbsp;WA, 98104-2205, <br>United States of America</span><br></p>
    <h5 class="contactpg">Opt-out</h5>
    <p style='font-family: "Inter var", -apple-system, BlinkMacSystemFont, "Helvetica Neue", Helvetica, sans-serif; margin-bottom: 30px;'>If you wish to unsubscribe
        from our emails, <a class="op" href="{{ route('opt_out')}}">click here</a>.</p>
</div>
@endsection