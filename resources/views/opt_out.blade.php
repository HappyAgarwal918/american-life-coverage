@extends('layout.master')
@section('title', 'Communication Opt Out - American Life Insurance')
@section('css')
<link rel="stylesheet" href="{{ asset('asset/css/style2.css')}}">
@endsection
@section('content')
<div class="container content-container">
	<div class="optout1">
	    <h1 class="op">Communication Opt-Outs</h1>
	    <p class="op" style="max-width: 700px;"> We’d love to keep in touch about your financial needs, but only in ways that are convenient for you. If you want to opt out of certain marketing communication methods we use, you can do so below. Just select the communication method you want to opt-out of and provide the requested information.</p>
	    <p class="op" style="max-width: 700px;"><i>Please keep a few things in mind: If you later opt back in to marketing communications, that opt-in will override this opt out and you may receive further marketing communications from us. Also, the opt-outs below will only apply to marketing communications, so you may still receive pertinent non-marketing communications from us after opting out below.</i></p>
	</div>
	<div class="optout2">
	    <form method="post" name="New Form">
	    	<div class="part" style="display: flex; flex-wrap: wrap;">
	    		<span style="flex-basis: 100%;">
	    			<input type="radio" value="I would like to opt out of email communications." name="name">
	    			<label for="form-field-name-0">I would like to opt out of email communications.</label>
	    		</span>
	    		<span style="flex-basis: 100%;">
	    			<input type="radio" value="I would like to opt out of phone calls." name="name">
	    			<label for="form-field-name-1">I would like to opt out of phone calls.</label>
	    		</span>
	    		<span style="flex-basis: 100%;">
	    			<input type="radio" value="I would like to opt out of text messages." name="name">
	    			<label for="form-field-name-2">I would like to opt out of text messages.</label>
	    		</span>
	    		<span style="flex-basis: 100%;">
	    			<input type="radio" value="I would like to opt out of snail mail." name="name">
	    			<label for="form-field-name-3">I would like to opt out of snail mail.</label>
	    		</span>
    		</div>
            <div class="part part3">
                <label for="field_c64768a">Please tell us why you're opting out. </label>
                <select name="field_c64768a" required="required" aria-required="true">
                    <option value="Mistakenly signed up">Mistakenly signed up</option>
                    <option value="Too many calls or messages">Too many calls or messages</option>
                    <option value="No longer interested">No longer interested</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="part">
                <button type="submit" class="opt">Opt Out Now</button>
            </div>
        </form>
    </div>
</div>
@endsection