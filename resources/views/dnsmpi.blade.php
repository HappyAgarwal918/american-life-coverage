@extends('layout.master')
@section('title', '= - American Life Insurance')
@section('css')
<link rel="stylesheet" href="{{ asset('asset/css/style2.css')}}">
<style type="text/css">
	input, #contact .php-email-form .form-group label {
	    font-family: Lato, sans-serif !important;
	}
</style>
@endsection
@section('content')
<div class="container content-container">
	<div class="life_coverage">
	    <h1>Welcome to American Life Coverage Data Request Form!</h1>
	    <div style="padding: 15px; margin-bottom: 20px; border: 1px solid #bce8f1; border-radius: 4px; color: #31708f; background-color: #d9edf7; font-family: Lato, sans-serif; font-size: 16px; letter-spacing: normal;">
	        <p style="margin-bottom: 0px;"><strong>If you are a California resident submitting an access, deletion, or data sale opt-out request pursuant to the California Consumer Privacy Act (CCPA), you may exercise your rights by completing this Data Request Form. Non-California residents do not have such rights under the CCPA.</strong></p>
	    </div>
	    <p style="margin-bottom: 10px; color: #071f2b; font-family: Lato, sans-serif; font-size: 16px; letter-spacing: normal; text-align: start; background-color: #f9f9f9;">
	        Curious about how we protect your information? Please visit our&nbsp;<a class="op" href="{{ route('privacy_policy')}}">Privacy Policy</a>.</p>
	    <p style="margin-bottom: 10px; color: #071f2b; font-family: Lato, sans-serif; font-size: 16px; letter-spacing: normal; text-align: start; background-color: #f9f9f9;">
	        The security of your information is of the utmost importance to American Life Coverage. We collect the information below solely to authenticate your identity and retrieve your information for purposes of processing your data request.</p>
	    <p style="margin-bottom: 10px; color: #071f2b; font-family: Lato, sans-serif; font-size: 16px; letter-spacing: normal; text-align: start; background-color: #f9f9f9;">
	        While American Life Coverage will do all it can to honor your request, we may not be able to in certain circumstances. Please see our&nbsp;<a class="op" href="{{ route('privacy_disclosure')}}">California Consumer Privacy Act Disclosure</a> for further information.</p>
	</div>
	<section id="contact" class="">
		<form action="{{ route('datarequest_save')}}" method="post" role="form" class="php-email-form">
	  		@csrf
	      <div class="row">
	        <div class="col-lg-6 form-group">
	        	<label for="f_name">First Name</label>
	          <input type="text" name="f_name" class="form-control" required placeholder="First Name" maxlength="255" >
	        </div>
	        <div class="col-lg-6 form-group">
	        	<label for="l_name">Last Name</label>
	          <input type="text" class="form-control" name="l_name" required maxlength="255" placeholder="Last Name">
	        </div>
	      </div>
	      <div class="form-group">
	        	<label for="address1">Address line 1</label>
	          <input type="text" class="form-control" name="address1" required maxlength="255" placeholder="Address 1" >
	        </div>
	        <div class="form-group">
	        	<label for="address2">Address line 2</label>
	          <input type="text" class="form-control" name="address2" required maxlength="255" placeholder="Address 2" >
	        </div>
	        <div class="row">
	        <div class="col-lg-6 form-group">
	        	<label for="city">City</label>
	          <input type="text" name="city" class="form-control" required placeholder="City" maxlength="255" >
	        </div>
	        <div class="col-lg-6 form-group">
	        	<label for="zip">Zip code</label>
	          <input type="number" class="form-control" name="zip" required minlength="5" maxlength="5" placeholder="Zip code">
	        </div>
	      </div>
	      <div class="form-group">
	      	<label for="phone_number">Phone number</label>
	        <input type="number" class="form-control" name="phone_number" required maxlength="255" placeholder="Phone number">
	      </div>
	      <div class="form-group">
	        	<label for="email">Email address</label>
	          <input type="email" class="form-control" name="email" required maxlength="255" placeholder="Email address" >
	        </div>
	        <div class="form-group">
	        	<label for="dob">Birthday (mm/dd/yyyy)</label>
	          <input type="text" class="form-control" name="dob" required maxlength="255" placeholder="mm/dd/yyyy">
	        </div>
	        <div class="cform_sec2">
	        	<label style="margin-bottom:20px">Data Request Type</label>
	    	<div class="part" style="display: flex; flex-wrap: wrap;">
	    		<span style="flex-basis: 100%;">
	    			<input type="radio" value="Do not sell my personal information" required name="type" id="info">
	    			<label for="info">Do not sell my personal information</label>
	    		</span>
	    		<span style="flex-basis: 100%;">
	    			<input type="radio" value="Delete my data" name="type" required id="delete">
	    			<label for="delete">Delete my data</label>
	    		</span>
	    		<span style="flex-basis: 100%;">
	    			<input type="radio" value="Access my data" name="type" required id="access">
	    			<label for="access">Access my data</label>
	    		</span>
    		</div>
    	</div>
	      <div class="text-center"><button class="ybtn ybtn-accent-color" type="submit">Send</button></div>
	    </form>
	</section>
	@if(Session::has('successful_message'))
	<div class="alert alert-success">
	{{ Session::get('successful_message') }}
	</div>
	@endif
</div>
@endsection