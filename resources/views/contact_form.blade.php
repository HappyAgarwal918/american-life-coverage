@extends('layout.master')
@section('title', 'forms-contactus - American Life Insurance')
@section('css')
<link rel="stylesheet" href="{{ asset('asset/css/style2.css')}}">
@endsection
@section('content')
<div class="container content-container">
	<h2 style="margin: 0px 0px 30px; border-width: 0px; border-style: initial; vertical-align: baseline; text-align: center; font-size: 28px; font-weight: 400; line-height: 28px; color: #595d64; font-family: Lato, 'Helvetica Neue', Arial, 'Lucida Grande', Tahoma, Verdana, sans-serif; letter-spacing: normal;">Contact Us</h2>
	<div class="optout2 cform_sec2">
	    <form method="post" action="">
	    	<div class="part" style="display: flex; flex-wrap: wrap;">
	    		<span style="flex-basis: 100%;">
	    			<input type="radio" value="I would like a quote" name="name" id="quote">
	    			<label for="quote">I would like a quote</label>
	    		</span>
	    		<span style="flex-basis: 100%;">
	    			<input type="radio" value="I need to make a change to my coverage" name="name" id="coverage">
	    			<label for="coverage">I need to make a change to my coverage</label>
	    		</span>
	    		<span style="flex-basis: 100%;">
	    			<input type="radio" value="I would like to become an independent contractor with Assurance" name="name" id="independent">
	    			<label for="independent">I would like to become an independent contractor with Assurance</label>
	    		</span>
	    		<span style="flex-basis: 100%;">
	    			<input type="radio" value="I would like an employment verification" id="verification" name="name">
	    			<label for="verification">I would like an employment verification</label>
	    		</span>
	    		<span style="flex-basis: 100%;">
	    			<input type="radio" value="I would like to provide feedback about an agent" name="name" id="feedback">
	    			<label for="feedback">I would like to provide feedback about an agent</label>
	    		</span>
    		</div>
            <div class="text-center">
                <button type="submit" class="cform_submit">SUBMIT</button>
            </div>
        </form>
    </div>
    <div class="cform_sec2">
	    <p style="border-width: 0px; border-style: initial; vertical-align: baseline; font-size: medium; text-align: start;">Communications Opt-out</p>
	    <p style="border-width: 0px; border-style: initial; vertical-align: baseline; font-size: medium; text-align: start;">If you wish to unsubscribe from calls, texts, mail, or emails,&nbsp;<a class="op" href="{{ route('opt_out')}}" target="_blank">click here</a>.</p>
	</div>
	<section id="contact" class="">
		<form action="{{ route('contact_save')}}" method="post" role="form" class="php-email-form">
	  		@csrf
	      <div class="row">
	        <div class="col-lg-6 form-group">
	        	<label for="f_name">Your Name</label>
	          <input type="text" name="f_name" class="form-control" required placeholder="Your Name" maxlength="255" >
	        </div>
	        <div class="col-lg-6 form-group">
	        	<label for="l_name">Last Name</label>
	          <input type="text" class="form-control" name="l_name" required maxlength="255" placeholder="Last Name">
	        </div>
	      </div>
	      <div class="form-group">
	        	<label for="email">Your Email</label>
	          <input type="email" class="form-control" name="email" required maxlength="255" placeholder="Your Email" >
	        </div>
	        <div class="form-group">
	        	<label for="confirm_email">Confirm Your Email</label>
	          <input type="email" class="form-control" name="confirm_email" required maxlength="255" placeholder="Confirm Your Email">
	        </div>
	      <div class="form-group">
	      	<label for="phone_number">Your Phone</label>
	        <input type="number" class="form-control" name="phone_number" required maxlength="255" placeholder="Your Phone">
	      </div>
	      <div class="form-group">
	      	<label for="comments">Please provide any additional details/comments</label>
	        <textarea class="form-control" name="comments" required rows="5"></textarea>
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