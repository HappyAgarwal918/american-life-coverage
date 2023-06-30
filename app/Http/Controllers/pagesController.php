<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function terms()
    {
        return view('terms');
    }

    public function tcpa()
    {
        return view('tcpa');
    }

    public function ppamp()
    {
        return view('ppamp');
    }

    public function opt_out()
    {
        return view('opt_out');
    }

    public function contact()
    {
        return view('contact');
    }

    public function contact_form()
    {
        return view('contact_form');
    }

    public function dnsmpi()
    {
        return view('dnsmpi');
    }

    public function privacy_center()
    {
        return view('privacy_center');
    }

    public function privacy_policy()
    {
        return view('privacy_policy');
    }

    public function privacy_notice()
    {
        return view('privacy_notice');
    }

    public function privacy_notice_at_collection()
    {
        return view('privacy_notice_at_collection');
    }

    public function privacy_disclosure()
    {
        return view('privacy_disclosure');
    }

    public function medicare()
    {
        return view('medicare');
    }

    public function health()
    {
        return view('health');
    }

    public function life()
    {
        return view('life');
    }
}
