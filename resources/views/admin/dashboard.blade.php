@extends('dashboard')
@section('admincontent')
@php
    $alc_health = DB::table('alc_health')->get();
    $alc_medicare = DB::table('alc_medicare')->get();
    $alc_life = DB::table('alc_life')->get();
@endphp
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="health-tab" data-toggle="tab" href="#health" role="tab" aria-controls="health" aria-selected="false">Health Insurance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="medicare-tab" data-toggle="tab" href="#medicare" role="tab" aria-controls="medicare" aria-selected="false">Medicare</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="life-tab" data-toggle="tab" href="#life" role="tab" aria-controls="life" aria-selected="false">Life</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="health" role="tabpanel" aria-labelledby="health-tab">
                        <table id="restu_table" class="table table-striped restu_table" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="" scope="col">ID</th>
                                    <th class="" scope="col">First Name</th>
                                    <th class="" scope="col">Last Name</th>
                                    <th class="" scope="col">Date of Birth</th>
                                    <th class="" scope="col">Yearly Income</th>
                                    <th class="" scope="col">Email ID</th>
                                    <th class="" scope="col">Zip</th>
                                    <th class="" scope="col">Phone Number</th>
                                    <th class="" scope="col">Type</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($alc_health as $health)
                                <tr>    
                                    <td>{{ $health->id }}</td>
                                    <td>{{ $health->f_name }}</td>
                                    <td>{{ $health->l_name }}</td>
                                    <td>{{ $health->dob }}</td>
                                    <td>
                                        @if(isset($health->yearly_income) && $health->yearly_income == '0')
                                        Less than $40,000
                                        @elseif(isset($health->yearly_income) && $health->yearly_income == '1')
                                        More than $40,000+
                                        @endif
                                    </td>
                                    <td>{{ $health->email }}</td>
                                    <td>{{ $health->zip }}</td>
                                    <td>{{ $health->phone_number }}</td>
                                    <td>{{ $health->type }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="medicare" role="tabpanel" aria-labelledby="medicare-tab">
                        <table id="restu_table" class="table table-striped restu_table" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="" scope="col">ID</th>
                                    <th class="" scope="col">First Name</th>
                                    <th class="" scope="col">Last Name</th>
                                    <th class="" scope="col">Date of Birth</th>
                                    <th class="" scope="col">Yearly Income</th>
                                    <th class="" scope="col">Email ID</th>
                                    <th class="" scope="col">Zip</th>
                                    <th class="" scope="col">Phone Number</th>
                                    <th class="" scope="col">Type</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($alc_medicare as $medicare)
                                <tr>    
                                    <td>{{ $medicare->id }}</td>
                                    <td>{{ $medicare->f_name }}</td>
                                    <td>{{ $medicare->l_name }}</td>
                                    <td>{{ $medicare->dob }}</td>
                                    <td>
                                        @if(isset($medicare->yearly_income) && $medicare->yearly_income == '0')
                                        Less than $40,000
                                        @elseif(isset($medicare->yearly_income) && $medicare->yearly_income == '1')
                                        More than $40,000+
                                        @endif
                                    </td>
                                    <td>{{ $medicare->email }}</td>
                                    <td>{{ $medicare->zip }}</td>
                                    <td>{{ $medicare->phone_number }}</td>
                                    <td>{{ $medicare->type }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="life" role="tabpanel" aria-labelledby="life-tab">
                        <table id="restu_table" class="table table-striped restu_table" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="" scope="col">ID</th>
                                    <th class="" scope="col">First Name</th>
                                    <th class="" scope="col">Last Name</th>
                                    <th class="" scope="col">Age</th>
                                    <th class="" scope="col">Purpose</th>
                                    <th class="" scope="col">Email ID</th>
                                    <th class="" scope="col">Zip</th>
                                    <th class="" scope="col">Phone Number</th>
                                    <th class="" scope="col">Type</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($alc_life as $life)
                                <tr>    
                                    <td>{{ $life->id }}</td>
                                    <td>{{ $life->f_name }}</td>
                                    <td>{{ $life->l_name }}</td>
                                    <td>{{ $life->age }}</td>
                                    <td>{{ $life->purpose }}</td>
                                    <td>{{ $life->email }}</td>
                                    <td>{{ $life->zip }}</td>
                                    <td>{{ $life->phone_number }}</td>
                                    <td>{{ $life->type }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection