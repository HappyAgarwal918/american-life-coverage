@extends('layout.master')
@section('title', 'TCPA - American Life Insuranc')
@section('content')
<style type="text/css">
	a.tcpa{
		color: #7f54dd !important;
		text-decoration: none;
	}
	p.tcpa{
		color: #000000;
	    line-height: 1.5;
	    margin: 0 0 1em 0;
	    font-size: 18px;
	    letter-spacing: 0.02em;
	    font-family: -apple-system, BlinkMacSystemFont, "Helvetica Neue", Helvetica, sans-serif;
	}
</style>
<div class="container content-container">
	<p class="tcpa">By clicking the “Complete Your Profile” button, you hereby agree to the <a class="tcpa" href="{{ route('privacy_policy')}}">Privacy Policy</a> and <a class="tcpa" href="{{ route('terms')}}">Terms &amp; Conditions</a>. You also hereby consent to receive marketing communications via automated telephone dialing system and/or pre-recorded calls, text messages, and/or emails from our <a class="tcpa" href="{{ route('ppamp')}}">“Premiere Partners” and marketing partners</a> at the phone number, physical address and email address provided above, even if you are on any State and/or Federal Do Not Call list. Consent is not a condition of purchase and may be revoked at any time. Message and data rates may apply. <a class="tcpa" href="{{ route('privacy_disclosure')}}">California Residents</a>.</p>
</div>
@endsection