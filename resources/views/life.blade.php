@extends('layout.master')
@section('title', 'Life – American Life Insurance')
@section('css')
<link rel="stylesheet" href="{{ asset('asset/css/life.css')}}">
@endsection
@section('content')
<section class="life_section">
    <div class="container px-5rem">
        <h2 class="main_h2 e-animated">
            <span>No Medical Exam</span>
            <span class="high_text">
                <span>Life Insurance</span>
                <svg class="svg_anim" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150"
                    preserveAspectRatio="none">
                    <path d="M5,125.4c30.5-3.8,137.9-7.6,177.3-7.6c117.2,0,252.2,4.7,312.7,7.6"></path>
                    <path d="M26.9,143.8c55.1-6.1,126-6.3,162.2-6.1c46.5,0.2,203.9,3.2,268.9,6.4"></path>
                </svg>
            </span>
            <span>Rates!</span>
        </h2>
        <div class="form_div mx-auto">
            <div id="multi-step-form-container">
                <!-- Step Wise Form Content -->
                <form id="myForm" action="{{ route('life_save')}}" method="POST">
                    @csrf
                    <ul class="form-stepper form-stepper-horizontal text-center mx-auto pl-0">
                        <!-- Step 1 -->
                        <li class="form-stepper-unfinished form-stepper-active text-center form-stepper-list step" step="1">
                            <a><span class="form-stepper-circle">
                                <span>1</span>
                            </span></a>
                        </li>
                        <!-- Step 2 -->
                        <li class="form-stepper-unfinished text-center form-stepper-list step" step="2">
                            <a><span class="form-stepper-circle text-muted">
                                <span>2</span>
                            </span></a>
                        </li>
                        <!-- Step 3 -->
                        <li class="form-stepper-unfinished text-center form-stepper-list step" step="3">
                            <a><span class="form-stepper-circle text-muted">
                                <span>3</span>
                            </span></a>
                        </li>
                        <!-- Step 4 -->
                        <li class="form-stepper-unfinished text-center form-stepper-list step" step="4">
                            <a><span class="form-stepper-circle text-muted">
                                <span>4</span>
                            </span></a>
                        </li>
                        <!-- Step 5 -->
                        <li class="form-stepper-unfinished text-center form-stepper-list step" step="5">
                            <a><span class="form-stepper-circle text-muted">
                                <span>5</span>
                            </span></a>
                        </li>
                        <!-- Step 6 -->
                        <li class="form-stepper-unfinished text-center form-stepper-list step" step="6">
                            <a><span class="form-stepper-circle text-muted">
                                <span>6</span>
                            </span></a>
                        </li>
                    </ul>
                    <!-- Step 1 Content -->
                    <section id="step-1" class="form-step tab">
                        <h2 class="form_label">What Is Your First Name? <span class="text-danger">*</span></h2>
                        <!-- Step 1 input fields -->
                        <div class="mt-1em">
                            <div class="form-group">
                                <input maxlength="40" required type="text" class="form-control" id="firstName" placeholder="First Name" name="f_name">
                            </div>
                            <label id="f_name-error" class="error" for="f_name" style="display: none;"></label>
                        </div>
                    </section>
                    <!-- Step 2 Content, default hidden on page load. -->
                    <section id="step-2" class="form-step tab">
                        <h2 class="form_label">What Is Your Last Name? <span class="text-danger">*</span></h2>
                        <!-- Step 2 input fields -->
                        <div class="mt-1em">
                            <div class="form-group">
                                <input maxlength="40" required type="text" class="form-control"
                                    id="lastName" placeholder="Last Name" name="l_name">
                            </div>
                            <label id="l_name-error" class="error" for="l_name"></label>
                        </div>
                    </section>
                    <!-- Step 3 Content, default hidden on page load. -->
                    <section id="step-3" class="form-step tab">
                        <h2 class="form_label">What is your age? <span class="text-danger">*</span></h2>
                        <!-- Step 3 input fields -->
                        <div class="mt-1em">
                            <div class="form-group d-flex flex-column">
                                <span>
                                    <input type="radio" value="18-49" id="form-field-age-0"
                                        name="age">
                                    <label for="form-field-age-0">18-49</label>
                                </span>
                                <span class="mt-2">
                                    <input type="radio" value="50-75" id="form-field-age-1"
                                        name="age">
                                    <label for="form-field-age-1">50-75</label>
                                </span>
                                <label id="age-error" class="error" for="age"></label>
                            </div>
                        </div>
                        <div class="purpose1 d-none">
                        <hr>
                        <h2 class="form_label">Why Are You Looking For Life Insurance? <span
                                class="text-danger">*</span></h2>
                        <!-- Step 4 input fields -->
                        <div class="mt-1em">
                            <div class="form-group d-flex flex-column">
                                <span>
                                    <input type="radio" value="Funeral" id="form-field-purpose-0" name="purpose">
                                    <label for="form-field-purpose-0">Funeral</label>
                                </span>
                                <span class="mt-2">
                                    <input type="radio" value="Income Replacement" id="form-field-purpose-1" name="purpose">
                                    <label for="form-field-purpose-1">Income Replacement</label>
                                </span>
                                <span class="mt-2">
                                    <input type="radio" value="Mortage Protection" id="form-field-purpose-2" name="purpose">
                                    <label for="form-field-purpose-2">Mortage Protection</label>
                                </span>
                                <label id="purpose-error" class="error" for="purpose"></label>

                            </div>
                        </div>
                        </div>
                    </section>
                    <!-- Step 4 Content, default hidden on page load. -->
                    <section id="step-4" class="form-step tab">
                        <h2 class="form_label">What is your email address? <span class="text-danger">*</span>
                        </h2>
                        <!-- Step 5 input fields -->
                        <div class="mt-1em">
                            <div class="form-group">
                                <input type="email" id="email" class="form-control" placeholder="email address" name="email">
                            </div>
                            <label id="email-error" class="error" for="email"></label>
                        </div>
                    </section>
                    <!-- Step 5 Content, default hidden on page load. -->
                    <section id="step-5" class="form-step tab">
                        <h2 class="form_label">What Is Your Zip Code? <span class="text-danger">*</span></h2>
                        <!-- Step 6 input fields -->
                        <div class="mt-1em">
                            <div class="form-group">
                                <input minlength="5" maxlength="5" type="number" class="form-control" id="zip" placeholder="ZIP Code" name="zip">
                            </div>
                            <label id="zip-error" class="error" for="zip"></label>
                        </div>
                    </section>
                    <!-- Step 6 Content, default hidden on page load. -->
                    <section id="step-6" class="form-step tab">
                        <h2 class="form_label">What is your phone number? <span class="text-danger">*</span>
                        </h2>
                        <!-- Step 7 input fields -->
                        <div class="mt-1em">
                            <div class="form-group">
                                <input type="text" class="form-control" id="phonenumber"
                                    placeholder="Phone number " name="phone_number" inputmode="text"
                                    onfocus="this.placeholder='(___)-___-____'"
                                    onblur="this.placeholder='Phone number'">
                            </div>
                            <label id="phone_number-error" class="error" for="phone_number"></label>
                        </div>
                        <div class="mt-1em">
                            <div class="form-group">
                                <input type="radio" id="agree" class="p1 radio_check">
                                <span class="points_123">By clicking the “Complete Your Profile” button, you hereby agree to the <a href="#">Privacy Policy</a> and <a href="#">Terms &amp; Conditions</a>. You also hereby consent to receive marketing communications via automated telephone dialing system and/or pre-recorded calls, text messages, and/or emails from our <a href="#">“Premiere Partners” and marketing partners</a> at the phone number, physical address and email address provided above, even if you are on any State and/or Federal Do Not Call list. Consent is not a condition of purchase and may be revoked at any time. Message and data rates may apply. <a href="#">California Residents</a>.
                                </span>
                            </div>
                            <label id="policy-error" class="error" for="policy"></label>
                        </div>
                    </section>
                    <div style="overflow:auto;">
                        <div style=" margin-top: 5px;" class="step-buttons">
                            <button type="button" class="previous button btn-prev">Previous</button>
                            <button type="button" class="next button btn-next">Next</button>
                            <button type="submit" id="id_of_your_button" disabled class="submit button btn-submit disable_agree_btn">Submit</button>
                        </div>
                    </div>
                    <!-- <div class="thanks-message text-left" id="text-message" style="display: none;"> <img src="{{ asset('asset/img/check.png')}}" width="100" class="mb-4">
                        <h3>Thankyou for your feedback!</h3> <span>Thanks for your valuable information. It helps us to improve our services!</span>
                    </div> -->
                </form>
            </div>
        </div>
    </div>
</section>
@endsection