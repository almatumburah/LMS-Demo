@extends('layouts.dashboard')

@section('content')
<section class="special_cource padding_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <p>Application</p>
                    <h2>Details</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="row">
                    <div class="col">
                        <h5>Name</h5>
                    </div>
  
                    <div class="col">
                        <h6>{{ Auth::user()->learners->first_name  }}</h6>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <h5>Surname</h5>
                    </div>
  
                    <div class="col">
                        <h6>{{ Auth::user()->learners->last_name  }}</h6>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <h5>Date of Birth</h5>
                    </div>
  
                    <div class="col">
                        <h6>{{ Auth::user()->learners->dob  }}</h6>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <h5>Gender</h5>
                    </div>
  
                    <div class="col">
                        <h6>{{ Auth::user()->learners->gender  }}</h6>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <h5>Level</h5>
                    </div>
  
                    <div class="col">
                        <h6>{{ Auth::user()->learners->level  }}</h6>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <h5>Contact</h5>
                    </div>
  
                    <div class="col">
                        <h6>{{ Auth::user()->learners->contact  }}</h6>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <h5>Email</h5>
                    </div>
  
                    <div class="col">
                        <h6>{{ Auth::user()->email  }}</h6>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <h5>Address</h5>
                    </div>
  
                    <div class="col">
                        <h6>{{ Auth::user()->learners->address  }}, {{ Auth::user()->learners->city  }}, {{ Auth::user()->learners->province  }}</h6>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <h5>Center</h5>
                    </div>
  
                    <div class="col">
                        <h6>{{ Auth::user()->learners->institution->name  }}</h6>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <h5>Current School</h5>
                    </div>
  
                    <div class="col">
                        <h6>{{ Auth::user()->learners->current_school  }}</h6>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <h5>Next of Kin</h5>
                    </div>
  
                    <div class="col">
                        <h6>{{ Auth::user()->learners->next_of_kin  }}</h6>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <h5>Next of Kin Address</h5>
                    </div>
  
                    <div class="col">
                        <h6>{{ Auth::user()->learners->next_of_kin_address  }}</h6>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <h5>Application Status</h5>
                    </div>
  
                    <div class="col">
                        <h6>{{ Auth::user()->learners->status  }}</h6>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col">
                        <h5>Submitted On</h5>
                    </div>
  
                    <div class="col">
                        <h6>{{date('d M Y, h:i a',strtotime(Auth::user()->learners->created_at))}}</h6>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <h5>Application Status Changed On</h5>
                    </div>
  
                    <div class="col">
                        <h6>{{date('d M Y, h:i a',strtotime(Auth::user()->learners->updated_at))}}</h6>
                    </div>
                </div>

                <br><br>
            </div>
        </div>
    </div>
</section>
@endsection
