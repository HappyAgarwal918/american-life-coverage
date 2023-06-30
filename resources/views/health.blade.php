@extends('layout.master')
@section('title', 'Health - American Life Insurance')
@section('css')
<link rel="stylesheet" href="{{ asset('asset/css/health.css')}}">
@endsection
@section('content')

<section class="health_section">
    <div class="container px-5rem">
        <h2 class="main_h2"><span>Find the right plan for you</span></h2>
        <div class="form_div mx-auto">
            <div id="multi-step-form-container">
                <!-- Step Wise Form Content -->
                <form id="myForm" action="{{ route('health_save')}}" method="POST">
                	@csrf
                    <input id="type_value" type="hidden" name="type" value="" />
                    <!-- Form Steps / Progress Bar -->
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
                        <h2 class="form_label">What is your first name?</h2>
                        <!-- Step 1 input fields -->
                        <div class="mt-1em">
                            <div class="form-group">
                                <input maxlength="40" required type="text" class="form-control" id="firstName" placeholder="First Name" name="f_name">
                            </div>
                            <label id="f_name-error" class="error" for="f_name"></label>
                        </div>
                    </section>
                    <!-- Step 2 Content, default hidden on page load. -->
                    <section id="step-2" class="form-step tab">
                        <h2 class="form_label">What is your last name?</h2>
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
                        <h2 class="form_label">What is your Date Of Birth?</h2>
                        <!-- Step 3 input fields -->
                        <div class="mt-1em">
                            <div class="form-group select_flex">
                                <select class="form-control" required name="dob_month" id="dob_month">
                                    <option value="">Month</option>
                                    <option value="01">January</option>
                                    <option value="02">February</option>
                                    <option value="03">March</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                                <select class="form-control" required name="dob_day" id="dob_day">
                                    <option value="">Day</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                                <select class="form-control" required name="dob_year" id="dob_year">
                                    <option value="">Year</option>
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                    <option value="1993">1993</option>
                                    <option value="1992">1992</option>
                                    <option value="1991">1991</option>
                                    <option value="1990">1990</option>
                                    <option value="1989">1989</option>
                                    <option value="1988">1988</option>
                                    <option value="1987">1987</option>
                                    <option value="1986">1986</option>
                                    <option value="1985">1985</option>
                                    <option value="1984">1984</option>
                                    <option value="1983">1983</option>
                                    <option value="1982">1982</option>
                                    <option value="1981">1981</option>
                                    <option value="1980">1980</option>
                                    <option value="1979">1979</option>
                                    <option value="1978">1978</option>
                                    <option value="1977">1977</option>
                                    <option value="1976">1976</option>
                                    <option value="1975">1975</option>
                                    <option value="1974">1974</option>
                                    <option value="1973">1973</option>
                                    <option value="1972">1972</option>
                                    <option value="1971">1971</option>
                                    <option value="1970">1970</option>
                                    <option value="1969">1969</option>
                                    <option value="1968">1968</option>
                                    <option value="1967">1967</option>
                                    <option value="1966">1966</option>
                                    <option value="1965">1965</option>
                                    <option value="1964">1964</option>
                                    <option value="1963">1963</option>
                                    <option value="1962">1962</option>
                                    <option value="1961">1961</option>
                                    <option value="1960">1960</option>
                                    <option value="1959">1959</option>
                                    <option value="1958">1958</option>
                                    <option value="1957">1957</option>
                                    <option value="1956">1956</option>
                                    <option value="1955">1955</option>
                                    <option value="1954">1954</option>
                                    <option value="1953">1953</option>
                                    <option value="1952">1952</option>
                                    <option value="1951">1951</option>
                                    <option value="1950">1950</option>
                                    <option value="1949">1949</option>
                                    <option value="1948">1948</option>
                                    <option value="1947">1947</option>
                                    <option value="1946">1946</option>
                                    <option value="1945">1945</option>
                                    <option value="1944">1944</option>
                                    <option value="1943">1943</option>
                                    <option value="1942">1942</option>
                                    <option value="1941">1941</option>
                                    <option value="1940">1940</option>
                                    <option value="1939">1939</option>
                                    <option value="1938">1938</option>
                                    <option value="1937">1937</option>
                                    <option value="1936">1936</option>
                                    <option value="1935">1935</option>
                                    <option value="1934">1934</option>
                                    <option value="1933">1933</option>
                                    <option value="1932">1932</option>
                                    <option value="1931">1931</option>
                                    <option value="1930">1930</option>
                                    <option value="1929">1929</option>
                                    <option value="1928">1928</option>
                                    <option value="1927">1927</option>
                                    <option value="1926">1926</option>
                                    <option value="1925">1925</option>
                                    <option value="1924">1924</option>
                                    <option value="1923">1923</option>
                                    <option value="1922">1922</option>
                                    <option value="1921">1921</option>
                                    <option value="1920">1920</option>
                                </select>
                            </div>
                            <div class="d-flex justify-content-around">
                            <label id="dob_month-error" class="error" for="dob_month"></label>
                            <label id="dob_day-error" class="error" for="dob_day"></label>
                            <label id="dob_year-error" class="error" for="dob_year"></label>
                        	</div>
                        </div>
                        <div class="d-none age_factor">
                        <hr>
                        <h2 class="form_label">What is your yearly income? </h2>
                        <!-- Step 4 input fields -->
                        <div class="mt-1em">
                            <div class="form-group d-flex flex-column">
                                <span>
                                    <input type="radio" value="0" id="form-field-purpose-0" name="yearly_income">
                                    <label for="form-field-purpose-0">Less than $40,000</label>
                                </span>
                                <span class="mt-2">
                                    <input type="radio" value="1" id="form-field-purpose-1" name="yearly_income">
                                    <label for="form-field-purpose-1">More than $40,000+</label>
                                </span>
                                <label id="yearly_income-error" class="error" for="yearly_income"></label>
                            </div>
                        </div>
                        </div>
                    </section>
                    <!-- Step 4 Content, default hidden on page load. -->
                    <section id="step-4" class="form-step tab">
                        <h2 class="form_label">What is your email address? </h2>
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
                        <h2 class="form_label">What is your zip code? </h2>
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
                        <h2 class="form_label">What is your phone number? </h2>
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
                                <input type="radio" id="privacy_policy" class="p1 radio_check">
                                <span class="points_123">By clicking the “Complete Your Profile” button, you hereby agree to the <a href="#">Privacy Policy</a> and <a href="#">Terms &amp; Conditions</a>. You also hereby consent to receive marketing communications via automated telephone dialing system and/or pre-recorded calls, text messages, and/or emails from our <a href="#">“Premiere Partners” and marketing partners</a> at the phone number, physical address and email address provided above, even if you are on any State and/or Federal Do Not Call list. Consent is not a condition of purchase and may be revoked at any time. Message and data rates may apply. <a href="#">California Residents</a>.</span>
                            </div>
                            <label id="policy-error" class="error" for="policy"></label>
                        </div>
                    </section>
                    <div style="overflow:auto;">
                        <div style=" margin-top: 5px;" class="step-buttons">
                            <button type="button" class="previous button btn-prev">Previous</button>
                            <button type="button" class="next button btn-next">Next</button>
                            <button type="submit" id="id_of_your_button" disabled class="submit button btn-submit disable_policy_btn">Submit</button>
                        </div>
                    </div>
                    <!-- <div class="success_msg" role="alert" style="display: none;"><i class="fa fa-check" aria-hidden="true"></i> The form was sent successfully.</div> -->
                </form>
            </div>
        </div>
    </div>
</section>
@endsection