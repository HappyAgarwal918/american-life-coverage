<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use App\Models\datarequest;
use App\Models\health;
use App\Models\life;
use App\Models\medicare;

class dataController extends Controller
{
    public function contact_save(Request $request)
    {
        $data =  $request->except('_token');
        $contact = contact::Create($data);

        return back()->with('successful_message', 'The form was sent successfully.');
    }

    public function datarequest_save(Request $request)
    {
        $data =  $request->except('_token');
        $datarequest = datarequest::Create($data);

        return back()->with('successful_message', 'The form was sent successfully.');
    }

    public function health_thank()
    {
        return view('thank-you-health');
    }

    public function health_save(Request $request)
    {
        $data =  $request->except('_token');
        $data['dob'] = $data['dob_year'].'-'.$data['dob_month'].'-'.$data['dob_day'];
        if(isset($request->yearly_income) && $request->yearly_income == 0){
            $data['type'] = 'ACA';
        }elseif(isset($request->yearly_income) && $request->yearly_income == 1){
            $data['type'] = 'Private';
        }
        $health = health::Create($data);

        return view('thank-you-health');
    }

    public function life_thank()
    {
        return view('thank-you-life');
    }

    public function life_save(Request $request)
    {
        $data =  $request->except('_token');
        if(isset($request->age) && $request->age == '50-75'){
            $data['type'] = 'Final Expense';
        }elseif(isset($request->purpose) && $request->purpose == 'Funeral'){
            $data['type'] = 'Final Expense';
        }else{
            $data['type'] = 'Term Life';
        }
        $life = life::Create($data);

        return view('thank-you-life');
    }

    public function medicare_thank()
    {
        return view('thank-you-final');
    }

    public function medicare_save(Request $request)
    {
        $data =  $request->except('_token');
        $data['dob'] = $data['dob_year'].'-'.$data['dob_month'].'-'.$data['dob_day'];
        if(isset($request->yearly_income) && $request->yearly_income == 0){
            $data['type'] = 'ACA';
        }elseif(isset($request->yearly_income) && $request->yearly_income == 1){
            $data['type'] = 'Private';
        }
        $medicare = medicare::Create($data);

        return view('thank-you-final');
    }
}
