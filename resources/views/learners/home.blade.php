@extends('layouts.dashboard')

@section('content')
    @if (isset(Auth::user()->learners))
        <section class="special_cource padding_top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5">
                        <div class="section_tittle text-center">
                            <h2>Welcome</h2>
                            <br><br>
                            <h3>{{ Auth::user()->learners->first_name }} {{ Auth::user()->learners->last_name }}</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    @if (isset(Auth::user()->enrollments))
                        <div class="row">
                            @foreach ($enrollments as $course)
                                <div class="col-sm-6 col-lg-4">
                                    <div class="single_special_cource">
                                        <div class="special_cource_text">
                                            <p>Course Name:</p>
                                            <a href="/my-course/{{ $course->id }}" class="btn_4 mr-1 mb-1">{{ $course->course }}</a>
                                            <div class="author_info">
                                                <div class="author_img">
                                                    <div class="author_info_text">
                                                        <p>Course Date:</p>
                                                        <p>{{date('d M Y, h:i a',strtotime( $course->created_at))}}</p>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        @else
                        <div class="col">
                            <div class="section_tittle text-center">
                                @if (Auth::user()->learners->status == 'awaiting')
                                    <h3>Thank you for registering with us your application will be assessed!</h3>
                                @else
                                <h3>Available Courses Base on Your Level</h3>
                            </div>
                                <div class="row">
                                    @foreach($courses as $course)
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="single_special_cource">
                                                <div class="special_cource_text">
                                                    <a href="#" class="btn_4 mr-1 mb-1">{{ $course->name }}</a>
                                                    <h4>{{ $course->getPrice() }}</h4>
                                                    <a href="{{ route('courses.show', $course->id) }}"><h3>{{ $course->name }}</h3></a>
                                                    <p>{{ Str::limit($course->description, 100) }}</p>
                                                    @if($course->institution)
                                                        <div class="author_info">
                                                            <div class="author_img">
                                                                <div class="author_info_text">
                                                                    <p>Center Offering Course</p>
                                                                    <h5><a href="{{ route('courses.index') }}?institution={{ $course->institution->id }}">{{ $course->institution->name }}</a></h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                @endif
                        </div>

                        <br><br><br>
                        <div class="col">
                            <div class="section_tittle text-center">
                                <h3>Available Courses Based on Your Level and Center</h3>
                            </div>
                                <div class="row">
                                    @foreach($centers as $course)
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="single_special_cource">
                                                <div class="special_cource_text">
                                                    <a href="#" class="btn_4 mr-1 mb-1">{{ $course->name }}</a>
                                                    <h4>{{ $course->getPrice() }}</h4>
                                                    <a href="{{ route('courses.show', $course->id) }}"><h3>{{ $course->name }}</h3></a>
                                                    <p>{{ Str::limit($course->description, 100) }}</p>
                                                    @if($course->institution)
                                                        <div class="author_info">
                                                            <div class="author_img">
                                                                <div class="author_info_text">
                                                                    <p>Center Offering Course</p>
                                                                    <h5><a href="{{ route('courses.index') }}?institution={{ $course->institution->id }}">{{ $course->institution->name }}</a></h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                        </div>

                        <br><br>

                    @endif
                    </div>
                </div>
            </div>
        </section>
        @else
        <section class="special_cource padding_top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5">
                        <div class="section_tittle text-center">
                            <p>Hie, <b>{{ Auth::user()->name }}</b> continue with your registration</p>
                            <h2>New Learner</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form method="POST" action="/application" enctype="multipart/form-data">
                            @csrf
        
                            @if (isset(Auth::user()->name))
                                <input id="user_id" type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}" >
                            @endif
            
                            <div class="row">
                                <div class="col">
                                    <label for="first_name">{{ __('First Name') }}</label>
                                    <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
            
                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
            
                                <div class="col">
                                    <label for="last_name">{{ __('Surname') }}</label>
                                    <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
            
                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
        
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label for="dob">{{ __('Date of Birth') }}</label>
                                    <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" required autocomplete="dob" autofocus>
            
                                    @error('dob')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="current_school">{{ __('Current School') }}</label>
                                    <input id="current_school" type="text" class="form-control @error('current_school') is-invalid @enderror" name="current_school" value="{{ old('current_school') }}" required autocomplete="current_school" autofocus>
            
                                    @error('current_school')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
        
                            <br>
                            <div class="row">
                                
                                <div class="col">
                                    <label for="gender">{{ __('Gender') }}</label>
                                    <div class="row">
                                        <div class="col">
                                            <label for="gender">{{ __('Female') }}</label>
                                            <input id="gender" type="radio" name="gender" value="Female" required>
            
                                        </div>

                                        <div class="col">
                                            <label for="gender">{{ __('Male') }}</label>
                                            <input id="gender" type="radio" name="gender" value="Male" required>
            
                                        </div>

                                        <div class="col">
                                            <label for="gender">{{ __('Other') }}</label>
                                            <input id="gender" type="radio" name="gender" value="Other" required>
            
                                        </div>
                                    </div>

                                    @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
        
                                <div class="col">
                                    <label for="level">{{ __('Level / Grade') }}</label>
                                    <div class="row">
                                        <div class="col">
                                            <label for="level">{{ __('Grade 6') }}</label>
                                            <input id="level" type="radio" name="level" value="Grade 6" required>
            
                                        </div>

                                        <div class="col">
                                            <label for="level">{{ __('Grade 7') }}</label>
                                            <input id="level" type="radio" name="level" value="Grade 7" required>
            
                                        </div>

                                        <div class="col">
                                            <label for="level">{{ __('Grade 8') }}</label>
                                            <input id="level" type="radio" name="level" value="Grade 8" required>
            
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <label for="level">{{ __('Grade 9') }}</label>
                                            <input id="level" type="radio" name="level" value="Grade 9" required>
            
                                        </div>

                                        <div class="col">
                                            <label for="level">{{ __('Grade 10') }}</label>
                                            <input id="level" type="radio" name="level" value="Grade 10" required>
            
                                        </div>

                                        <div class="col">
                                            <label for="level">{{ __('Grade 11') }}</label>
                                            <input id="level" type="radio" name="level" value="Grade 11" required>
            
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <label for="level">{{ __('Grade 12') }}</label>
                                            <input id="level" type="radio" name="level" value="Grade 12" required>
            
                                        </div>
                                    </div>
                                    @error('level')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
        
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label for="contact">{{ __('Primary Contact') }}</label>
                                    <input id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" required autocomplete="contact" autofocus>
            
                                    @error('contact')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
            
                                <div class="col">
                                    <label for="address">{{ __('Primary Address') }}</label>
                                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
            
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
        
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label for="city">{{ __('City') }}</label>
                                    <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>
            
                                    @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
            
                                <div class="col">
                                    <label for="province">{{ __('Province') }}</label>
                                    <input id="province" type="text" class="form-control @error('province') is-invalid @enderror" name="province" value="{{ old('province') }}" required autocomplete="province" autofocus>
            
                                    @error('province')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
        
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label for="next_of_kin">{{ __('Next of Kin') }}</label>
                                    <input id="next_of_kin" type="text" class="form-control @error('next_of_kin') is-invalid @enderror" name="next_of_kin" value="{{ old('next_of_kin') }}" required autocomplete="next_of_kin" autofocus>
            
                                    @error('next_of_kin')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
            
                                <div class="col">
                                    <label for="next_of_kin_address">{{ __('Next of Kin Address') }}</label>
                                    <input id="next_of_kin_address" type="text" class="form-control @error('next_of_kin_address') is-invalid @enderror" name="next_of_kin_address" value="{{ old('next_of_kin_address') }}" required autocomplete="next_of_kin_address" autofocus>
            
                                    @error('next_of_kin_address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
        
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label for="eligible_based_on">{{ __('Reason for Registration') }}</label>
                                    <input id="eligible_based_on" type="text" class="form-control @error('eligible_based_on') is-invalid @enderror" name="eligible_based_on" value="{{ old('eligible_based_on') }}" required autocomplete="eligible_based_on" autofocus>
            
                                    @error('eligible_based_on')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
        
                                <div class="col">
                                    <label for="guardian_document">{{ __('Parent / Guardian Document') }}</label>
                                    <input id="guardian_document" type="file" class="form-control @error('guardian_document') is-invalid @enderror" name="guardian_document" required>
            
                                    @error('guardian_document')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
        
                            <br><br>
                            <div class="form-group row mb-0">
                                <div class="col">
                                    <button type="submit" class="btn_4 mr-1 mb-1">
                                        {{ __('Submit Form') }}
                                    </button>
                                </div>
                            </div>
        
                            <br>
                            
                        </form>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
