@extends('layout.master')
@section('title', 'california notice at collection - American Life Insurance')
@section('css')
<link rel="stylesheet" href="{{ asset('asset/css/style2.css')}}">
@endsection
@section('content')
<div class="container content-container">
    <div class="pnac_div">
        <h4 class="pnac">UPDATED: June 10, 2022</h4>
        <h4 class="pnac">CALIFORNIA PRIVACY NOTICE AT COLLECTION</h4>
    </div>
    <p class="op">
        Your privacy is important to us. This California Privacy Notice at Collection is provided by American Life
        Insurance, and explains the Personal Information that we collect from California residents and how we use it.
    </p>
    <p class="op">
        “Personal Information” identifies, relates to, or could reasonably be linked with a particular California
        resident or household. This Notice does not apply with to information that we collect about California residents
        who request or obtain our financial products and services for personal, family, or household purposes or for
        long-term care or individual health products. In addition, the specific Personal Information that we collect
        will depend on our relationship or interaction with that individual. You may also opt-out of the sale of your
        Personal Information&nbsp;<a class="op" href="{{ route('opt_out')}}">here</a>
    </p>
    <p class="op">If you have any questions regarding our privacy policies and practices, please see our&nbsp;<a class="op" href="{{ route('privacy_center')}}">Privacy Center</a>. You may also refer to our&nbsp;<a class="op" href="{{ route('privacy_disclosure')}}">California Consumer Privacy Act Disclosure</a>.</p>
    <div class="row" style="--bs-gutter-x: 0;">
    <div class="col-md-6 pnac_content">
        <h5 class="pnac">Categories of Personal Information That May Be Collected</h5>
        <ul style="margin-bottom: 10px; padding-right: 3px;">
            <li><b>Personal Identifiers&nbsp;</b>(name, Social Security number, etc.)</li>
            <li><b>Personal data&nbsp;</b>(contact, health, and financial data, etc.)</li>
            <li><b>Protected class information&nbsp;</b>(sex, marital status, etc.)</li>
            <li><b>Commercial information&nbsp;</b>(transaction, account data, etc.)</li>
            <li><b>Biometric information&nbsp;</b>(fingerprints, voiceprints, etc.)</li>
            <li><b>Online Usage&nbsp;</b>(Internet/network activity, history, website interactions, etc.)</li>
            <li><b>Geolocation data&nbsp;</b>(device location and similar)</li>
            <li><b>Audio/Visual data&nbsp;</b>(electronic, visual, thermal, olfactory, call and video recordings, etc.)</li>
            <li><b>Professional or employment-related information&nbsp;</b>(work history, prior employer, and employment eligibility data, etc.)</li>
            <li><b>Education information&nbsp;</b>(school, degrees earned, etc.)</li>
            <li><b>Inferences drawn from Personal Information&nbsp;</b>(e.g., to create consumer profile or summary, infer preferences and characteristics, etc.)</li>
        </ul>
    </div>
    <div class="col-md-6 pnac_content">
        <h5 class="pnac">How American Life Insurance Uses Personal Information</h5>
        <ul style="margin-bottom: 10px;">
            <li>To operate, manage, and maintain our business</li>
            <li>To provide our products and services</li>
            <li>For employment and vendor management purposes</li>
            <li>To accomplish our business purposes and objectives</li>
            <li>To personalize, develop, and market our products and services</li>
            <li>To conduct research and data analysis</li>
            <li>To maintain our facilities and infrastructure</li>
            <li>To operate and manage IT and communications systems</li>
            <li>To facilitate communications</li>
            <li>To conduct risk and security control and monitoring; detect and prevent fraud</li>
            <li>To perform identity verification</li>
            <li>To perform accounting, audit, and other internal functions, such as internal investigations</li>
            <li>To comply with law, legal process, and internal policies</li>
            <li>To maintain records</li>
            <li>To exercise and defend legal claims</li>
        </ul>
    </div>
    </div>
</div>
@endsection